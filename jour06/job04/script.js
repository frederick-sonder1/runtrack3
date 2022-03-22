document.addEventListener('DOMContentLoaded',(Event)=>
{
    let burger = document.getElementById('burger')
    let ulpt = document.getElementById('menupetit')
    ulpt.style.display= 'none'

    burger.addEventListener('click', function showHide()
    {
        if(ulpt.style.display == 'none')
            ulpt.style.display = 'block'
            // if (@media > (max-width: 768px))
            // {
            //     ulpt.style.display == 'none'
            // }
        
        else
            ulpt.style.display = 'none'
    })
})