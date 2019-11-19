<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
</head>
<body>
<?php require('header.php'); ?>

 <h1>Supprimer l'article</h1>

<form action="?action=delete_post_action&post_id=<?= $post->getId() ?>" method="POST">
    <div>
        <input value="<?= $post->getTitle() ?>"></input>
    </div>

    <div>
        <textarea rows="20" style="width: 100%">
        <?= $post->getContent() ?>
    </textarea>
    </div>

    <button type="submit">Supprimer</button>
</form>


</body>
</html>
