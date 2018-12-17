<?php
setcookie('login', $_POST['login'], time() + 24 * 3600, null, null, false, true);
setcookie('password', $_POST['password'], time() + 24 * 3600, null, null, false, true);
?>
<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 8 exercice 5</title>
    </head>
    <body>
        <div class="container" id="page-top">
            <div class="row">
                <div class="col-xl-12">
                    <h1 align="center">PHP Partie 8 exercice 5</h1>
                    <h3 align="center">Exercice 5</h3>
                    <p align="center">Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</p>
                </div>
            </div>
            <form method="POST" action="user.php">
                <div align="center"><input type="text" placeholder="Votre login" name="login" /></div>
                <div align="center"><input type="password" placeholder="Votre password" name="password" /></div>
                <div align="center"><input type="submit" value="Valider" /></div>
            </form>
        </div>
    </body>
</html>




