document.addEventListener('DOMContentLoaded', ()=>
{
    function jsonValueKey(value, key){return value[key];}
       
        let value = {
            name: "La Plateforme_", 
            address: "8 rue d'hozier", 
            city: "Marseille", 
            nb_staff: "11", 
            creation:"2019"
        };
        
        
       console.log(jsonValueKey(value,'city')) 

});