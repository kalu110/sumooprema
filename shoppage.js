window.addEventListener('load', () =>{

	const params = (new URL(document.location)).searchParams; 
	const all = params.get('cart-row');

	document.getElementsByClassName('cart-row').innerHTML = all;
	
})