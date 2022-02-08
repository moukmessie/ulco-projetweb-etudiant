<?php
    if (!empty($_GET['status'])){
        $status =$_GET['status'];
      if ($status == "login_fail") :?>
         <div class="box error" style="margin-left: 30px"> La connexion a échoué. Vérifiez vos identifiants et réessayez.</div>
<?php elseif ($status == "signin_fail") :?>
            <div class="box error" style="margin-left: 30px">Inscription échoué, l'adresse e-mail est déjà utilisée.</div>
      <?php elseif ($status == "logout_success") :?>
            <div class="box info" style="margin-left: 30px ">Vous êtes déconnecté. À bientôt !</div>
     <?php elseif ($status == "signin_success") :?>
        <div class="box info" style="margin-left: 30px">Inscription réussie! Vous pouvez dès à présent vous connecter.</div>
     <?php endif;
    }

?>

<div id="account">

<form class="account-login" method="post" action="/account/login">

  <h2>Connexion</h2>
  <h3>Tu as déjà un compte ?</h3>

  <p>Adresse mail</p>
  <input type="text" name="usermail" placeholder="Adresse mail" />

  <p>Mot de passe</p>
  <input type="password" name="userpass" placeholder="Mot de passe" />

  <input type="submit" value="Connexion" />

</form>

<form class="account-signin" method="post" action="/account/signin" id="loginForm">

  <h2>Inscription</h2>
  <h3>Crée ton compte rapidement en remplissant le formulaire ci-dessous.</h3>

  <p>Nom</p>
  <input type="text" name="userlastname" placeholder="Nom" required />
    <small style="font-size: 12px; color: red"></small>
  <p>Prénom</p>
  <input type="text" name="userfirstname" placeholder="Prénom" required />
    <small style="font-size: 12px; color: red"></small>
  <p>Adresse mail</p>
  <input type="text" name="usermail" placeholder="Adresse mail" required />

  <p>Mot de passe</p>
  <input type="password" name="userpass" placeholder="Mot de passe" required/>
    <small style="font-size: 12px; color: red"></small>
  <p>Répéter le mot de passe</p>
  <input type="password" name="userpass" placeholder="Mot de passe" id="pwd" required/>
    <small style="font-size: 12px; color: red"></small>
  <input type="submit" value="Inscription" />

</form>

</div>
<script src="/public/scripts/signin.js"></script>