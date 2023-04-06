<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanuman&family=Inter&family=Ruda:wght@400;500;800;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/tour.css">

    <title>Эльбрус</title>

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
                <h2>Эльбрус</h2>
                <h3>Подъем на самую выоскую гору в России? Легко!</h3>
                <p>5 ★★★★★</p>
            </div>
        </div>

        <div class="c1icons">
            <div class="c1ic">
                <img src="img/icons/icons8-пользователь-100 1.svg" alt="">
                <p>15 человек</p>
            </div>
            <div class="c1ic">
                <img src="img/icons/icons8-календарь-100 1.svg" alt="">
                <p>31.02.2050</p>
            </div>
            <div class="c1ic">
                <img src="img/icons/icons8-нет-коннекта-100 1.svg" alt="">
                <p>Средний</p>
            </div>
            <div class="c1ic">
                <img src="img/icons/icons8-ценник-100 1.svg" alt="">
                <p>15 тыс. руб.</p>
            </div>
        </div>
        <div class="c0sec"><div class="c0text">
            <h2>Описание</h2>
            <p>
                Двуглавая гора Эльбрус, расположенная на самой границе республик Кабардино-Балкария и Карачаево-Черкесия,
                чуть севернее Главного Кавказского хребта, —
                самая высокая точка России — по праву
                считается одним из семи чудес
                нашей страны.
            </p>

        </div><img src="img/Polygon 7.png" alt=""></div>

    </header>

    <div class="container5">
        <img class="border" src="img/Rectangle 77 (1).png" alt="">
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

    <div class="container10">

                <img src="img/Rectangle 159.png" alt="">
        <div class="c10text">
            <h3>Что ожидает?</h3>
            <div class="punkts">
                <div class="punkt">
                    <div class="flex"></div>
                    <div class="fix"></div>
                    <p>Уютные номера в гостинице с видом на кавказские пейзажи.</p>
                </div>
                <div class="punkt">
                    <div class="flex"></div>
                    <div class="fix"></div>
                    <p>Подъем по канатной дороге к самой вершине. Ощутите свежий горный воздух!</p>
                </div>
                <div class="punkt">
                    <div class="flex"></div>
                    <div class="fix"></div>
                    <p>Вкуснейшая кавказская кухня.</p>
                </div>
                <div class="punkt">
                    <div class="flex"></div>
                    <div class="fix"></div>
                    <p>Экскурсии по всем красотам окрестностей Эльбруса.</p>
                </div>
            </div>

        </div>
    </div>

    </div>


    <div class="container1">

        <div class="c1text">
            <h2>Отзывы</h2>

        </div>

        <div class="c1tours">

            <div class="c1tour">
                <div class="vert"> <h4>Отзыв</h4></div>
                <div class="c1tourtext">
                    <div class="c1tourp">
                        <h5>Татьяна, 31.02.2050</h5>
                        <p>Незабываемое приключение! Столько эмоций. Свежий воздух, захватывающие виды и прекрасный Кавказ.</p>
                    </div>

                </div>
                <div class="c1photos">
                    <img src="img/image 11.png" alt="">
                    <img src="img/image 9.png" alt="">
                    <img src="img/Rectangle 159.png" alt="">
                </div>

            </div>
        </div>

        <button class="lev1"><img src="img/icons/Polygon 5.svg" alt=""></button>
        <button class="prav1"><img src="img/icons/Polygon 5.svg" alt=""></button>
</div>



    <div class="container3">
        <img src="img/Rectangle 195.png" alt="">
        <form action="">
            <h2>Присоединитесь к туру?</h2>
            <h4>Заполните форму и с Вами свяжутся</h4>
            <h3>Персональные данные</h3>
            <h4>ФИО</h4>
            <input type="text">
            <h4>Дата рождения</h4>
            <input type="date">
            <h3>Способ оплаты</h3>
            <h4>Электронная почта</h4>
            <input type="email">
            <h4>Номер телефона</h4>
            <input type="text" inputmode="numeric" placeholder="+7 000 000 00 00">
            <h4>Способ оплаты</h4>
            <input type="text" placeholder="0000 0000 0000 0000" inputmode="numeric" pattern="[0-9 ]*">
            <button type="submit">Отправить</button>
            <p>Все персональные данные официально передаются доверенному лицу, подписавшему договор о неразглашении</p>

        </form>
        <div class="c3img">        <img class="img1" src="img/Rectangle 264.png" alt="">
        <img class="img2" src="img/Rectangle 265.png" alt=""></div>

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

            <div class="icons"><a href="#"><img src="img/icons/icons8-vk-96 1.png" alt=""></a> <a href="#"><img
                        src="img/icons/icons8-новый-пост-96 1.png" alt=""></a><a href="#"><img
                        src="img/icons/icons8-телеграмма-app-96 1.png" alt=""></a>
            </div>
        </div>



    </footer>

</body>

</html>
