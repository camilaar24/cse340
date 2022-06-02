<?php

    require_once '../library/connections.php';
    require_once '../model/main-model.php';
    require_once '../model/vehicles-model.php';

    $
    fications = getClassifications();


    $navList = "<ul id='navigation'>";
    $navList .= "<li><a href='/phpmotors/accounts/index.php' title='View the PHP Motors home page'>Home</a></li>";
    $classificationList = "<select name='classificationId' id='carClassification'>";
    foreach ($classifications as $classification) {$name = $classification['classificationName']; $id = $classification['classificationId']; $navList .="<li><a href='/phpmotors/index.php?action=".urlencode($name)."' title='View our $name product line'>$name</a></li>"; $classificationList .= "<option value='$id'>$name</option>";
    }
    $navList .='</ul>';
    $classificationList .="</select><br>";



    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
    }
    
    switch ($action) {
        case 'newClassification':
            $classificationName = filter_input(INPUT_POST, 'classificationName');
            
            if(empty($classificationName)) {
                $message = '<p>Please provide information for all empty form fields.</p>';
                include '../view/add-classification.php';
                exit;
            }
            $regOutcome = newClassification($classificationName);
            if($regOutcome === 1){
                header("Location: ../vehicles/");
                exit;
            } else {
                $message = "<p>Sorry, but the Submission failed. Please try again.</p>";
                include '../view/add-classification.php';
                exit;
            }
            break;
        case 'newVehicle':
            $invMake = filter_input(INPUT_POST, 'invMake');
            $invModel = filter_input(INPUT_POST, 'invModel');
            $invDescription = filter_input(INPUT_POST, 'invDescription');
            $invImage = filter_input(INPUT_POST, 'invImage');
            $invThumbnail = filter_input(INPUT_POST, 'invThumbnail');
            $invPrice = filter_input(INPUT_POST, 'invPrice');
            $invStock = filter_input(INPUT_POST, 'invStock');
            $invColor = filter_input(INPUT_POST, 'invColor');
            $classificationId = filter_input(INPUT_POST, 'classificationId');

            if(empty($invMake) || empty($invModel) || empty($invDescription) || empty($invPrice) || empty($invStock) || empty($invColor) || empty($classificationId)) {
                $message = '<p>Please provide information for all empty form fields.</p>';
                include '../view/add-vehicle.php';
                exit;
            }

            $regOutcome = newVehicle($invMake, $invModel, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $invColor, $classificationId);
            if($regOutcome === 1){
                $message = "<p>Inventory update of $invMake $invModel successful. Current stock: $invStock Current price: $invPrice</p>";
                include '../view/add-vehicle.php';
                exit;
            } else {
                $message = "<p>Sorry, but the inventory update failed. Please try again.</p>";
                include '../view/add-vehicle.php';
                exit;
            }
            break;
        case 'addClassification':
            include '../view/add-classification.php';
            break;
        case 'addVehicle':
            include '../view/add-vehicle.php';
            break;
        default:
            include '../view/vehicle-man.php';
            break;
    }

?>