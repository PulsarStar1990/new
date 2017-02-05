<?php
$name = 'Alex';
$birthyear = '1994';
$currentyear = '2017';
$age = $currentyear - $birthyear;
$email_address = 'dreamston18@gmail.com';
$city = 'Химки';
$about_me = 'Я студент)';
 ?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Саша-Студент</title>
        <style type="text/css">
        a, a:hover {
        color: #bbb;
        text-decoration: none;
        </style>
    </head>
    <body>
    <h1>Обо мне...</h1>
    <p>Имя - <?php echo "$name"; ?> </p>
    <p>Возраст - <?php echo "$age"; ?> </p>
    <p>email - <a href="dreamston18@gmail.com"> <?php echo "$email_address"; ?></a> </p>
    <p>Город - <?php echo "$city"; ?></p>
    <p>О себе - <?php echo "$about_me"; ?></p>
    </body>
</html>
