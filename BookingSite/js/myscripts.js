function validateForm()
{
var username=document.forms["login"]["email"].value;
var password=document.forms["login"]["password"].value;
if (email==null || email=="" ||password==null || password=="")
  {
  alert("Username and password must be filled in");
  return false;
  }
}

function paymentsForm()
{
var name=document.forms["payments"]["name"].value;
var card=document.forms["payments"]["card"].value;
var expiry=document.forms["payments"]["expiry"].value;
var valid=document.forms["payments"]["valid"].value;
var sec=document.forms["payments"]["sec"].value;
var events=document.forms["payments"]["events"].value;

if (name==null || name=="" || card==null || card=="" || expiry==null || expiry=="" || valid==null || valid=="" || sec==null || sec=="" || events==null || events=="")
  {
  alert("All fields marked with * must be filled out");
  return false;
  }
}

function registerForm()
{
var first_name=document.forms["register"]["first_name"].value;
var last_name=document.forms["register"]["last_name"].value;
var email=document.forms["register"]["email"].value;
var password=document.forms["register"]["password"].value;
var interest=document.forms["register"]["interest"].value;
if (first_name==null || first_name=="" || last_name==null || last_name=="" || email==null || email=="" || password==null || password==""|| interest==null || interest=="")
  {
  alert("All fields marked with * must be filled out");
  return false;
  }
}

