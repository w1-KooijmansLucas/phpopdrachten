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
    Zoekterm: <input type="text" id="search" name="search"> <input type="submit" value="Zoeken!" id="button" name="button">
    <?php
    if (isset($_GET["search"]))
    {
        $query = "SELECT * FROM joke WHERE joketext LIKE '%" . $_GET["search"] . "%'";
        echo "<p> $query </p>";
    }
    ?>
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
        <?php
                // Resultaten rij voor rij ophalen
                while($row = $jokes->fetch(PDO::FETCH_ASSOC) )
                {
                    // Voor ieder joke een rij maken met daarin cellen met de bijhorende gegevens
                    echo "<tr>" . "<td>".  $row["id"] . "</td> <td>" . $row["joketext"] . "</td> <td>" . $row["jokeclou"] . "</td> <td>" .  $row["jokedate"] . "</td> </tr>";
                }
        ?>
    </tr>
</table>

<?php

// Resultaten rij voor rij ophalen
while($row = $jokes->fetch(PDO::FETCH_ASSOC) )
{
    echo $row["jokedate"] .  $row["joketext"] . $row["jokeclou"] . "<br>";
}

?>