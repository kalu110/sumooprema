function EMAILPORUKA()
{
	
	var username = document.getElementById("firstName").value;
	var email = document.getElementById("email").value;
	var prezime = document.getElementById("lastName");
	var address = document.getElementById("address");
	var address2 = document.getElementById("address2");


	if(username.value == "" )
	{
		username.style.border = "1px solid #FF6262"
		
	}
	if(prezime.value == "")
	{
		prezime.style.border = "1px solid #FF6262"
	
	}
	if(address.value == "")
	{
		naslov.style.border = "1px solid #FF6262"

	}
	if(address2.value == "")
	{
		upit.style.border = "1px solid #FF6262"
	}
	if(email.value == "")
	{
		email.style.border = "1px solid #FF6262"

	}
}