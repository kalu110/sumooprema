function OtvoriAsideMenu(){
  if( document.querySelector('.sidenav').style.display == "block"){
    document.querySelector('.sidenav').style.display = "none"
  }else{
    document.querySelector('.sidenav').style.display = "block";
    document.querySelector('.sidenav').style.position = "absolute";
  document.querySelector('.sidenav').style.top = "0";
  document.querySelector('.sidenav').style.left = "0";
  document.querySelector('.sidenav-header').innerHTML +=`<span onclick="zatvoriAside()" style="position:absolute; right:15px; top:15px;"><i class="fa-solid fa-close fa-lg" style="color:white;"></i></span>`;
  }
 
  
}
function zatvoriAside(){
  document.querySelector('.sidenav').style.display = "none"
}