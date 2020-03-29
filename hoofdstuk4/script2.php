<?php

// Taak 2

$task2 = "Lancering in: ";
$counter = 19;

while($counter>=0)
{
    $task2 .= $counter . ", ";
    $counter--;
}

// Taak 3

$task3 = "Lancering in: ";
for($counter = 19; $counter>=0; $counter--)
{
    $task3 .= $counter . ", ";
}

// Taak 4

$task4 = "";
$counterr = 1;
while($counterr<=6)
{
    $task4 .= "<h" . $counterr . ">Dit is de " . $counterr . "e iteratie</h" . $counterr . ">";
    $counterr++;
}

// Taak 5

$task5 = "<table><tr>";
for($counterrr=1;$counterrr<=10;$counterrr++)
{
    $task5 .= "<td>Dit is de " . $counterrr . "e iteratie</td>";
}
// toevoegen
$task5 .= "</tr></table>";

// Taak 6 en 7

$task6 = "";
$currentYear = date('Y');
while($currentYear>=2001)
{
    $age = $currentYear-2001;

    if($age>=20)
        // fase = stage
        $stage = "volwassen";
    elseif($age>=18)
        $stage = "adolescent";
    elseif($age>=12)
        $stage = "puber";
    elseif($age>=8)
        $stage = "tiener";
    elseif($age>=4)
        $stage = "kleuter";
    elseif($age>=2)
        $stage = "peuter";
    else
        $stage = "baby";

    if($currentYear == 2001)
        $task6 .= "<p>In " . $currentYear . " ben ik geboren.</p>";
    else
        $task6 .= "<p>In " . $currentYear . " was ik " . $age . " jaar oud en was ik een " . $stage . "</p>";
    $currentYear--;
}


?>