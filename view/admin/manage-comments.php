<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
</head>
<body>
<?php require('header.php'); ?>

 <h1>Gérer les commentaires de l'article</h1>

<ul>
            <?php foreach($comments as $comment){  ?>

            <li>
                <?php echo $comment->getComment();?>
                <a href="?action=createComment&commentId=<?php echo $comment->getId();?>&postId=<?php ;?>" class="btn btn-primary">Ecrire un commentaire</a>

                <a href="?action=updateComment&commentId=<?php echo $comment->getId();?>&postId=<?php ;?>" class="btn btn-primary">Modifier le commentaire</a>

                <a href="?action=removeComment&commentId=<?php echo $comment->getId();?>&postId=<?php ;?>" class="btn btn-danger">Supprimer le commentaire</a>
            </li>

            <?php  
}
            ?>
        </ul>
    </div>

</form>


</body>
</html>
