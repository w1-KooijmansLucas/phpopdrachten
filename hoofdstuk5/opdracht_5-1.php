
<!-- Include header -->
<?php
include "../includes/header.php";
?>

<!-- Include menu -->
<?php
include "../includes/menu.php";
?>

<!-- Uitwerking -->

<div>
    <h1>
        RESTARIA KEES KROKET
    </h1>
    <p>
        Visstraat 12
        <br>
        5211 DN 's-Hertogenbosch
        <br>
        073 613 6720
        <br>
        info@restariakeeskroket.nl
    </p>
    <form action="form_data.php" method="get">
        <label for="companyName">Bedrijfsnaam</label> <br> <input type="text" name="companyName" id="companyName"> <br>
        <label for="firstName">Voornaam</label> <br> <input type="text" name="firstName" id="firstName"> <br>
        <label for="lastName">Achternaam</label> <br> <input type="text" name="lastName" id="lastName"> <br>
        <label for="phoneNumber">Telefoon</label> <br> <input type="number" name="phoneNumber" id="phoneNumber"> <br>
        <label for="email">E-mail</label> <br> <input type="email" name="email" id="email"> <br>
        <label for="message">Bericht</label> <br> <input type="text" name="message" id="message"> <br> <br>
        <input type="submit" value="Versturen">
    </form>
</div>

<!-- Include footer -->
<?php
include "../includes/footer.php";
?>