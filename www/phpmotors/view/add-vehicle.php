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

<h1>Add Vehicle</h1>

                <?php 
                    if (isset($message)) {
                        echo $message;
                    }
                ?>
                <form action="../vehicles/" method="post" id="newVehicleForm">
                    <label>Car Classification </label>
                    <?php echo $classificationList;?>
                    <label for="invMake">Make</label>
                    <input type="text" name="invMake" id="invMake"  <?php if(isset($invMake)){echo "value='$invMake'";}  ?>  required><br>
                    <label for="invModel">Model: </label>
                    <input type="text" name="invModel" id="invModel"  <?php if(isset($invModel)){echo "value='$invModel'";}  ?>  required><br>
                    <label for="invDescription">Description </label>
                    <input type="text" name="invDescription" id="invDescription"  <?php if(isset($invDescription)){echo "value='$invDescription'";}  ?>  required><br>
                    <label for="invImage">Image Path</label>
                    <input type="text" name="invImage" id="invImage" value="../images/no-image.png" <?php if(isset($invImage)){echo "value='$invImage'";}  ?> required><br>
                    <label for="invThumbnail">Thumbnail Path</label>
                    <input type="text" name="invThumbnail" id="invThumbnail" value="../images/no-image.png" <?php if(isset($invThumbnail)){echo "value='$invThumbnail'";}  ?> required><br>
                    <label for="invPrice">Price </label>
                    <input type="text" name="invPrice" id="invPrice" <?php if(isset($invPrice)){echo "value='$invPrice'";}  ?> required><br>
                    <label for="invStock"># In Stock </label>
                    <input type="text" name="invStock" id="invStock" <?php if(isset($invStock)){echo "value='$invStock'";}  ?> required><br>
                    <label for="invColor">Color </label>
                    <input type="text" name="invColor" id="invColor" <?php if(isset($invColor)){echo "value='$invColor'";}  ?> required><br>
                    <button class="submit">Register</button><br>
                    <input type="hidden" name="action" value="newVehicle">
                </form>
            
            
            </main>

            <hr />
            
            <footer>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php'; ?>
</footer>
        </div>
    </body>
</html>