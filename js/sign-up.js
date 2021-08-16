function checkemail(){
    var email = document.getElementById("email");
    var confirmemail = document.getElementById("confirmemail");
    var message = document.getElementById("alertmessage");
    if(email.value != confirmemail.value)
    { 
      message.style.display = "block";
      confirmemail.focus();
      confirmemail.select();
    }
    else{
        message.style.display= "none";
    }
}

function checkpassword(){
    var password = document.getElementById("password");
    var confirmpassword = document.getElementById("confirmpassword");
    var message = document.getElementById("passwordmessage");
    if(password.value != confirmpassword.value)
    { 
      message.style.display = "block";
      confirmpassword.focus();
      confirmpassword.select();
    }
    else{
        message.style.display= "none";
    }
}

function passwordcheck(){
    var password = document.getElementById("password").value;
    var message = document.getElementById("passwordcondition");
    if(password.length<10 || !/[0-9]/.test(password) || !/[a-z]/.test(password) || !/[A-Z]/.test(password) 
    ||!/[!@#$%^&*]/.test(password)) 
    { 
      message.style.display = "block";
      document.getElementById("password").focus();
      document.getElementById("password").select();
    }
    else{
        message.style.display= "none";
    }
}

function cardcheck(){
    var cardnumber = document.getElementById("cardnumber").value;
    var message = document.getElementById("cardmessage");
    if(!/^\d{16}$/.test(cardnumber) )
    { 
      message.style.display = "block";
      document.getElementById("cardnumber").focus();
      document.getElementById("cardnumber").select();
    }
    else{
        message.style.display= "none";
    }
}

function cvccheck(){
    var cvc = document.getElementById("cvc").value;
    var message = document.getElementById("cvcmessage");
    if(!/^\d{3}$/.test(cvc) )
    { 
      message.style.display = "block";
      document.getElementById("cvc").focus();
      document.getElementById("cvc").select();
    }
    else{
        message.style.display= "none";
    }
}

function consentcheck(){
    var consent = document.getElementById("consentbox").checked;
    var message = document.getElementById("consentboxmessage");
    if(consent!=true )
    { 
      message.style.display = "block";
    }
    else{
        message.style.display= "none";
    }
}