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
    <link rel="stylesheet" href="../css/place.css">

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
            </div>
        </div>
        <div class="c0text">
            <h2><?= $array['title_description'] ?></h2>
            <p><?= $array['description'] ?></p>
        </div>
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

    <div class="container1">

        <div class="c1text">
            <h2>Доступные туры</h2>

        </div>
        @foreach ($tours as $tour)
        <div class="c1tours">
            <a class="c1tour" href=" <?= url('/tour'."/".$tour['id']) ?> ">
                <img src="../<?= $tour["main_img"] ?>" alt="">
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
    <div class="container3">

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
