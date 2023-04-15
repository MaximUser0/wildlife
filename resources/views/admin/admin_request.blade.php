<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=" {{ url('css/reset.css') }} ">
    <link rel="stylesheet" href=" {{ url('css/adminzayavka.css') }} ">
    <title>Master</title>

</head>

<?= view('components/header') ?>

<body style="overflow-x: hidden;">

    <div class="container4">
        @foreach ($requests as $request)
        <div class="zayavka" style="position: relative;">
            <div class="polz" style="margin-top: 2vw">
                <h2>Клиент:</h2>
                <p><?=$request['name']?></p>
                <p><?=$request['date_born']?></p>
            </div>
            <div class="polz">
                <h3>Связь:</h3>
                <p><?=$request['gmail']?></p>
                <p><?=$request['phone_number']?></p>
                <p><?=$request['card_number']?></p>
            </div>
            <div class="polz">
                <p>Тур номер:</p>
                <p><?=$request['id_tour']?></p>
                <p>Запрос создан:</p>
                <p><?=$request['created_at']?></p>
            </div>
            <form action="<?= url('api/request')."/".$request['id']?>" method="POST">
            @method('DELETE')
            <div class="btn" style="position: absolute; right: 9vw; bottom: 2vw;"><button type="submit">Принять</button></div>
            <div class="btn" style="position: absolute; right: 2vw; bottom: 2vw;"><button type="submit">Отказать</button></div>
            </form>
        </div>  
        @endforeach
    </div>



</body>

</html>
