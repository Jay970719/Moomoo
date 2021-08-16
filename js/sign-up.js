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