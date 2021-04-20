<?php ?>


<div id="cart">
<h2>Panier</h2>



    <?php if ($params['cart']!=null):?>
        <table class="tab">
    <tr class="tr">
        <th colspan="2">Produit</th>
        <th>Prix</th>
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
            <button id="less" type="button">-</button>
            <button  id="qte" type="button"><?= $cart['quantity_prod']?></button>

            <input type="hidden" id="quantity" name="quantity" value="1">
            <input type="hidden"  name="price" value="<?=$params["product"]["price"]?>">
            <input type="hidden"  name="product_name" value="<?= $params["product"]["name"]?>">
            <button id="more" type="button">+</button>

        </td>
        <td class="total">
            <?= $cart['total_amount']?> €
        </td>
    </tr>
    <?php endforeach;?>
    </table>
   <?php else:?>
        <p style="margin: 55px">Ton panier est vide.</p>
    <?php endif; ?>

</div>
