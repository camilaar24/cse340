<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="phpmotors" content="CSE 340">
    <meta name="author" content="Camila Romero">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href= "/phpmotors/css/style.css" />
    <title>Account registration | PHP Motors </title>
</head>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/header.php'; ?>
<?php //require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/navigation.php';
echo $navList;?>
        <div class="registration">
            <h1>Register</h1>
            <label for="firstname">Email</label><br>
            <input type="text" name="first_name" id="firstname"><br>
            <label for="lastname">Last Name</label><br>
            <input type="text" name="last_name" id="lastname"><br>
            <label for="email">Email</label><br>
            <input type="text" name="user_email" id="email"><br>
            <p>Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</p>
            <label for="password">Password</label><br>
            <input type="text" name="user_password" id="password"><br>
            <button class="showPassword">Show Passowrd</button><br>
            <button class="submit">Register</button><br>
        </div>

    <hr />

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php'; ?>