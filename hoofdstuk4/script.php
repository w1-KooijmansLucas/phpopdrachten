<?php

/* SLB - LAM00
 * SQL - WET13
 * Burgerschap - LAM00
 * Modelleren - GIJ06
 * PHP - EVE10
 * Nederlands - RIJ24
 * Javascript - WET13
 * ASP - GIJ06
 * Computertekenen - BER03
 * Rekenen - MEE23
 * Digitale vaardigheden - PIE05
 * Engels - MIT02
 */

$courseName = "PHP";
$teacherName = "EVE10";

switch ($courseName)
{
    case "Javascript":
    case "Database SQL":
        echo "Van de Wetering";
        break;
    case "Rekenen":
        echo "Van Meer";
        break;
    case "Nederlands":
        echo "Rijswijk";
        break;
    case "L&B":
        echo "Lambrechts";
        break;
    case "PHP":
        echo "Evers";
        break;
    case "Modelleren":
    case "ASP":
        echo "Gijsbrechts";
        break;
    case "Digitale vaardigheden":
        echo "Pielage";
        break;
    case "Computertekenen":
        echo "Van den Berg";
        break;
    case "Engels":
        echo "Mitrovic";
        break;
}

?>
