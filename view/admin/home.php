<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Billet simple pour l'Alaska</title>
</head>
<body>
	<?php require('header.php'); ?>

	<h1>Espace d'admin</h1>

    <table>
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
                        <a href="?action=delete_post&post_id=<?= $post->getId() ?>">Supprimer</a>
                        <a href="?action=manage_comments&post_id=<?= $post->getId() ?>">Gérer les commentaires</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="?action=create_post&post_id=<?= $post->getId() ?>">Ajouter un nouvel article</a>



</body>
</html>
