<?php
/**
 * User: Lucas Kooijmans
 * Date: 13-2-2020
 * Time: 13:36
 * File: opdracht_3-1.php
 */
?>

<head>
    <meta charset="UTF-8">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
<aside>
    <h2>Menu</h2>
    <ul>
        <li>Hoofdstuk 2
            <ul>
                <li>
                    <a href="../hoofdstuk2/opdracht_2-1.php">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="../hoofdstuk2/opdracht_2-2.php">Opdracht 2.2</a>
                </li>
            </ul>
        </li>
    </ul>
    <ul>
        <li>Hoofdstuk 3
            <ul>
                <li>
                    <a href="../hoofdstuk3/opdracht_3-1.php">Opdracht 3.1</a>
                </li>
                <li>
                    <a href="../hoofdstuk3/opdracht_3-2.php">Opdracht 3.2</a>
                </li>
                <li>
                    <a href="../hoofdstuk3/opdracht_3-3.php">Opdracht 3.3</a>
                </li>
            </ul>
        </li>
    </ul>
    <ul>
        <li>Hoofdstuk 4
            <ul>
                <li>
                    <a href="../hoofdstuk4/opdracht_4-1.php">Opdracht 4.1</a>
                </li>
                <li>
                    <a href="../hoofdstuk4/opdracht_4-2.php">Opdracht 4.2</a>
                </li>
                <li>
                    <a href="../hoofdstuk4/opdracht_4-3.php">Opdracht 4.3</a>
                </li>
                <li>
                    <a href="../hoofdstuk4/opdracht_4-4.php">Opdracht 4.4</a>
                </li>
            </ul>
        </li>
    </ul>
    <ul>
        <li>Hoofdstuk 5
            <ul>
                <li>
                    <a href="../hoofdstuk5/opdracht_5-1.php">Opdracht 5.1</a>
                </li>
                <li>
                    <a href="../hoofdstuk5/opdracht_5-2.php">Opdracht 5.2</a>
                </li>
                <li>
                    <a href="../hoofdstuk5/opdracht_5-3.php">Opdracht 5.3</a>
                </li>
                <li>
                    <a href="../hoofdstuk5/opdracht_5-4.php">Opdracht 5.4</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <?php
        // String
        $evenement = "Elfstedentocht";
        // String
        $fries = "Alvestêdetocht";
        // Integer
        $km = 200;
        // String
        $tocht = "schaatstocht";
        // String
        $baan = "natuurijs";
        // String
        $organisatie = "Koninklijke Vereniging De Friesche Elf Steden";
        // String
        $hoofdstad = "Leeuwarden";
        // String
        $provincie = "Friesland";
        // Integer
        $verreden = 15;
        // Integer
        $eerst = 1909;
        // Integer
        $maximaal = 1;

        $verhaal = "De " . $evenement . " (Fries: " . $fries . ") " . "is een " . $km . " kilometer
        lange " . $tocht . " over " . $baan . " die wordt georganiseerd door
        de " . $organisatie . ". " . $hoofdstad . ", " . " de hoofdstad van " . $provincie . ", " . "is start- en aankomstplaats. " . "De " . "$evenement" . " is inmiddels " . $verreden . " maal verreden en werd voor het
        eerst in " . $eerst . " gereden en wordt maximaal " . $maximaal . " keer per winter
        gehouden.";
        // Versturen naar browser met <p>
        echo '<p>' . $verhaal . '</p>';
    ?>
</main>
</body>
