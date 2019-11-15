<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Article</title>
</head>
<body>

    <h1>Détail Article</h1>

    <?php
foreach($posts as $post){
	?>
	<div><?php echo $post->getTitle();?></div> 
	<div><?php echo $post->getContent();?></div>
	
	<?php
}
?>

</body>
</html>
