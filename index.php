<?php
        
    if (isset($_POST["login"])) {
        include_once 'classes/dbh.classes.php';
        include_once 'classes/login.classes.php';
        include_once 'classes/login-contr.classes.php';
        $uid = $_POST["uid"];
        $pwd = $_POST["pwd"];
    
        $login = new LoginContr($uid, $pwd);
    
        $login->loginUser();
        echo $login->errors;
    }

    if (isset($_POST["signup"])) {
        $uid = $_POST["uid"];
        $pwd = $_POST["pwd"];
        $pwdrepeat = $_POST["pwdrepeat"];
        $email = $_POST["email"];
        
        include_once 'classes/dbh.classes.php';
        include_once 'classes/signup.classes.php';
        include_once 'classes/signup-contr.classes.php';
        
    
        $signup = new SignupContr($uid, $pwd, $pwdrepeat, $email);
    
        $signup->signupUser();
        if (isset($signup->errors["input"])) echo $signup->errors["input"];
        if (isset($signup->errors["uidtaken"])) echo $signup->errors["uidtaken"];
        if (isset($signup->errors["pwd"])) echo $signup->errors["pwd"];
        if (isset($signup->errors["email"])) echo $signup->errors["email"];
        if (isset($signup->errors["uid"])) echo $signup->errors["uid"];
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.min.css">
    <title>Php project</title>
</head>

<body>
    <header>
        <nav>
            <div class="container between center">
                <h1 class="logo"><a href="#"><span>Php</span> project</a></h1>
                <div class="menu">
                    <a href="#" class="active-link">Home</a>
                    <a href="#">Menu2</a>
                    <a href="#">Menu3</a>
                    <a href="#">Menu4</a>
                </div>

                <?php 
                    if (isset($_SESSION["username"]))
                    {
                ?>
                <div class="login-buttons">
                    <button><a href="includes/logout.inc.php">Logout</a></button>
                </div>
                <?php
                    }
                    else
                    {
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
            <a href="#">Menu2</a>
            <a href="#">Menu3</a>
            <a href="#">Menu4</a>
        </nav>
    </header>
    <main>
        <section class="container start">
            <div class="between forms">
                <form action="" method="post">
                    <h2>Sign up</h2>
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                    <input type="email" name="email" placeholder="E-mail">
                    <button type="submit" name="signup">Sign up</button>
                </form>
                <form action="" method="post">
                    <h2>Login</h2>
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="login">Login</button>
                </form>
            </div>
            <div class="quotes">
                <p class="quote"></p>
                <p class="author"></p>
                <button class="next-quote">Next quote</button>
            </div>
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>

</html>