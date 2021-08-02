<?php
	
	

if (isset($_POST['poruci'])){
	
	
	$name = $_POST['firstName'];
	$lastname = $_POST['lastName'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$address2 = $_POST['address2'];
	$poruceno = $_POST['inputname'];

	$mailTo = "lukaeric8@gmail.com";
	$headers = "From: ".$email;
	$txt = "Ime: ".$name."\nPrezime: ".$lastname."\nEmail:".$email."\nAdresa:".$address."\nTelefon:".$address2."\nPorudzbina:".$poruceno;
	mail($mailTo, $lastname, $txt);
	header("Location: thankpage.html");

}
?>
