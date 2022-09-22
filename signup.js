function check()
{


  if(document.form1.psw.value!=document.form1.cpsw.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpsw.focus();
	return false;
  }
  if (document.form1.psw.value.length>10) {
    alert("the Password is too long");
    document.form1.cpsw.focus();
  return false;
  }
  if (document.form1.PhNo.value.length>10) {
    alert("the Mobile number is too long");
    document.form1.PhNo.focus();
  return false;
  }
  if (document.form1.PhNo.value.length<10) {
    alert("the Mobile number is too short");
    document.form1.PhNo.focus();
  return false;
  }
  if (document.form1.age.value<7) {
    alert("Under Aged or invalid age");
    document.form1.age.focus();
  return false;
  }
}
  
  function logevent() {
      document.location.href = "login.html";
    }