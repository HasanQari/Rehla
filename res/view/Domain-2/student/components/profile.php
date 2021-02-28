<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>الملف الشخصي | المعلم</title>

    <!-- Favicons -->
    <link href="../../../../../res/img/logo-rehla.png" rel="icon">
    <link href="../../../../../res/img/logo-rehla.png" rel="apple-touch-icon">

    <!-- ICON -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- BOOTSRTAP style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <style>
        /* Fonts */
        @font-face {
            font-family: GESbold;
            src: url("../../../../../res/font/Bold.otf") format("opentype");
        }

        @font-face {
            font-family: GESmedium;
            src: url("../../../../../res/font/Medium.otf") format("opentype");
        }

        @font-face {
            font-family: GESlight;
            src: url("../../../../../res/font/Light.otf") format("opentype");
        }
    </style>
</head>

<body>

    <div class="container-fluid" style="direction: rtl;margin: auto;">
        <!-- <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/User_font_awesome.svg/1200px-User_font_awesome.svg.png" 
        width="25%" height="25%" alt="" style="text-align: center;margin: auto;"> -->
        <br>
        <p style="font-family: GESmedium;font-size: 20px;color: #DDA633;text-align: center;">
            <strong>الاسم: </strong><?php echo $_SESSION['username']; ?>
        </p>
        <p style="font-family: GESmedium;font-size: 20px;color: #DDA633;text-align: center;">
            <strong>البريد الالكتروني: </strong><?php echo $_SESSION['useremail']; ?>
        </p>

    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>