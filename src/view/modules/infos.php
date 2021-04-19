<?php
    if (!empty($_SESSION['login'])) :

        if (!empty($_GET['status'])) {
            $status = $_GET['status'];
            if ($status=="ok"){
                ?>
                <div class="box info" style="margin: 35px 30px 0">Tes informations personnelles ont été mises à jour !</div>
            <?php
            }
        }

?>

<div id="infos">
    <h2>Informations du compte</h2>
    <h3>Informations personneles</h3>

    <form method="post" action="/account/update">
        <table>


            <tr>
                <td>Prénom</td>
                <td><input type="text" name="firstname" value="<?=  $_SESSION['login']['firstname'] ?>"></td>
            </tr>
            <tr>
                <td>Nom</td>
                <td><input type="text" name="lastname" value="<?= $_SESSION['login']['lastname']?>"></td>
            </tr>
            <tr>
                <td>Adresse mail</td>
                <td><input type="text" name="mail" value="<?= $_SESSION['login']['mail']?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Modifier mes informations"></td>
            </tr>
<?php endif; ?>
        </table>
    </form>

    <h3>Commandes</h3>

    <p>Tu n'as pas de commande en ccours.</p>
</div>