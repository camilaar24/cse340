<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home | PHP Motors</title>    
        <link rel="stylesheet" type="text/css" href= "/phpmotors/css/style.css" />
    </head>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/header.php'; ?>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/navigation.php'; ?>
    <body>
        <div id="body">
            
            <main>
                <h1>Register</h1>

                <?php 
                    if (isset($message)) {
                        echo $message;
                    }
                ?>
                <form action="/phpmotors/accounts/index.php" method="post">
                    <label for="clientFirstname">First Name: </label>
                    <input type="text" name="clientFirstname" id="clientFirstname"><br>
                    <label for="clientLastname">Last Name: </label>
                    <input type="text" name="clientLastname" id="clientLastname"><br>
                    <label for="clientEmail">Email Address: </label>
                    <input type="text" name="clientEmail" id="clientEmail"><br> 
                    <p>Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</p>
                    <label for="clientPassword">Password: </label>
                    <input type="password" name="clientPassword" id="clientPassword"><br>
                    <button class="submit">Register</button><br>
                    <input type="hidden" name="action" value="register">
                </form>
            
            </main>
            <hr />
            <footer>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php'; ?>

</footer>
        </div>
    </body>
</html>