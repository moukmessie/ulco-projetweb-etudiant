<?php

if (isset($params)) {


    ?>

    <div id="product">
    <div>
        <div class="product-images">

            <img src="/public/images/<?=$params["product"]["image"] ?>" alt="">

            <div class="product-miniatures">
                <div>
                    <img src="/public/images/<?= $params["product"]["image"] ?>" alt="">
                </div>
                <div>
                    <img src="/public/images/<?= $params["product"]["image_alt1"] ?>" alt="">
                </div>
                <div>
                    <img src="/public/images/<?= $params["product"]["image_alt2"] ?>" alt="">
                </div>
                <div>
                    <img src="/public/images/<?= $params["product"]["image_alt3"] ?>" alt="">
                </div>
            </div>

        </div>

        <div class="product-infos">
            <p class="product-category"><?= $params["product"]["category_name"]?></p>
            <h1><?= $params["product"]["name"]?></h1>
            <p class="product-pice"><?= $params["product"]["price"]?> €</p>

            <form >
                <button type="button"></button>
                <button type="button"></button>
                <button type="button"></button>
                <input type="submit" value="Ajouter au panier">
            </form>

        </div>
    </div>
    <div>
        <div class="product-spec">
            <h2> Spécificités</h2>
            <?= $params["product"]["spec"]?>
        </div>
        <div class="product-comments">
            <h2>Avis</h2>
            <p>Il n'y pas d'avis pour ce produit.</p>
        </div>
    </div>

</div>
<?php
}
