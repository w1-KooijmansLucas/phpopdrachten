<?php
/**
 * User: Lucas Kooijmans
 * Date: 21-2-2020
 * Time: 09:45
 * File: opdracht_3-2.php
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

$trafficLightColor = "groen";
$ambulanceComing = true;
$driveOn = true;
$countryName = "";
$currentAge = 18;

?>

<?php

if ($ambulanceComing == true)
{
    $driveOn = false;
    echo "U moet stoppen";
}
else if ($trafficLightColor == groen)
{
    $driveOn = true;
    echo "u mag doorrijden";
}
else{
    echo "U moet stoppen";
}

?>

<?php

if ($countryName == "België" && $currentAge == 16){
    echo "Je woont in België en je bent ". $currentAge ." en je mag zwakke dranken drinken";
}
else if ($countryName == "Cyprus" && $currentAge == 17){
    echo "Je woont in Cyprus en je bent". $currentAge ." en u mag elke soort drank drinken";
}
else {
    echo "Je woont in Nederland en je bent ". $currentAge ." en je mag alcohol drinken";
}

?>

<!-- Include footer -->
<?php
include "../includes/footer.php";
?>