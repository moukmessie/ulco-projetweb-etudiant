<?php
    if (!empty($_SESSION['login'])) :

        if (!empty($_GET['status'])) {
            $status = $_GET['status'];
            if ($status=="ok"){
                ?>
                <div class="box info" style="margin: 35px 30px 0">Tes informations personnelles ont été mises à jour !</div>
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
                    <td><a onclick="show1()" style="color: blue;cursor: pointer" id="link1">Modifier</a></td>
                </tr>
                <tr>
                    <td>Nom</td>
                    <td><input type="text" name="lastname" value="<?= $_SESSION['login']['lastname']?>" disabled id="input2"></td>
                    <td><a  style="color: blue; cursor: pointer"  onclick="show2()" id="link2">Modifier</a></td>
                </tr>
                <tr>
                    <td>Adresse mail</td>
                    <td><input type="text" name="mail"  value="<?= $_SESSION['login']['mail']?>" disabled id="input3"></td>
                    <td><a onclick="show3()" style="color: blue;cursor: pointer" id="link3" >Modifier</a></td>
                </tr>
                <tr></tr>

    <?php endif; ?>
        </table>

            <div id="btn-update" style="margin: 68px 835px; visibility: hidden"><input type="submit" value="Enregistrer les modifications"></div>

        </form>

         <h3>Commandes</h3>

        <p>Tu n'as pas de commande en cours.</p>
    </div>

<script>
    let input1 = document.getElementById("input1");
    let input2 = document.getElementById("input2");
    let input3 = document.getElementById("input3");


    function show2() {
        document.getElementById("input2").disabled = false;
        document.getElementById("btn-update").style.visibility='visible';
        document.getElementById("link2").style.visibility='hidden';

    }
    function show1() {
        document.getElementById("input1").disabled = false;
        document.getElementById("btn-update").style.visibility='visible';
        document.getElementById("link1").style.visibility='hidden';

    }
    function show3() {
        document.getElementById("input3").disabled = false;
        document.getElementById("btn-update").style.visibility='visible';
        document.getElementById("link3").style.visibility='hidden';

    }
</script>