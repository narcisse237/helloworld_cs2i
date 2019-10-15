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
	<title>Inscription</title>
</head>
<body>
<?php include $directory.'header.php' ?>

<div class="page">
	<form action="traitement.php" method="post" class="signIn-form">
		<h1>Inscription</h1>
		<div class="txtb">
			<input type="text" name="nom">
			<span data-placeholder="Nom"></span>
		</div>
		<div class="txtb">
			<input type="text" name="prenom">
			<span data-placeholder="Prénom"></span>
		</div>
		<div class="txtb">
			<input type="tel" name="tel">
			<span data-placeholder="Numéro de téléphone"></span>
		</div>
		<div class="txtb">
			<input type="email" name="email">
			<span data-placeholder="Email"></span>
		</div>
		<div class="txtb">
			<input type="password" name="pwd">
			<span data-placeholder="Mot de passe"></span>
		</div>
		<div class="txtb">
			<input type="password" name="pwdconf">
			<span data-placeholder="Confirmation du mot de passe"></span>
		</div>
		<input type="submit" value="Créer" class="logbtn">
		<div class="bottom-text">
			Vous avez déjà un compte ? <a href="Login.php">Connexion</a>
		</div>
		<?php if(isset($_SESSION['message'])):?>
            <div class="alert mt-1 <?php if($_SESSION['message']['statut']): ?>alert-success<?php else:?>alert-danger<?php endif;?> "
                 style="font-size: 10px"
            >
				<?= $_SESSION['message']['msg']?>
            </div>
		<?php endif;?>
		<?php unset($_SESSION['message']);?>
	</form>
</div>

<?php include $directory.'footer.php' ?>

<script type="text/javascript">
    $(".txtb input").on("focus", function()
    {
        $(this).addClass("focus");
    });
    $(".txtb input").on("blur", function()
    {
        if($(this).val() == ""){
            $(this).removeClass("focus");
        }
    });
</script>
</body>
</html>
