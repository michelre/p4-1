<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Article</title>
</head>
<body>
	<?php require('header.php'); ?>
	<div class="container">
		<h1>
		    <?= $post->getTitle() ?>
		</h1>

		<?php
		?>
		<div class="post"><?php echo $post->getContent(); ?></div>
	

		<h2>Laisser un commentaire</h2>

		<form action="?action=create_comment_action&post_id=<?= $post->getId() ?>" method="POST">
		    <div>
		        <input placeholder="Nom et Prénom" name="auteur" class="form-control input-sm">
		    </div>


		    <div>
		        <textarea placeholder="Commentaire" name="commentaires" class="form-control input-sm"></textarea>
		    </div>
		    <button type="submit" class="btn btn-primary">Envoyer</button>
		</form>


		<h2>Commentaires:</h2>

		<?php
		foreach ($comments as $comment) {
		    ?>
		    <div>
		        <?php echo $comment->getAuteur(); ?>:
		        <p><?php echo $comment->getCommentaires(); ?>
		        <?php if ($comment->getSignaler() === "0") { ?>
		            <a href="?action=signaler_commentaire&comment_id=<?= $comment->getId() ?>&post_id=<?= $post->getId() ?>">Signaler</a>
		        <?php } else { ?>
		            <b>Déjà signalé</b>
		        <?php } ?></p>

		    </div>
		    <?php
		}
		?>
	</div>

	<?php require('footer.php'); ?>


</body>
</html>
