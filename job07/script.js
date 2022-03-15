function jourtravaille(date)
{

    let ddate = new Date(date)
    
    let jour = ddate.getDate()

    let mois = ddate.getMonth()

    let annee = ddate.getFullYear()

    let ferie = 
    [
        "2020/01/01",
        "2020/04/13",        
        "2020/05/01",        
        "2020/05/08",        
        "2020/05/21",        
        "2020/06/01",        
        "2020/07/14",        
        "2020/08/15",      
        "2020/09/01",        
        "2020/11/11",
        "2020/12/25"
    ]

    let moidlannee = 
    [
        "Janvier", 
        "Fevrier", 
        "Mars", 
        "Avril", 
        "Mai", 
        "Juin", 
        "Juillet", 
        "Aout", 
        "Septembre", 
        "Octobre", 
        "Novembre", 
        "Décembre"
    ];

    
    if(ferie.includes(ddate) == true) 
    {  
        console.log("le " + " " + jour + " " + moidlannee[mois] + " " + annee + " est un jour ferié" )
    }
    else if(ddate.getDay() == 6 || ddate.getDay() == 0) 
    {
        console.log("non,"+ " " + jour + " " + moidlannee[mois] + " " + annee + " " + "est un Weekend")
    }
    else 
    {
        console.log("oui," + " " + jour + " " + moidlannee[mois] + " " + annee + " " + "est un jour travaillé")
    }
}

jourtravaille("2020/05/01")
