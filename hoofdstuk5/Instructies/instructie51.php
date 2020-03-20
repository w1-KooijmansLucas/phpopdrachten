<?php
// dag, maand en jaar van morgen

echo date("d-m-Y", strtotime("+1 day"));

// Instructie formulieren versturen met GET
?>

<form action="form_data.php" method="get">
    <label for="firstname">Voornaam:</label> <input type="text" name="firstname" id="firstname">
    <label for="lastname">Achternaam:</label> <input type="text" name="lastname" id="lastname">
    <select name="subject">
        <option value="php">PHP</option>
        <option value="js">Javascript</option>
    </select>
    <input type="submit">
</form>
