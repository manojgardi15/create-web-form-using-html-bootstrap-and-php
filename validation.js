function validation() {
    const firstname = document.getElementById('first').value;
    const lastname = document.getElementById('last').value;
    const email = document.getElementById('email').value;
    const mobile = document.getElementById('mobile').value;
    const aadhar = document.getElementById('aadhar').value;

    if (firstname == "") {
        document.getElementById("fname").innerHTML =
            "*Please fill the First Name field";
        return false;
    }

    if (lastname == "") {
        document.getElementById("lname").innerHTML =
            "*Please fill the Last Name field";
        return false;
    }

    if (email == "") {
        document.getElementById("mail").innerHTML =
            "*Please fill the Email field";
        return false;
    }

    if (mobile == "") {
        document.getElementById("mnumber").innerHTML =
            "*Please fill the Mobile Number field";
        return false;
    }

    if (aadhar == "") {
        document.getElementById("aadhar").innerHTML =
            "*Please fill the Aadhar Card Number field";
        return false;
    }
}