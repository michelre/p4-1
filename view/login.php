<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Article</title>
</head>
<body>
<?php require('header.php'); ?>
<div class="container">
    <form class="login form" action="index.php?action=login_action" method="post">
        <div class="form-group">
            <label>Login:</label>
            <input type="text" name="login" class="form-control" required/>
        </div>
        <div class="form-group">
            <label>Mot de passe:</label>
            <input type="password" name="password" class="form-control" required/>
        </div>
        <input class="button" type="submit" value="Connexion" />
        </p>
    </form>
</div>

<?php require('footer.php'); ?>


</body>
</html>

