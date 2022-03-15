function sommenombrepremier(var1, var2) 
{
    
    estPremier = true;

    // 1 ne compte pas comme un nombre premier
    if(var1 > 1 && var2 > 1) {
        for(i = 2; i < var1, i < var2; i++) {
            if(var1 % i == 0 && var2 % i == 0) {
                estPremier = false;
                break;
            }
        }

        if(estPremier) {
            return var1 + var2;
        }
        else {
            console.log("L'un des nombres n'est pas premier.");
            return false;
        }
    }
}
console.log(sommenombrepremier(4, 7));