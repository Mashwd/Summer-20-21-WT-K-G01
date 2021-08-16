function isValid(){

	var flag = true;
	var flag1 = true;
	var flag2 = true;

	var firstName = document.forms["editForm"]["firstname"].value;
	var lastName = document.forms["editForm"]["lastname"].value;
	var email = document.forms["editForm"]["email"].value;
	var phone = document.forms["editForm"]["phone"].value;
	var birthday = document.forms["editForm"]["birthday"].value;
	var picture = document.forms["editForm"]["attachment"];


	var oldPassword = document.forms["editForm"]["oldPassword"].value;
	document.forms["editForm"]["oldPassword"].style.border = "";

	var password = document.forms["editForm"]["password"].value;
	document.forms["editForm"]["password"].style.border = "";

	var confirmPassword = document.forms["editForm"]["confirmPassword"].value;
	document.forms["editForm"]["confirmPassword"].style.border = "";

	
	if(document.getElementById("gender1").checked === false && 
		document.getElementById("gender2").checked === false &&
		document.getElementById("gender3").checked === false &&
		firstName === "" && lastName === "" && email === "" &&
		phone === "" && birthday === "" && oldPassword === "" &&
		password === "" && confirmPassword === "" && picture.files.length == 0)
	{
		flag2 = false;
		flag = false;
	}

	if(oldPassword !== "" || password !== "" || confirmPassword !== "")
	{
		if(oldPassword === "" || password === "" || confirmPassword === "")
		{
			flag = false;
			flag1 = false;
			if(oldPassword === "")
				document.forms["editForm"]["oldPassword"].style.border = "2px solid red";
			if(password === "")
				document.forms["editForm"]["password"].style.border = "2px solid red";
			if (confirmPassword === "")
				document.forms["editForm"]["confirmPassword"].style.border = "2px solid red";

		}
	}

	if(!flag1)
	{
		var id = window.setTimeout(function() {}, 0);

		while (id--) {
		    window.clearTimeout(id);
		}

		var div = document.getElementById("a2");
		setTimeout(function(){ 
		div.style.display = "none"; }, 0);
		
		alertMessage();
		
	}

	if(!flag2)
	{
		var id = window.setTimeout(function() {}, 0);

		while (id--) {
		    window.clearTimeout(id);
		}

		var div = document.getElementById("a1");

		setTimeout(function(){ 
		div.style.display = "none"; }, 0);
		
		alertMessage1();
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

function alertMessage1()
{
	var div = document.getElementById("a2");
	div.style.opacity = 1;
	div.style.display = "block";
	setTimeout(function(){ 
		div.style.display = "none"; }, 8000);
}