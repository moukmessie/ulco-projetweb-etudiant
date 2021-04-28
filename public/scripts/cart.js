document.addEventListener('DOMContentLoaded', function () {
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

})

/*
 PAYMENT MODAL
 */
let card = document.getElementById("payment-card");
let paypal = document.getElementById("paypal-form");
let checkPaypal = document.getElementById("paypal");
let checkCard = document.getElementById("card");

paypal.style.display="none"
card.style.display="none"

checkPaypal.addEventListener('click',function (){
    paypal.style.display="block";
    card.style.display="none"
})
checkCard.addEventListener('click',function (){
    card.style.display="block";
    paypal.style.display="none"
})
