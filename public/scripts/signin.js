
let form = document.querySelector('#loginForm');

//console.log(form.userlastname);





//**********************ECOUTER LES MODIFICATIONS******************

//userlastname
form.userlastname.addEventListener('change',function (){
    validUserLastname(this);
});

//user firstname
form.userfirstname.addEventListener('change',function (){
    validUserFirstname(this);
});

//mail
form.usermail.addEventListener('change',function (){
    validMail(this);
});
//password
let pass= form.userpass[0].addEventListener('change',function (){
    validPass(this);
})
/*//pass word 2
let pass2= form.userpass[1].addEventListener('change',function (){
    validPass2(this);
})*/


//Soumission du formulaire
form.addEventListener('submit', function (e){
    e.preventDefault();
    if (validMail(form.usermail) && validPass(form.userpass[0])){
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
       return true;
    }else {
        inputMail.classList.remove('valid');
      inputMail.classList.add('invalid');
      return  false;
    }
}

//*********************VALIDATION DU USER PASS******************
const validPass = function (inputPass){
    let msg;
    let valid=false;
    //Au moins 6 caractères
    if (inputPass.value.length <=6){
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

    if (valid){
        inputPass.classList.remove('invalid');
        inputPass.classList.add('valid');
        return true;
    }else {
        inputPass.classList.remove('valid');
        inputPass.classList.add('invalid');
        return false;}}

//*********************VALIDATION DU USERNAME******************

//firstname
const validUserFirstname = function (inputFirst){
   let msg; let valid=false;
    if (inputFirst.value.length <6){
        msg="le prénom doit contenir au minimum 2 caractères";
    }else {
        valid=true;
    }
    if (valid){
        inputFirst.classList.remove('invalid');
        inputFirst.classList.add('valid');
        return true;
    }else {
        inputFirst.classList.remove('valid');
        inputFirst.classList.add('invalid');
        return false;
    }

}

//Lastname
const validUserLastname = function (inputLast){
    let msg; let valid=false;
    if (inputLast.value.length <2){
        msg="le prénom doit contenir au minimum 2 caractères";
    }else {
        valid=true;
    }
    if (valid){
        inputLast.classList.remove('invalid');
        inputLast.classList.add('valid');
        return true;
    }else {
        inputLast.classList.remove('valid');
        inputLast.classList.add('invalid');
        return false;
    }

}





/*

if (password2 != form.userpass[0]){

    console.log('les deux mot de passe doit etre identique');

}

const validPass2 = function (inputPass2) {
    let msg;
    let valid = false;
    if (!validPass(inputPass2)){
        msg='les deux mot de passe doit etre identique';

    }else {
        valid=true;
    }

    if (valid){
        inputPass2.classList.remove('invalid');
        inputPass2.classList.add('valid');
        return true;
    }else {
        inputPass2.classList.remove('valid');
        inputPass2.classList.add('invalid');
        return false;
    }

}*/