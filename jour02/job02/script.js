document.addEventListener('DOMContentLoaded', (Event)=>
{
    let button = document.getElementById('button')
    let article = document.querySelector('article')
    article.style.display = 'none'
    
    button.addEventListener('click', function showHide()
    {
        if(article.style.display == 'none')
            article.style.display = 'block'
        
        else
            article.style.display = 'none'
    })
})
    