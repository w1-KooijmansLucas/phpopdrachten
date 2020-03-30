<?php
/*************
 * Maak hier een functie genaamd "getTeacherName" die als return de juiste docent naam mee geeft.
 **************/

function getTeacherName()
{
    //Zorg dat je hier de juiste docentnaam met een return terug stuurt.
    $phpTeacher =   "Evers";
    $jsTeacher  =   "Wetering";

    if($_GET['subject'] == "php")
    {
        echo $phpTeacher;
    };

    if($_GET['subject'] == "js")
    {
        echo $jsTeacher;
    };
}
?>