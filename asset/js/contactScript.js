// Recherche du bouton et du coordonnees dans l'arbre DOM.
let coordonnees = document.getElementById('coordonnees');
let presse = document.getElementById('contactPresse');
let button = document.querySelector('.button');
let button2 = document.querySelector('.button2');


// Installation d'un gestionnaire d'évènement clic sur le bouton.
button.addEventListener('click', onClickButton);
button2.addEventListener('click', onClickButtonPresse);


function onClickButton()
{
    // La méthode .toggle() va ajouter ou supprimer la classe (tel un interrupteur).
    coordonnees.classList.toggle('hide');
}
function onClickButtonPresse()
{
    // La méthode .toggle() va ajouter ou supprimer la classe (tel un interrupteur).
    presse.classList.toggle('hide');
}

