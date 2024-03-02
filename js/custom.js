(function() {
	'use strict';

	var tinyslider = function() {
		var el = document.querySelectorAll('.testimonial-slider');

		if (el.length > 0) {
			var slider = tns({
				container: '.testimonial-slider',
				items: 1,
				axis: "horizontal",
				controlsContainer: "#testimonial-nav",
				swipeAngle: false,
				speed: 700,
				nav: true,
				controls: true,
				autoplay: true,
				autoplayHoverPause: true,
				autoplayTimeout: 3500,
				autoplayButtonOutput: false
			});
		}
	};
	tinyslider();

	


	var sitePlusMinus = function() {

		var value,
    		quantity = document.getElementsByClassName('quantity-container');

		function createBindings(quantityContainer) {
	      var quantityAmount = quantityContainer.getElementsByClassName('quantity-amount')[0];
	      var increase = quantityContainer.getElementsByClassName('increase')[0];
	      var decrease = quantityContainer.getElementsByClassName('decrease')[0];
	      increase.addEventListener('click', function (e) { increaseValue(e, quantityAmount); });
	      decrease.addEventListener('click', function (e) { decreaseValue(e, quantityAmount); });
	    }

	    function init() {
	        for (var i = 0; i < quantity.length; i++ ) {
						createBindings(quantity[i]);
	        }
	    };

	    function increaseValue(event, quantityAmount) {
	        value = parseInt(quantityAmount.value, 10);

	     

	        value = isNaN(value) ? 0 : value;
	        value++;
	        quantityAmount.value = value;
			promeniUkupno(quantityAmount);
	    }

	    function decreaseValue(event, quantityAmount) {
	        value = parseInt(quantityAmount.value, 10);

	        value = isNaN(value) ? 0 : value;
	        if (value > 0) value--;

	        quantityAmount.value = value;
			promeniUkupno(quantityAmount);
	    }
	    
	    init();
		
	};
	sitePlusMinus();
	

})()

function changeNav(){
    let sve = document.querySelectorAll('.nav-item');
	var pathname = window.location.pathname;

	if(!document.URL.includes(pathname)){
    for(let i of sve){
		
		if(document.URL.includes(i.getAttribute('value').toLowerCase())){
			
			i.classList.add('active');    
		}
		else{
			i.classList.remove('active');
		}
		if(document.URL.toLowerCase() == i.getAttribute('value').toLowerCase()){
			
			i.classList.remove('active');
		}
    }
}

	
}
if(!document.URL.includes('oneproduct')){
    changeNav();
}

function promeniUkupno(el){
	let el2 = el.parentNode;
	let el3 = el2.parentNode;
	let cn2 = 'cenaProizvoda'+el3.getAttribute('id');
	let cena = document.getElementById(cn2).innerHTML.split(" ")[0];
	let  id  = 'ukupnoSaKolicinom' + cena;
	let novaCena;
	novaCena = parseInt(cena) * parseInt(el.value);
	document.getElementById(id).innerHTML = `${novaCena} KM`;
	ceneZaTotal();
}

function ceneZaTotal(){
	let sve = document.querySelectorAll('.ceneZaTotal');
	let suma =0;
	for(let i of sve){
		suma += parseFloat(i.innerHTML);
	}
	document.querySelector('#cenaTotal').innerHTML= `${suma} KM`;
}
function cenaTotalCheckout(){
	let sve = document.querySelectorAll('.cenaProd');
	let suma =0;
	for(let i of sve){
		suma += parseFloat(i.innerHTML);
	}
	
	document.querySelector('#cenaTotalCheckout').innerHTML= `${suma} KM`;
	document.querySelector("#hiddenCenaTotal").value = `${suma}`;
	if(suma==0){
		document.querySelector('.btnOnemoguciti').disabled = 'true';
	}
}

if(document.URL.includes('cart')){
	ceneZaTotal();
	}

if(document.URL.includes('checkout')){
cenaTotalCheckout();
}

function iskljuciPoruku(el){
	let el2 = el.parentNode;
	el2.style.display="none";
}
function CenaTotalKupiOdmah(){
	
	if(document.querySelector('.modal').style.display=="block"){
		cenaTotalCheckout();
	}
}


