
let form = document.querySelector('#loginForm');
let pwd=document.getElementById('pwd');


//**********************ECOUTER LES MODIFICATIONS******************

//userlastname
form.userlastname.addEventListener('change',function (){
    validUserName(this);
});

//user firstname
form.userfirstname.addEventListener('change',function (){
    validUserName(this);
});

//mail
form.usermail.addEventListener('change',function (){
    validMail(this);
});
//password
form.userpass[0].addEventListener('change',function (){
    validPass(this);
})
//pass word 2
pwd.addEventListener('change',function (){
    validPass2(this);
})


//Soumission du formulaire
form.addEventListener('submit', function (e){
    e.preventDefault();
    if (validMail(form.usermail),validPass(form.userpass[0]),validUserName(form.userfirstname),validUserName(form.userlastname)){
        form.submit();
    }
});

//*********************VALIDATION DE L'EMAIL******************
const validMail = function (inputMail){
    //création de la reg exp pour la validation de l'email
    let mailRegExp = new RegExp(
        '^[a-zA-Z0-9.-_]+[@]{1}[a-zA-Z0-9.-_]+[.]{1}[a-z]{2,10}$','g');
    //test de l'expression régulière
   // console.log(testEmail);
    if (mailRegExp.test(inputMail.value)){
        inputMail.classList.remove('invalid');
       inputMail.classList.add('valid');
        inputMail.previousElementSibling.classList.remove('invalid');
        inputMail.previousElementSibling.classList.add('valid');
       return true;
    }else {
        inputMail.classList.remove('valid');
      inputMail.classList.add('invalid');
        inputMail.previousElementSibling.classList.remove('valid');
        inputMail.previousElementSibling.classList.add('invalid');
      return  false;
    }
}

//*********************VALIDATION DU USER PASS******************
const validPass = function (inputPass){
    let msg="";
    let valid=false;
    //Au moins 6 caractères
    if (inputPass.value.length <=5){
        msg='Le mot de passe doit contenir au moins 6 caractères';
    }
    //Au moins 1 maj
   else if (!/[A-Z]/.test(inputPass.value)){
        msg='Le mot de passe doit contenir au moins 1 majuscule';
    }
   //Au moins 1 min
    else if (!/[a-z]/.test(inputPass.value)){
        msg='Le mot de passe doit contenir au moins 1 minuscule';
    }
    //Au moins 1 chiffre
    else if (!/[0-9]/.test(inputPass.value)){
        msg='Le mot de passe doit contenir au moins 1 Chiffre';
    }else {
        valid=true;
    }
    inputPass.nextElementSibling.innerHTML=msg;
    if (valid){
        inputPass.classList.remove('invalid');
        inputPass.classList.add('valid');
        inputPass.previousElementSibling.classList.remove('invalid');
        inputPass.previousElementSibling.classList.add('valid');
        return true;
    }else {
        inputPass.classList.remove('valid');
        inputPass.classList.add('invalid');
        inputPass.previousElementSibling.classList.remove('valid');
        inputPass.previousElementSibling.classList.add('invalid');
        return false;}
    }

    //Password 2
    const validPass2 = function (inputPass){
        pass1=form.userpass[0];
        if (inputPass!=pass1){
            inputPass.classList.remove('valid');
            inputPass.classList.add('invalid');
            inputPass.previousElementSibling.classList.remove('valid');
            inputPass.previousElementSibling.classList.add('invalid');
            return false;
        }else {
            inputPass.classList.remove('invalid');
            inputPass.classList.add('valid');
            inputPass.previousElementSibling.classList.remove('invalid');
            inputPass.previousElementSibling.classList.add('valid');
            return true;
        }

    }


//*********************VALIDATION DU USERNAME******************

const validUserName = function (inputFirst){
   let msg; let valid=false;
    if (inputFirst.value.length <2){
        msg="Doit contenir au minimum 2 caractères";
    }else {
        valid=true;
    }
    if (valid){
        inputFirst.classList.remove('invalid');
        inputFirst.classList.add('valid');
        inputFirst.previousElementSibling.classList.remove('invalid');
        inputFirst.previousElementSibling.classList.add('valid');
        return true;
    }else {
        inputFirst.classList.remove('valid');
        inputFirst.classList.add('invalid');
        inputFirst.previousElementSibling.classList.remove('valid');
        inputFirst.previousElementSibling.classList.add('invalid');
        return false;
    }

}



