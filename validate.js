function validate(a) {
    if (blank(a)) return;
    if (length(a)) return;
}

function blank(usr) {
    try {
        if (usr.value == "") {
            error = "You didn't enter a phone number.\n";
            alert(error);
            return true;
        } else {
            return false;
        }
    } catch (err) {
        console.log(err);
    }
}

function length(usr) {
    if (usr.value.length!=10) {
        error = "length must be 10 digit.\n";
        alert(error);
    } else {
        return false;
    }
}

22