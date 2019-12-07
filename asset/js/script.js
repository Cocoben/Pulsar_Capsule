//Menu Burger

let buttonBurger = document.querySelector('#menuBurger')

let nav = document.querySelector('nav')
let statNav = 0

buttonBurger.addEventListener('click', () =>{
    event.preventDefault();
    if(statNav == 0){
        nav.style.visibility = 'visible'
        statNav++
        console.log('nav visible')
    }else{
        nav.style.visibility = 'hidden'
        statNav = 0
        console.log('nav caché')

    }
})
 



