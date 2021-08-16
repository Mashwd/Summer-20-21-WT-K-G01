

		function isValid(){
			var flag=true;
			var fullNameErr=document.getElementById("fullNameErr");
			var userNameErr=document.getElementById("userNameErr");
			var passwordErr=document.getElementById("passwordErr");
			var birthDateErr=document.getElementById("birthDateErr");
			var genderErr=document.getElementById("genderErr");
			var emailErr=document.getElementById("emailErr");
			var mobileNoErr=document.getElementById("mobileNoErr");
			var addressErr=document.getElementById("addressErr");
			
			var fullName =document.forms["registrationForm"]["fullname"].value;
			var userName =document.forms["registrationForm"]["username"].value;
			var password =document.forms["registrationForm"]["password"].value;
			var birthDate =document.forms["registrationForm"]["birthDate"].value;
			var gender =document.forms["registrationForm"]["gender"].value;
			var email =document.forms["registrationForm"]["email"].value;
			var mobileNo=document.forms["registrationForm"]["mobileNo"].value;
			var address =document.forms["registrationForm"]["address"].value;
		
			fullNameErr.innerHTML ="";
			userNameErr.innerHTML ="";
			passwordErr.innerHTML ="";
			birthDateErr.innerHTML ="";
			genderErr.innerHTML ="";
			emailErr.innerHTML ="";
			mobileNoErr.innerHTML ="";
			addressErr.innerHTML ="";

			if(fullName===""){
				flag=false;
				fullNameErr.innerHTML="Please fill up the name";

			}
			if(userName===""){
				flag=false;
				userNameErr.innerHTML="Please fill up the username";
				
			}
			if(password===""){
				flag=false;
				passwordErr.innerHTML="Please fill up the password";
				
			}
			if(birthDate===""){
				flag=false;
				birthDateErr.innerHTML="Please fill up the birth date";
				
			}
			if(gender===""){
				flag=false;
				genderErr.innerHTML="Please fill up the gender";
				
			}
			if(email===""){
				flag=false;
				emailErr.innerHTML="Please fill up the email";
				
			}

			if(mobileNo===""){
				flag=false;
				mobileNoErr.innerHTML="Please fill up the mobile no";
				
			}
			if(address===""){
				flag=false;
				addressErr.innerHTML="Please fill up the  address";
				
			}
			
			return flag;

	}



