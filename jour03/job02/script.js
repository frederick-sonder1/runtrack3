$(document).ready(function() {

    let btn = $('#mel')   
    let images = $('img')

    btn.on('click', function()
    {
        if ($('img').parent().attr('id') == 'rangee')
        {
            $('img').sort(()=>Math.random()-0.5).appendTo('#melangee')    
        }        
    })

    $('img').on('click', function()
    {
        if ($('img').parent().attr('id') == 'melangee')
        {
            for (let i = 0; i <=images.length; i++)
            {
                let src = images[i].attr('src')
                let valeur = $(this).attr('src')
                console.log(src)
                let img = $('img')
                let move = $('img').attr('valeur')
                img.on('click', function ()
                {
                    $('valeur').add(move).appendTo('#rangee')
                    // let valeur = $(this).attr('src')
 
                    // valeur.$('src').appendTo('rangee').remove('#melangee')

                })                                                                                                            
            }
        }
    })
})