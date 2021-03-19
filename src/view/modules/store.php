<div id="store">

<!-- Filtrer l'affichage des produits  ---------------------------------------->

<form>

  <h4>Rechercher</h4>
  <input type="text" name="search" placeholder="Rechercher un produit" />

  <h4>Catégorie</h4>
  <?php foreach ($params["categories"] as $c) { ?>
    <input type="checkbox" name="category[]" value="<?= $c["name"] ?>" />
    <?= $c["name"] ?>
    <br/>
  <?php } ?>

  <h4>Prix</h4>
  <input type="radio" name="order" /> Croissant <br />
  <input type="radio" name="order" /> Décroissant <br />

  <div><input type="submit" value="Appliquer" /></div>

</form>

<!-- Affichage des produits --------------------------------------------------->

<div class="products">

<!-- TODO: Afficher la liste des produits ici -->

</div>

</div>
