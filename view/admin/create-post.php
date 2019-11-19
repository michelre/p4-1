<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
</head>
<body>
<?php require('header.php'); ?>

 <h1>Ajouter un article</h1>

<form action="?action=create_post_action ?>" method="POST">
    <div>
        <label for="title">Titre</label>
        <input type="text" class="form-title" name="title"></input>
    </div>

    <div>
        <label for="content">Texte</label>
        <textarea rows="20" style="width: 100%"></textarea>
    </div>

    <button type="submit">Publier le nouvel article</button>
</form>


</body>
</html>
