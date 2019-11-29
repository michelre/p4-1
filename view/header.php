<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>Billet simple pour l'Alaska</title>
</head>
<body>


<header>
    <div class="row">
        <nav class="navbar">
            <div class="title col-lg-6">
                <a href="index.php?action=accueil">Billet simple pour l'Alaska</a>
            </div>
            <div class="dropdown col-lg-6 col-xs-1">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                    Menu
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="index.php?action=accueil">Accueil</a>
                    <?php
                    foreach ($postsMenu as $postMenu) {
                        ?>
                        <a class="dropdown-item"
                           href="index.php?action=post_detail&post_id=<?php echo $postMenu->getId(); ?>"><?php echo $postMenu->getTitle(); ?></a>
                        <?php
                    }
                    ?>
                </div>

        </nav>
    </div>
</header>


</body>
</html>
