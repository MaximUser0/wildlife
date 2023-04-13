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
        <a href="adminaddmesto.html"><h2>Добавить место +</h2></a>
        <div class="masters">
            @foreach ($places as $place)
            <a class="place1" href="<?= url('/place')."/".$place["id"] ?>">
                <div><img src="<?=$place['main_img']?>" alt=""></div>
            </a>
            <a href="<?= url('/place')."/".$place["id"] ?>">
                <div class="mast">
                    <img src="../<?=$place['main_img']?>" alt="">
                    <div class="title">
                        <p><?=$place['title']?></p>
                    </div>
                    <div class="name" style="display: inline-flex;">
                        <a href="<?= url('admin/update/place')."/".$place["id"] ?>"><button class="red">Редактировать</button></a>
                        <button id="delete" id-place="<?= $place["id"] ?>" class="x">x</button>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
</body>

</html>
