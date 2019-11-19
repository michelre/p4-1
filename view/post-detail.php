<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Article</title>
</head>
<body>
<?php require('header.php'); ?>

<h1>
    <?= $post->getTitle() ?>
</h1>

<?php
?>
<div><?php echo $post->getContent(); ?></div>

<?php
foreach ($comments as $comment) {
    ?>
    <div>
        <?php echo $comment->getComment(); ?>
        <?php if ($comment->getSignaler() === "0") { ?>
            <a href="?action=signaler_commentaire&comment_id=<?= $comment->getId() ?>&post_id=<?= $post->getId() ?>">Signaler</a>
        <?php } else { ?>
            <b>Déjà signalé</b>
        <?php } ?>

    </div>
    <?php
}
?>

<?php require('footer.php'); ?>


</body>
</html>
