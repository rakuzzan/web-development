<?php
function getParams(): ?array{
    if ((isset($_POST['email'])) && (!empty($_POST["email"]))) {
        return array(
            $_POST['name'],
            $_POST['email'],
            $_POST['profession']);} else {
        echo "Нет параметра EMAIL";
        return null;}}
function dataWrite(): void{
    $data = getParams();
    if ($data !== null) {
        $fp = fopen("./data/$data[1].txt", 'w+');
        fwrite($fp, "First Name : $data[0] \n");
        fwrite($fp, "Profession : $data[2] \n");
        fwrite($fp, "Email : $data[1] \n");
        fclose($fp);}}dataWrite();