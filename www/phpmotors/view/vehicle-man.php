<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="phpmotors" content="CSE 340">
    <meta name="author" content="Camila Romero">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href= "/phpmotors/css/style.css" />
    <title>Add Vehicle | PHP Motors </title>
    </head>
    <body>
        <div id="body">
            <header>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/header.php'; ?>
</header>
            
            <main>
            <nav>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/navigation.php'; ?>
</nav>

<h1>Vehicle Management</h1> <br>

                <ul>
                <li><a href="../vehicles/?action=addClassification">Add classification</a></li>
                <li><a href="../vehicles/?action=addVehicle">Add vehicle</a></li>
                </ul>
            
            </main>

            <hr />
            
            <footer>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php'; ?>
</footer>
        </div>
    </body>
</html>