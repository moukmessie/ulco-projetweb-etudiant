document.addEventListener('DOMContentLoaded', function () {
    

    function show2() {
        document.getElementById("input2").disabled = false;
        document.getElementById("btn-update").style.visibility='visible';
        document.getElementById("link2").style.visibility='hidden';

    }
    function show1() {
        document.getElementById("input1").disabled = false;
        document.getElementById("btn-update").style.visibility='visible';
        document.getElementById("link1").style.visibility='hidden';

    }
    function show3() {
        document.getElementById("input3").disabled = false;
        document.getElementById("btn-update").style.visibility='visible';
        document.getElementById("link3").style.visibility='hidden';

    }
}