<?php

include '../../../../../database/connect.php';

// $DATABASE_HOST = 'localhost';
// $DATABASE_USER = 'root';
// $DATABASE_PASS = '';
// $DATABASE_NAME = 'rehla';
// $conn = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

$id = rand();
$subject = $_POST['subject'];
$class = $_POST['class'];
$title = $_POST['title'];
$vid1 = $_POST['vid1'];
$q1 = $_POST['q1'];
$a11 = $_POST['a11'];
$a12 = $_POST['a12'];
$a13 = $_POST['a13'];
$q2 = $_POST['q2'];
$a2 = $_POST['a2'];
$q3 = $_POST['q3'];
$a3 = $_POST['a3'];
$pic1 = $_POST['pic1'];
$txt1 = $_POST['txt1'];
$m1 = $_POST['m1'];
$m2 = $_POST['m2'];
$m3 = $_POST['m3'];
$m4 = $_POST['m4'];
$m5 = $_POST['m5'];
$pic2 = $_POST['pic2'];
$txt2 = $_POST['txt2'];
$q4 = $_POST['q4'];
$a41 = $_POST['a41'];
$a42 = $_POST['a42'];
$a43 = $_POST['a43'];
$q5 = $_POST['q5'];
$a51 = $_POST['a51'];
$a52 = $_POST['a52'];
$a53 = $_POST['a53'];
$q6 = $_POST['q6'];
$a61 = $_POST['a61'];
$a62 = $_POST['a62'];
$a63 = $_POST['a63'];
$pic3 = $_POST['pic3'];
$txt3 = $_POST['txt3'];
$stg8 = $_POST['stg8'];
$stg9 = $_POST['stg9'];

$INSERT = "INSERT INTO `listen`('id',`subject`, `class`, `title`, `vid1`, `q1`, `a11`, `a12`, `a13`, `q2`, `a2`, `q3`, `a3`, `pic1`, `txt1`, `m1`, `m2`, `m3`, `m4`, `m5`, `pic2`, `txt2`, `q4`, `a41`, `a42`, `a43`, `q5`, `a51`, `a52`, `a53`, `q6`, `a61`, `a62`, `a63`, `pic3`, `txt3`, `stg8`, `stg9`) VALUES ('$id',`$subject`, `$class`, `$title`, `$vid1`, `$q1`, `$a11`, `$a12`, `$a13`, `$q2`, `$a2`, `$q3`, `$a3`, `$pic1`, `$txt1`, `$m1`, `$m2`, `$m3`, `$m4`, `$m5`, `$pic2`, `$txt2`, `$q4`, `$a41`, `$a42`, `$a43`, `$q5`, `$a51`, `$a52`, `$a53`, `$q6`, `$a61`, `$a62`, `$a63`, `$pic3`, `$txt3`, `$stg8`, `$stg9`)";
$result = mysqli_query($conn, $INSERT);
echo $result;

if ($result) {
    echo ' inserted';
} else {
    echo '<h1 style="text-align:center">تم رفع الدرس بنجاح</h1>';
    // echo 'not inserted';
    // echo 'result = '+$result;
}
mysqli_close($conn);
