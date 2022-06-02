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
    <body>
        <div id="body">
            <header>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/header.php'; ?>
</header>
            
            <main>
            <nav>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/navigation.php'; ?>
</nav>
                <h1>Welcome to PHP Motors!</h1>
                <div id="main">
                    <ul>
                        <li><b>DMC Delorean</b></li>
                        <li>3 Cup holders</li>
                        <li>Superman doors</li>
                        <li>Fuzzy dice!</li>
                    </ul>
                    <img id="button" alt="own today button" src="/phpmotors/images/site/own_today.png">
                </div>
                <img id="deloreanPic" alt="delorean" src="/phpmotors/images/delorean.jpg">

                <div id="delorean">    
                    <h2 id="upgrade_h2">Delorean Upgrades</h2>
                    <ul id="upgrade">
                        <li id="flux_capacitor" class="upgradePic"><img alt="flux capacitor" src="/phpmotors/images/upgrades/flux-cap.png"></li>
                        <li id="fluxcapacitor_label" class="upgradeLabel"><a href="" class="upgradeLabel">Flux Capacitor</a></li>
                        <li id="flame_decals" class="upgradePic"><img alt="flame decals" src="/phpmotors/images/upgrades/flame.jpg"></li>
                        <li id="flamedecals_label" class="upgradeLabel"><a href="" class="upgradeLabel">Flame Decals</a></li>
                        <li id="bumper_stikers" class="upgradePic"><img alt="bumper stickers" src="/phpmotors/images/upgrades/bumper_sticker.jpg"></li>
                        <li id="bumperstikers_label" class="upgradeLabel"><a href="" class="upgradeLabel">Bumper Stickers</a></li>
                        <li id="hub_caps" class="upgradePic"><img alt="hub caps" src="/phpmotors/images/upgrades/hub-cap.jpg"></li>
                        <li id="hubcaps_label" class="upgradeLabel"><a href="" class="upgradeLabel">Hub Caps</a></li>
                    </ul>
                </div>

                <div id="review">
                    <h2 id="review_h2">DMC Delorean Reviews</h2>
                    <ul id="review_info">
                        <li><p>"So fast its almost like traveling in time." [4/5]</p></li>
                        <li><p>"Coolest ride on the road." [4/5]</p></li>
                        <li><p>"I'm feeling Marty McFly!" [5/5]</p></li>
                        <li><p>"The most futuristic ride of our day." [4.5/5]</p></li>
                        <li><p>"80's livin and I love it!" [5/5]</p></li>
                    </ul>
                </div>
                
            </main>
            <hr />
            
            <footer>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php'; ?>
</footer>
        </div>
    </body>
</html>