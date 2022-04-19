function isPrime(num)
{
    if (Array.isArray(num))
        for(let i = 0; i < num.length; i++)
            if (num[i] > 3)
                isPrimeNumber(num[i])
            else
                console.log(num[i] + " is Prime number")
    else if (Number.isInteger(num))
    {
        for(let j = 2, s = Math.sqrt(num); j <= s; j++)
            if(num % j === 0)
                return console.log(num + " isn't Prime number")
        console.log(num + " is Prime number")
    }
    else
        console.log("Wrong input")
}

function isPrimeNumber(Numb)
{
    for(let k = 2, s = Math.sqrt(Numb); k <= s; k++)
        if(Numb % k === 0)
            return console.log(Numb + " isn't Prime number")
    console.log(Numb + " is Prime number")
}