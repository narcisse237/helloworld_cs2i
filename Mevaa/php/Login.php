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
	<title>Connexion</title>
</head>
<body>
<?php include $directory.'header.php' ?>

<div class="page">
    <form action="traitementlog.php" method="post" class="login-form">
        <h1>Connexion</h1>
        <div class="txtb">
            <input type="text" name="email">
            <span data-placeholder="Email"></span>
        </div>
        <div class="txtb">
            <input type="password" name="pwd">
            <span data-placeholder="Mot de passe"></span>
        </div>
        <input type="submit" value="Login" class="logbtn">
        <div class="bottom-text">
            Don't have account? <a href="signup.php">Sign up</a>
        </div>
        <?php if(isset($_SESSION['loginError'])):?>
        <div class="alert alert-danger">
            <?= $_SESSION['loginError']?>
        </div>
        <?php endif;?>
        <?php unset($_SESSION['loginError']); ?>
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
