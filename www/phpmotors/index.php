<?php

    // This is the Root Controller

    require_once 'library/connections.php';
    require_once 'model/main-model.php';

    $classifications = getClassifications();
    // var_dump($classifications);
    // exit;

    // Build a navigation bar using the $classifications array
    $navList = "<ul id='navigation'>";
    $navList .= "<li><a href='../phpmotors/index.php' title='View the PHP Motors home page'>Home</a></li>";
    foreach ($classifications as $classification) {
        $navList .="<li><a href='../phpmotors/index.php?action=".urlencode($classification['classificationName'])."' title='View our $classification[classificationName] product line'>$classification[classificationName]</a></li>";
    }
    $navList .='</ul>';

    // echo $navList;
    // exit;

    $action = filter_input(INPUT_GET, 'action');
        if ($action == NULL) {
            $action = filter_input(INPUT_POST, 'action');
        }
    
    switch ($action) {
        case 'login':
            include 'view/login.php';
            break;
        
        case 'register':
            include 'view/register.php';
        
        case 'template':
            include 'view/template.php';
            break;

        default:
            include 'view/home.php';
            break;

        
    }

?>