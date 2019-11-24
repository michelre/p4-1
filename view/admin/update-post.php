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

        <h1>Modifier l'article</h1>

        <form action="?action=update_post_action&post_id=<?= $post->getId() ?>" method="POST">
            <div>
                <input class="form-control" value="<?= $post->getTitle() ?>" name="title">
            </div>
            <br>
            <div>
                <textarea rows="20" style="width: 100%" name="content">
                <?= $post->getContent() ?>
                </textarea>
            </div>
        <br>
            <button class="btn btn-primary" type="submit">Modifier</button>
        </form>
        <br>
    </div>

</body>
</html>
