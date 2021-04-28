<div style="margin: 68px"><h2>Paiement</h2></div>

<div id="cart">

        <div class="panier " style="padding: 0 68px;">
        <h2>Adresse de livraison</h2>
        <div class="deliver">

            <br>
            <p>Nom</p>
            <input type="text" name="deliverName" pattern="[a-zA-Z]{2,}"  placeholder="Ex : DUPON" required />
            <p>Prénom</p>
            <input type="text" name="deliverLastname" pattern="[a-zA-Z]{2,}" placeholder="Ex : Joe" required />
            <p>Numéro de téléphone </p>
            <input type="mail" name="deliverNumber" pattern="[0-9]{10}" placeholder="Ex : 06 00 00 00 00 " required />
            <p>Adresse de livraison </p>
            <input type="text" name="deliverAdress" pattern="[a-zA-Z0-9.-_]{4,}" placeholder="Ex : 02 rue du messie " required />
            <p>Complément d'adresse</p>
            <input type="text" name="deliverComplet" placeholder="Ex : batiment 2, appartement 3 " />
            <p>Ville</p>
            <input type="text" name="deliverCity" pattern="[a-zA-Z]{2,}" placeholder="Ex : Lille" required/>
            <p>Département</p>
            <input type="text" name="deliverDepartement" pattern="[a-zA-Z]{2,}" placeholder="Ex : Nord  " required/>
            <p>Code Postal</p>
            <input type="text" name="deliverPostal" pattern="[0-9]{2,}" placeholder="Ex : 59000" required/>
        </div>

        <br>

    </div>
        <div>
        <div class="recap" style="padding: 68px;">
            <div class="box-cart">
                <h3 style="text-align: center">Mode de paiement</h3>
                <div class="deliver">
                    <div  id="form1">
                        <input type="radio" name="pay" id="paypal">
                        <input type="image" src="/public/images/paypal.png" style="width: 120px;" disabled>
                        <div id="paypal-form">
                            <p>Nom</p>
                            <input type="text" name="paypalName" autocomplete="off" pattern="[a-zA-Z]{2,}" placeholder="Ex : DUPON" required />
                            <p>Prénom</p>
                            <input type="text" name="paypallastname"  pattern="[a-zA-Z]{2,}" placeholder="Ex : Joe" required />
                            <p>Adresse E-mail </p>
                            <input type="email" name="paypalMail"  placeholder="Ex : duponjoe@gmail.com " required />
                            <p>Adresse de livraison </p>
                            <input type="text" name="paypalAdress" pattern="[a-zA-Z0-9]{4,}" placeholder="Ex : 02 rue du messie "  />
                            <p>Complément d'adresse</p>
                            <input type="text" name="paypalComplet" placeholder="Ex : batiment 2, appartement 3 " />
                            <p>Ville</p>
                            <input type="text" name="paypalCity" pattern="[a-zA-Z]{2,}"  placeholder="Ex : Lille" required/>
                            <p>Département</p>
                            <input type="text" name="paypalDept" pattern="[a-zA-Z]{2,}" placeholder="Ex : Nord  " required/>
                            <p>Code Postal</p>
                            <input type="text" name="paypalPostal" pattern="[0-9]{2,}" placeholder="Ex : 59000" required/>
                            <button class="btn-2" style="margin: 32px; height: 42px;">Acheter</button>
                        </div>
                    </div>
                    <div  id="form2">
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
                                <input  type="tel" pattern="([0-9 ]{14,20})?" autocomplete="off" required placeholder="Numéro " maxlength="20"/>
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
                </div>
            </div>
        </div>
    </div>

</div>

<style>

    .deliver input:invalid{
        border: 1px solid red;
    }

</style>
<script src="/public/scripts/cart.js"></script>