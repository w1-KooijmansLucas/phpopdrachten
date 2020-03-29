
<!-- Include header -->
<?php
include "../includes/header.php";
?>

<!-- Include menu -->
<?php
include "../includes/menu.php";
?>

<!-- Uitwerking -->

<?php
for ($x = 0; $x < 7; $x++) {
    $weekdayEN = Date("D", strtotime("+$x days"));
    $weekdayNL = null;
    $day = Date("d-m-Y", strtotime("+$x days"));

    switch ($weekdayEN) {
        case "Mon":
            $weekdayNL = "maandag";
            break;
        case "Tue":
            $weekdayNL = "dinsdag";
            break;
        case "Wed":
            $weekdayNL = "woensdag";
            break;
        case "Thu":
            $weekdayNL = "donderdag";
            break;
        case "Fri":
            $weekdayNL = "vrijdag";
            break;
        case "Sat":
            $weekdayNL = "zaterdag";
            break;
        case "Sun":
            $weekdayNL = "zondag";
            break;
    }

    if ($x == 0) {
        echo "Vandaag is " . $weekdayNL . " " . $day;
    }
    elseif ($x == 1) {
        echo "Morgen is " . $weekdayNL . " " . $day;
    }
    elseif ($x == 2) {
        echo "Overmorgen is " . $weekdayNL . " " . $day;
    }
    else {
        echo "Over" . (str_repeat("-over", $x)) . "morgen is " . $weekdayNL . " " . $day;
    }

    echo "<br />";
}
?>

<!-- Include footer -->
<?php
include "../includes/footer.php";
?>