<?php
session_start();
require "user.php";
include "user-sample.php";

$userIsValid = false;
/** @var $sample array */

foreach ($sample as $user) {
    $user->getUsername() == $_POST["login-username"] &&
    $user->getPassword() == $_POST["login-password"] ? $userIsValid = true : null;
}

if ($userIsValid){
    $userFromLogin = new User();
    $userFromLogin -> setUsername($_POST["login-username"]);
    $userFromLogin -> setPassword($_POST["login-password"]);
    $_SESSION["newsession"]=$userFromLogin;
}
?>

<html lang="fr">
    <body>
        <?php if($userIsValid): ?>
            Bonjour <?php echo $userFromLogin->getUsername() ?> merci de t'être connecté.
            <a href="/tp1/home.php.php">To Home</a>
        <?php else:header('Location: /login.php');?>
        <?php endif; ?>
    </body>
</html>
