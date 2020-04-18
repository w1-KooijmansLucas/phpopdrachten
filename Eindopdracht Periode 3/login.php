<?php
/**
 * User: Lucas Kooijmans
 * Date: 17-4-2020
 * Time: 14:13
 * File: login.php
 */
?>

    <!-- Stylesheet linken -->
<head>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

    <!-- Include header -->
<?php
include "../includes/header.php";
?>

    <!-- Include menu -->
<?php
include "../includes/menu.php";
?>

    <!-- Include script.php -->
<?php
include "script.php";
?>

    <!-- Uitwerking -->
    <!-- LOGIN PAGINA -->
<?php
// Als de gebruiker nog niet heeft ingelogd of het inloggen mislukt is.
if($showLoginScreen == true)
{
?>
    <h1>
        Bergheen
    </h1>
    <p>
        Login om onze adresgegevens + openingstijden te zien
    </p>

    <form action="login.php" method="post">
        <table>
            <tr>
                <td>

                </td>
                <!-- Echo de message variabel -->
                <td id="foutmelding">
                    <?php
                    echo $message;
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="username">username</label>
                </td>
                <td>
                    <input type="text" id="username" name="username">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">password</label>
                </td>
                <td>
                    <input type="password" id="password" name="password">
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    <input type="submit" name="submit" value="Inloggen">
                </td>
            </tr>
        </table>
    </form>
<?php
}
else
// Als de gebruiker succesvol heeft ingelogd.
{
?>
    <!-- CONTACT PAGINA -->
<h1>
    Bergheen
</h1>
<p>
    Welkom!
</p>

<fieldset id="openingstijden">
    <legend>
        Openingstijden
    </legend>
    Do: 22:00<br>
    Vr: All day<br>
    Za: All day<br>
    Zo: 12:00
</fieldset>

<fieldset id="adresgegevens">
    <legend>
        Adresgegevens
    </legend>
    Am Wriezener Bahnhof<br>
    10243 Berlin<br>
    Duitsland
</fieldset>

<p>
    Deze gegevens dien je ten alle tijden geheim te houden!
</p>
<?php
}
?>
    <!-- Include footer -->
<?php
include "../includes/footer.php";
?>
