<?php
session_start();

if ($_SESSION) {
    if ($_SESSION['regType'] == 2) {
        echo '
        <!DOCTYPE html>
        <html lang="ar" dir="rtl">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <title>Instructor | المعلم</title>

            <!-- Favicons -->
            <link href="../../../../res/img/logo-rehla.png" rel="icon">
            <link href="../../../../res/img/logo-rehla.png" rel="apple-touch-icon">

            <!-- ICON -->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
                integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

            <!-- BOOTSRTAP style -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

            <style>
                /* Fonts */
                @font-face {
                    font-family: GESbold;
                    src: url("../../../../res/font/Bold.otf") format("opentype");
                }

                @font-face {
                    font-family: GESmedium;
                    src: url("../../../../res/font/Medium.otf") format("opentype");
                }

                @font-face {
                    font-family: GESlight;
                    src: url("../../../../res/font/Light.otf") format("opentype");
                }
            </style>
        </head>

        <body>

            <nav class="navbar navbar-dark bg-primary navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand">أهلا .. ';echo $_SESSION['username'];echo'</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0 float-start">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>

                        <a href="../../../../auth/config/logout.php" class="btn btn-danger me-auto" style="font-family: GESmedium">
                        تسجيل الخروج
                        </a>
                    </div>
                </div>
            </nav>
            <main class="container">

            </main>

            <!-- JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
                crossorigin="anonymous"></script>
        </body>

        </html>';
    } else {
        echo '
    <!DOCTYPE html>
    <html lang="en" dir="ltr">

        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
            <!--load all styles -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
            <!-- Title -->
            <title>Unauthorised</title>
        </head>

        <body>
            <nav class="navbar navbar-dark bg-dark">
                <div class="container">
                    <a class="navbar-brand">Unauthorised User</a>
                </div>
            </nav>
            <div class="container mt-5 text-center"><br><br><br>
                <h1>You are not an authorised user</h1>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        </body>
    </html>
    ';
    }
} else {
    echo '
    <!DOCTYPE html>
    <html lang="en" dir="ltr">

        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
            <!--load all styles -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
            <!-- Title -->
            <title>Hacking !!!</title>
        </head>

        <body>
            <nav class="navbar navbar-dark bg-danger">
                <div class="container">
                    <a class="navbar-brand">Danger User</a>
                </div>
            </nav>
            <div class="container mt-5 text-center">
                <img src="https://cdn1.iconfinder.com/data/icons/human-body-parts-1-3/100/a-03-512.png">
                <h1>You have bad idea ?!</h1>
                <p></p>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        </body>
    </html>
    ';
}