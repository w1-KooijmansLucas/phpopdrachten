<?php
/**
 * User: Lucas Kooijmans
 * Date: 17-4-2020
 * Time: 14:13
 * File: script.php
 */

// Associatieve array aanmaken
$loginCombinations = array("Lucas"=>"lucas3284", "Bob"=>"bob9584", "Frits"=>"frits1842", "Kees"=>"kees1394", "Sjakie"=>"sjakie1953", "Bas"=>"bas6382", "Peter"=>"peter2391", "Robbie"=>"robbie1289", "Jan"=>"jan1462", "Tim"=>"tim9324");

// Message aanmaken. Moet leeg zijn.
$message = "";

// showLoginScreen aanmaken. Staat standaard op true omdat ik zo de if-else kan maken.
$showLoginScreen = true;

// If-statement aanmaken. Als de gebruiker op de submit knop drukt dan pas wordt de code uitgevoerd.
if(isset($_POST['submit']))
{
    // Ik zet het eerst op false, zodat de if straks kan checken of de combinatie correct is.
    $found = false;

    // Foreach loop aanmaken. Splitst de username en password uit array.
    foreach($loginCombinations as $username => $password)
    {
        if($_POST['username'] == $username && $_POST['password'] == $password)
        {
            // Zodra de combinatie correct is, zet ik het op true en dan hoeft hij de onderstaande if-statement niet meer uit te voeren.
            $found = true;
            // Laat contact pagina zien
            $showLoginScreen = false;
            // Stopt de foreach loop.
            break;
        }
    }

// If-statement aanmaken. Als de username & password combinatie niet correct is.
    if(!$found)
    {
        $message = "Inloggen mislukt!";
        // Blijft staan op login pagina
        $showLoginScreen = true;
    }

// Als een van de velden leeg zijn, toon dan het bericht.
    if(empty($_POST['username']) || empty($_POST['password']))
    {
        $message = "U heeft geen username en/of password opgegeven";
    }
}