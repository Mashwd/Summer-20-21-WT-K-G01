function isValid(){

	var flag = true;

	var firstName = document.forms["registrationForm"]["firstname"].value;
	document.forms["registrationForm"]["firstname"].style.border = "";



	var lastName = document.forms["registrationForm"]["lastname"].value;
	document.forms["registrationForm"]["lastname"].style.border = "";


	var accountTypeErr = document.getElementById("accountType");
	accountTypeErr.innerHTML = "";



	var email = document.forms["registrationForm"]["email"].value;
	document.forms["registrationForm"]["email"].style.border = "";



	var username = document.forms["registrationForm"]["username"].value;
	document.forms["registrationForm"]["username"].style.border = "";



	var password = document.forms["registrationForm"]["password"].value;
	document.forms["registrationForm"]["password"].style.border = "";



	var password1 = document.forms["registrationForm"]["password1"].value;
	document.forms["registrationForm"]["password1"].style.border = "";


	if(firstName === "")
	{
		document.forms["registrationForm"]["firstname"].style.border = "2px solid red";
		flag = false;
	}
	if(lastName === "")
	{
		document.forms["registrationForm"]["lastname"].style.border = "2px solid red";
		flag = false;
	}

	if(document.getElementById("accountType1").checked === false && 
		document.getElementById("accountType2").checked === false)
	{
		accountTypeErr.innerHTML = "!";
		accountTypeErr.style.fontStyle = "bold";
		accountTypeErr.style.fontSize = "20px";
		flag = false;
	}

	if(email === "")
	{
		document.forms["registrationForm"]["email"].style.border = "2px solid red";
		flag = false;
	}
	if(username === "")
	{
		document.forms["registrationForm"]["username"].style.border = "2px solid red";
		flag = false;
	}
	if(password === "")
	{
		document.forms["registrationForm"]["password"].style.border = "2px solid red";
		flag = false;
	}
	if(password1 === "")
	{
		document.forms["registrationForm"]["password1"].style.border = "2px solid red";
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