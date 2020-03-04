<?php
$day = date("1");

switch($day)
{
    case "Monday":
        echo "Het is maandag";
        break;
    case "Tuesday":
        echo "Het is dinsdag";
        break;
    case "Wednesday":
        echo "Het is woensdag";
        break;
    default:
        echo "Dit is een andere dag";
        break;
}

?>