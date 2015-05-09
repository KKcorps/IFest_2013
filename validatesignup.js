//username and email availability by ajax

var usernameValid=false;
var passwordValid=false;
var emailValid=false;


function available(id,str)
{
	var xmlhttp;
	if (str.length==0)
	{ 
		document.getElementById(id + "_available").innerHTML="";
		return;
	}
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{   document.getElementById(id).className = "thinking";
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		 validate(id);
		if(document.getElementById(id).className=="denied") return; 
		if (xmlhttp.responseText == "") {
        document.getElementById(id).className = "approved";
        if(id=="email") emailValid=true;
	if(id=="username") usernameValid=true;
      } else {
        document.getElementById(id).className = "denied";
       document.getElementById(id).focus();
        document.getElementById(id).select();
        if(id=="email") emailValid=false;
	if(id=="username") usernameValid=false;

      }
      //checkFormStatus();
    
			document.getElementById(id + "_available").innerHTML=xmlhttp.responseText;
		}
	}
	if(id=="username")
		xmlhttp.open("GET","ajaxavailable.php?username=" + str,true);
	else
		xmlhttp.open("GET","ajaxavailable.php?email=" + str,true);
	xmlhttp.send();
}
//sign up validation
function validate(id)
{
	//name validation
	if(id=="firstName" || id=="lastName" || id=="collegeName")
	{
		var name=document.forms["signup"][id].value;
		var letters=/^[a-zA-Z ]+$/;
		if(name=="")
		{   
			document.getElementById("error").innerHTML="Please enter your" + id.toLowerCase();
//			return false;
		}
		if(name.match(letters))
		{   document.getElementById(id).className = "approved";
			document.getElementById("error").innerHTML='';
		}
		else
		{
			document.getElementById("error").innerHTML="Invalid " + id.toLowerCase() + ".Try again!";
//			return false;
		}	
	}
	//username validation
	if(id=="username")
	{
		var username=document.forms["signup"]["username"].value;
		var letters=/^[a-zA-Z0-9_-]+$/;
		if(username=="")
		{
			document.getElementById("error").innerHTML="Please enter your username";
//			return false;
		}
		if(username.match(letters))
		{   document.getElementById(id).className = "approved";
			document.getElementById("error").innerHTML='';
		}
		else
		{	document.getElementById("error").innerHTML='Invalid username';
			document.getElementById(id).className="denied";
		}
	}
	//email validation
	if(id=="email")
	{
		var email=document.forms["signup"]["email"].value;
		var atpos=email.indexOf("@");
		var dotpos=email.lastIndexOf(".");
		var letters=/^[a-zA-Z0-9.@!_-]+$/;
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length || !email.match(letters) || email=="")
		{
			
			document.getElementById("error").innerHTML="Not a valid e-mail address";
			document.getElementById(id).className="denied";
//			return false;
		}
		else
		document.getElementById(id).className = "approved";
			document.getElementById("error").innerHTML='';
	}
	//phone number validation
	if(id=="phone")
	{
		var phone=document.forms["signup"]["phone"].value;
		if(phone=="")
		{
			document.getElementById("error").innerHTML="Please enter your phone number";
//			return false;
		}
		else if(phone.toString().length!=10 || isNaN(phone) || phone[0]==0)
		{
			document.getElementById("error").innerHTML="Invalid phone number.Try again!";
//			return false;
		}
		else
		document.getElementById(id).className = "approved";
			document.getElementById("error").innerHTML='';
	}
	//year validate
	if(id=="collegeYear")
	{
		var collegeYear=document.forms["signup"]["collegeYear"].value;
		if(collegeYear==0)
			document.getElementById("error").innerHTML="Not a valid year";
	}
	//date validate
	if(id=="date" || id=="month" || id=="year")
	{
		var date1=document.getElementById("date").value;
		var month1=document.getElementById("month").value;
		var year1=document.getElementById("year").value;
		if((month1%2==0 && date1==31) || (date1==30 && month1==2) || (date1==29 && month1==2 && year1%4!=0))
		{
				document.getElementById("error").innerHTML="Please enter a valid date of birth";
//				return false;
		}
		else
		document.getElementById(id).className = "approved";
			document.getElementById("error").innerHTML='';
	}
	//password validation
	if(id=="password" || id=="confirmPassword")
	{
		var password=document.forms["signup"]["password"].value;	
		var confirmPassword=document.forms["signup"]["confirmPassword"].value;
		if(id=="password")
		{
			if(password=="")
			{	
				document.getElementById("error").innerHTML="Please enter your password";
//				return false;
			}
			else document.getElementById("password").className="approved";
		}
		if(password == confirmPassword && password!='')
		{  
			document.getElementById("error").innerHTML='';
			document.getElementById("password").className = "approved";
			document.getElementById("confirmPassword").className = "approved";
			passwordValid=true;
			checkFormStatus();
		}
		else if(confirmPassword!='') 
		{
			document.getElementById("error").innerHTML="The two passwords do not match.Try again!";
			document.getElementById("password").className = "denied";
			document.getElementById("confirmPassword").className = "denied";
//			return false;
		}
	}
}
//login validation
function validateLogin(id)
{
	//login username validation
	if(id=="loginUsername")
	{
		var loginUsername=document.forms["login"]["loginUsername"].value;
		if(loginUsername=="")
		{
			document.getElementById("login_error").innerHTML="Please enter your username";
//			return false;
		}
	}
	//login password validation
	if(id=="loginPassword")
	{
		var loginPassword=document.forms["login"]["loginPassword"].value;
		if(loginPassword=="")
		{
			document.getElementById("login_error").innerHTML="Please enter your password";
//			return false;
		}
	}
}
/*function checkFormStatus()
{
if(usernameValid && emailValid)
{
document.getElementById("signup").disabled=false;
}
else {
document.getElementById("signup").disabled=true;
}
}*/
