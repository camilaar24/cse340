<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="phpmotors" content="CSE 340">
    <meta name="author" content="Camila Romero">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href= "/phpmotors/css/style.css" />
    <title>Home | PHP Motors </title>
</head>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/header.php'; ?>
<?php //require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/navigation.php';
echo $navList;?>
<div class="main">
    <h1>Welcome to PHP Motors</h1>
    <p>DMC Delorean</p>
    <p>3 cup holders</p>
    <p>Superman Doors</p>
    <p>Fuzzy dice!</p>
    <button>Own Today</button>
</div>
<div class="delorean">    
    <div class="upgrade">
        <h2>Delorean Upgrades</h2>
        <figure>
            <div>
                <img src="/phpmotors/images/upgrades/flux-cap.png" alt="Flux_Capacitor">
            </div>
            <figcaption><a> Flux Capacitor</a></figcaption>
        </figure>
        <figure>
            <div>
                <img src="/phpmotors/images/upgrades/flame.jpg" alt="Flame_Decals">
            </div>
            <figcaption><a> Flame Decals</a></figcaption>
        </figure>
        <figure>
            <div>
                <img src="/phpmotors/images/upgrades/bumper_sticker.jpg" alt="Bumper_Stikers">
            </div>
            <figcaption><a> Bumper Stickers</a></figcaption>
        </figure>
        <figure>
            <div>
                <img src="/phpmotors/images/upgrades/hub-cap.jpg" alt="Hub_Caps">
            </div>
            <figcaption><a> Hub Caps</a></figcaption>
        </figure>
    </div>
    <div class="review"> 
        <h2> DMC Delorean Reviews </h2>
        <ul>
            <li>"So fast its almost like traveling in time." (4/5)</li>
            <li>"Coolest ride on the road." (4/5)</li>
            <li>"I'm feeling Marty Mcfly!" (5/5)</li>
            <li>"Themost futuristic ride of our day."(4.5/5)</li>
            <li>"80's living and I live it!"(5/5)</li>
        </ul>
    </div>
</div>   

<hr />

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php'; ?>