<?php
include_once './includes/components/session.inc.php';
if (isset($_POST["login"])) {
    include_once './classes/dbh.classes.php';
    include_once './classes/login.classes.php';
    include_once './classes/login-contr.classes.php';
    // $uid = $_POST["uid"];
    $uid = filter_input(INPUT_POST, "uid", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    // $pwd = $_POST["pwd"];
    $pwd = filter_input(INPUT_POST, "pwd", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $login = new LoginContr($uid, $pwd);
    $login->loginUser();
}

if (isset($_POST["signup"])) {
    include_once './classes/dbh.classes.php';
    include_once './classes/signup.classes.php';
    include_once './classes/signup-contr.classes.php';
    // $uid = $_POST["uid"];
    $uid = filter_input(INPUT_POST, "uid", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    // $pwd = $_POST["pwd"];
    $pwd = filter_input(INPUT_POST, "pwd", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    // $pwdrepeat = $_POST["pwdrepeat"];
    $pwdrepeat = filter_input(INPUT_POST, "pwdrepeat", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    // $email = $_POST["email"];
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $signup = new SignupContr($uid, $pwd, $pwdrepeat, $email);
    $signup->signupUser();
}
$activelink0 = true;
$logoutbtn = "./includes/logout.inc.php";
$menu0 = "#";
$menu1 = "./includes/stocks.inc.php";
include_once './includes/components/navbar.inc.php';
?>


<main>
    <section class="container start my1">
        <?php if (!isset($_SESSION["username"])) { ?>
        <div class="forms start">
            <form action="" method="post">
                <h2>Sign up</h2>
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                <input type="email" name="email" placeholder="E-mail">
                <button type="submit" name="signup">Sign up</button>
                <?php
                    // signup error handlers
                    if (isset($signup->errors['input'])) echo "<label class=\"warning\">{$signup->errors['input']}</label>";
                    if (isset($signup->errors['uidtaken'])) echo "<label class=\"warning\">{$signup->errors['uidtaken']}</label>";
                    if (isset($signup->errors['pwd'])) echo "<label class=\"warning\">{$signup->errors['pwd']}</label>";
                    if (isset($signup->errors['email'])) echo "<label class=\"warning\">{$signup->errors['email']}</label>";
                    if (isset($signup->errors['uid'])) echo "<label class=\"warning\">{$signup->errors['uid']}</label>";
                    ?>
            </form>
            <form action="" method="post">
                <h2>Login</h2>
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="login">Login</button>
                <!-- login error handlers -->
                <?php if (isset($login->errors)) echo "<label class=\"warning\">{$login->errors}</label>"; ?>
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


</main>
<?php include_once './includes/components/footer-scripts.inc.php'; ?>