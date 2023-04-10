<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=" {{ url('css/reset.css') }} ">
    <link rel="stylesheet" href=" {{ url('css/adminredmast.css') }} ">
    <title>Master</title>

</head>

<?= view('components/header') ?>

<body style="overflow-x: hidden;">

    <form method="post" enctype="multipart/form-data">
    <div class="container4" id="mastersid">

        <div class="obsh">
            <h3>Название</h3>
            <input type="text" name="name" value="<?= $places['title'] ?>">
            <h3>Заголовок</h3>
            <input type="text" name="place" value="<?= $places['title_description'] ?>">
            <h3>Краткая информация</h3>
            <textarea name="kratinfo"><?= $places['short_description'] ?></textarea>
            <h3>Общая информация</h3>
            <textarea name="dopinfo"><?= $places['description'] ?></textarea>
            <a onclick="javascript:history.back(-2); return falsel"><img class="arrow" style="width: 3vw; height: 3vw;" src="../../../img/icons/Group 13.png"
                    alt=""></a>
        </div>
        <div class="photo">
            <h3>Главное фото</h3>
            <label class="input-file">
                <input type="file" name="file">
                <span>Выберите файл</span>
            </label>
            <img src="../../../<?= $places['main_img'] ?>" alt="">
        </div>
        <div class="portfolioadm">
            <div class="butts">
                <h3>Галерея</h3>
                <label class="input-file">
                    <input type="file" name="file">
                    <span>Выберите файл</span>
                </label>
                
            </div>
            <div class="portfolio">
                @foreach ($img_place as $src)
                <div class="hover-effect-btn"><img src="../../../<?= $src ?>" alt="">
                    <div class="overlay"></div>
                    <div class="button"><a href="#">x</a></div>
                </div>
                @endforeach
                <button style="height: 5vw; margin-top: 15vw;" type="submit">Редактировать</button>
            </div>
        </div>

    </div>
    </form>
    <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $('.input-file input[type=file]').on('change', function () {
            let file = this.files[0];
            $(this).next().html(file.name);
        });
    </script>

</body>

</html>
