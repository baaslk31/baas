function validateform(){  
var name=document.signup.username.value;  
var email = document.signup.email.value;
	var atposition=email.indexOf("@");  
	var dotposition=email.lastIndexOf("."); 
var password=document.signup.password.value; 
var repassword=document.signup.repass.value;
 
  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  }

else if(atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){  
  alert("Please enter a valid e-mail address");  
  return false;
}

else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false; 
} 

else if(password!=repassword){  
	alert("password must be same!"); 
	return false;  
	}  

}  
