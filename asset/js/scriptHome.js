let appDrawer = document.querySelector('.petiteDiv')
let cercle = document.querySelector('#rond')
let rectangle = document.querySelector('#rectangle')
let main = document.querySelector('#accueilPage')

const body = document.querySelector("body");


appDrawer.classList.remove('opened')
cercle.classList.remove("hide")

if(document.body.clientWidth <= 768){
  rectangle.style.display="none"
  body.onscroll = function() {scrollFunction()}
}else{
  cercle.classList.add("hide")
  appDrawer.classList.add('opened')
  rectangle.style.display="flex"
}


function scrollFunction(){
  if (window.scrollY > 50) {
      cercle.classList.add("hide")
      rectangle.style.display="flex"
      appDrawer.classList.add('opened')
      console.log('top')
  }else{
    cercle.classList.remove("hide")
    rectangle.style.display="none"
    appDrawer.classList.remove('opened')

  }
}




 
//Scroll Etat

// get elements
const progressBar = document.querySelector(".fill");

// this function increase or decrease the percentage of the element to stretch
function stretch() {
  const pixelScrolled = window.scrollY;
  const viewportHeight = window.innerHeight;
  const totalHeightScrollable = main.scrollHeight;
  // convert pixels to percentage
  const pixelsToPercentage =
    (pixelScrolled / (totalHeightScrollable - viewportHeight)) * 120;
  // set the width of the fluid element.
  progressBar.style.transform = "rotate(" + (30+Math.round(pixelsToPercentage)) + "deg)";
}



let chevron = document.querySelector('#scrollEtat a')
let demiCerlce = document.querySelector('.demiCerlce')
let fill = document.querySelector('.fill')
let arc = document.querySelector('.arc')

demiCerlce.style.background = 'transparent'
fill.style.background = 'transparent'
arc.style.background ='transparent'


function coucou() {
  if (window.scrollY > 50) {
    chevron.style.top='80px'
    demiCerlce.style.background ='#fff'  
    fill.style.background ='#F9F9F9'  
    arc.style.background ='#ACDBE2'  
  }else{
    chevron.style.top='0px'
    demiCerlce.style.background = 'transparent'
    fill.style.background = 'transparent'
    arc.style.background ='transparent'
  }
}


window.addEventListener('scroll', ()=>{
  stretch()
  coucou()
})

