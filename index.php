<?php
session_start();
if (isset($_POST["login"])) {
    include_once 'classes/dbh.classes.php';
    include_once 'classes/login.classes.php';
    include_once 'classes/login-contr.classes.php';
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $login = new LoginContr($uid, $pwd);
    $login->loginUser();
}

if (isset($_POST["signup"])) {
    include_once 'classes/dbh.classes.php';
    include_once 'classes/signup.classes.php';
    include_once 'classes/signup-contr.classes.php';
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];
    $signup = new SignupContr($uid, $pwd, $pwdrepeat, $email);
    $signup->signupUser();
}
?>

<?php
$activelink0 = true;
$logoutbtn = "./includes/logout.inc.php";
$menu0 = "#";
$menu1 = "./includes/stocks.inc.php";
include_once './includes/components/navbar.inc.php'; ?>

<main>
    <section class="container start">
        <?php if (!isset($_SESSION["username"])) { ?>
        <div class="forms between">
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
                <!-- login error handlers -->
                <?php if (isset($login->errors)) echo "<label class=\"warning\">$login->errors</label>"; ?>
            </form>
        </div>
        <?php } else { ?>

        <div class="quotes">
            <p class="quote"></p>
            <p class="author"></p>
            <button class="next-quote">Next quote</button>
        </div>
        <?php } ?>

    </section>

    <?php
    // signup error handlers
    if (isset($signup->errors["input"])) echo $signup->errors["input"];
    if (isset($signup->errors["uidtaken"])) echo $signup->errors["uidtaken"];
    if (isset($signup->errors["pwd"])) echo $signup->errors["pwd"];
    if (isset($signup->errors["email"])) echo $signup->errors["email"];
    if (isset($signup->errors["uid"])) echo "<label class=\"warning\">$signup->errors[\"uid\"] </label>";


    ?>

</main>

<?php include_once './includes/components/footer-scripts.inc.php'; ?>