function chkName() {
    var myName = document.getElementById("name").value;

    if (myName.length > 0) {
        var regexp = /^[a-zA-Z][a-zA-Z\s]*$/;
        var check = regexp.test(myName);
        if (!check) {
            alert("The name you entered (" + myName +
                ") is not in the correct form. \n" +
                "Only Alphabetical characters are allowed. \n" +
                "Do not start with a space.");
            document.getElementById("name").focus();
            document.getElementById("name").select();
            return false;
        }
    }else{
        alert("Please fill in your name.");
        return false;
    }
}

function chkEmail() {

    // Get the target node of the event

    var myEmail = document.getElementById("email").value;

    // Test the format of the input Email number

    var pos = myEmail.search(/^[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}$/);

    if (pos != 0) {
        alert("The Email addess you entered (" + myEmail +
            ") is not in the correct form. \n" +
            "Please go back and fix your Email");
        document.getElementById("email").focus();
        document.getElementById("email").select();
        return false;
    }else return true;
}

