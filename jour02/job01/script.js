document.addEventListener('DOMContentLoaded', (Event)=>
{
        
    function citation()
    {
        let button = document.getElementById('button')
        let citation = document.getElementById('citation')

        button.addEventListener('click', (event) =>{
            console.log(citation.textContent)
        })
    }
   
    citation()
})
