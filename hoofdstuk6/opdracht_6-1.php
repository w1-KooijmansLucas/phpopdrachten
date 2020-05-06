<?php
/**
 * User: Lucas Kooijmans
 * Date:
 * Time:
 * File: .php
 */
?>

    <!-- Include header -->
<?php
include "../includes/header.php";
?>

    <!-- Include menu -->
<?php
include "../includes/menu.php";
?>
    <!-- Uitwerking -->

<form action="checklogin.php" method="post">
    <?php
//    echo $message;
    ?>
    <table>
        <tr>
            <td>
                naam:
            </td>
            <td>
                <input name="username" type="text">
            </td>
        </tr>
        <tr>
            <td>
                wachtwoord:
            </td>
            <td>
                <input name="password" type="password">
            </td>
        </tr>
    </table>
    <input type="submit" value="versturen" name="send">
</form>

    <!-- Include footer -->
<?php
include "../includes/footer.php";
?>