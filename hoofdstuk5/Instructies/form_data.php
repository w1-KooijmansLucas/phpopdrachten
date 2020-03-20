<?php
// Voornaam kan echo-en vanuit GET parameter
print_r($_GET);

echo $_GET["firstname"];
echo $_GET["lastname"];
if($_GET["subject"] == "php")
{
    echo "Hier staat een stuk tekst over PHP";
}