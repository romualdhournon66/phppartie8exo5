<?php
if (isset($_POST['login']) && isset($_POST['password'])) {
    setcookie('login', $_POST['login'], time() + 24 * 3600, null, null, false, true);
    setcookie('password', $_POST['password'], time() + 24 * 3600, null, null, false, true);
    header('Location: newscookie.php');
}
?>