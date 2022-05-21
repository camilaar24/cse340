<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="phpmotors" content="CSE 340">
    <meta name="author" content="Camila Romero">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href= "/phpmotors/css/style.css" />
    <title>Account Login | PHP Motors </title>
    </head>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/header.php'; ?>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/navigation.php'; ?>
    <body>
        <div id="body">
                <h1>Login</h1>
                <?php 
                    if (isset($message)) {
                        echo $message;
                    }
                ?>
                <form action="/phpmotors/accounts/index.php?action=login" id="loginForm">
                    <label for="clientEmail">Email Address: </label>
                    <input type="text" name="clientEmail" id="clientEmail"><br>
                    <label for="clientPassword">Password: </label>
                    <input type="password" name="clientPassword" id="clientPassword"><br>
                    <button class="submit">Sign in</button><br>
                    <a href='../accounts/?action=register-page'>Not a member yet?</a></p>
                </form>

            </main>
            <hr />
            <footer>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php'; ?>
</footer>
        </div>
    </body>
</html>