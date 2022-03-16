$(Document).ready(function()
{
    let html = $('html')
    let p = $('p')
    let btn = $('#button')
    let btn2 = $('#button2')

    btn.on('click', function()
    {
        p.add("<p>le $ est un bon élément monétaire. Le # de twitter est une bonne I D. Il faudra faire le point avec la classe pour cacher cet élément.</p>").appendTo(document.body)
    })
    btn2.on('click', function()
    {
        html.removeAttr('style').hide()
    })
})