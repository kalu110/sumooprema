function EMAILPORUKA()
{
	var username = document.getElementById('ime');
	var email = document.getElementById('email');
	var prezime = document.getElementById('prezime');
	var naslov = document.getElementById('naslov');
	var upit = document.getElementById('upit');


	if(username.value == "" )
	{
		username.style.border = "1px solid #FF6262"
		
	}
	if(prezime.value == "")
	{
		prezime.style.border = "1px solid #FF6262"
	
	}
	if(naslov.value == "")
	{
		naslov.style.border = "1px solid #FF6262"

	}
	if(upit.value == "")
	{
		upit.style.border = "1px solid #FF6262"
	}
	if(email.value == "")
	{
		email.style.border = "1px solid #FF6262"

	}








}