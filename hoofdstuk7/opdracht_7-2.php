<?php
// Open de database connectie en ODBC driver
try
{
    $pdo = new PDO("odbc:odbc2sqlserver");
}
catch (PDOException $e)
{
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    die();
}
echo "database connectie gelukt";

// Uitvoeren van een SQl query
try
{
    // Query schrijven
    $sql = 'SELECT * FROM joke';
    // Query uitvoeren
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
    exit();
}
// Lege Array aanmaken voor de results
$aJokes = array();
// Door de results heen loopen via een while
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    // Result wegschrijven in de $aJokes array
    $aJokes[] = $row;
}
// Tonen van de inhoud van aJokes
echo "<pre>";
print_r($aJokes);
echo "</pre>";


// ----------------------- Taak 3 -----------------------
foreach($aJokes as $grap) {
    echo "<br>".$grap['joketext'];
    //spatie ervoor zetten
    echo " ".$grap['jokeclou'];
};

// ----------------------- Taak 4 -----------------------

?>

<table>
    <tr style="font-weight: bold">
        <td>
            ID
        </td>
        <td>
            Joketext
        </td>
        <td>
            Jokeclou
        </td>
        <td>
            Jokedate
        </td>
    </tr>
    <tr>
        <td>
            <?php
            foreach($aJokes as $grap) {
                echo "<br>".$grap['id'];
            };
            ?>
        </td>
        <td>
            <?php
            foreach($aJokes as $grap) {
                echo "<br>".$grap['joketext'];
            };
            ?>
        </td>
        <td>
            <?php
            foreach($aJokes as $grap) {
                echo "<br>".$grap['jokeclou'];
            };
            ?>
        </td>
        <td>
            <?php
            foreach($aJokes as $grap) {
                echo "<br>".$grap['jokedate'];
            };
            ?>
        </td>
    </tr>
</table>