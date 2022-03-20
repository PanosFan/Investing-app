<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.min.css">
    <link rel="stylesheet" href="../style.min.css">
    <title>Php project</title>
</head>

<body>
    <header>
        <nav>
            <div class="container between center">
                <h1 class="logo"><a href="#"><span>Php</span> project</a></h1>
                <div class="menu">
                    <a class="<?php if (isset($activelink0)) echo "active-link"; ?>" href=<?php echo $menu0 ?>>Home</a>
                    <a class="<?php if (isset($activelink1)) echo "active-link"; ?>"
                        href=<?php echo $menu1 ?>>Stocks</a>
                    <a class="<?php if (isset($activelink2)) echo "active-link"; ?>" href="#">Menu3</a>
                    <a class="<?php if (isset($activelink3)) echo "active-link"; ?>" href="#">Menu4</a>
                </div>

                <?php
                if (isset($_SESSION["username"])) {
                ?>
                <div class="login-buttons">
                    <button><a href=<?php echo $logoutbtn ?>>Logout</a></button>
                </div>
                <?php
                } else {
                ?>
                <div class="login-buttons none">
                    <button>Login</button>
                    <button>Sign up</button>
                </div>
                <?php
                }
                ?>

                <button class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </nav>

        <nav class="mobile-nav">
            <a href="#" class="active-link">Home</a>
            <a href="#">Stocks</a>
            <a href="#">Menu3</a>
            <a href="#">Menu4</a>
            <a href="#">Menu5</a>
            <a href="#">Menu6</a>
            <a href="#">Menu7</a>
            <a href="#">Menu8</a>
            <a href="#">Menu9</a>
            <a href="#">Menu10</a>
        </nav>
    </header>