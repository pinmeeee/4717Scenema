//namel validation
function validateName() {
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


/*
//mobile validation
function validateMobile() {
    var myMobile = document.getElementById("mobile").value;

    if (myMobile.length > 0) {
        var regexp = /^\d{8}$/;
        var check = regexp.test(myMobile);
        if (!check) {
            alert("The number you entered (" + myMobile +
                ") is not in the correct form.");
            document.getElementById("mobile").focus();
            document.getElementById("mobile").select();
            return false;
        }
    }else{
        alert("Please fill in your mobile number.");
        return false;
    }
}
*/

//mobile validation
function singaporeNumber(string){
    return /^[0-9]+$/.test(string);   
  }

function validateMobile(){
    let mobileInput = document.getElementById("mobile").value;
    // console.log(mobileInput.length);
    if (singaporeNumber(mobileInput)&& mobileInput.length==8) {
        console.log("MObile number input is accepted");
    } else {
      alert("Mobile number input is invalid. Try again");
      document.getElementById("mobile").value = ""; //to clear input
    }
  }

/*
function validateEmail() {

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
*/

//email username restriction
function LetterDotHyphen(string) {
    return /^[a-zA-Z0-9-.]+$/.test(string);
  }
  
  //email domain restriction (only alphabets or . )
  function LetterDot(string) {
    return /^[a-zA-Z.]+$/.test(string);
  }

  
  //email domain (2-4 extensions and last extension to have 2-3 characters)
  function domainCheck(string) {
    if (!LetterDot(string)) {
      alert("Domain can only contain alphabets or period(.)");
      document.getElementById("email").value = "";
      return;
    }
    let domainExtArr = string.split("."); //still in array
    let domainExtArrLen = domainExtArr.length;
    if (
      domainExtArrLen >= 2 &&
      domainExtArrLen <= 4 && //for 2-4 extensions
      domainExtArr[0].length !== 0
    ) {
      //domain input
      if (
        domainExtArr[domainExtArrLen - 1].length >= 2 && //2-3 char in last extension
        domainExtArr[domainExtArrLen - 1].length <= 3 
        // && domainExtArr[domainExtArrLen - 1] === 'com'
        )
         {
        return true;
      }
    }
    return false;
  }
  
  //email validation
  function validateEmail() {
    const emailInput = document.getElementById("email").value;
    console.log(emailInput);
    if (emailInput.includes("@")) {
      emailInputArr = emailInput.split("@"); //split username and domain across @
      console.log(emailInputArr);
      if (
        LetterDotHyphen(emailInputArr[0]) &&
        domainCheck(emailInputArr[1])
      ) {
        console.log("Valid Email Input");
      } else if (LetterDotHyphen(emailInputArr[0]) === false) {
        alert("Username can only contain alphabets, hypen(-) and periods(.)");
        document.getElementById("email").value = ""; //clear email input
      } else if (emailInputArr.length === 1) {
        alert("Please include an @");
        document.getElementById("email").value = "";
      } else {
        alert("Invalid domain");
        document.getElementById("email").value = "";
      }
    } else {
      alert("Please include an @ followed by a domain name");
      document.getElementById("email").value = "";
    }
  }



//card validation
function validateCard() {
    var myCard = document.getElementById("card").value;

    if (myCard.length > 0) {
        var regexp = /^\d{16}$/;
        var check = regexp.test(myCard);
        if (!check) {
            alert("The number you entered (" + myCard +
                ") is not in the correct form.");
            document.getElementById("card").focus();
            document.getElementById("card").select();
            return false;
        }
    }else{
        alert("Please fill in your credit card number.");
        return false;
    }
}