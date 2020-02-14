<?php
/**
 * User: Lucas Kooijmans
 * Date: 12-2-2020
 * Time: 8:48
 * File: variabelen.php
 */
?>
<head>
    <meta charset="UTF-8">
    <link href="" rel="stylesheet" type="text/css">
    <title>
        Instructie variabelen in PHP
    </title>
</head>
<body>
        <?php
            //String
            $car = "audi";

            //Boolean
            $license = true;

            /*
             * commentaar
             */

            //Integer
            $age = 24;

            //Float
            $price = 20000.99;

            //Array
            $subjects = array("Internet", "computer", "software");

            echo '<p class="red">' . $car . ' heeft een prijs van ' . $price . '</p>';
        ?>
</body>