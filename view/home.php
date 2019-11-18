<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Billet simple pour l'Alaska</title>
</head>
<body>
	<?php require('header.php'); ?>

	<h1>Accueil</h1>
    <p>	Bonjour tout le monde !
		Bienvenue ! Je suis Jean Forteroche, écrivain. Vous êtes actuellement sur mon Blog où je poste au fur et à mesure un nouveau chapitre de mon dernier roman intitulé "Billet simple pour l'Alaska". N'hésitez pas à y laisser des commentaires !
	</p>

	<?php
	foreach($posts as $post){
		?>
		<div><a href="post_detail.php?post_id=$_GET['id']"><?php echo $post->getTitle();?></a></div> 
		<div><?php echo $post->getContent();?></div>
		<?php
	}
	?>
	        
	<?php require('footer.php'); ?>

</body>
</html>
