<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin</title>
</head>
<body>
    <div class="container">
        <?php require('header.php'); ?>

         <h1>Gérer les commentaires signalés de l'article</h1>

        <ul>
                    <?php foreach($comments as $comment){  ?>

                    <li>
                        <?php echo $comment->getCommentaires();?>
                        <a href="?action=validate_comment_action&comment_id=<?php echo $comment->getId();?>" class="btn btn-primary">Reverser le commentaire</a>
                        <a href="?action=remove_comment_action&comment_id=<?php echo $comment->getId();?>" class="btn btn-danger">Supprimer le commentaire</a>
                    </li>

                    <?php
        }
                    ?>
                </ul>
            </div>

        </form>
    </div>

</body>
</html>
