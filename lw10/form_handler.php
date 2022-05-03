<?php
header('Content-Type: text/plain');
function look()
{
   $name = htmlspecialchars($_POST["name"]);
   $email = htmlspecialchars($_POST["email"]);
   $profession = htmlspecialchars($_POST["profession"]);
   $checkbox = $_POST["checkbox"];
   if (!filter_var($email, FILTER_VALIDATE_EMAIL))
   {
      echo 'Проверьте правильность введённого email';
      return;
   }

   if (!$email)
   {
      echo 'Нет параметра email', "\n";
      return;
   }

  if (!$name)
   {
      echo 'Введите имя';
      return;
   }

   if (!$profession)
   {
      echo 'Деятельность не выбрана', "\n";
      return;
   }

   if (!$checkbox)
   {
      echo 'Вы не нажали кнопку согласия', "\n";
      return;
   }

   $fp = fopen("./data/$email.txt", 'w+');
   fwrite($fp, 'Email: ');
   fwrite($fp, $email);
   fwrite($fp, "\n");

   fwrite($fp, 'Имя: ');
   fwrite($fp, $name);
   fwrite($fp, "\n");

   fwrite($fp, 'Деятельность: ');
   fwrite($fp, $profession);
   fwrite($fp, "\n");

   fclose($fp);
}

look();
