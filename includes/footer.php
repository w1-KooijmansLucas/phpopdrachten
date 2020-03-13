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
</footer>
</body>