<?php
if (!empty($_GET['status'])){
    $status =$_GET['status'];
    if ($status == "delete") :?>
        <div class="box info" style="margin: 32px 78px "> Produit rétiré.</div>
    <?php endif; }?>

<div style="margin: 68px"><h2>Panier</h2></div>
<div id="cart">


<div class="panier">
    <?php if ($params['cart']!=null):
    $total=null;
    ?>
    <table>
        <?php foreach ($params['cart'] as $cart) : $total += ($cart['total_amount'])?>

                <tr>
                    <th rowspan="1">
                        <div><img style=" float: left; width: 120px;" src="/public/images/<?= $cart['image']?>" alt=""></div>
                        <td >
                            <div class="category" style="width: 128px;"><?= $cart['name']?></div>
                            <div class="product"><?= $cart['product_name']?></div>
                        </td>
                    </th>

                        <td>
                           <div>Quantité :</div>
                            <br>
                            <form  method="post" action="/cart/updateQuantity">
                                <div class="quantity" style="width: 128px;">
                                    <input type="hidden"  name="cartId" value="<?= $cart['id']?>">
                                    <input type="hidden"  name="cartPrice" value="<?= $cart['price']?>">
                                    <button class="btnLess" type="submit">-</button>
                                    <button  class="cartQte" type="button" value="1"><?= $cart['quantity_prod']?></button>
                                    <button class="btnMore" type="submit">+</button>
                                    <input type="hidden" class="quantitId" name="cartQuantity" value="<?= $cart['quantity_prod']?>">

                                </div>
                            </form>
                        </td>
                         <form action="/cart/delete" method="post">
                                <td>
                                    <div>Prix:</div>

                                    <div class="price">
                                        <?= $cart['price']?> €
                                    </div>

                                     <div class="cross">
                                        <input type="submit"  name="remove" value="&#10005;" style="font-size: 10px; border-color: #999999">
                                         <input type="hidden"  name="id_cart" value="<?=$cart["id"]?>">
                                     </div>
                                </td>
                         </form>
                </tr>
        <?php endforeach;?>
    </table>

 </div>
    <div class="recap">
            <div class="box-cart">
                <br> <h3 style="border-bottom: 1px solid rgba(0, 0, 0, .2) ">Récapitulatif</h3>
                <div class="detail">
                    <br>

                    <div class="total "><p class="price" style="word-spacing: 1rem;">Total Panier: <?= $total?> € </p></div>

                    <p>Produit(s) :</p>
                    <?php foreach ($params['cart'] as $cart) :?>
                    <span style="font-style: italic; "><?= $cart['product_name'] ?> <span>X</span> <?= $cart['quantity_prod']?></span>
                        <br>
                    <?php endforeach ?>
                </div>

                <form action="/cart/payment">
                    <br>
                    <button class="btn-2" style="width: 220px;height: 30px">Procéder au paiement</button>
                </form>
            </div>
    </div>

</div>
<?php else:?>
    <p style="margin: 55px">Ton panier est vide.</p>
<?php endif; ?>

<script src="/public/scripts/cart.js"></script>
