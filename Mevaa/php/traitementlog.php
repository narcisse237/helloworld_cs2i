<?php
	session_start ();
	$directory = 'template/';
	$index = '../';
	$link = '../';
	$footer = '../';
	$header = '';
	$active = 'login';
?>
	
	<!doctype html>
	<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
		      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<?php include $directory.'link.php'?>
		<title>Traitement....</title>
	</head>
	<body>
	<section class="container section section-4">
		<span class="loader loader-bars">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</span>
	</section>
	</body>
	</html>
<?php
	$pdo = new PDO('mysql:host=localhost;dbname=myservices','root','',[
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ
	]);
	$error = null;
	$message = null;
	function login($pdo){
		$query = $pdo->prepare (
			"SELECT * FROM user WHERE compte = :compte"
		);
		$query->execute ([
			'compte'=>$_POST['email']
		]);
		$result = $query->fetch();
		
		if(password_verify ($_POST['pwd'],$result->mdp)){
			$_SESSION['current'] = $result;
			if($result->isAdmin == 1){
				header ('location:admin.php');
			}else{
				header ('location:../index.php');
			}
		}else{
			$_SESSION['loginError'] = 'Mot de passe ou email incorrect';
			header ('location:login.php');
		}
	}
	try{
		if(
		isset(
			$_POST['email'],
			$_POST['pwd']
		)
		){
			login ($pdo);
		}
	}catch (PDOException $ex){
		$error = $ex->getMessage ();
		die();
	}

?>