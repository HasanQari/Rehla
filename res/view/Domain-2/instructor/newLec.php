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

            <div id="stage0" class="mb-3 text-right">
                <!-- <div id="stage0" class="mb-3 ">
                <label for="" class="form-label"></label>
                <input type="" class="form-control" id="" name="">
            </div>
            <hr> -->

                <div class="mx-3" style="direction: rtl;">
                    <form action="conf/newlistenConf.php" method="post">
                        <div id="stage0" class="mb-3 text-right">
                            <h4 style="font-family: GESmedium;text-align: right;color:#DDA633;direction: rtl;">إبدأ ..</h4>
                            <hr>
                            <label for="subject" class="form-label">المادة</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                            <label for="class" class="form-label">الصف</label>
                            <input type="text" class="form-control" id="class" name="class" required>
                            <label for="title" class="form-label">الموضوع</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <hr>
                        <div id="stage2" class="mb-3 text-right">
                            <h4 style="font-family: GESmedium;text-align: right;color:#DDA633;direction: rtl;">الخطوة الأولى</h4>
                            <p style="font-family: GESlight;text-align: right;color:#AB7F55;direction: rtl;" class="mb-0">
                                <strong>الهدف: </strong>في هذه المرحلة نستهدف تقديم محتوى على شكل فيديو حتى نراعي فيه جميع أنماط التعلم.
                            </p>
                            <p style="font-family: GESlight;text-align: right;color:#AB7F55;direction: rtl;">
                                <strong>مواصفات الخطوة: </strong>يجب أن يكون المحتوى على شكل فيديو ولا يتجاوز مدته 4 دقائق بحيث أنه يشرح
                                معلومة واحدة وهو مدخل مناسب للدرس.
                            </p>
                            <label for="vid1" class="form-label">ارفق الفيديو</label>
                            <input type="file" class="form-control" id="vid1" name="vid1" required>
                        </div>
                        <hr>
                        <div id="stage3" class="mb-3 text-right">
                            <h4 style="font-family: GESmedium;text-align: right;color:#DDA633;direction: rtl;">الخطوة الثانية</h4>

                            <h6 style="font-family: GESlight;text-align: right;color:#694c0e;direction: rtl;">السؤال الاول</h6>
                            <p style="font-family: GESlight;text-align: right;color:#AB7F55;direction: rtl;">
                                <strong>الهدف من السؤال </strong>سؤال استفتاحي بسيط يستهدف مهارة االستذكار.
                            </p>
                            <label for="q1" class="form-label">السؤال</label>
                            <input type="text" class="form-control" id="q1" name="q1" required>
                            <label for="a1" class="form-label">الاجابة</label>
                            <input type="text" class="form-control" id="a1" name="a11" placeholder="الخيار الاول" required>
                            <input type="text" class="form-control" id="a1" name="a12" placeholder="الخيار الثاني" required>
                            <input type="text" class="form-control" id="a1" name="a13" placeholder="الخيار الثالث" required>

                            <h6 style="font-family: GESlight;text-align: right;color:#694c0e;direction: rtl;" class="mt-3">السؤال الثاني</h6>
                            <p style="font-family: GESlight;text-align: right;color:#AB7F55;direction: rtl;">
                                <strong>الهدف من السؤال </strong>سؤال يستهدف مهارات البحث واالكتشاف.
                            </p>
                            <label for="q2" class="form-label">السؤال</label>
                            <input type="text" class="form-control" id="q2" name="q2" required>
                            <label for="a2" class="form-label">الاجابة</label>
                            <input type="text" class="form-control" id="a2" name="a2" required>

                            <h6 style="font-family: GESlight;text-align: right;color:#694c0e;direction: rtl;" class="mt-3">السؤال الثالث</h6>
                            <p style="font-family: GESlight;text-align: right;color:#AB7F55;direction: rtl;">
                                <strong>الهدف من السؤال </strong> سؤال يستهدف مهارات االستقصاء.
                            </p>
                            <label for="q3" class="form-label">السؤال</label>
                            <input type="text" class="form-control" id="q3" name="q3" required>
                            <label for="a3" class="form-label">الاجابة</label>
                            <input type="text" class="form-control" id="a3" name="a3" required>

                        </div>
                        <hr>
                        <div id="stage4" class="mb-3 text-right">
                            <h4 style="font-family: GESmedium;text-align: right;color:#DDA633;direction: rtl;">الخطوة الثالثة</h4>
                            <p style="font-family: GESlight;text-align: right;color:#AB7F55;direction: rtl;" class="mb-0">
                                <strong>الهدف: </strong>في هذه المرحلة نستهدف تنظيم المحتوى التعليمي.
                            </p>
                            <p style="font-family: GESlight;text-align: right;color:#AB7F55;direction: rtl;">
                                <strong>مواصفات الخطوة: </strong>يتم إدراج المعلومات والمعارف على شكل منظم يسهل على المتعلم بناء خريطة
                                مفاهيمية للمعلومات.
                            </p>
                            <label for="pic1" class="form-label">ارفق الصورة التوضيحية</label>
                            <input type="file" class="form-control" id="pic1" name="pic1">
                            <label for="txt1" class="form-label">اكتب الفقرة التوضيحية</label>
                            <input type="text" class="form-control" id="txt1" name="txt1" required>
                        </div>
                        <hr>
                        <div id="stage5" class="mb-3 text-right">
                            <h4 style="font-family: GESmedium;text-align: right;color:#DDA633;direction: rtl;">الخطوة الرابعة</h4>
                            <p style="font-family: GESlight;text-align: right;color:#AB7F55;direction: rtl;">
                                <strong>فقرة التوصيل: </strong>يقوم الطالب بإعادة ترتيب الفقرات بالشكل الصحيح.
                            </p>
                            <label for="match" class="form-label">ضع الفقرات بالترتيب الصحيح</label>
                            <input type="text" class="form-control" id="m1" name="m1" placeholder="1" required>
                            <input type="text" class="form-control" id="m2" name="m2" placeholder="2" required>
                            <input type="text" class="form-control" id="m3" name="m3" placeholder="3" required>
                            <input type="text" class="form-control" id="m4" name="m4" placeholder="4" required>
                            <input type="text" class="form-control" id="m5" name="m5" placeholder="5" required>
                        </div>
                        <hr>
                        <div id="stage6" class="mb-3 text-right">
                            <h4 style="font-family: GESmedium;text-align: right;color:#DDA633;direction: rtl;">الخطوة الخامسة</h4>
                            <p style="font-family: GESlight;text-align: right;color:#AB7F55;direction: rtl;" class="mb-0">
                                <strong>الهدف: </strong>في هذه المرحلة تنمية القراءة الصحيحة للمتعلم.
                            </p>
                            <p style="font-family: GESlight;text-align: right;color:#AB7F55;direction: rtl;">
                                <strong>مواصفات الخطوة: </strong>يتم إدراج المعلومات والمعارف على شكل نص منظم.
                            </p>
                            <label for="pic2" class="form-label">ارفق الصورة التوضيحية</label>
                            <input type="file" class="form-control" id="pic2" name="pic2">
                            <label for="txt2" class="form-label">اكتب الفقرة التوضيحية</label>
                            <input type="text" class="form-control" id="txt2" name="txt2" required>
                        </div>
                        <hr>
                        <div id="stage7" class="mb-3 text-right">
                            <h4 style="font-family: GESmedium;text-align: right;color:#DDA633;direction: rtl;">الخطوة السادسة</h4>
                            <p style="font-family: GESlight;text-align: right;color:#AB7F55;direction: rtl;">
                                <strong>الهدف من السؤال </strong>سؤال استفتاحي بسيط يستهدف مهارة االستذكار.
                            </p>
                            <label for="q4" class="form-label">السؤال</label>
                            <input type="text" class="form-control" id="q4" name="q4" required>
                            <label for="a4" class="form-label">الاجابة</label>
                            <input type="text" class="form-control" id="a4" name="a41" placeholder="الخيار الاول" required>
                            <input type="text" class="form-control" id="a4" name="a42" placeholder="الخيار الثاني" required>
                            <input type="text" class="form-control" id="a4" name="a43" placeholder="الخيار الثالث" required>

                            <label for="q5" class="form-label">السؤال</label>
                            <input type="text" class="form-control" id="q5" name="q5" required>
                            <label for="a5" class="form-label">الاجابة</label>
                            <input type="text" class="form-control" id="a5" name="a51" placeholder="الخيار الاول" required>
                            <input type="text" class="form-control" id="a5" name="a52" placeholder="الخيار الثاني" required>
                            <input type="text" class="form-control" id="a5" name="a53" placeholder="الخيار الثالث" required>

                            <label for="q6" class="form-label">السؤال</label>
                            <input type="text" class="form-control" id="q6" name="q6" required>
                            <label for="a6" class="form-label">الاجابة</label>
                            <input type="text" class="form-control" id="a6" name="a61" placeholder="الخيار الاول" required>
                            <input type="text" class="form-control" id="a6" name="a62" placeholder="الخيار الثاني" required>
                            <input type="text" class="form-control" id="a6" name="a63" placeholder="الخيار الثالث" required>
                        </div>
                        <hr>
                        <div id="stage8" class="mb-3 text-right">
                            <h4 style="font-family: GESmedium;text-align: right;color:#DDA633;direction: rtl;">الخطوة السابعة</h4>
                            <p style="font-family: GESlight;text-align: right;color:#AB7F55;direction: rtl;" class="mb-0">
                                <strong>الهدف: </strong>في هذه المرحلة تنمية القراءة الصحيحة للمتعلم.
                            </p>
                            <p style="font-family: GESlight;text-align: right;color:#AB7F55;direction: rtl;">
                                <strong>مواصفات الخطوة: </strong>يتم إدراج المعلومات والمعارف على شكل نص منظم.
                            </p>
                            <label for="pic3" class="form-label">ارفق الصورة التوضيحية</label>
                            <input type="file" class="form-control" id="pic3" name="pic3">
                            <label for="txt3" class="form-label">اكتب الفقرة التوضيحية</label>
                            <input type="text" class="form-control" id="txt3" name="txt3" required>
                        </div>
                        <hr>
                        <div id="stage9" class="mb-3 text-right">
                            <h4 style="font-family: GESmedium;text-align: right;color:#DDA633;direction: rtl;">الخطوة الثامنة</h4>
                            <p style="font-family: GESlight;text-align: right;color:#AB7F55;direction: rtl;">
                                <strong>الهدف: </strong>تنمية حس التعبير والبحث و تنظيم المعلومات من خالل تعبئة المطوية.
                            </p>
                            <input type="text" class="form-control" name="stg8" value="عزيزي الطالب أرجو منكم أن تقوم بتعبة هذه المطوية بكل ما تعلمته خلال هذا الدرس ولا تنسى أن تنظم مطويتك." readonly>
                            <label for="" class="form-label">شكل المطوية قائمة منسدلة تحتوى على الخيارات التالية - مطوية من عمودين ، من ثالث أعمدة ، من أربع أعمدة
                            </label>
                        </div>
                        <hr>
                        <div id="stage1" class="mb-3 text-right">
                            <h4 style="font-family: GESmedium;text-align: right;color:#DDA633;direction: rtl;">الخطوة التاسعة</h4>
                            <p style="font-family: GESlight;text-align: right;color:#AB7F55;direction: rtl;">
                                <strong>الهدف: </strong>تنمية مهارة التواصل بين المتعلمين.
                            </p>
                            <textarea class="form-control" name="stg9" rows="4">
                                عزيزي المتعلم
                                - قم بإعداد سؤالين عنما تعلمته في درس اليوم وقم بكتابتها في المنتدى .
                                - ومن ثم اجب عن سؤالين قام أحد زملائك بوضعها.
                                - ومن ثم ناقش زملائك في إي إجابة تراها أنها غير صحيحة.
                            </textarea>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-warning" style="font-family: GESmedium;direction: ltr;">أرسال الدرس للطالب</button>
                    </form>
                </div>

                <!-- JS -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

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