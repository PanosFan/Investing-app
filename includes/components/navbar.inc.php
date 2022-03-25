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
                <h1 class="logo"><a href=<?php echo $menu0 ?>><span>Php</span> project</a></h1>
                <div class="menu">

                    <?php
                    if (isset($_SESSION["username"])) {
                    ?>
                    <a class="<?php if ($activelink0) echo "active-link"; ?>" href=<?php echo $menu0 ?>>Home</a>
                    <a class="<?php if ($activelink1) echo "active-link"; ?>" href=<?php echo $menu1 ?>>Stocks</a>
                    <a class="logout-btn" href=<?php echo $logoutbtn ?>>Logout</a>
                    <?php
                    }
                    ?>
                </div>



                <?php if (isset($_SESSION["username"])) { ?>
                <button class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <?php } ?>
            </div>
        </nav>

        <nav class="mobile-nav">

            <?php
            if (isset($_SESSION["username"])) {
            ?>
            <a class="<?php if (isset($activelink0)) echo "active-link"; ?>" href=<?php echo $menu0 ?>>Home</a>
            <a class="<?php if (isset($activelink1)) echo "active-link"; ?>" href=<?php echo $menu1 ?>>Stocks</a>
            <a class="logout-btn" href=<?php echo $logoutbtn ?>>Logout</a>
            <?php
            }
            ?>
        </nav>
    </header>