function productsAllPoruci(){
	let a = '&';
	let div = document.querySelector('.productsDataReservation');
	let divChild  = div.childNodes;
	for(let i=0; i < divChild.length;i++){
		if(i%2!=0 && i < divChild.length - 2){
			
		
		a += divChild[i].textContent + '&'; 
		
	}
	}
	let s='';
	let t = a.split("&");
	for(let i=1; i<t.length - 1;i++){
		let d = t[i].split('\t');
		for(let j of d){
		
			s+= j.trim() + ' ';
		}
		s+='&';
		
	
	
	}
	document.querySelector('#addProd').value=s;
}

function editUser(id,el){
	let div = document.querySelector('#editDivUser');
	el.innerHTML = '<i class="fa-solid fa-xmark fa-lg"></i>';
	el.setAttribute('onclick',`zatvoriIks(this,${id})`);
	for(let i of users){
		
		if(i.id == id){
			div.innerHTML = `
			<i style="display:inline-block; width:6%;"  class="fa-solid fa-lg fa-user" ></i><input value="${i.name}" style="border:none;border-bottom:1px solid black;border-radius:0;width:92%;display:inline-block;" class="form-control" name="inputName">
			<i style="display:inline-block; width:6%;"  class="fa-solid fa-lg fa-envelope"></i><input value="${i.email}" style="border:none;border-bottom:1px solid black;border-radius:0;width:92%;display:inline-block;" class="form-control" name="inputEmail">
			<i style="display:inline-block; width:6%;"  class="fa-solid fa-lg fa-phone"></i><input value="${i.phone}" style="border:none;border-bottom:1px solid black;border-radius:0;width:92%;display:inline-block;" class="form-control" name="inputPhone">
			<i style="display:inline-block; width:6%;"  class="fa-solid fa-lg fa-location-dot"></i><input value="${i.address}" style="border:none;border-bottom:1px solid black;border-radius:0;width:92%;display:inline-block;" class="form-control" name="inputAddress">
				<button class="btn">Sačuvaj</button>

			`;
		}
	}
}

function zatvoriIks(el,id){
	let div = document.querySelector('#editDivUser');
	el.innerHTML = '<i class="fa-solid fa-pen-to-square fa-lg"></i>';
	el.setAttribute('onclick',`editUser(${id},this)`);
	for(let i of users){
		
		if(i.id == id){
			div.innerHTML = `
			<li class="mt-3"><i  class="fa-solid fa-lg px-2 fa-user" ></i> ${i.name} </li>
			<li class="mt-3"><i  class="fa-solid fa-lg px-2 fa-envelope"></i>	 ${i.email} </li>
			<li class="mt-3"><i  class="fa-solid fa-lg px-2 fa-phone"></i> ${i.phone} </li>
			<li class="mt-3"><i  class="fa-solid fa-lg px-2 fa-location-dot"></i> ${i.address} </li>
				

			`;
		}
	}
}


