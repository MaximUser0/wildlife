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
        <a href="<?= url('admin/add/place') ?>"><h2>Добавить место +</h2></a>
        <div class="masters">
            @foreach ($places as $place)
            <a href="<?= url('/place')."/".$place["id"] ?>">
                <div class="mast">
                    <img src="../<?=$place['main_img']?>" alt="">
                    <div class="title">
                        <p><?=$place['title']?></p>
                    </div>
                    <div class="name" style="display: inline-flex;">
                        <a href="<?= url('admin/update/place')."/".$place["id"] ?>"><button class="red">Редактировать</button></a>
                        <button id-place="<?= $place["id"] ?>" class="x">x</button>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        <script src=" {{ url('js/jquery-3.6.3.min.js') }} "></script>
        <script>
            $('.name > button').click(ConfirmDelete);
            async function ConfirmDelete(){
                let id = await $(this).attr('id-place');
                let flag = confirm('Удалить место?');
                if(flag){
                    await fetch("http://wildlife/api/place/"+id, {method: 'DELETE'});
                }
                location.reload();
            }
        </script>
</body>
</html>
