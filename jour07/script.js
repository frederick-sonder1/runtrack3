document.addEventListener('DOMContentLoaded', ()=>
{
    let btn = document.getElementById('btnrbt')
    let p = document.querySelectorAll('p')
    console.log(p)

    btn.addEventListener('click', function()
    {
        p[3].innerHTML = ""
        p[3].innerHTML ="<p>J’ai vu tant de choses, que vous, humains, ne pourriez pas croire… De grands navires en feu surgissant de l’épaule d’Orion, j’ai vu des rayons fabuleux, des rayons C, briller dans l’ombre de la Porte de Tannhaüser. Tous ces moments se perdront dans l’oubli, comme les larmes dans la pluie. Il est temps de mourir.</p>"
    })
})



