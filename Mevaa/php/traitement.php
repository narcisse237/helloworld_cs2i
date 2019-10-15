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
	function insert($pdo){
		$query = $pdo->prepare (
			"INSERT INTO user (nom,prenom,compte,mdp) values (:nom,:prenom,:compte,:mdp);"
		);
		$result = $query->execute ([
			'nom'=>$_POST['nom'],
			'prenom'=>$_POST['prenom'],
			'compte'=>$_POST['email'],
			'mdp'=>password_hash ($_POST['pwd'],PASSWORD_BCRYPT,[
				'cost' => 12
			])
		]);
		$message['statut'] = $result;
		if($result){
			$message['msg'] = 'Enregistrement effectué avec succès !';
        }else{
			$message['msg'] = 'Erreur lors de l\'enregistrement de vos informations veillez recommencer svp !';
        }
        $_SESSION['message'] = $message;
	}
	try{
		if(
		isset(
			$_POST['nom'],
			$_POST['prenom'],
			$_POST['tel'],
			$_POST['email'],
			$_POST['pwd'],
			$_POST['pwdconf']
		)
		){
		    insert ($pdo);
			header ('location:signup.php');
		}
	}catch (PDOException $ex){
		$error = $ex->getMessage ();
		die();
	}

?>