</main>
<footer>
    <?php

    date_default_timezone_set("Europe/Amsterdam");
    $uur = date("H");

    if($uur >= 0 && $uur < 5)
    {
        echo '<p>' . "Goedennacht, bezoeker<br>&copy; Lucas Kooijmans" . '</p>';
    }
    elseif($uur >= 5 && $uur < 12)
    {
        echo '<p>' . "Goedenochtend, bezoeker<br>&copy; Lucas Kooijmans" . '</p>';
    }
    elseif($uur >= 12 && $uur < 17)
    {
        echo '<p>' . "Goedenmiddag, bezoeker<br>&copy; Lucas Kooijmans" . '</p>';
    }
    elseif($uur >= 17 && $uur < 24)
    {
        echo '<p>' . "Goedenavond, bezoeker<br>&copy; Lucas Kooijmans" . '</p>';
    }

    ?>
    <?php
//    session_start();
    if (isset($_SESSION['username'])) {
        $bezoeker = $_SESSION['username']. "&nbsp;<a href='/phpopdrachten/hoofdstuk6/loguit.php'>Loguit</a>";
    }
    else {
        $bezoeker = "onbekende bezoeker". "&nbsp;<a href='../hoofdstuk6/opdracht_6-1.php'>Login</a>";
    }
    ?>

</footer>
</body>