function pretrazi(html){
	
	let ispis = document.querySelector('#sveIspisRacuni');
	ispis.innerHTML = '';
	let a = ['$','$'];
	for(let i of reservation){
		if(html.value.includes('/')){
			a = html.value.split('/');
		}
		
		
		if(i.name.trim().toLowerCase().includes(html.value.trim().toLowerCase()) || i.name.trim().toLowerCase().includes(a[1].trim().toLowerCase())){
		 
			ispis.innerHTML +=`<span class="spanDateNone" id="${i.email}" style="width:90%;"><h5> ${i.created_at.split('T')[0]} - ${i.name} / ${i.email} / ${i.phone} / ${i.address}  <hr>  </h5></span>`;
			let a = i.products.split('&');
			
			let string ='';
			for(let k of a){
				for(let j of product){
					
					if(j.name.trim().toLowerCase() == k.split('x')[0].trim().toLowerCase()){
						
						if(i.stanjePorudzbine == null){
						
							string = `<a href="updateReservationStanje/${i.id}" class="btn btn-warning" >PRIMLJENO</a>`;
							
						}
						else if(i.stanjePorudzbine == 'PRIMLJENO'){
							string = `<a href="updateReservationStanjePOSLATO/${i.id}" class="btn btn-success" >POSLATO </a>`

						}
						else if(i.stanjePorudzbine == 'POSLATO'){
							string = `<span class="p-3" style="background-color:#f37a1f; color:white; border-radius:7px;">Porudzbina je poslata korisniku. <i class="fa-solid fa-truck fa-lg px-2" style="opacity:0.6;"></i></span>`
						}	else if(i.stanjePorudzbine == 'OTKAZANO'){
							string = `<span class="p-3 bg-secondary" style=" color:white; border-radius:7px;">Porudzbina je otkazana.  <i class="fa-solid fa-phone-slash fa-lg px-2 " style="opacity:0.6;"></i>   </span>`

						}else{
							string = `<span class="p-3" style="background-color:#f37a1f; color:white; border-radius:7px;">Porudzbina je poslata korisniku. <i class="fa-solid fa-truck fa-lg px-2" style="opacity:0.6;"></i></span>`;
						}
						ispis.innerHTML +=` 	
						<div class="col-11 mb-3">
						<div class="row mt-2">
                      <div class="col-md-6 col-sm-6 col-10 offset-1 offset-sm-0">
							${j.category}
						</div>
                      <div class="col-md-6 col-sm-6 col-10 offset-1 offset-sm-0">
							${k.split(j.category)[0]} = <b>${k.split(j.category)[1]}</b>
							</div>
							
							</div>
							<hr>
						`;	
					}		
					
				}

			}
			let string1 = '';
			let string2 = '';
			if(i['stanjePorudzbine'] == 'PRIMLJENO' || i['stanjePorudzbine'] == 'POSLATO' || i['stanjePorudzbine'] == 'OTKAZANO'){

			}
					else{
					string2 = `<a href="deleteReservation/${i.id}" style="position: absolute; right:20px;" class="btn btn-danger">OBRISI</a>
					<a href="otkaziReservation/${i.id}'" style="position: absolute; right:120px;" class="btn btn-danger">OTKAZI</a>`
					}
			if(i.napomena != null){
			 string1 = `<span style="font-weight:bolder;width:auto;">* ${i.napomena}</span>`;
			}
			  else{
				string1 = '<span>Napomena je prazna!</span>';
			  }
			
			ispis.innerHTML +=`
			<div  class="col-11 m-3">
			<div class="row">
			<div class="col-sm-6 col-10 offset-1 offset-sm-0">
			${string1}
			</div>
			<div class="col-sm-6 col-10 offset-1 offset-sm-0">
			<p style="text-align:right;">  Ukupan iznos porudzbine <span style="font-weight:bolder; font-size:22px; margin-left:10px;"> ${i.ukupnasuma} KM</span> </p>
		</div>
		</div>
		</div>
			<div class="row mb-5 mt-3" style="width:93%;">
            
					<div class="col-6 mb-3">
					${string}
					</div>
			   
					<div style="position: relative;" class="col-12 col-sm-6  mb-3">
					${string2}
				  </div>
				  </div>`;
			str = i.email
			brisiIme(str);
			console.log(str);
		}
		
	}		
	
}

function brisiIme(el){

	let addsd = document.querySelectorAll('.spanDateNone');
		
		for(let d of addsd){

			str1 = d.getAttribute('id');

			if(str1.toLowerCase().trim() == el.toLowerCase().trim()){
				
				d.style.display="block";
				//console.log(el.toLowerCase().trim());
			}
			else{
				d.style.display="none";
			}					
		}
		}



function izmeniFish(el,id){

	let div = el.parentNode;

	

	div.innerHTML = `
	
		<input value="${div.childNodes[0].textContent.trim().split(" ")[0]}" class="form-control mr-3" name="izmenaFish" style="width:20%; display:inline-block;">
		<button class="btn"> <i class="fa-solid fa-square-check fa-lg"></i></button>
		<button onclick="closeIzmeniFish(this,${id})" class="btn"> <i class="fa-solid fa-xmark fa-lg"></i></button>

	`;
}

