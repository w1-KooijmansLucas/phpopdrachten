<?php
//Haal de formulier gegevens op
//include hieronder "lesopdracht_function.php" die de naam van de docent terug geeft.
include "lesopdracht_functions53.php";
?>
<table>
    <tr>
        <td>Voornaam</td>
        <td>
            <?php
                echo $_GET['firstname'];
            ?>
        </td>
    </tr>
    <!-- Begin: Toon dit alleen als er een tussenvoegsel is ingevuld! -->
    <tr>
        <td>
            <?php
            if(!empty($_GET['tussenvoegsel']))
            {
                echo "Tussenvoegsel";
            }
            else{
                echo "";
            }
            ?>
        </td>
        <td>
            <?php
                if(!empty($_GET['tussenvoegsel']))
                {
                    echo $_GET['tussenvoegsel'];
                }
            ?>
        </td>
    </tr>
    <!-- Einde: Toon dit alleen als er een tussenvoegsel is ingevuld! -->
    <tr>
        <td>Achternaam</td>
        <td>
            <?php
                echo $_GET['lastname'];
            ?>
        </td>
    </tr>
    <tr>
        <td>Meer informatie</td>
        <td>
            <?php
                getTeacherName();
            ?>
        </td>
    </tr>
</table>