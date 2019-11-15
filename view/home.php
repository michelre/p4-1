<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Billet simple pour l'Alaska</title>
</head>
<body>
    <h1>Accueil</h1>
<?php
foreach($posts as $post){
	?>
	<div><a href="?action=post_detail&post_id=1"><?php echo $post->getTitle();?></a></div> 
	<div><?php echo $post->getContent();?></div>
	<?php
}
?>

</body>
</html>
