<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location: http://localhost/Investing%20app/index.php?");
    die();
}
session_unset();
session_destroy();
header("location: http://localhost/Investing%20app/index.php?");