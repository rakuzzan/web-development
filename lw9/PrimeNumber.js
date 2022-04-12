function isPrime(num)
{
    if (Array.isArray(num))
    {
        for(let i = 0; i < Array.length; i++)
        {
            for(let k = 2, s = Math.sqrt(num[i]); k <= s; k++)
                if(num[i] % k === 0)
                    return console.log(num[i] + " isn't Prime number");
            console.log(num[i] + " is Prime number") ;
        }
    }
    else
    {
        for(let j = 2, s = Math.sqrt(num); j <= s; j++)
            if(num % j === 0)
                return console.log(num + " isn't Prime number");
        console.log(num + " is Prime number") ;
    }

}