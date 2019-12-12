let jaugeArticle = document.querySelector('.titreArticle span')
let articlePage = document.querySelector('#articlePage')

window.addEventListener('scroll',()=>{
    jaugeArticle.style.width = window.scrollY / (articlePage.scrollHeight - window.innerHeight) * 100 + "%"
})