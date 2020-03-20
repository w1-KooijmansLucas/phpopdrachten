
<!-- Include header -->
<?php
include "../includes/header.php";
?>

<head>
    <style>

        td
        {
            border: 1px solid black;
            height: 20px;
            width: 250px;
        }

        table
        {
            border-collapse: collapse;
        }

    </style>
</head>

<!-- Include menu -->
<?php
include "../includes/menu.php";
?>

<!-- Uitwerking -->

<div>
    <table>
        <tr>
            <td>
                Bedrijfsnaam:
            </td>
            <td>
                <?php
                    echo $_GET['companyName'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Voornaam:
            </td>
            <td>
                <?php
                echo $_GET['firstName'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Achternaam:
            </td>
            <td>
                <?php
                echo $_GET['lastName'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Telefoon:
            </td>
            <td>
                <?php
                echo $_GET['phoneNumber'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                E-mail:
            </td>
            <td>
                <?php
                echo $_GET['email'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Bericht:
            </td>
            <td>
                <?php
                echo $_GET['message'];
                ?>
            </td>
        </tr>
    </table>
</div>

<!-- Include footer -->
<?php
include "../includes/footer.php";
?>