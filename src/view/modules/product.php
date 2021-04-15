



    <div id="product">
    <div>
        <div class="product-images">

            <img  src="/public/images/<?=$params["product"]["image"] ?>" id="post" alt="">

            <div class="product-miniatures ">
                <div>
                    <img class="thumbnail activ" src="/public/images/<?= $params["product"]["image"] ?>" alt="">
                </div>
                <div>
                    <img  class="thumbnail" src="/public/images/<?= $params["product"]["image_alt1"] ?>" alt="">
                </div>
                <div>
                    <img class="thumbnail" src="/public/images/<?= $params["product"]["image_alt2"] ?>" alt="">
                </div>
                <div>
                    <img class="thumbnail" src="/public/images/<?= $params["product"]["image_alt3"] ?>" alt="">
                </div>
            </div>

        </div>

        <div class="product-infos">
            <p class="product-category"><?= $params["product"]["category_name"]?></p>
            <h1><?= $params["product"]["name"]?></h1>
            <p class="product-pice"><?= $params["product"]["price"]?> €</p>

            <form >
                <button id="less" type="button">-</button>
                <button id="qte" type="button">1</button>
                <button id="more" type="button">+</button>
                <input type="submit" value="Ajouter au panier">
            </form>
            <div class="box error" id="alert" >
                Quantité maximale autorisée !
            </div>
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
            <?php if (!empty($_SESSION['login'])) :?>
            <hr>
            <form method="post" action="postComment/<?= $params['product']['id']?>" >
                <input type="text" name="comment">
                <br>
                <input type="submit" value="commenter" style="margin: 5px ">
            </form>
            <?php endif;?>

        </div>
    </div>

</div>

<!--Javascript picture product thumbnail-->
<script src="/public/scripts/product.js"></script>

