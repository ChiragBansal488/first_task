

function login() {


    var error = "";


    var Username = document.getElementById("usrname").value; //GET ID WITH VALUE

    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{1,4})+$/; //REGULAR EXPRESSION
    if (Username == '') {
        error = 1;
        alert("Please Enter Username !!");
        return false;

    }


    //Username Length
    else if (Username.length < 6 || Username.length > 15) {
        error = 1;
        alert("NAME MUST BE GREATER THAN 6 AND SMALLER THAN 15");
        return false;
    }
    //Username numeric
    else if (Username.search(/[0-9]/) == -1) {
        error = 1;
        alert("Please enter one numeric value");
        return false;
    }
    //Username Capital Letter
    else if (Username.search(/[A-Z]/) == -1) {
        error = 1;
        alert("Please enter one Capital Letter");
        return false;
    }
    //Username Small Letter
    else if (Username.search(/[a-z]/) == -1) {
        error = 1;
        alert("Please enter one small Letter");
        return false;
    }
    //Username Special Letter
    else if (Username.search(/\W/) == -1) {
        error = 1;
        alert("Please enter one SPECIAL Letter");
        return false;
    }






    else {

        if (error == 0) {
            document.getElementById("file").submit();
            return false;


        }
        else
            alert("u rwrong");


    }


}



function validation() {



    var Username = document.getElementById("validations").value; //GET ID WITH VALUE
    if (Username == '') {
        error = 1;
        alert("Please Enter Phone number !!");
        return false;
    }

    else if (Username.length!=10) {
        error = 1;
        alert("PHONE NUMBER MUST BE  10 NUMBER ");
        return false;
    }

    else {
           alert("thanku for submit");

        }


    }

