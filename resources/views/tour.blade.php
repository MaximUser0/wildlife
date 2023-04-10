<?php
$features = explode("%" ,$array['features'])
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanuman&family=Inter&family=Ruda:wght@400;500;800;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/tour.css">

    <title><?= $array['title'] ?></title>

</head>

<body style="overflow-x: hidden;">

    <header>

        <nav>
            <div class="nav1">
                <li><a class="main" href="<?= url('/') ?>">WILDLIFE</a></li>
            </div>
            <div class="nav2">
                <li><a class="tour" href="<?= url('/') ?>/#anchor_tour">Туры</a></li>
                <li> <a class="place" href="<?= url('/') ?>/#portfolioid">Места</a></li>
                <li> <a class="cab" href="<?= url('/') ?>/#anchor_about">О нас</a></li>
            </div>
        </nav>
        <div class="hedhed">
            <div class="headtext">
                <h2><?= $array['title'] ?></h2>
                <h3><?= $array['short_description'] ?></h3>
                <p>5 ★★★★★</p>
            </div>
        </div>

        <div class="c1icons">
            <div class="c1ic">
                <img src="../img/icons/icons8-пользователь-100 1.svg" alt="">
                <p><?= $array['people_count'] ?> человек</p>
            </div>
            <div class="c1ic">
                <img src="../img/icons/icons8-календарь-100 1.svg" alt="">
                <p><?= $array['date'] ?> дней</p>
            </div>
            <div class="c1ic">
                <img src="../img/icons/icons8-нет-коннекта-100 1.svg" alt="">
                <p><?= $array['complexity'] ?></p>
            </div>
            <div class="c1ic">
                <img src="../img/icons/icons8-ценник-100 1.svg" alt="">
                <p><?= $array['priсe']/1000 ?> тыс. руб.</p>
            </div>
        </div>
        <div class="c0sec"><div class="c0text">
            <h2>Описание</h2>
            <p><?= $array['description'] ?></p>
        </div><img src="../img/Polygon 7.png" alt=""></div>

    </header>
    <div id="carouselExampleControlsNoTouching" class="carousel slide container5" data-bs-touch="false" data-bs-interval="false">
        <img class="border" src="../img/Rectangle 77 (1).png" alt="">
        <div class="carousel-inner c5gallery" style="margin-left: 10vw;">
        <div class="gall carousel-item active">
            <?php $count = 0; $max = count($img_array); ?>
            @foreach ($img_array as $img)
                <img src="../<?= $img ?>" alt="">
                <?php
                    $count++;
                    if($count == 6 && $count != $max){
                        echo '</div><div class="gall carousel-item">';
                        $count = 0;
                    }
                ?>
            @endforeach
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    <div class="container10">

        <img src="../img/Rectangle 159.png" alt="">
        <div class="c10text">
            <h3>Что ожидает?</h3>
            <div class="punkts">
                <div class="punkt">
                    <div class="flex"></div>
                    <div class="fix"></div>
                    <p><?= $features[0] ?></p>
                </div>
                <div class="punkt">
                    <div class="flex"></div>
                    <div class="fix"></div>
                    <p><?= $features[1] ?></p>
                </div>
                <div class="punkt">
                    <div class="flex"></div>
                    <div class="fix"></div>
                    <p><?= $features[2] ?></p>
                </div>
                <div class="punkt">
                    <div class="flex"></div>
                    <div class="fix"></div>
                    <p><?= $features[3] ?></p>
                </div>
            </div>

        </div>
    </div>

    </div>


    <div class="container1" style="padding-bottom: 0;">

        <div class="c1text">
            <h2>Отзывы</h2>
        </div>

        <div id="carouselExample" class="carousel slide" data-bs-touch="false" data-bs-interval="false" style="margin-right: 10vw; margin-left: 10vw;">
            <div class="carousel-inner" style="margin: 7vw 20vw; width: 40vw;">
            <div class="carousel-item active">
                <div class="c1tour">
                    <div class="vert"> <h4>Отзыв</h4></div>
                    <div class="c1tourtext">
                        <div class="c1tourp">
                            <h5>Татьяна, 31.02.2050</h5>
                            <p>Незабываемое приключение! Столько эмоций. Свежий воздух, захватывающие виды и прекрасный Кавказ.</p>
                        </div>
                    </div>
                    <div class="c1photos">
                        <img src="../img/image 11.png" alt="">
                        <img src="../img/image 9.png" alt="">
                        <img src="../img/Rectangle 159.png" alt="">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="c1tour">
                    <div class="vert"> <h4>Отзыв</h4></div>
                    <div class="c1tourtext">
                        <div class="c1tourp">
                            <h5>Татьяна, 31.02.2050</h5>
                            <p>Незабываемое приключение! Столько эмоций. Свежий воздух, захватывающие виды и прекрасный Кавказ.</p>
                        </div>
                    </div>
                    <div class="c1photos">
                        <img src="../img/image 11.png" alt="">
                        <img src="../img/image 9.png" alt="">
                        <img src="../img/Rectangle 159.png" alt="">
                    </div>
                </div>
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container3 position-relative">
        <img src="../img/Rectangle 195.png" alt="">
        <form action="http://wildlife/api/request" method="POST">
            <input name="id_tour" class="d-none" value="<?= $array['id'] ?>">
            <h2>Присоединитесь к туру?</h2>
            <h4>Заполните форму и с Вами свяжутся</h4>
            <h3>Персональные данные</h3>
            <h4>ФИО</h4>
            <input type="text" name="name" pattern="^[а-яА-ЯёЁ][а-яА-ЯёЁ0-9-_\.]{1,40}\s[а-яА-ЯёЁ][а-яА-ЯёЁ0-9-_\.]{1,40}\s[а-яА-ЯёЁ][а-яА-ЯёЁ0-9-_\.\s]{1,40}" required>
            <h4>Дата рождения</h4>
            <input type="date" name="date_born" required>
            <h3>Способ оплаты</h3>
            <h4>Электронная почта</h4>
            <input name="gmail" type="email" required>
            <h4>Номер телефона</h4>
            <input name="phone_number" type="text" inputmode="numeric" placeholder="+7 000 000 00 00" required>
            <h4>Способ оплаты</h4>
            <input name="card_number" type="text" placeholder="0000 0000 0000 0000" inputmode="numeric" pattern="[0-9]{13,16}" required>
            <button type="submit">Отправить</button>
            <p>Все персональные данные официально передаются доверенному лицу, подписавшему договор о неразглашении</p>
        </form>
        <div class="c3img">        <img class="img1" src="../img/Rectangle 264.png" alt="">
        <img class="img2" src="../img/Rectangle 265.png" alt=""></div>

    </div>
    <footer>
        <h2>Свяжитесь с нами</h2>
        <div class="svetl">
            <button id="gmailHover">Почта</button>
            <button id="numberHover">Телефон</button>
            <button id="adresHover">Адрес офиса</button>
        </div>
        <div class="temn">
            <a href="<?= url('/') ?>"><img class="logo" src="../img/icons/icons8-нравится-100 1.png" alt=""></a>
            <p>Все права защищены</p>
            <div class="icons"><a href="#"><img src="../img/icons/icons8-vk-96 1.png" alt=""></a> <a
                    href="#"><img src="../img/icons/icons8-новый-пост-96 1.png" alt=""></a><a
                    href="#"><img src="../img/icons/icons8-телеграмма-app-96 1.png" alt=""></a>
            </div>
        </div>
    <script src=" {{ url('js/jquery-3.6.3.min.js') }} "></script>
    <script src=" {{ url('js/bootstrap.min.js') }} "></script>
    <script src=" {{ url('js/main.js') }} "></script>
    </footer>
</body>
</html>
