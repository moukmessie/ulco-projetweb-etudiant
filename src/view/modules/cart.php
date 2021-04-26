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
                        <td>
                            <div class="category"><?= $cart['name']?></div>
                            <div class="product"><?= $cart['product_name']?></div>
                        </td>
                    </th>

                        <td>
                           <div>Quantité :</div>
                            <br>
                            <form  method="post" action="/cart/updateQuantity">
                                <div class="quantity">
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
                    <span style="font-style: italic; "><?= $cart['product_name']?> <span>X</span> <?= $cart['quantity_prod'] ?></span>
                        <br>
                    <?php endforeach ?>
                </div>

                <form>
                    <br>
                    <button class="btn-2">Valider</button>
                </form>
            </div>
    </div>

</div>
<?php else:?>
    <p style="margin: 55px">Ton panier est vide.</p>
<?php endif; ?>

<style>

    #cart {
        display: flex;
        margin: 32px;
        /*margin: 64px 32px;*/
    }
    #cart table {
        border-spacing: 10px;
        /*border: 2px solid rgb(200,200,200);*/
        letter-spacing: 1px;
        font-size: 0.8rem;
        width: 75%;
        text-align: center;
    }

    #cart td, th {
        /* border: 1px solid rgb(190,190,190);*/
        padding: 10px 20px;
        width: 75%;
    }


    #cart  tr:nth-child(even) td {
        background-color: rgb(250,250,250);
    }

    #cart tr:nth-child(odd) td {
        background-color: rgb(245,245,245);
    }

    #cart table .price {
        font-size: 22px;
        margin: 8px;
        width: 128px;
    }

    #cart table .quantity {
        margin: 8px;
        width: 128px;

    }
    #cart table .category {
        background-color: var(--bg-accent);
        display: inline-block;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 12px;
        padding: 4px 8px;
    }
    #cart  .cross input{
        height: 35px;
        width: 35px;
        position: relative;
        float: right;
        margin-right: -10%;
        margin-top: 10%;

    }
    #cart .cross input:hover {
        background: #d61818;
    }

    #cart .panier{
        flex: 3;
        padding: 0 32px;
        text-align: justify;
    }
    #cart .recap{
        background-color: #eee;
        flex: 1;
        padding: 0 32px 32px;
        align-self: flex-start;
    }
    #cart .recap form {
        border-top: 1px solid rgba(0, 0, 0, .2);
        margin-top: 16px;
    }

    #cart .detail p:not(.product-comment-author) {
        font-size: 22px;
    }

    #cart .total {
        font-size: 18px;
        margin-bottom: 8px;
    }

    /* Button 2 */
    #cart .btn-2 {
        font-size: 18px;
        height: 50px;
        width: 98px;
        background-color: var(--bg-accent);
        color: #161616;
    }

    #cart .btn-2:hover {
        background: #27ae60;
    }


</style>
<script>
    let btnless = document.getElementsByClassName('btnLess');
    let qte = document.getElementsByClassName('cartQte');
let quatityId = document.getElementsByClassName('quantitId');
    let btnMore = document.getElementsByClassName('btnMore');
    let qteMax = 5;


    // more product
    for (let i = 0; i< btnMore.length;i++) {
       // quatityId[i].value = qteMax;
         ;
        btnMore[i].addEventListener('click', function () {
            // console.log("clique");

            if (quatityId[i].value  < qteMax) {
                quatityId[i].value = parseInt(quatityId[i].value) + 1;
                console.log(qte[i].textContent = quatityId[i].value)
            }
        })
    }

    //less product
    for (let i = 0; i< btnless.length;i++) {
        btnless[i].addEventListener('click', function () {
            if (quatityId[i].value  > 1) {
                quatityId[i].value = parseInt(quatityId[i].value) - 1;
                console.log(qte[i].textContent = quatityId[i].value)
            }
        })
    }

</script>