function closeIzmeniFish(el,id){
	let div = el.parentNode;
	
	
	for(let i of fish){
	if(i.id == id){
		div.innerHTML = `
		<span><p style="display:inline-block; width:20%;"> ${i.kol} KG</span> </p>  <button onclick="izmeniFish(this,${i.id})" class="btn"><i class="fa-solid fa-pen-to-square"></i></button> 
                
                 
		<a href="deleteFish/${i.id}" class="btn fishdelete"><i class="fa-solid fa-trash"></i></a> 
	`;
	}
	}

}

function closeIzmeniProizvod(el,id){
	
	let div = el.parentNode;
	let divP = div.parentNode;
	
	for(let i of product){
	if(i.id == id){
		divP.childNodes[9].innerHTML = `CenaIzmena" style="width:25%; margin-left:auto; display:inline-block;" name="izmenaProductCena"> <span>KM</span>
			
	
			`;
		}
	}
	
	document.querySelector("#ads").setAttribute('action', `updateProduct/${id}`);
	
	divP.childNodes[11].innerHTML = `<button class="btn" form="ads" > <i class="fa-solid fa-square-check fa-lg"></i></button>`;
	divP.childNodes[13].innerHTML = `<button class="btn" onclick="closeIzmeniProizvod(this,${id})" > <i class="fa-solid fa-xmark fa-lg"></i></button> `;

}

function pretraziProzivode(el){
	let br=1;
	let html = document.querySelector('#pretraziProizvod');
	html.innerHTML = '';
	for(let i of product){
		if(el.value.includes('/')){
			let a = el.value.split('/');
			if(i.name.trim().toLowerCase() == a[0].trim().toLowerCase() && i.category.trim().toLowerCase() == a[1].trim().toLowerCase()){
				let photo = i.images.split(',');
				html.innerHTML += `
				<tr style="border-bottom:1px solid grey;">
				<th scope="row">${br}</th>
				<td style="width:150px;"><img src="public/files/${photo[1]}" style="width:60%;height:60px;" alt=""></td>
				<td>${i.name}</td>
				<td>${i.category}</td>
				<td style="text-align:right;">${i.price} KM</td>
				<th><a style="cursor:pointer;"  onclick="editProduct(this,${i.id})"><i class="fa-solid fa-pen-to-square"></i></a></th>
				<th><a href="deleteProduct/${i.id}"><i class="fa-solid fa-trash"></i></a></th>
			  </tr>
				`;
				br++;
			}
		}
		if(i.name.toLowerCase().includes(el.value.trim().toLowerCase()) || i.category.toLowerCase().includes(el.value.trim().toLowerCase())){
		
			let photo = i.images.split(',');
			html.innerHTML += `
			<tr style="border-bottom:1px solid grey;">
			<th scope="row">${br}</th>
			<td style="width:150px;"><img src="public/files/${photo[1]}" style="width:60%;height:60px;" alt=""></td>
			<td>${i.name}</td>
			<td>${i.category}</td>
			<td style="text-align:right;">${i.price} KM</td>
			<th><a style="cursor:pointer;"  onclick="editProduct(this,${i.id})"><i class="fa-solid fa-pen-to-square"></i></a></th>
			<th><a href="deleteProduct/${i.id}"><i class="fa-solid fa-trash"></i></a></th>
		  </tr>
			`;
			br++;
		}
	}

}

