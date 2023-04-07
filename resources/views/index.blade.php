<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanuman&family=Inter&family=Ruda:wght@400;500;800&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href=" {{ url('css/reset.css') }} ">
    <link rel="stylesheet" href=" {{ url('css/style.css') }} ">

    <title>WILDLIFE</title>

</head>

<body style="overflow-x: hidden;" data-bs-spy="scroll" data-bs-target="#nav-scroll-spy">

    <header>
        <nav id="nav-scroll-spy">
            <div class="nav1">
                <li><a class="main" href="<?= url('/') ?>">WILDLIFE</a></li>
            </div>
            <div class="nav2">
                <li><a class="tour" href="#anchor_tour">Туры</a></li>
                <li><a class="place" href="#portfolioid">Места</a></li>
                <li><a class="cab" href="#anchor_about">О нас</a></li>
            </div>
        </nav>
        <div class="hedhed">
            <div class="headtext">
                <h1>WILDLIFE</h1>
                <h2>Путешествуй – почувствуй ветер гор</h2>
                <a href="#anchor_tour"><button>Отправиться</button></a>
            </div>
        </div>
    </header>
    <div class="container1">

        <div class="c1text">
            <h2 id="anchor_tour">Доступные туры</h2>
            <p>
                Подберите для себя подходящий тур<br>
                и отправьтесь в захватывающие приключение
            </p>
        </div>
        <div class="c1icons">
            <div class="c1ic">
                <img src="img/icons/icons8-пользователь-100 1.svg" alt="">
                <p>Число человек</p>
                <input type="text">
            </div>
            <div class="c1ic">
                <img src="img/icons/icons8-календарь-100 1.svg" alt="">
                <p>Дата поездки</p>
                <input type="text">
            </div>
            <div class="c1ic">
                <img src="img/icons/icons8-нет-коннекта-100 1.svg" alt="">
                <p>Уровень сложности</p>
                <input type="text">
            </div>
            <div class="c1ic">
                <img src="img/icons/icons8-ценник-100 1.svg" alt="">
                <p>Стоимость тура</p>
                <input type="text">
            </div>
        </div>
        @foreach ($tours as $tour)
        <div class="c1tours">
            <a class="c1tour" href=" <?= url('/tour'."/".$tour['id']) ?> ">
                <img src="<?= $tour["main_img"] ?>" alt="">
                <div class="c1img"></div>
                <div class="c1tourtext">
                    <h4>Тур на <?= $tour["title"] ?></h4>
                    <div class="c1tourp">
                        <p><?= $tour["complexity"] ?> сложность</p>
                        <p><?= $tour["date"] ?> дней</p>
                        <p><?= $tour["priсe"] ?> рублей</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        

    </div>


    <div class="container2" id="portfolioid">
        <h2>Места</h2>
        <div class="places">
            <?php 
            $count = -1;
            $max = count($places) - 1;
            ?>
            @foreach ($places as $place)
            <?php $count++; 
            if($count == 2){
                echo'<div class="hidden mb-2 content-center">';
                $max+=10;
            } 
            ?>
            @if ($count % 2 != 0)
            <a class="place1" href="<?= url('/place') ?>">
                <div><img src="<?=$place['main_img']?>" alt=""></div>
                <div class="c2t1">
                    <h3><?=$place['title']?></h3>
                    <p><?=explode("." , $place['description'])[0]."."?></p>
                </div>
            </a>
            @else
            <a class="place2" href="<?= url('/place') ?>">
                <div class="c2t2">
                    <h3><?=$place['title']?></h3>
                    <p><?=explode("." , $place['description'])[0]."."?></p>
                </div>
                <img src="<?=$place['main_img']?>" alt="">
            </a>
            @endif
            <?php
            if($count == $max){
                echo'</div>';
            } 
            ?>

            @endforeach
        </div>
        <div class="w-100"><button onclick="showBlock()" class="buttonPlases"><img src="img/icons/Polygon 11.png" alt=""></button> </div>
        
    </div>


    <div class="container3" id="anchor_about">
        <h2>Почему именно мы?</h2>
    </div>



    <div class="container4" id="mastersid">
        <div class="c4icons">
            <div class="c4ic">
                <img src="img/icons/icons8-безопасность-проверена-100 1.png" alt="">
                <p>Безопасность</p>

            </div>
            <div class="c4ic">
                <img src="img/icons/icons8-нравится-100 1.png" alt="">
                <p>Всегда на высоте</p>

            </div>
            <div class="c4ic">
                <img src="img/icons/icons8-подтвержденная-учетная-запись-100 1.png" alt="">
                <p>Проверенные маршруты</p>

            </div>
            <div class="c4ic">
                <img src="img/icons/icons8-значки-встречи-сердец-100 1.png" alt="">
                <p>Забота о каждом</p>

            </div>
            <div class="c4ic">
                <img src="img/icons/icons8-звезда-100 1.png" alt="">
                <p>Уникальные туры</p>

            </div>
        </div>

    </div>

    <div class="container5">
        <img class="border" src="img/icons/Rectangle 77.png" alt="">
        <div class="c5gallery">

            <div class="gall">
                <img src="img/Rectangle 78.png" alt="">
                <img src="img/Rectangle 79.png" alt="">
                <img src="img/Rectangle 80.png" alt="">
                <img src="img/Rectangle 81.png" alt="">
                <img src="img/Rectangle 82.png" alt="">
                <img src="img/Rectangle 83.png" alt="">
            </div>
            <button class="lev"><img src="img/icons/Polygon 5.svg" alt=""></button>
            <button class="prav"><img src="img/icons/Polygon 5.svg" alt=""></button>
        </div>

    </div>


    <footer>
        <h2>Свяжитесь с нами</h2>
        <div class="svetl">
            <button>Почта</button>
            <button>Телефон</button>
            <button>Адрес офиса</button>
        </div>
        <div class="temn">
            <a href="index.html"><img class="logo" src="img/icons/icons8-нравится-100 1.png" alt=""></a>
            <p>Все права защищены</p>

            <div class="icons"><a href="#"><img src="img/icons/icons8-vk-96 1.png" alt=""></a> <a
                    href="#"><img src="img/icons/icons8-новый-пост-96 1.png" alt=""></a><a
                    href="#"><img src="img/icons/icons8-телеграмма-app-96 1.png" alt=""></a>
            </div>
        </div>
        <script src=" {{ url('js/jquery-3.6.3.min.js') }} "></script>
        <script src=" {{ url('js/bootstrap.min.js') }} "></script>
        <script src=" {{ url('js/main.js') }} "></script>
    </footer>
</body>

</html>
