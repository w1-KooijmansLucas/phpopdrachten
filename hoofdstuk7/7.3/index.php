<?php


// Inladen functies bestand
include("functions.php");

// Starten van een database connectie
startConnection();

// Executeren van een SQL query
$query = "SELECT * FROM joke";
$jokes = executeQuery($query);

echo "<p> $query </p>";

?>

<form method="get" action="index.php">
    Zoekterm: <input type="text" id="search" name="search"> <button>Zoeken</button>
</form>

<hr>

<table>
    <tr>
        <th>
            Jokeid
        </th>
        <th>
            Joketext
        </th>
        <th>
            Jokeclou
        </th>
        <th>
            Jokedate
        </th>
    </tr>
</table>

<?php

// Resultaten rij voor rij ophalen
while($row = $jokes->fetch(PDO::FETCH_ASSOC) )
{
    echo $row["jokedate"] .  $row["joketext"] . $row["jokeclou"] . "<br>";
}

?>