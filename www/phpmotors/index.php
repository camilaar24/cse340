<?php
        /* PHPMotors Main Controller
         * This file is accessed at http://lvh.me/phpmotors/
         * or at http://lvh.me/phpmotors/index.php
         * 
         * This file controls all traffic to the http://lvh.me/phpmotors/ URL
        */
        
        $action = filter_input(INPUT_POST, 'action');
        if ($action == NULL) {
          $action = filter_input(INPUT_GET, 'action');
        }
        
        switch ($action) {
          case 'something':
        
            break;
        
          default:
            include 'view/home.php';
        }