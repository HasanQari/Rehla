<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["username"]);
unset($_SESSION["useremail"]);
unset($_SESSION["regType"]);
header("Location:../../index.html");
?>