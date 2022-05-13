<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="phpmotors" content="CSE 340">
    <meta name="author" content="Camila Romero">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href= "/phpmotors/css/style.css" />
    <title> Login | PHP Motors </title>
</head>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/header.php'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/navigation.php';
echo $navList;?>
        <div class="login">
            <h1>Sign In</h1>
            <label for="email">Email</label><br>
            <input type="text" name="user_email" id="email"><br>
            <label for="password">Password</label><br>
            <input type="text" name="user_password" id="password"><br>
            <button class="submit">Sign in</button><br>
            <a href="?action=register">Not a member yet?</a>
        </div>

    <hr />

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php'; ?>