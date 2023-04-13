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

<body style="overflow-x: hidden;" style="display: inline-flex">
    <div class="container4" id="mastersid">
    <form action="<?= url('api/place')?>" method="POST" enctype="multipart/form-data" style="display: inline-flex;">
        <div class="obsh">
            <h3>Название</h3>
            <input type="text" name="title"">
            <h3>Краткая информация</h3>
            <textarea name="short_description"></textarea>
            <a onclick="javascript:history.back(-2); return falsel"><img class="arrow" style="width: 3vw; height: 3vw;" src="../../../img/icons/Group 13.png"
                    alt=""></a>
        </div>
        <div class="obsh">
            <h3>Заголовок</h3>
            <input type="text" name="title_description" ?>
            <h3>Общая информация</h3>
            <textarea name="description"></textarea>
        </div>
        <div class="photo">
            <h3>Главное фото</h3>
            <label class="input-file">
                <input type="file" name="main_img">
                <span>Выберите файл</span>
            </label>
        </div>
        <button style="position: absolute; right: 5vw; bottom: 5vw; height:5vw;" type="submit">Создать</button>
    </form>
</div>

    <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $('.input-file input[type=file]').on('change', function () {
            let file = this.files[0];
            $(this).next().html(file.name);
        });
    </script>

</body>

</html>
