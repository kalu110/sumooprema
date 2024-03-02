function addCategory(el){
    el.style.visibility="hidden";
    document.querySelector('.NextCategoryBtn').style.visibility="visible";
    let two = document.querySelector('#categoryTwo');
    two.style.visibility="hidden";
    let first = document.querySelector('#categoryFirst');
    first.style.visibility="visible";
    first.style.opacity="1";
    document.querySelector('.xCategoryAdd').style.display="block";
}

 function categoryClickTwo(el){
    el.style.visibility="hidden";
    document.querySelector('.backButton').style.visibility="visible";
    let two = document.querySelector('#categoryTwo');
    let first = document.querySelector('#categoryFirst');
    first.style.visibility="hidden";
    two.style.visibility="visible";
    two.style.opacity="1";
}

function changeCategory(el){
   
    let html = document.querySelector('.showColumnInputs').children[0];
    html.innerHTML = '';
    let string = '';
    for(let i of category)
   {
    if(i.name == el.value){
        let a = i.column.split(',');
        a.forEach(function (j, index) {
            if(index>0){
            html.innerHTML+=`           <div class="col-10 offset-1 col-lg-3 col-md-3 col-sm-4  offset-sm-0">
            ${j}<input id="${j}" name="${j.replace(/\s/g, '-').toLowerCase()}" class="form-control" type="text"></div>`;
            }
         
        })
    }
   }
}

function iskljuciAddKategoriju(){
    document.querySelector('.backButton').style.visibility="hidden";
    let two = document.querySelector('#categoryTwo');
    let first = document.querySelector('#categoryFirst');
    first.style.visibility="hidden";
    two.style.visibility="hidden";
    document.querySelector('.NextCategoryBtn').style.visibility="hidden";
    document.querySelector('#VratiPrvoKategorijaAdd').style.visibility="visible";
    document.querySelector('.xCategoryAdd').style.display="none";
}

function pretraziKategorije(el){
    let br=1;
	let html = document.querySelector('#ispisKategorija');
	html.innerHTML = '';
	for(let i of category){
		if(i.name.toLowerCase().includes(el.value.trim().toLowerCase())){
            let suma = 0;
            for(let j of product){
                if(i.name == j.category){
                    suma++;
                }
            }
		let a = i['column'].substring(1);
			console.log(a);
			html.innerHTML += `
			<tr style="border-bottom:1px solid grey;">
      <th scope="row">${br}</th>
      <td>${i['name']}</td>
      <td>${a}</td>
      <td>${suma}</td>
     <td><a href="deleteCategory/${i.id}"> <i class="fa-solid fa-trash"></i></a></td>
    </tr>
			`;
			br++;
		}
	}
}