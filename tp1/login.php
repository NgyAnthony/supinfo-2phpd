<?php
session_start();
$alreadyConnected = isset($_SESSION["newsession"]);

if(array_key_exists('buttonDisconnect', $_POST)) {
    userDisconnect();
}

function userDisconnect() {
    unset($_SESSION["newsession"]);
    header('Location: /login.php');
}
?>

<!DOCTYPE html>
<html lang="fr">
    <body>
        <h1>Login page</h1>
        <a href="/tp1/home.php">To Home</a>

        <?php if($alreadyConnected): ?>
            Vous êtes déjà connecté !
            <form method="post">
                <input type="submit" name="buttonDisconnect"
                       class="button" value="Disconnect" />
            </form>
        <?php else: ?>
            <form action="login-success.php" method="post">
                <label for="login-username">Username</label>
                <input type="text" name="login-username" id="login-username">

                <label for="login-password">Password</label>
                <input type="password" name="login-password" id="login-password">

                <input type="submit">
            </form>
        <?php endif; ?>
    </body>
</html>
