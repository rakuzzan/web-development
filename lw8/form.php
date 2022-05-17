<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="form">
        <img src="images/welcome.png" alt="" class="form__image">
        <h2 class="form__text">Записаться на курс</h2>
        <form action="data.php" method="POST" class="form__block">
            <input type="text" name="name" id="email"  class="form__input" placeholder="Ваше имя">
            <input type="email" name="email" id="name"  class="form__input" placeholder="Email">
            <div class="form__dropdown">
                <select name="profession" id="profession" class="form__select" >
                    <option class="disable" selected disabled hidden>Деятельность</option>
                    <option class="form__option">Программист</option>
                    <option class="form__option">Дизайнер</option>
                    <option class="form__option">Маркетолог</option>
                </select>
            </div>
            <div class="form__checkbox">
                <input type="checkbox" required name="checkbox" class="checkbox"> Согласен получать информационные материалы о курсе
            </div>
            <button class="form__button">Записаться на курс</button>
        </form>
    </div>
</body>

</html>