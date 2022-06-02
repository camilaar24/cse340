<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="phpmotors" content="CSE 340">
    <meta name="author" content="Camila Romero">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href= "/phpmotors/css/style.css" />
    <title>Add Classification | PHP Motors </title>
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
       
<h1>Add Classification</h1>

                <?php 
                    if (isset($message)) {
                        echo $message;
                    }
                ?>
                <form action="../vehicles/" method="post" id="classificationForm">
                    <label for="classificationName">Classification Name: </label>
                    <input type="text" name="classificationName" id="classificationName"><br>
                    <button class="submit">Subbmit</button><br>
                    <input type="hidden" name="action"  value="newClassification">
                </form>
            
            </main>

            <hr />
            
            <footer>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php'; ?>
</footer>
        </div>
    </body>
</html>