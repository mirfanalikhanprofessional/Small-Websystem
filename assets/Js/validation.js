var rgfname = /^[A-Za-z ]{3,40}$/;
var rglname = /^[A-Za-z ]{3,40}$/;
var rgname = /^[A-Za-z ]{3,40}$/;
var rgemail = /^[A-Za-z0-9._ ]{5,30}[@][a-z]{5,8}[.][a-z]{2,5}$/;
var rgmob = /^[0-9]{11}$/;
var rgage = /^[0-9]{1,5}$/;
function emailcheck(){
	var email = document.getElementById('email').value;
	if(email.match(rgemail)){
		document.getElementById('emailch').innerHTML = "Valid Email";
		document.getElementById('emailch').style.color = "green";
		document.getElementById('email').style.border = "3px solid green";
	}
	else{
		document.getElementById('emailch').innerHTML = "Invalid Email";
		document.getElementById('emailch').style.color = "red";
		document.getElementById('email').style.border = "3px solid red";
	}
}
function namecheck(){
	var name = document.getElementById('name').value;
	if(name.match(rgname)){
		document.getElementById('namech').innerHTML = "Valid Name";
		document.getElementById('namech').style.color = "green";
		document.getElementById('name').style.border = "3px solid green";	
	}
	else{
		document.getElementById('namech').innerHTML = "Invalid Name";
		document.getElementById('namech').style.color = "red";
		document.getElementById('name').style.border = "3px solid red";	
	}
}
function agecheck(){
	var age = document.getElementById('age').value;
	if(age.match(rgage)){
		document.getElementById('agech').innerHTML = "Valid Age";
		document.getElementById('agech').style.color = "green";
		document.getElementById('age').style.border = "3px solid green";	
	}
	else{
		document.getElementById('agech').innerHTML = "Invalid Age";
		document.getElementById('agech').style.color = "red";
		document.getElementById('age').style.border = "3px solid red";	
	}	
}
function captchacheck(){
	var usercaptcha = document.getElementById('captcha').value;
	var defalultcode =  document.getElementById('code').innerHTML;
	if(usercaptcha === defalultcode){
		document.getElementById('captchach').innerHTML = "Valid Captcha";
		document.getElementById('captchach').style.color = "green";
		document.getElementById('captcha').style.border = "3px solid green";	
	}
	else{
		document.getElementById('captchach').innerHTML = "Invalid Captcha code";
		document.getElementById('captchach').style.color = "red";
		document.getElementById('captcha').style.border = "3px solid red";	
	}
}
function mobilecheck(){
	var mob = document.getElementById('phone').value;
	if(mob.match(rgmob)){
		document.getElementById('phonech').innerHTML = "Valid Mobile Number";
		document.getElementById('phonech').style.color = "green";
		document.getElementById('phone').style.border = "3px solid green";	
	}
	else{
		document.getElementById('phonech').innerHTML = "Invalid Format";
		document.getElementById('phonech').style.color = "red";
		document.getElementById('phone').style.border = "3px solid red";	
	}
}
function passcheck(){
	var password = document.getElementById('password').value;
	var confirmpassword = document.getElementById('confirmpassword').value;
	 if (password === confirmpassword){
	 	document.getElementById('passwordch').innerHTML = "Password matched";
		document.getElementById('passwordch').style.color = "green";
	 	document.getElementById('password').style.border = "3px solid green";
	 	document.getElementById('confirmpassword').style.border = "3px solid green";	
	 }
	 else{
	 	document.getElementById('passwordch').innerHTML = "Password not matched";
		document.getElementById('passwordch').style.color = "red";
	 	document.getElementById('password').style.border = "3px solid red";
	 	document.getElementById('confirmpassword').style.border = "3px solid red";
	 }
}
function showpass(){
	var checkbutton = document.getElementById('check');
	if(checkbutton.checked == true){
		document.getElementById('password').type = "text";
		document.getElementById('confirmpassword').type = "text";
	}
	else{
		document.getElementById('password').type = "password";
		document.getElementById('confirmpassword').type = "password";
	}
}
function formcheck(){
	var name = document.getElementById('namech').innerHTML;
	var mobilenumber = document.getElementById('phonech').innerHTML;
	var email = document.getElementById('emailch').innerHTML;
	var password = document.getElementById('passwordch').innerHTML;
	var captcha = document.getElementById('captchach').innerHTML;
	var age = document.getElementById('agech').innerHTML;	
	if(name == "Invalid Name" || mobilenumber == "Invalid Format" || email == "Invalid Email" || password == "Password not matched" || captcha == "Invalid Captcha code" || age == "Invalid Age"){
		alert("Oops validation Error");
		event.preventDefault();
		return false;
	}
	else{
		return true;
	}
}