function selectShopFilter(el){

	let divP = el.parentNode;
	let chd = divP.childNodes;
	let brnam;
	let br=0;
	let d=0;
	for(let i of chd){
		if(d%2!=0 && d<6){
			if(i.style.opacity == '1'){
				brnam = i.getAttribute('value');
			}
		}
		d++;
	}
	let html = document.querySelector('#JSispisShopFilter');
	if(el.value.trim().toLowerCase() == 'sve kategorije'){
		html.innerHTML = '';
		
		for(let i of category){
			br=0;
			brnamKategorija=0;
			for(let s of product){
				if(s.category == i.name){
					brnamKategorija++;
				}
			}
			if(brnamKategorija != 0){
				html.innerHTML += `<span id="${i.name}cat"><h3  class="mt-5">${i.name}</h3> <hr></span>`;
			}
				for(let j of product){
					
					
					if(i.name == j.category && brnam == j.brend){
						let a = j.images.split(',');
						html.innerHTML += `		
			
						
						<!-- Single Product -->
						<div class="col-6  offset-sm-0 col-sm-6 col-md-4 col-lg-3">
								<div id="product-1" class="single-product singlPr px-3">
										<div class="part-1">
											<img style="max-height: 100%;
    max-width: 100%;
    width: auto;
    height: auto;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;" src="public/files/${a[1]}" alt="">
												<ul>
														<li><a href="add_to_cart/${j.id}"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="oneproduct/${j.id}"><i class="fas fa-eye"></i></a></li>
														
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title text-center" ><span style="border-bottom:0px; border-top:0px;"  class="spanCardProduct">${j.name} </span></h3>
												<h4 class="product-price text-center" style="width:100%;"><span style="border-top:0px; font-weight:100;" class="spanCardProduct">${j.price}  KM </span></h4>
										</div>
								</div>
						</div>
						
		`;
		br++;
					}
				}
			
}
	
}
else{
	for(let i of category){
		if(i.name.trim().toLowerCase() == el.value.trim().toLowerCase()){
			br=0;
			html.innerHTML = `<span id="${i.name}cat"><h3  class="mt-5">${i.name}</h3> <hr></span>`;
					
			for(let j of product){
				if(i.name == j.category && brnam == j.brend){
					let a = j.images.split(',');
					html.innerHTML += `		
		
					
					<!-- Single Product -->
				<div class="col-6  offset-sm-0 col-sm-6 col-md-4 col-lg-3">
								<div id="product-1" class="single-product singlPr px-3">
									<div class="part-1">
										<img style="max-height: 100%;
    max-width: 100%;
    width: auto;
    height: auto;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;" src="public/files/${a[1]}" alt="">
											<ul>
													<li><a href="add_to_cart/${j.id}"><i class="fas fa-shopping-cart"></i></a></li>
													<li><a href="oneproduct/${j.id}"><i class="fas fa-eye"></i></a></li>
													
											</ul>
									</div>
									<div class="part-2">
											<h3 class="product-title text-center" ><span style="border-bottom:0px; border-top:0px;"  class="spanCardProduct">${j.name} </span></h3>
											<h4 class="product-price text-center" style="width:100%;"><span style="border-top:0px; font-weight:100;" class="spanCardProduct">${j.price}  KM </span></h4>
									</div>
							</div>
					</div>
					
	`;
	br++;
				}
			}
			if(br==0){
				document.getElementById(`${i.name}cat`).style.display="none";
			}

		}
	
	}
}
}

function pretraziImenaShopFilter(el){


	let html = document.querySelector('#JSispisShopFilter');
	html.innerHTML = '';
	let br=0;
	if(el.value==''){
		for(let i of category){
			
				br=0;
			html.innerHTML += ` <span id="${i.name}cat"><h3  class="mt-5">${i.name}</h3> <hr></span>`;
					
			for(let j of product){
				if(i.name == j.category){
					let a = j.images.split(',');
					html.innerHTML += `		
		
					
					<!-- Single Product -->
				<div class="col-6  offset-sm-0 col-sm-6 col-md-4 col-lg-3">
								<div id="product-1" class="single-product singlPr px-3">
									<div class="part-1">
										<img style="max-height: 100%;
    max-width: 100%;
    width: auto;
    height: auto;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;" src="public/files/${a[1]}" alt="">
											<ul>
													<li><a href="add_to_cart/${j.id}"><i class="fas fa-shopping-cart"></i></a></li>
													<li><a href="oneproduct/${j.id}"><i class="fas fa-eye"></i></a></li>
													
											</ul>
									</div>
									<div class="part-2">
											<h3 class="product-title text-center" ><span style="border-bottom:0px; border-top:0px;"  class="spanCardProduct">${j.name} </span></h3>
											<h4 class="product-price text-center" style="width:100%;"><span style="border-top:0px; font-weight:100;" class="spanCardProduct">${j.price}  KM </span></h4>
									</div>
							</div>
					</div>
					
	`;
	br++;
				}
			}
			if(br==0){
				document.getElementById(`${i.name}cat`).style.display="none";
			}
			


}
	}	
	else{
	for(let i of product){
		if(i.name.trim().toLowerCase().includes(el.value.trim().toLowerCase())){
			let a = i.images.split(',');
			html.innerHTML += `		
		
					
					<!-- Single Product -->
				<div class="col-6  offset-sm-0 col-sm-6 col-md-4 col-lg-3">
								<div id="product-1" class="single-product singlPr px-3">
									<div class="part-1">
										<img style="max-height: 100%;
    max-width: 100%;
    width: auto;
    height: auto;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;" src="public/files/${a[1]}" alt="">
											<ul>
													<li><a href="add_to_cart/${i.id}"><i class="fas fa-shopping-cart"></i></a></li>
													<li><a href="oneproduct/${i.id}"><i class="fas fa-eye"></i></a></li>
													
											</ul>
									</div>
									<div class="part-2">
											<h3 class="product-title text-center"><span style="border-bottom:0px; border-top:0px;" class="spanCardProduct">${i.name} </span></h3>
											<h4 class="product-price text-center" style="width:100%;"><span style="border-top:0px; font-weight:100;" class="spanCardProduct">${i.price}  KM </span></h4>
									</div>
							</div>
					</div>
					
	`;
		}
	}
}

}


