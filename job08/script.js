function sommenombrepremier(var1, var2)
{
    if ((var1 % 1 === 0) && (var1 % var1 === 0))
    {
        if ((var2 % 1 === 0) && (var2 % var2 === 0))
        {
            if (var1 % var2 === 0)
            {
                console.log(var1+var2)
            }
        }
    } 
}
sommenombrepremier(3,3)