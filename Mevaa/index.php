<?php
    session_start ();
	$directory = 'php/template/';
	$link = '';
	$index = '';
	$footer = '';
	$header = 'php/';
	$active = 'index';
	if(empty($_SESSION['current'])){
	    header('location:php/Login.php');
    }
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php include $directory.'link.php'?>
    <title>MyServices</title>
</head>
<body>
	<?php include $directory.'header.php' ?>
	
	<!--SLIDER-->
	<div class="container-fluid mt-3">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="img/ban.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="img/ban.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="img/ban.jpg" class="d-block w-100" alt="...">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<!--END SLIDER-->
    <!--CONTENT-->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-10">
                <div class="card-group justify-content-center flex-wrap">
                    <div class="col-3 m-1"  style="min-width: 250px;">
                        <div class="card">
                            <img src="img/item.jpg" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Item</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut beatae dicta eligendi, expedita facilis, fugit iste labore mollitia nam nihil, porro provident recusandae repellendus soluta vel veniam veritatis vitae voluptas?
                                </p>
                                <button class="my-btn">Détail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 m-1"  style="min-width: 250px;">
                        <div class="card">
                            <img src="img/item.jpg" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Item</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut beatae dicta eligendi, expedita facilis, fugit iste labore mollitia nam nihil, porro provident recusandae repellendus soluta vel veniam veritatis vitae voluptas?
                                </p>
                                <button class="my-btn">Détail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 m-1"  style="min-width: 250px;">
                        <div class="card">
                            <img src="img/item.jpg" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Item</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut beatae dicta eligendi, expedita facilis, fugit iste labore mollitia nam nihil, porro provident recusandae repellendus soluta vel veniam veritatis vitae voluptas?
                                </p>
                                <button class="my-btn">Détail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 m-1"  style="min-width: 250px;">
                        <div class="card">
                            <img src="img/item.jpg" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Item</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut beatae dicta eligendi, expedita facilis, fugit iste labore mollitia nam nihil, porro provident recusandae repellendus soluta vel veniam veritatis vitae voluptas?
                                </p>
                                <button class="my-btn">Détail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 m-1"  style="min-width: 250px;">
                        <div class="card">
                            <img src="img/item.jpg" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Item</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut beatae dicta eligendi, expedita facilis, fugit iste labore mollitia nam nihil, porro provident recusandae repellendus soluta vel veniam veritatis vitae voluptas?
                                </p>
                                <button class="my-btn">Détail</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-2 border">
                <div class="pub col mb-5 border mt-2">
                    <img src="img/guinness.jpeg" alt="">
                </div>
                <div class="pub col border">
                    <img src="img/guinness.jpeg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--END CONTENT-->
	
	<?php include $directory.'footer.php' ?>
</body>
</html>