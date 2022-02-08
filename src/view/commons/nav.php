

<nav><?php $logger= isset($_SESSION['login']);


    ?>
        <img src="/public/images/logo.jpeg" alt="logo">

    <a href="/">Accueil</a>
    <a href="/store">Boutique</a>

   <?php if($logger) :?>
       <a class="account" href="/account/infos">
           <img src="/public/images/avatar.png" alt="avatar">

           <?=
           $_SESSION['login']['firstname'] ." ".$_SESSION['login']['lastname']?>
       </a>

       <a href="/cart">PANIER <small  style="background: #999; border-radius: 30px; padding: 2px"><?= $total = isset($_SESSION['cartContent'])>0 ? $_SESSION['cartContent'] : null  ?></small></a>
       <a href="/account/logout">DÉCONNEXION</a>

   <?php else: ?>
       <a class="account" href="/account">
           <img src="/public/images/avatar.png" alt="avatar">
           Compte
       </a>
    <?php endif;?>
</nav>
