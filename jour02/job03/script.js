// Créez un button ayant comme id “button”. Créez une balise <p> ayant
// comme id “compteur” et contenant “0”. Ce contenu doit évoluer
// proportionnellement au nombre d'événements click reçu par le bouton.
// Vous ne devez pas utiliser “onclick()” dans votre html. La fonction
// permettant d’effectuer la modification doit s'appeler “addone()”.
document.addEventListener('DOMContentLoaded', (Event)=>
{
    let button = document.getElementById('button')
    let compt = document.getElementById('compteur')
    let count = 0

    button.addEventListener('click', function addone()
    {
        compt.innerHTML = ++count
    })
})