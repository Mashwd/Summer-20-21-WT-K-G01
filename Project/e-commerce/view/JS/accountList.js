function allAccount(){
	document.forms["deleteForm"]["deleteText"].value = "";
	document.forms["searchForm"]["searchText"].value = "";
	var xhttp = new XMLHttpRequest()
	xhttp.onload = function(){

		if(this.status === 200)
		{
			document.getElementById("alluser").innerHTML = this.responseText;
		}
	}

	xhttp.open("GET", "/e-commerce/Controller/account_list.php");
	xhttp.send();
	
	return false;
}

function isValid()
{
	var deleteUser = document.forms["deleteForm"]["deleteText"].value;

	document.forms["deleteForm"]["deleteText"].style.border = "";
	document.forms["searchForm"]["searchText"].style.border = "";

	if(deleteUser === "")
	{
		document.forms["deleteForm"]["deleteText"].style.border="2px solid red";
	}
	else
	{
		var xhttp = new XMLHttpRequest()
		xhttp.onload = function(){
			if(this.responseText === "2")
			{
				document.forms["deleteForm"]["deleteText"].value = "";
				var id = window.setTimeout(function() {}, 0);
				while (id--) {
				    window.clearTimeout(id);
				}
				
				alertMessage1();
			}
			if(this.responseText === "0")	
			{
				document.forms["deleteForm"]["deleteText"].value = "";
				var id = window.setTimeout(function() {}, 0);
				while (id--) {
				    window.clearTimeout(id);
				}
				
				alertMessage();
			}

			if(this.responseText === "1")	
			{
				document.forms["deleteForm"]["deleteText"].value = "";
				var id = window.setTimeout(function() {}, 0);

				while (id--) {
				    window.clearTimeout(id);
				}
				
				alertMessage2();
				allAccount();
			}
		}

		xhttp.open("POST", "/e-commerce/Controller/deletehandler.php");
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send("deleteText=" + deleteUser);
	}

	return false;
}

function isValidSearch(form)
{
	var searchUser = document.forms["searchForm"]["searchText"].value;

	document.forms["searchForm"]["searchText"].style.border = "";
	document.forms["deleteForm"]["deleteText"].style.border="";

	if(searchUser === "")
	{
		document.forms["searchForm"]["searchText"].style.border = "2px solid red";
		allAccount();
	}
	else
	{
		var xhttp = new XMLHttpRequest()
		document.getElementById("alluser").innerHTML = "";
		xhttp.onload = function(){
			document.getElementById("alluser").innerHTML = this.responseText;

			if(this.responseText === "<p style='text-align: center'>No user found.</p>")
			{
				document.forms["searchForm"]["searchText"].value = "";
			}
		}

		xhttp.open("GET", form.action + "?searchText=" + searchUser, true);
		xhttp.send();
	}

	return false;
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
function alertMessage2()
{
	var div = document.getElementById("a3");
	div.style.opacity = 1;
	div.style.display = "block";
	setTimeout(function(){ 
		div.style.display = "none"; }, 8000);
}