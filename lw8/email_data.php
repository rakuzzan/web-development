<?php
 function writeData()
 {
     $email=substr($_POST['email'],0, 250);
     $fileName=("data/$email.txt");
    if (file_exists($fileName))
    {
        $f = fopen($fileName,'r');
        $file = file($fileName);
        for ($i = 0;$i < 3;$i++)
        {
            echo($file[$i]."<br>");
        }
        fclose($f);
    }
    else {
        echo "данного файла не сущесвтует";
    }
 }
 writeData();