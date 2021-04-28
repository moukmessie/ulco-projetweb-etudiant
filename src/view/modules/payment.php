<?php
?>
<div id="payment">
    <div id="cart">
        <form action="">


            <div style="flex: 2">
                <input type="radio" name="pay" id="paypal">
                <input type="image" src="/public/images/paypal.png" style="width: 120px;" disabled>
                    <div id="paypal-form">
                        <p>Nom</p>
                        <input type="text" name="userlastname" placeholder="Nom" required />
                        <small style="font-size: 12px; color: red"></small>
                        <p>Prénom</p>
                        <input type="text" name="userfirstname" placeholder="Prénom" required />

                        <p>Adresse E-mail </p>
                        <input type="mail" name="usermail" placeholder="adress@gmail.com " required />

                        <p>Adresse de livraison </p>
                        <input type="mail" name="usermail" placeholder="Adresse de livraison " required />

                        <p>Complément d'adresse</p>
                        <input type="text" name="userpass" placeholder="Complément d'adresse" required/>

                        <p>Ville</p>
                        <input type="text" name="userpass" placeholder="Ville" required/>

                        <p>Département</p>
                        <input type="text" name="userpass" placeholder="Département" required/>
                        <p>Code Postal</p>
                        <input type="text" name="userpass" placeholder="Code Postal" required/>


                            <button class="btn-2" style="margin: 32px; height: 42px;">Acheter</button>
                    </div>
            </div>



            <div style="flex: 2" >
                <input type="radio" name="pay" id="card">
                        <input type="image" src="/public/images/american.png" style="width: 68px;" disabled>
                        <input type="image" src="/public/images/visa.png" style="width: 68px;" disabled>
                        <input type="image" src="/public/images/maestro.png" style="width: 68px;" disabled>
                        <input type="image" src="/public/images/mastercard.png"  style="width: 68px;" disabled>

                <div id="payment-card">
                        <div class="input-name">
                            <input   pattern="[a-zA-Z]{2,}"   required placeholder="Prénom"/>
                            <input   pattern="[a-zA-Z]{2,}" required  placeholder="Nom"/>
                        </div>

                         <div class="input-code">
                             <input  type="tel" pattern="([0-9 ]{14,20})?" autocomplete="off" required placeholder="Credit card number" maxlength="20"/>
                         </div>
                        <div class="input-group">
                            <input  type="tel" pattern="[0-9]{1,2}" maxlength="2" autocomplete="off" required placeholder="MM"/>
                            <input type="tel" max="9999"  pattern="[0-9]{4}" required autocomplete="off" placeholder="YYYY"/>
                        </div>
                       <div class="use-cvv">
                           <input type="tel" pattern="[0-9]{3,4}" maxlength="4" autocomplete="off" required placeholder="CVV2"/>
                       </div>
                        <button class="btn-2" style="margin: 32px; height: 42px;">Acheter</button>
                 </div>

            </div>
        </form>

    </div>
</div>

<style>

    #payment{
        display: flex;
    }
    #payment input:invalid{
        border: 1px solid red;
    }

</style>
<script>
    let card = document.getElementById("payment-card");
   let paypal = document.getElementById("paypal-form");
   paypal.style.visibility="hidden"
    card.style.visibility="hidden"
</script>