function showVal(){
	let min = document.querySelector('.min');
	let max = document.querySelector('.max');
	let html = document.querySelector('#JSispisShopFilter');
	html.innerHTML = '';
	let br=0;

	let all = document.querySelectorAll('.product-price');
	/* for(let i of all){
	
		if(parseFloat(i.textContent.split(' ')[0]) >= parseFloat(min.value) && parseFloat(i.textContent.split(' ')[0]) <= parseFloat(max.value)){
			let divP = i.parentNode;
			let divPP = divP.parentNode;
			divPP.parentNode.style.display="block";
		}
		else{
			let divP = i.parentNode;
			let divPP = divP.parentNode;
			divPP.parentNode.style.display="none";
			
		}
	} */


	let brnam;
	let brnd = document.querySelectorAll('.filterBrendKnow');
	let d=0;
	for(let i of brnd){
		
			if(i.style.opacity == '1'){
				brnam = i.getAttribute('value');
			
		}
		
	}
	for(let i of category){
			
		br=0;
	html.innerHTML += `<span id="${i.name}cat"><h3  class="mt-5">${i.name}</h3> <hr></span>`;
			
	for(let j of product){
		if((i.name == j.category) && (parseFloat(j.price) >= parseFloat(min.value) && parseFloat(j.price) <= parseFloat(max.value)) && j.brend == brnam ){
			let a = j.images.split(',');
			html.innerHTML += `		

			
			<!-- Single Product -->
			<div class="col-6  offset-sm-0 col-sm-6 col-md-4 col-lg-3">
								<div id="product-1" class="single-product singlPr px-3">
							<div class="part-1">
								<img style="max-height: 100%;
    max-width: 100%;
    width: auto;
    height: auto;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;" src="public/files/${a[1]}" alt="">
									<ul>
											<li><a href="add_to_cart/${j.id}"><i class="fas fa-shopping-cart"></i></a></li>
											<li><a href="oneproduct/${j.id}"><i class="fas fa-eye"></i></a></li>
											
									</ul>
							</div>
							<div class="part-2">
									<h3 class="product-title text-center" ><span style="border-bottom:0px; border-top:0px;"  class="spanCardProduct">${j.name} </span></h3>
									<h4 class="product-price text-center" style="width:100%;"><span style="border-top:0px; font-weight:100;" class="spanCardProduct">${j.price}  KM </span></h4>
							</div>
					</div>
			</div>
			
`;
br++;
		}
	}
	if(br==0){
		document.getElementById(`${i.name}cat`).style.display="none";
	}
	


}
	
}
let previousBrend;
function opacityBrend(el){
	
	let div = el.parentNode;
	let divc = div.childNodes;
	let br=0;
	for(let i of divc){
		if(br%2!=0 && br <= 5){
		
		i.style.opacity = "0.3";
		
	}
	br++;
}
	el.style.opacity = "1";
}

function opacityBrend2(el){
	if(previousBrend == undefined){
		previousBrend = 'Stihl';
	}
	let div = el.parentNode;
	let divc = div.childNodes;
	let br=0;
	for(let i of divc){
		if(br%2!=0 && br <= 5){
		if(i.getAttribute('value').trim() == previousBrend){
		i.style.opacity = "1";
		}
		else{
			i.style.opacity = "0.3";
		}
		
	}
	br++;
}
	

}

