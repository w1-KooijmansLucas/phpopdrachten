<?php
/**
 * User: Lucas Kooijmans
 * Date: 13-2-2020
 * Time: 13:36
 * File: opdracht_3-1.php
 */
?>

<!-- Include header -->
<?php
include "../includes/header.php";
?>

<!-- Include menu -->
<?php
include "../includes/menu.php";
?>

<!-- Uitwerking -->
    <?php
        // String
        $evenement = "Elfstedentocht";
        // String
        $fries = "Alvestêdetocht";
        // Integer
        $km = 200;
        // String
        $tocht = "schaatstocht";
        // String
        $baan = "natuurijs";
        // String
        $organisatie = "Koninklijke Vereniging De Friesche Elf Steden";
        // String
        $hoofdstad = "Leeuwarden";
        // String
        $provincie = "Friesland";
        // Integer
        $verreden = 15;
        // Integer
        $eerst = 1909;
        // Integer
        $maximaal = 1;

        $verhaal = "De $evenement (Fries: $fries) is een $km kilometer lange $tocht over $baan die wordt georganiseerd door de $organisatie. $hoofdstad, de hoofdstad van $provincie, is start- en aankomstplaats. De $evenement is inmiddels $verreden maal verreden en werd voor het eerst in $eerst gereden en wordt maximaal $maximaal keer per winter gehouden.";

        $verhaal2 = "De " . $evenement . " (Fries: " . $fries . ") " . "is een " . $km . " kilometer
        lange " . $tocht . " over " . $baan . " die wordt georganiseerd door
        de " . $organisatie . ". " . $hoofdstad . ", " . " de hoofdstad van " . $provincie . ", " . "is start- en aankomstplaats. " . "De " . "$evenement" . " is inmiddels " . $verreden . " maal verreden en werd voor het
        eerst in " . $eerst . " gereden en wordt maximaal " . $maximaal . " keer per winter
        gehouden.";
        // Versturen naar browser met <p>
        echo '<p>' . $verhaal . '</p>';
        echo '<p>' . $verhaal2 . '</p>';
    ?>

<!-- Include footer -->
<?php
include "../includes/footer.php";
?>