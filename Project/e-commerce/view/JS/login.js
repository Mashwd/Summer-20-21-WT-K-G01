function isValid(){

	var flag = true;

	var username = document.forms["loginForm"]["username"].value;
	document.forms["loginForm"]["username"].style.border = "";



	var password = document.forms["loginForm"]["password"].value;
	document.forms["loginForm"]["password"].style.border = "";


	if(username === "")
	{
		document.forms["loginForm"]["username"].style.border = "2px solid red";
		flag = false;
	}
	if(password === "")
	{
		document.forms["loginForm"]["password"].style.border = "2px solid red";
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