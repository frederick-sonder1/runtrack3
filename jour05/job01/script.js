window.addEventListener('DOMContentLoaded',()=>
{
    //recuperation des elements
    let nom = document.getElementById('#nom')
    let prenom = document.getElementById('#prenom')
    let mail = document.getElementById('#email')
    let mdp = document.getElementById('#password')
    let mdp2 = document.getElementById('#password2')
    let p = document.querySelectorAll('p')
    let input = document.querySelectorAll('input')

    console.log(p)
    console.log(nom)

    //demande de caractere particuler
    let regexLowerCase = /[a-z]{1,}/
    let regexUpperCase = /[A-Z]{1,}/
    let regexNumber = /[0-9]{1,}/
    let regexMail = /[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9.-]{3,}\.[a-zA-Z]{2,4}/   
    
    nom.addEventListener('keyup' , ()=>
    {   
        console.log(input)
        // console.log(keyup)
        if(regexLowerCase.test(this.value) == true)
        {
            console.log(this.value)
            if (this.value<3)
            {
                console.log(input)

                if(this.value===0)
                {
                    console.log(input)

                    p[0].innerHTML= 'Ce champ ne peut etre vide'
                }
                else
                {
                    p[0].innerHTML= 'Minimun 3 caractere'
                }       
            }
            else
            {
                p[0].innerHTML= ''
            }
        }
    })

    prenom.addEventListener('keyup', function()
    {
        if (this.value <3)
        {
            if(this.value ===0)
            {
                p[1].innerHTML= 'Ce champ ne peut etre vide'
            }
            else
            {
                p[1].innerHTML= 'Minimun 3 caractere'
            }   
        }
        else
        {
            p[1].innerHTML= ''
        }
    })


    // mail.addEventListener('keyup', function()
    // {
    //     if (this.value.length <3)
    //     {
    //         if(this.value.length ===0)
    //         {
    //             p[1].innerHTML= 'Ce champ ne peut etre vide'
    //         }
    //         else
    //         {
    //             p[1].innerHTML= 'Minimun 3 caractere'
    //         }   
    //     }
    //     else
    //     {
    //         p[1].innerHTML= ''
    //     }
    // })


    mdp.addEventListener('keyup', function()
    {
        if (this.value <8)
        {
            if(this.value ===0)
            {
                p[3].innerHTML= 'Ce champ ne peut etre vide'        
            }
            else
            {
                p[3].innerHTML= 'mot de passe trop court'
            }            
        }
        else
        {
            p[3].innerHTML= ''
        }
    })
})