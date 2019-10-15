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
        <title>Admin Page</title>
        <style>
            .text{
                position: relative;
                top: 160px;
            }
            h1{
                color: #4e555b;
            }
        </style>
    </head>
    <body>
    <section class="container section section-4">
        <div class="text">
            <h1>Page d'administration</h1>
	        <?php if(isset($_SESSION['current'])): ?>
                <h4 style="color:  black;font-weight: bold"><?= $_SESSION['current']->compte?></h4>
	        <?php endif;?>
        </div>
		<span class="loader loader-bars">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</span>
    </section>
    </body>
    </html>