


document.addEventListener('DOMContentLoaded', function () {
let infoForm = document.querySelector('#infoForm');

    let input1= document.getElementById("input1");
    let input2 = document.getElementById("input2");
    let input3 = document.getElementById("input3");

    let link1 = document.getElementById("link1");
    let link2 = document.getElementById("link2");
    let link3 = document.getElementById("link3");

    let btn= document.getElementById("btn-update");


     btn.style.visibility='hidden';


    link1.addEventListener('click',function (){
        document.getElementById("input1").disabled = false;
        document.getElementById("link1").style.visibility='hidden';
        btn.style.visibility='visible';

    })



    link2.addEventListener('click',function () {
        document.getElementById("input2").disabled = false;
        document.getElementById("link2").style.visibility='hidden';
        btn.style.visibility='visible';

    })

    link3.addEventListener('click',function () {
        document.getElementById("input3").disabled = false;
        document.getElementById("btn-update").style.visibility='visible';
        document.getElementById("link3").style.visibility='hidden';

    })

    infoForm.lastname.style.borderColor = 'none';


    //*********************VALIDATION DU USERNAME******************

    infoForm.lastname.addEventListener('change',function (){
        validUserName(this);
    });
    infoForm.firstname.addEventListener('change',function (){
        validUserName(this);
    });




    const validUserName = function (inputFirst) {
        let msg = "";
        let valid = false;
        if (inputFirst.value.length < 2) {
            msg = "Doit contenir au minimum 2 caractères";
        } else {
            valid = true;
        }
        if (valid) {

            inputFirst.style.borderColor = 'green';
            return true;
        } else {
            inputFirst.style.borderColor = 'red';
            return false;
        }

    }

//*********************VALIDATION DE L'EMAIL******************

   infoForm.mail.addEventListener('change',function (){
        validMail(this);
    });

    const validMail = function (inputMail){
        //création de la reg exp pour la validation de l'email
        let mailRegExp = new RegExp(
            '^[a-zA-Z0-9.-_]+[@]{1}[a-zA-Z0-9.-_]+[.]{1}[a-z]{2,10}$','g');
        //test de l'expression régulière
        // console.log(testEmail);
        if (mailRegExp.test(inputMail.value)){
            inputMail.style.borderColor = 'green';
            return true;
        }else {
            inputMail.style.borderColor = 'red';
            return  false;
        }
    }

    //Soumission du formulaire
    infoForm.addEventListener('submit', function (e){
        e.preventDefault();
        if (validMail(infoForm.mail) && validUserName(infoForm.firstname) &&  validUserName(infoForm.lastname) ){
            infoForm.submit();
        }
    });

})






