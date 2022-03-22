<?php
$email = $_GET["email"] ?? null;
$firstName = $_GET["first_name"] ?? null;
$lastName = $_GET["last_name"] ?? null;
$age = $_GET["age"] ?? null;
$fileName = $email . ".txt";
if ($email !== null)
{
    if ($email !== "")
    {
        if (file_exists($fileName))
        {
            $content = file($fileName);
            if ($firstName)
                {
                    $content[0] = "First name: " . $firstName . "\n";
                }
            if ($lastName)
                {
                    $content[1] = "Last name: " . $lastName . "\n";    
                }
            if ($age)
                {
                    $content[3] = "Age: " . $age;
                }
            $fileMode = fopen($fileName, "w");
            fwrite($fileMode, $content[0]);
            fwrite($fileMode, $content[1]);
            fwrite($fileMode, $content[2]);
            fwrite($fileMode, $content[3]);
            fclose($fileMode);
        }
        else
        {
            $fileMode = fopen($fileName, "w");
            if ($firstName)
            {
                fwrite($fileMode, "First name: " . $firstName . "\n");
            }
            if ($lastName)
            {
                fwrite($fileMode, "Last name: " . $lastName . "\n");    
            }
            fwrite($fileMode, "Email: " . $email . "\n");
            if ($age)
            {
                fwrite($fileMode, "Age: " . $age . "\n");
            }
            fclose($fileMode);
        }
        
    }
    else
    {
        echo("No email");    
    }
}
else
{
    echo("No email");
}