function promeniBrenduPretrazi(el){
	let ald = document.querySelectorAll('.filterBrendKnow');
	for(let i of ald){
		if(i.style.opacity == "1"){
		previousBrend = i.getAttribute('value'); 
		}
	}
	let br=0;
	let html = document.querySelector('#JSispisShopFilter');
	html.innerHTML='';
	for(let i of category){
			
				br=0;
		html.innerHTML += `<span id="${i.name}cat" ><h3  class="mt-5">${i.name}</h3> <hr></span>`;
				
		for(let j of product){
			if(i.name == j.category && j.brend == el.getAttribute('value')){
				let a = j.images.split(',');
				html.innerHTML += `		
				<!-- Single Product -->
				<div class="col-6  offset-sm-0 col-sm-6 col-md-4 col-lg-3">
								<div id="product-1" class="single-product singlPr px-3">
								<div class="part-1">
									<img style="max-height: 100%;
    max-width: 100%;
    width: auto;
    height: auto;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;" src="public/files/${a[1]}" alt="">
										<ul>
												<li><a href="add_to_cart/${j.id}"><i class="fas fa-shopping-cart"></i></a></li>
												<li><a href="oneproduct/${j.id}"><i class="fas fa-eye"></i></a></li>
												
										</ul>
								</div>
								<div class="part-2">
										<h3 class="product-title text-center" ><span style="border-bottom:0px; border-top:0px;"  class="spanCardProduct">${j.name} </span></h3>
										<h4 class="product-price text-center" style="width:100%;"><span style="border-top:0px; font-weight:100;" class="spanCardProduct">${j.price}  KM </span></h4>
								</div>
						</div>
				</div>
				
`;
br++;
			}
			
		}
	
		if(br==0){
			document.getElementById(`${i.name}cat`).style.display="none";
		}
		


}


}

function proveraProduktIsti(){
	let name = document.querySelector('#nameProductReturn').value;
	let kategorija = document.querySelector('#katProdukt').value;
	console.log(kategorija);
	for(let i of product){
		if(kategorija.trim().toLowerCase() == i.category.trim().toLowerCase()){
			if(name == i.name){
				alert('Proizvod sa unetim imenom vec postoji!');
				return false;
			}
		}
	}
	return true;
}

function editProduct(el,id){
    let price = '';
    for(let i of product){ 
        if(id == i.id){
            price = i.price;
        }
    }
    let elParent = el.parentNode;
    let parent = el.parentNode;
    let child = parent.parentNode.childNodes;
    child[9].innerHTML = `<td><input form="adsss" id="izmenaCena"  name="izmenaProductCena" style="text-align:center;background-color:transparent;border:none;border-bottom:1px solid black;border-radius:0px;" type="text" value="${price}"></td>`;
    child[11].innerHTML = `<a form="ads" style="cursor:pointer;" onclick="addParametre(this,${id})"><i class="fa-solid fa-square-check fa-lg"></i></a>`;
     child[13].innerHTML = `<a style="cursor:pointer;" onclick="CloseUpdatePrice(this,${price},${id})"><i class="fa-solid fa-close fa-lg"></i></a>`;
}
function addParametre(el,id){
    
   let price = document.querySelector('#izmenaCena').value;
    el.href = `updateProduct/${id}/${price}`;
    
}
function CloseUpdatePrice(el,price,id){

    let elParent = el.parentNode;
    let parent = el.parentNode;
    let child = parent.parentNode.childNodes;
    child[9].innerHTML = `<td style="text-align:right;">${price} KM</td>`;
     
    child[11].innerHTML = `<th><a style="cursor:pointer;" onclick="editProduct(this,2)"><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i></a></th>`;
     child[13].innerHTML = `<th><a href="{{asset('deleteProduct/${id}')}}"><i class="fa-solid fa-trash" aria-hidden="true"></i></a></th>`;
}


function promeniSliku(name){
    document.querySelector('#MainPhotoOneProduct').src = `http://sumooprema.ba/public/files/${name}`;
}
