



    <div id="product">
    <div>
        <div class="product-images">

            <img  src="/public/images/<?=$params["product"]["image"] ?>" id="post" alt="">

            <div class="product-miniatures ">
                <div>
                    <img class="thumbnail activ" src="/public/images/<?= $params["product"]["image"] ?>" alt="">
                </div>
                <div>
                    <img  class="thumbnail" src="/public/images/<?= $params["product"]["image_alt1"] ?>" alt="">
                </div>
                <div>
                    <img class="thumbnail" src="/public/images/<?= $params["product"]["image_alt2"] ?>" alt="">
                </div>
                <div>
                    <img class="thumbnail" src="/public/images/<?= $params["product"]["image_alt3"] ?>" alt="">
                </div>
            </div>

        </div>

        <div class="product-infos">
            <p class="product-category"><?= $params["product"]["category_name"]?></p>
            <h1><?= $params["product"]["name"]?></h1>
            <p class="product-pice"><?= $params["product"]["price"]?> €</p>

            <form >
                <button id="less" type="button">-</button>
                <button id="qte" type="button">1</button>
                <button id="more" type="button">+</button>
                <input type="submit" value="Ajouter au panier">
            </form>
            <div class="box error" id="alert" >
                Quantité maximale autorisée !
            </div>
        </div>
    </div>
    <div>
        <div class="product-spec">
            <h2> Spécificités</h2>
            <?= $params["product"]["spec"]?>
        </div>
        <div class="product-comments">
            <h2>Avis</h2>
            <p>Il n'y pas d'avis pour ce produit.</p>
        </div>
    </div>

</div>
    <!--Javascript picture product thumbnail-->
    <script >
        document.addEventListener("DOMContentLoaded",function (){
            //image
            let thumbnail = document.getElementsByClassName('thumbnail')
            // let activeImages = document.getElementsByClassName('activ')

            //button more-less and qte
            let more= document.getElementById('more')
            let less = document.getElementById('less')
            let  qte = document.getElementById('qte')
            let warn = document.getElementById('alert')
            let qteMax =5;

            for(let i=0; i<thumbnail.length;i++){
                thumbnail[i].addEventListener('click',function (){
                    this.classList.add('activ')
                    document.getElementById('post').src=this.src
                })
            }
            warn.style.visibility='hidden'
            console.log(warn)
            // more product
            more.addEventListener('click',function (){
                //console.log("clique");
                if(qte.textContent<qteMax){

                    qte.textContent = parseInt(qte.textContent)+1;
                   // console.log(parseInt(qte.textContent));
                if(qte.textContent==qteMax){ warn.style.visibility='visible'

                }
                }
            })
            //less product
            less.addEventListener("click",function (){
                if(qte.textContent>1){
                    qte.textContent = parseInt(qte.textContent)-1;
                    warn.style.visibility='hidden'
                }
            })



        })

    </script>

