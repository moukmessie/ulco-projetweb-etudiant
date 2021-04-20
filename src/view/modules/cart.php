<?php
        if (!empty($_GET['status'])){
        $status =$_GET['status'];
        if ($status == "delete") :?>
            <div class="box info" style="margin: 32px 78px "> Produit rétiré.</div>
<?php endif; }?>


<div id="cart">

<h2>Panier</h2>

    <?php if ($params['cart']!=null):?>
        <table class="tab">

    <tr class="tr">
        <th colspan="2">Produit</th>
        <th>Prix </th>
        <th>Quantité</th>
        <th>Prix Total</th>
    </tr>
    <?php foreach ($params['cart'] as $cart) :?>
    <tr class="tr">
        <td colspan="2" rowspan="1" class="pro" >
            <img  src="/public/images/<?= $cart['image']?>" alt="">
            <div class="category"><?= $cart['name']?></div>
            <div class="product"><?= $cart['product_name']?></div>

        </td>
        <td class="td">
            <div class="price">
                <?= $cart['price']?> €
            </div>
        </td>
        <td class="quantity">
            <div>
                <button id="btnLess" type="button">-</button>
                <button  id="cartQte" type="button"><?= $cart['quantity_prod']?></button>
                <button id="btnMore" type="button">+</button>
                <input type="hidden" id="quantity" name="quantity" value="1">
            </div>

            <div class="box error" id="alert" style="font-size: 0.8em; font-style: italic;margin: 5px 0; padding: 2px">
                Quantité maximale autorisée !
            </div>

        </td>
        <td class="total">
            <?= $cart['total_amount']?> €
            <form action="/cart/delete" method="post">
            <input type="hidden"  name="id_cart" value="<?=$cart["id"]?>">
            <input type="submit" style="position: absolute;align-items: center; margin: 65px -25px ;" name="remove" value="supprimé">
            </form>
        </td>
    </tr>
    <?php endforeach;?>
    </table>

    <!--Box de payement et affichage de total panier-->
   <?php else:?>
        <p style="margin: 55px">Ton panier est vide.</p>
    <?php endif; ?>

</div>
<script>
    let qt=document.querySelectorAll(".qt");

  //for (let i = 0; i < qt.length; i++){
        let btnless = document.querySelector("#btnLess");
        let qte = document.querySelector("#cartQte");
        let warn = document.querySelector("#alert");
        let btnMore = document.querySelector("#btnMore");
        let qteMax = 5;
        //console.log(btnMore);
        warn.style.visibility = 'hidden'
        // more product
         btnMore.addEventListener('click', function () {
             // console.log("clique");
             if (qte.textContent < qteMax) {

                 qte.textContent = parseInt(qte.textContent) + 1;

                 // console.log(parseInt(qte.textContent));
                 if (qte.textContent == qteMax) {
                     warn.style.visibility = 'visible'
                 }
             }
         })


        //less product
        btnless.addEventListener('click', function () {
            if (qte.textContent > 1) {
                qte.textContent = parseInt(qte.textContent) - 1;

                warn.style.visibility = 'hidden'
            }
        })
  //  }
</script>
