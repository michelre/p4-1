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
    <div class="container">
    	<?php require('header.php'); ?>

    	<h1>Espace admin</h1>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($posts as $post) { ?>
                    <tr>
                        <td><?= $post->getTitle() ?></td>
                        <td>
                            <a href="?action=update_post&post_id=<?= $post->getId() ?>">Modifier</a>
                            <br>
                            <a href="?action=delete_post_action&post_id=<?= $post->getId() ?>">Supprimer</a>
                            <br>
                            <a href="?action=manage_comments&post_id=<?= $post->getId() ?>">Gérer les commentaires</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
                

        </table>
        <a class="btn btn-primary" href="?action=create_post&post_id=<?= $post->getId() ?>">Ajouter un nouvel article</a>
        <br>
    </div>

</body>
</html>
