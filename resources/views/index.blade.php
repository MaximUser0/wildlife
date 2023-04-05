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

    <link rel="stylesheet" href=" {{ url('css/reset.css') }} ">
    <link rel="stylesheet" href=" {{ url('css/style.css') }} ">

    <title>WILDLIFE</title>

</head>

<body style="overflow-x: hidden;">

    <header>
        <nav>
            <div class="nav1">
                <li><a class="main" href="<?= url('/') ?>">WILDLIFE</a></li>
            </div>
            <div class="nav2">
                <li><a class="tour" href="<?= url('/tour') ?>">Туры</a></li>
                <li> <a class="place" href="<?= url('/place') ?>">Места</a></li>
                <li> <a class="cab" href="#">О нас</a></li>
            </div>
        </nav>
        <div class="hedhed">
            <div class="headtext">
                <h1>WILDLIFE</h1>
                <h2>Путешествуй – почувствуй ветер гор</h2>
                <button>Отправиться</button>
            </div>
        </div>
    </header>
    <div class="container1">

        <div class="c1text">
            <h2>Доступные туры</h2>
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
        <div class="c1tours">

            <div class="c1tour">
                <img src="img/Rectangle 95.png" alt="">
                <div class="c1img"></div>
                <div class="c1tourtext">
                    <h4>Восхождение на Эльбрус</h4>
                    <div class="c1tourp">
                        <p>31.02.2050</p>
                        <p>10 дней</p>
                        <p>23 000 рублей</p>
                    </div>

                </div>
            </div>
        </div>


    </div>


    <div class="container2" id="portfolioid">
        <h2>Места</h2>
        <div class="places">
            <div class="place1">
                <img src="img/Rectangle 16.png" alt="">
                <div class="c2t1">
                    <h3>Кавказ</h3>
                    <p>Красивый горы красивый вид. Прям вах загляденье. купи пахлаву не пожалеешь</p>
                </div>
            </div>
            <div class="place2">

                <div class="c2t2">
                    <h3>Кавказ</h3>
                    <p>Красивый горы красивый вид. Прям вах загляденье. купи пахлаву не пожалеешь</p>
                </div>
                <img src="img/Rectangle 16.png" alt="">
            </div>

        </div>
        <button class="buttonPlases"><img src="img/icons/Polygon 11.png" alt=""></button>
    </div>


    <div class="container3">
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



    </footer>
    <script>
        start();
        async function start() {
            let promise = await fetch("http://wildlife/api/place")
            let json = await promise.json();
            console.log(json)
        }
    </script>
</body>

</html>
