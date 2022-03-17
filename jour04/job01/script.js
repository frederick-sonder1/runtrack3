document.addEventListener('DOMContentLoaded', ()=>
{
    let btn = document.getElementById('button')
    let p = document.createElement('p');
    // let body = document.getElementsByTagName('body')

    btn.addEventListener('click', function(){
        fetch('expression.txt')
        .then((response) =>response.text())
        .then((response) => {
            console.log(response)
            let p = document.createElement('p');
            p.innerHTML=response
            document.body.append(p)
        })
        .catch((error) => console.log(error))
    })
})