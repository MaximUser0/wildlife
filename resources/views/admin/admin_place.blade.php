<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=" {{ url('css/reset.css') }} ">
    <link rel="stylesheet" href=" {{ url('css/adminmaster.css') }} ">
    <title>Master</title>

</head>

<body style="overflow-x: hidden;">

    <header>

        <nav>
            <div class="nav1">

                <li><a class="master" href="<?= url('/admin/place') ?>">Места</a></li>
                <li><a class="master" href="<?= url('/admin/tour') ?>">Туры</a></li>
            </div>
            <div class="theader"><a href="<?= url('/') ?>"><img class="logotip"
            src=" {{ url('img/loge.svg') }} " alt="Логотип"></a>

            </div>
            <div class="nav2">
                <li> <a class="reg" href="adminzayavka.html"></a></li>

            </div>
        </nav>
    </header>

    <div class="container4" id="mastersid">
        <a href="adminaddmesto.html"><h2>Добавить место +</h2></a>
        
        <div class="masters">
            <a href="master.html"><div class="mast">
                <img src="img/Rectangle 16.png" alt="">
                <div class="title">
                    <p>Кавказ</p>
                </div>
                <div class="name">
                    <a href="adminredmesto.html"><button class="red">Редактировать</button></a>
                    <button class="x">x</button>
                </div>
            </div></a>
            

        </div>
</body>

</html>