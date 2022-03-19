<?php

if (isset($_POST["submit"])) {
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    include_once '../classes/dbh.classes.php';
    include_once '../classes/login.classes.php';
    include_once '../classes/login-contr.classes.php';
    
    $login = new LoginContr($uid, $pwd);

    $login->loginUser();
    header("location: ../index.php?");

}

