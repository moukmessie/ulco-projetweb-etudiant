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