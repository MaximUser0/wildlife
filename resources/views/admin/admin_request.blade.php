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
        <div class="zayavka">
            <div class="polz">
                <p>Namejhdfjvkmfcvghbnmj,</p>
                <p>Email.\@mail.rudxfcvnbmcxvbnm</p>
                <p>28.03.2023</p>
            </div>
            <div class="telo">
                <p>Часть тела:</p>
                <p>sdfghjk</p>
            </div>
            <div class="size">
                <p>Размер:</p>
                <p>dfghjk</p>
            </div>
            <div class="dop">
                <p>Дополнительно:</p>
                <p>sdfghj</p>
            </div>
            <div class="otvet">
                <div class="text">
                    <p>Ответ мастера:</p>
                    <textarea name="otv"></textarea>
                </div>
                <div class="btn"><button>Отправить</button></div>
            </div>
        </div>

    </div>



</body>

</html>
