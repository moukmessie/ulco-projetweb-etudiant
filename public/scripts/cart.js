
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

