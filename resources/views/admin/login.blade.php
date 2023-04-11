<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/wepik-hand-drawn-monocolor-publisher-logo-20221023-95419.svg" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;800&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <title>Authorization</title>
  <link rel="stylesheet" href=" {{ url('css/autor.css') }} ">
  <link rel="stylesheet" href=" {{ url('css/reset.css') }} ">
</head>

<body style="overflow-x: hidden;">
  <form action="<?= url('/login') ?>" method="GET">
    <h2>Авторизация</h2>
    <h3>Логин</h3>
    <input type="text" name="name">
    <h3>Пароль</h3>
    <input type="password" name="password">
    <button type="submit">Войти</button>
  </form>
</body>
</html>