<?php
    if (!empty($_SESSION['login'])) :

        if (!empty($_GET['status'])) {
            $status = $_GET['status'];
            if ($status=="ok"){
                ?>
                <div class="box info" style="margin: 35px 30px 0">Tes informations personnelles ont été mises à jour !</div>
            <?php } elseif ($status=="failed"){?>
                <div class="box error" style="margin: 35px 30px 0">L'adresse e-mail est déjà utilisée !</div>
           <?php }
        } ?>

    <div id="infos">
        <h2>Informations du compte</h2>
        <h3>Informations personneles</h3>

        <form method="post" action="/account/update" id="infoForm">
            <table>

                <tr>
                    <td>Prénom</td>
                    <td><input type="text" name="firstname" value="<?=  $_SESSION['login']['firstname'] ?>"  disabled id="input1"></td>
                    <td><a  style="color: blue;cursor: pointer" id="link1">Modifier</a></td>
                </tr>
                <tr>
                    <td>Nom</td>
                    <td id="blacko"><input type="text" name="lastname" value="<?= $_SESSION['login']['lastname']?>" disabled id="input2"></td>
                    <td><a  style="color: blue; cursor: pointer"  id="link2">Modifier</a></td>
                </tr>
                <tr>
                    <td>Adresse mail</td>
                    <td><input type="text" name="mail"  value="<?= $_SESSION['login']['mail']?>" disabled id="input3"></td>
                    <td><a  style="color: blue;cursor: pointer" id="link3" >Modifier</a></td>
                </tr>
                <tr></tr>

    <?php endif; ?>
        </table>

            <div id="btn-update" style="margin: 68px 835px; "><input type="submit" value="Enregistrer les modifications"></div>

        </form>

         <h3>Commandes</h3>

        <p>Pas de commande en cours.</p>
    </div>

<script src="/public/scripts/profil.js"></script>