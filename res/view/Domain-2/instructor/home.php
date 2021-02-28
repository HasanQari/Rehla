<?php
session_start();

if ($_SESSION) {
    if ($_SESSION['regType'] == 2) { ?>

        <!DOCTYPE html>
        <html lang="ar">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <title>Instructor | المعلم</title>

            <!-- Favicons -->
            <link href="../../../../res/img/logo-rehla.png" rel="icon">
            <link href="../../../../res/img/logo-rehla.png" rel="apple-touch-icon">

            <!-- ICON -->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

            <!-- Main CSS -->
            <link rel="stylesheet" href="style.css">

            <!-- BOOTSRTAP style -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

            <!-- Bootstrap core CSS -->
            <link href="../../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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

            <div class="d-flex" id="wrapper">

                <!-- Sidebar -->
                <div class="bg-light border-right" id="sidebar-wrapper" style="text-align: right;">
                    <div class="sidebar-heading">القائمة الجانبية</div>
                    <div class="list-group list-group-flush">
                        <button id="lb0" class="list-group-item list-group-item-action bg-light"
                        onclick="TheFrame('components/welcome.html')">الرئيسية</a>
                            <button id="lb1" class="list-group-item list-group-item-action bg-light"
                            onclick="TheFrame('components/profile.php')">بيانات المعلم</button>
                            <button id="lb2" class="list-group-item list-group-item-action bg-light"
                            onclick="TheFrame('components/course.html')">المقررات</button>
                            <button id="lb3" class="list-group-item list-group-item-action bg-light" 
                            onclick="TheFrame('components/calendar.html')">الجدول الدراسي</button>
                            <button id="lb4" class="list-group-item list-group-item-action bg-light"
                            onclick="TheFrame('components/lecture.html')">الدروس</button>
                            <button id="lb5" class="list-group-item list-group-item-action bg-light"
                            onclick="TheFrame('components/task.html')">متابعة المهمات والواجبات</button>
                            <button id="lb6" class="list-group-item list-group-item-action bg-light"
                            onclick="TheFrame('components/student.html')">الطلاب</button>
                            <button id="lb7" class="list-group-item list-group-item-action bg-light"
                            onclick="TheFrame('components/message.html')">الرسائل</button>
                            <button id="lb8" class="list-group-item list-group-item-action bg-light"
                            onclick="TheFrame('components/club.html')">المنتدى التعليمي</button>
                            <button id="lb9" class="list-group-item list-group-item-action bg-light"
                            onclick="TheFrame('components/report.html')">التقارير</button>
                            <button id="lb10" class="list-group-item list-group-item-action bg-light"
                            onclick="TheFrame('components/support.html')">الدعم الفني</button>
                    </div>
                </div>
                <!-- /#sidebar-wrapper -->

                <!-- Page Content -->
                <div id="page-content-wrapper" style="direction: rtl;">

                    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                        <button class="btn" id="menu-toggle"><i class="fas fa-bars"></i></button>
                        <a class="navbar-brand">أهلا .. <?php echo $_SESSION['username']; ?></a>
                        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button> -->

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul> -->
                        </div>

                        <a href="../../../../auth/config/logout.php" class="btn" id="logout" style="font-family: GESmedium;">تسجيل الخروج</a>

                    </nav>

                    <div class="container-fluid d-flex">
                        <div id="sidePanal">

                        </div>
                        <div id="mainSpace">
                            <!-- <div id="calender"> -->
                            <!-- <h4 style="font-family: GESmedium;text-align: right;color:#DDA633">جدول المعلم</h4><hr> -->
                            <iframe id="frame" src="components/welcome.html" width="100%" height="650" frameborder="0"></iframe>
                            <!-- </div>
                            <div id="tasks">

                            </div>
                            <div id="lecture">

                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- /#page-content-wrapper -->

            </div>
            <!-- /#wrapper -->

            <!-- JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
            <script src="js.js"></script>

            <!-- Bootstrap core JavaScript -->
            <script src="../../../../vendor/jquery/jquery.min.js"></script>
            <script src="../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Menu Toggle Script -->
            <script>
                $("#menu-toggle").click(function(e) {
                    e.preventDefault();
                    $("#wrapper").toggleClass("toggled");
                });
            </script>

        </body>

        </html>

    <?php    } else { ?>
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
    <?php    }
} else { ?>
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
<?php } ?>