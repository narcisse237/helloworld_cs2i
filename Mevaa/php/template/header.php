
<!--HEADER-->
<div class="container-fluid myMenu">
	<nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="<?= $index ?>index.php"><span class="my">My</span>Service</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item <?php if($active == 'index'): ?> active <?php endif ?>">
					<a class="nav-link" href="<?= $index ?>index.php">Accueil <?php if($active == 'index'): ?><span class="sr-only"> (current) </span><?php endif ?></a>
				</li>
				<li class="nav-item <?php if($active == 'login'): ?> active <?php endif ?>">
                    <form action="<?= $header ?>deconn.php">
                        <a class="nav-link"><button type="submit" class="btn btn-link" style="margin: 0;padding: 0;position: relative;bottom: 5px">Deconnexion</button> <?php if($active == 'login'): ?><span class="sr-only"> (current) </span><?php endif ?></a>
                    </form>
				</li>
				<li class="nav-item <?php if($active == 'publish'): ?> active <?php endif ?>">
					<a class="nav-link" href="<?= $header ?>ServicePublish.php">Créer un service <?php if($active == 'publish'): ?><span class="sr-only"> (current) </span><?php endif ?></a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Rechercher......." aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
			</form>
		</div>
	</nav>
</div>
<!--END HEADER-->