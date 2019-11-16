<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Article</title>
</head>
<body>
	<?php require('header.php'); ?>
	
    <h1>Détail Article</h1>

    <?php
foreach($posts as $post){
	?>
	<div><?php echo $post->getTitle();?></div> 
	<div><?php echo $post->getContent();?></div>	
	<?php
}	
	?>
	<?php
foreach($comments as $comment){
	?>
	<div><?php echo $comment->getComment();?></div>
	<?php
}	
	?>

	<?php require('footer.php'); ?>


</body>
</html>
