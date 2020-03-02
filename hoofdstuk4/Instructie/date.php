<?php
/**
 * User: Lucas Kooijmans
 * Date:
 * Time:
 * File:
 */
?>

    <!-- Include header -->
<?php
include "../../includes/header.php";
?>

    <!-- Include menu -->
<?php
include "../../includes/menu.php";
?>

    <!-- Uitwerking -->
<?php
date_default_timezone_set("Europe/Amsterdam");
//echo date("d-m-Y H:i");
$month = date("n");

if($month == 3)
{
    echo "Het is vandaag lente";
}
elseif ($month >= 6 && $month <= 9)
{
    echo "Het is zomer";
}

?>

    <!-- Include footer -->
<?php
include "../../includes/footer.php";
?>