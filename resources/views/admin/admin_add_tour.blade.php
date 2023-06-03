<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=" {{ url('css/reset.css') }} ">
    <link rel="stylesheet" href=" {{ url('css/adminaddtour.css') }} ">
    <title>Master</title>

</head>

<?= view('components/header') ?>

<body style="overflow-x: hidden;">
    <div class="container4" id="mastersid">
        <form action="<?= url('api/tour') ?>" method="POST" enctype="multipart/form-data" style="display: inline-flex;">
            <div class="obsh">
                <h3>Название</h3>
                <input type="text" name="title" required>
                <h3>Стоимость</h3>
                <input type="text" name="priсe" required>
                <h3>Длительность</h3>
                <input type="number" name="date" required>
                <h3>Количество человек</h3>
                <input type="text" name="people_count" required> 
                <h3>Сложность</h3>
                <input type="text" name="complexity" required>
                <a onclick="javascript:history.back(-2); return falsel"><img class="arrow" style="width: 3vw; height: 3vw;" src="../../../img/icons/Group 13.png"
                    alt=""></a>
            </div>
            <div class="obsh">
                <h3>Место</h3>
                <select name="id_place" required>
                    @foreach ($places as $place)
                        <option value="<?=$place['id']?>"><?=$place['title']?></option>
                    @endforeach
                </select>
                <h3>Особенности</h3>
                <input type="text" name="f1" required>
                <input type="text" name="f2" required>
                <input type="text" name="f3" required>
                <input type="text" name="f4" required>
            </div>
            <div class="obsh">
                <h3>Краткая информация</h3>
                <textarea name="short_description" required></textarea>
                <h3>Общая информация</h3>
                <textarea name="description" required></textarea>
            </div>
            <div class="obsh photo">
                <h3>Главное фото</h3>
                <label class="input-file">
                    <input type="file" name="main_img" required>
                    <span>Выберите файл</span>
                </label>
                <h3>Дополнительное фото</h3>
                <label class="input-file">
                    <input type="file" name="description_img" required>
                    <span>Выберите файл</span>
                </label>
            </div>
            <button style="position: absolute; right: 5vw; bottom: 1vw; height:5vw;" type="submit">Создать</button>
        </form>
    </div>
    <!--<form method="post" enctype="multipart/form-data">
    <div class="container4" id="mastersid">

        <div class="obsh">
            <h3>Название</h3>
            <input type="text" name="name">
            <h3>Место</h3>
            <input type="text" name="place">
            <h3>Дата</h3>
            <input type="date" name="date">
            <h3>Количество человек</h3>
            <input type="text" name="count">
            <h3>Стоимость</h3>
            <input type="text" name="cost">
            <h3>Длительность</h3>
            <input type="text" name="long">
            <h3>Краткая информация</h3>
            <textarea name="kratinfo"></textarea>
            <h3>Общая информация</h3>
            <textarea name="dopinfo"></textarea>
            <a onclick="javascript:history.back(-2); return falsel"><img class="arrow" src="img/icons/Arrow 2.png"
                    alt=""></a>
        </div>
        <div class="photo">
            <h3>Главное фото</h3>
            <label class="input-file">
                <input type="file" name="file">
                <span>Выберите файл</span>
            </label>


            <h3> Второстепенное фото</h3>
            <label class="input-file">
                <input type="file" name="file">
                <span>Выберите файл</span>
            </label>


            <h3>Особенности</h3>
            <input type="text" name="first">
            <input type="text" name="second">
            <input type="text" name="third">
            <input type="text" name="fourth">
        </div>
        <div class="portfolioadm">
            <div class="butts">
                <h3>Галерея</h3>
                <label class="input-file">
                    <input type="file" name="file">
                    <span>Выберите файл</span>
                </label>
                <label class="input-file">
                    <input type="file" name="file">
                    <span>Выберите файл</span>
                </label>
                <label class="input-file">
                    <input type="file" name="file">
                    <span>Выберите файл</span>
                </label>
                <label class="input-file">
                    <input type="file" name="file">
                    <span>Выберите файл</span>
                </label>
                <label class="input-file">
                    <input type="file" name="file">
                    <span>Выберите файл</span>
                </label>
                <label class="input-file">
                    <input type="file" name="file">
                    <span>Выберите файл</span>
                </label>
                <label class="input-file">
                    <input type="file" name="file">
                    <span>Выберите файл</span>
                </label>
            </div>


        </div>

    </div>
    </form>-->
    <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $('.input-file input[type=file]').on('change', function () {
            let file = this.files[0];
            $(this).next().html(file.name);
        });
    </script>
    <script src="../../js/auth/checkUser.js"></script>
    <script src="../../js/auth/logout.js"></script>

</body>

</html>
