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

<?= view('components/header') ?>

<body style="overflow-x: hidden;">

    <div class="container4" id="mastersid">
        <a href="<?= url('/admin/add/tour') ?>">
            <h2>Добавить тур +</h2>
        </a>
        <div class="masters">
            <a href="<?= url('/tour') ?>">
                <div class="mast">
                    <img src=" {{ url('img/Rectangle 16.png') }} " alt="">
                    <div class="title">
                        <p>Эльбрус</p>
                    </div>
                    <div class="name">
                        <a href="<?= url('/admin/update/tour') ?>"><button class="red">Редактировать</button></a>
                        <button class="x">x</button>
                    </div>
                </div>
            </a>
        </div>
</body>

</html>
