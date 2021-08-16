function isValid(){

  var flag = true;

  var firstName = document.forms["addAccountForm"]["firstname"].value;
  document.forms["addAccountForm"]["firstname"].style.border = "";



  var lastName = document.forms["addAccountForm"]["lastname"].value;
  document.forms["addAccountForm"]["lastname"].style.border = "";


  var accountTypeErr = document.getElementById("accountType");
  accountTypeErr.innerHTML = "";



  var email = document.forms["addAccountForm"]["email"].value;
  document.forms["addAccountForm"]["email"].style.border = "";



  var username = document.forms["addAccountForm"]["username"].value;
  document.forms["addAccountForm"]["username"].style.border = "";



  var password = document.forms["addAccountForm"]["password"].value;
  document.forms["addAccountForm"]["password"].style.border = "";



  var password1 = document.forms["addAccountForm"]["password1"].value;
  document.forms["addAccountForm"]["password1"].style.border = "";


  if(firstName === "")
  {
    document.forms["addAccountForm"]["firstname"].style.border = "2px solid red";
    flag = false;
  }
  if(lastName === "")
  {
    document.forms["addAccountForm"]["lastname"].style.border = "2px solid red";
    flag = false;
  }

  if(document.getElementById("accountType1").checked === false && 
    document.getElementById("accountType2").checked === false &&
    document.getElementById("accountType3").checked === false)
  {
    accountTypeErr.innerHTML = "!!";
    accountTypeErr.style.fontStyle = "bold";
    accountTypeErr.style.fontSize = "25px";
    flag = false;
  }

  if(email === "")
  {
    document.forms["addAccountForm"]["email"].style.border = "2px solid red";
    flag = false;
  }
  if(username === "")
  {
    document.forms["addAccountForm"]["username"].style.border = "2px solid red";
    flag = false;
  }
  if(password === "")
  {
    document.forms["addAccountForm"]["password"].style.border = "2px solid red";
    flag = false;
  }
  if(password1 === "")
  {
    document.forms["addAccountForm"]["password1"].style.border = "2px solid red";
    flag = false;
  }


  
  if(!flag)
  {
    var id = window.setTimeout(function() {}, 0);

    while (id--) {
        window.clearTimeout(id);
    }
    
    alertMessage();
  }
  return flag;
}

function alertMessage()
{
  var div = document.getElementById("a1");
  div.style.opacity = 1;
  div.style.display = "block";
  setTimeout(function(){ 
    div.style.display = "none"; }, 8000);
}