<?php

include '../../database/connect.php';

session_start();
$con = mysqli_connect('127.0.0.1:3306', 'root', '', 'rehla') or die('Unable To connect to DB');
$querySelect = "SELECT * FROM customer WHERE useremail = '" . $_POST["email"] . "' and password = '" . $_POST["pass"] . "'";
$result = mysqli_query($con, $querySelect);
$row  = mysqli_fetch_array($result);

if (is_array($row)) {
    $_SESSION["id"] = $row['id'];
    $_SESSION["username"] = $row['username'];
    $_SESSION["useremail"] = $row['useremail'];
    $_SESSION["regType"] = $row['regType'];
    if ($row['regType'] == 1) {
        header("Location:../../res/view/Domain-1/boss/home.php");
    } elseif ($row['regType'] == 2) {
        header("Location:../../res/view/Domain-2/instructor/home.php");
    } elseif ($row['regType'] == 3) {
        header("Location:../../res/view/Domain-2/student/home.php");
    } else {
        echo 'start session error';
    }
} else {
    $message = "Invalid Username or Password!";
}