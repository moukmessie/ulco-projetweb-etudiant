
<?php $logger= empty($_SESSION['login'])?>
<nav>
        <img src="/public/images/logo.jpeg" alt="logo">

    <a href="/">Accueil</a>
    <a href="/store">Boutique</a>

   <?php if($logger) :?>
       <a class="account" href="/profil">
           <img src="/public/images/avatar.png" alt="avatar">

           <?= $_SESSION['login']['firstname'] ." ".$_SESSION['login']['lastname']?>
       </a>
       <a href="/panier">PANIER</a>
       <a href="/logout">DÉCONNEXION</a>

   <?php else: ?>
       <a class="account" href="/account">
           <img src="/public/images/avatar.png" alt="avatar">
           Compte
       </a>
    <?php endif;?>
</nav>
