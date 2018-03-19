function check() 
{
	var password = document.getElementById("password").value;
	var cpassword = document.getElementById("cpassword").value;
	//alert(password + " " + cpassword);
	if(password != cpassword) 
	{
		document.getElementById("p11").innerHTML = "Wrong password";
		return false;
	} 
	else
	{
		return true;
	}

}

