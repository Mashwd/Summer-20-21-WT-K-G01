function isValid(){
	var flag=true;
	
	var userNameErr=document.getElementById("userNameErr");
	var passwordErr=document.getElementById("passwordErr");
	var userName =document.forms["loginForm"]["username"].value;
	var password =document.forms["loginForm"]["password"].value;
	userNameErr.innerHTML ="";
	passwordErr.innerHTML ="";
	if(userName===""){
		flag=false;
		userNameErr.innerHTML="Please fill up the username";
				
	}
	if(password===""){
		flag=false;
		passwordErr.innerHTML="Please fill up the password";
				
	}
	return flag;




}