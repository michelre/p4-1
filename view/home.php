<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Billet simple pour l'Alaska</title>
</head>
<body>
	<?php require('header.php'); ?>

<div class="container">
	<div class="row">
	    <!-- Contient l'image et la description -->
	    <div class="carousel-inner">
	        <img class="img-fluid" src="public/images/slider1.jpg" alt="First slide">
	        <!-- Description slider 1 -->
	        
	            <div class="carousel-caption">
	                <h1 class="style_title">Bienvenue sur le blog de Jean Forteroche !</h1>
	                <p class="style_texte">Pour mon prochain roman "Billet simple pour l'Alaska", j'ai souhaité pouvoir publier les chapitres en ligne sur mon blog. Un chapitre sortira par mois, bonne lecture !</p>
	            </div>
	        
	    </div>
	</div>

	<div class="row">
		<div class="col-lg-8">
			<section id="posts">
				<?php
				foreach($posts as $post){
					?>
					<div class="titre-posts"><a href="?action=post_detail&post_id=<?php echo $post->getId(); ?>"><?php echo $post->getTitle();?></a></div>

					<div class="extrait-posts"><?php echo (substr($post->getContent(),0 ,300))?>...</div>

					<a class="btn btn-primary" href="?action=post_detail&post_id=<?php echo $post->getId(); ?>">Lire la suite</a>

					<hr>
				<?php
				}
					?>

			</section>
		</div>
		<div class="col-lg-4">
			<section id="biographie">
				<p class="titre-bio">Jean Forteroche</p>
				<img class="portrait" src="public/images/portrait.jpg" alt=JeanForteroche>
				<p class="biographie"> Après des études de philosophie et un début de carrière dans l'enseignement, je décide de me consacrer au voyage et à l’écriture. L'appel du large est mon premier roman, il obtient le Prix Goncourt en 2010. Depuis j'ai publié Le pays du Grand Froid qui a obtenu plusieurs prix littéraires en Europe. Mes thèmes de prédilection sont le voyage, les relations humaines, la liberté, et la quête de sens. J’ai 35 ans, j’ai grandi dans le sud de la France, et je voyage régulièrement avec ma femme et mon fils.</p>
			</section>
		</div>
	</div>

</div>

	<?php require('footer.php'); ?>

</body>
</html>
