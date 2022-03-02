<?php

header('Content-Type: text/plain');

$email = $_GET['email'];
$firstName = $_GET['first_name'];
$lastName = $_GET['last_name'];
$age = $_GET['age'];

if ($email !== null)
{
    if ($email === '')
    {
        echo 'Введите почту';
    }
    else
    {
        $form = fopen($email . ".txt", "w");
        if ($firstName === '')
        {
           file_put_contents($form,  "First Name\n");
        }
        else
        {
            file_put_contents($form, "First Name" .$firstName. "\n");
        }
        if ($lastName === '')
        {
            file_put_contents($form,  "Last Name\n");
        }
        else
        {
            file_put_contents($form,  "Last Name" . $lastName . "\n");
        }
        file_put_contents($form,  "Email" . $email . "\n");
        if ($age === '')
        {
            file_put_contents($form,  "Age\n");
        }
        else
        {
            file_put_contents($form,  "Age" . $lastName . "\n");
        }    
    } 
}
else
{
    echo 'Введите данные';
}
