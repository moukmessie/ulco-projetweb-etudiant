<div id="store">

<!-- Filtrer l'affichage des produits  ---------------------------------------->

<form method="post"  action="/store/search">

  <h4>Rechercher</h4>
  <input type="text" name="search" placeholder="Rechercher un produit" />

  <h4>Catégorie</h4>
  <?php
  if (isset($params)) {
      foreach ($params["categories"] as $c) { ?>
        <input type="checkbox" name="category[]" value="<?= $c["name"] ?>" />
        <?= $c["name"] ?>
        <br/>
      <?php }
  } ?>

  <h4>Prix</h4>
  <input type="radio" name="order" value="asc"/> Croissant <br />
  <input type="radio" name="order" value="desc" /> Décroissant <br />

  <div><input type="submit" value="Appliquer" /></div>

</form>

<!-- Affichage des produits --------------------------------------------------->

<div class="products">

<!-- Affichage de la liste des produits  -->

    <?php  foreach ($params["products"] as $p){ ?>
    <div class="card">

        <p class="card-image">
                <img src="/public/images/<?= $p["image"] ?>" alt="">
            </p>
            <p class="card-category"><?= $p["category_name"] ?></p>

            <p class="card-title"><a href="/store/<?= $p["id"]?>"> <?= $p["name"]?></a></p>

            <p class="card-price"><?= $p["price"] ?> €</p>

    </div>
    <?php } ?>
</div>

</div>
