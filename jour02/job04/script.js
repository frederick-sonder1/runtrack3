document.addEventListener('DOMContentLoaded', ()=>
{
    let txt = document.getElementById('keylogger')

    window.addEventListener("keydown", (event)=>
    { 
        
        if (txt.focus){
            txt.value = txt.value + event.key
        }
        else{
            txt.value = txt.value
        }
    })
})