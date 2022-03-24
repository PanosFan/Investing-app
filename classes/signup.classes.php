<?php

class Signup extends Dbh
{

    protected function setUser($uid, $pwd, $email)
    {
        $statement = $this->connect()->prepare('INSERT INTO users (users_uid, users_pwd, users_email) VALUES (?,?,?);');
        $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

        if (!$statement->execute([$uid, $hashedpwd, $email])) {
            $statement = null;
            header("location: http://localhost/Investing%20app/index.php?");
            die();
        }

        $_SESSION["username"] = $uid;
        $statement->closeCursor();
    }

    protected function checkUser($uid, $email)
    {
        $statement = $this->connect()->prepare('SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?;');

        if (!$statement->execute(array($uid, $email))) {
            $statement = null;
            header("location: http://localhost/Investing%20app/index.php?");
            die();
        }

        if ($statement->rowCount() > 0) {
            return false;
        } else {
            return true;
        }
    }
}