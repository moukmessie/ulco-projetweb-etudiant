//document.addEventListener('DOMContentLoaded', function () {
    //image
    let thumbnail = document.getElementsByClassName('thumbnail');
    // let activeImages = document.getElementsByClassName('activ')

    //button more-less and qte
    let more = document.getElementById('more');
    let less = document.getElementById('less');
    let qte = document.getElementById('qte');
    let warn = document.getElementById('alert');
    let quantity = document.getElementById('quantity');
    let qteMax = 5;

    for (let i = 0; i < thumbnail.length; i++) {
        thumbnail[i].addEventListener('click', function () {
            this.classList.add('activ')
            document.getElementById('post').src = this.src
        })
    }
    warn.style.visibility = 'hidden'
    console.log(quantity)

    // more product
    more.addEventListener('click', function () {
      // console.log("clique");
        if (qte.textContent < qteMax) {

            qte.textContent = parseInt(qte.textContent) + 1;
            quantity.value=qte.textContent;
            // console.log(parseInt(qte.textContent));
            if (qte.textContent == qteMax) {
                warn.style.visibility = 'visible';

            }
        }
    })
    //less product
    less.addEventListener("click", function () {
        if (qte.textContent > 1) {
            qte.textContent = parseInt(qte.textContent) - 1;
            quantity.value=qte.textContent;
            warn.style.visibility = 'hidden';
        }
    })

//})
