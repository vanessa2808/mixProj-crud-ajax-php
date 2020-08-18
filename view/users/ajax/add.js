function validate() {
    var name = document.add_user_form.name.value;
    var email = document.add_user_form.email.value;
    var password = document.add_user_form.password.value;
    var address = document.add_user_form.address.value;
    var birthday = document.add_user_form.birthday.value;
    var avatar = document.add_user_form.avatar.value;
    var status = false;
    if (name.length < 1) {
        document.getElementById("namemessage").innerHTML =
            " <img src='unchecked.gif'/> Please enter your name";
        status = false;
    } else {
        document.getElementById("namemessage").innerHTML =
            " <img src='checked.gif'/>";
        status = true;
    }

    if (email.length < 1) {
        document.getElementById("emailmessage").innerHTML =
            " <img src='unchecked.gif'/> Please enter your email";
        status = false;
    } else {
        document.getElementById("emailmessage").innerHTML =
            " <img src='checked.gif'/>";
        status = true;
    }



    if (password.length < 6) {
        document.getElementById("passwordmessage").innerHTML =
            " <img src='unchecked.gif'/> Password must be at least 6 char long";
        status = false;
    } else {
        document.getElementById("passwordmessage").innerHTML =
            " <img src='checked.gif'/>";
        status = true;
    }

    if (address.length < 1) {
        document.getElementById("addressmessage").innerHTML =
            " <img src='unchecked.gif'/> Please enter your address";
        status = false;
    } else {
        document.getElementById("addressmessage").innerHTML =
            " <img src='checked.gif'/>";
        status = true;
    }

    if (birthday.length < 1) {
        document.getElementById("birthdaymessage").innerHTML =
            " <img src='unchecked.gif'/> Please enter your birthday";
        status = false;
    } else {
        document.getElementById("birthdaymessage").innerHTML =
            " <img src='checked.gif'/>";
        status = true;
    }

    if (avatar.length < 1) {
        document.getElementById("avatarmessage").innerHTML =
            " <img src='unchecked.gif'/> Please enter your birthday";
        status = false;
    } else {
        document.getElementById("avatarmessage").innerHTML =
            " <img src='checked.gif'/>";
        status = true;
    }

    return status;
}