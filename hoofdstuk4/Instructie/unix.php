<?php

date_default_timezone_set("Europe/Amsterdam");

//$day = strtotime("tomorrow");
echo date("d-m-Y", strtotime("+1 week"));

?>