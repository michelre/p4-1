<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="scripts/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: "textarea",
            language: "fr_FR",
        });
    </script>

    <title>Admin</title>

</head>

<body>

    <div class="container">
        <?php require('header.php'); ?>

         <h1>Ajouter un article</h1>

        <form name="formulaire" id="formulaire" action="?action=create_post_action" method="POST">
            <div>               
                <input placeholder="Titre" type="text" class="form-control" name="title"></input>
            </div>
        <br>
            <div>               
                <textarea class="tinymce" rows="20" style="width: 100%" name="content"></textarea>
            </div>
        <br>
            <button class="btn btn-primary" type="submit">Publier le nouvel article</button>
        </form>
    </div>
        <br>
</body>
</html>
