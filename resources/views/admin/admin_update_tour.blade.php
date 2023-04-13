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
    <div class="container4" id="mastersid">
        <form action="<?= url('api/tour').'/'.$tours['id'] ?>" method="POST" enctype="multipart/form-data" style="display: inline-flex;">
            @method('PATCH')
                <div class="obsh">
                <h3>Название</h3>
                <input type="text" name="title" value="<?= $tours['title'] ?>">
                <h3>Стоимость</h3>
                <input type="text" name="priсe" value="<?= $tours['priсe'] ?>">
                <h3>Длительность</h3>
                <input type="number" name="date" value="<?= $tours['date'] ?>">
                <h3>Количество человек</h3>
                <input type="text" name="people_count" value="<?= $tours['people_count'] ?>">
                <h3>Сложность</h3>
                <input type="text" name="complexity" value="<?= $tours['complexity'] ?>">
                <h3>Краткая информация</h3>
                <textarea name="short_description"><?= $tours['short_description'] ?></textarea>
                <h3>Общая информация</h3>
                <textarea name="description"><?= $tours['description'] ?></textarea>
                <a onclick="javascript:history.back(-2); return falsel"><img class="arrow" style="width: 3vw; height: 3vw;" src="../../../img/icons/Group 13.png"
                        alt=""></a>
            </div>
            <div class="obsh photo">
                <h3>Главное фото</h3>
                <label class="input-file">
                    <input type="file" name="main_img">
                    <span>Выберите файл</span>
                </label>
                <h3>Дополнительное фото</h3>
                <label class="input-file">
                    <input type="file" name="description_img">
                    <span>Выберите файл</span>
                </label>
                <h3>Место</h3>
                <input type="text" value="<?= $tours['id_place'] ?>" name="id_place">
                <h3>Особенности</h3>
                <?php $f = explode("%" ,$tours['features']) ?>
                <input type="text" name="f1" value="<?= $f[0]?>">
                <input type="text" name="f2" value="<?= $f[1]?>">
                <input type="text" name="f3" value="<?= $f[2]?>">
                <input type="text" name="f4" value="<?= $f[3]?>">
            </div>
            <button style="position: absolute; right: 5vw; bottom: -10vw; height:5vw;" type="submit">Редактировать</button>
        </form>
        <div class="butts">
            <form action="<?= url('api/img_tour') ?>" method="POST" enctype="multipart/form-data">
            <h3>Галерея</h3>
            <input type="text" name="id_tour" class="d-none" value="<?= $tours['id'] ?>">
            <label class="input-file">
                <input type="file" name="img">
                <span>Выберите файл</span>
            </label>
            <button style="margin: 0; width: 85%;" type="submit">Добавить</button>
            </form>
        </div>
        <div class="portfolioadm">
                <div class="portfolio">
                    @foreach ($img_tour as $src)
                    <div class="hover-effect-btn"><img src="../../../<?= $src['url'] ?>" alt="">
                        <div class="overlay"></div>
                        <form action="<?= url('api/img_tour').'/'.$src['id'] ?>" method="POST">@method('DELETE')<button class="button" type="submit">x</button></form>
                    </div>
                    @endforeach
                </div>
            </div>
    </div>

<!--
    <form method="post" enctype="multipart/form-data">
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

            <img src="img/masters/1654142324_46-o-tendencii-com-p-devushka-v-tatu-salone-foto-50.jpg" alt="">
            <h3> Второстепенное фото</h3>
            <label class="input-file">
                <input type="file" name="file">
                <span>Выберите файл</span>
            </label>
            <img src="img/masters/1654142324_46-o-tendencii-com-p-devushka-v-tatu-salone-foto-50.jpg" alt="">

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
            <div class="portfolio">
                <div class="hover-effect-btn"><img src="img/458188084ec959df41e7d3091a5c50b4.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="button"><a href="#">x</a></div>
                </div>
                <div class="hover-effect-btn"><img src="img/57bd2daaf39d79646362586f46150dc0.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="button"><a href="#">x</a></div>
                </div>
                <div class="hover-effect-btn"><img src="img/8112413e4212f19a5909a2bbcf6afc16.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="button"><a href="#">x</a></div>
                </div>
                <div class="hover-effect-btn"><img src="img/458188084ec959df41e7d3091a5c50b4.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="button"><a href="#">x</a></div>
                </div>
                <div class="hover-effect-btn"><img src="img/8112413e4212f19a5909a2bbcf6afc16.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="button"><a href="#">x</a></div>
                </div>
                <div class="hover-effect-btn"><img src="img/57bd2daaf39d79646362586f46150dc0.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="button"><a href="#">x</a></div>
                </div>
                <div class="hover-effect-btn"><img src="img/57bd2daaf39d79646362586f46150dc0.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="button"><a href="#">x</a></div>
                </div>
                <div class="hover-effect-btn"><img src="img/458188084ec959df41e7d3091a5c50b4.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="button"><a href="#">x</a></div>
                    </div>
                <div class="hover-effect-btn"><img src="img/8112413e4212f19a5909a2bbcf6afc16.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="button"><a href="#">x</a></div>
                </div>

                <button type="submit">Редактировать</button>
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

</body>

</html>
