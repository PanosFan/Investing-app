<?php

class Login extends Dbh
{

    protected function getUser($uid, $pwd)
    {
        $statement = $this->connect()->prepare('SELECT users_uid, users_pwd FROM users WHERE users_uid =?;');

        if (!$statement->execute([$uid])) {
            $statement = null;
            header("location: http://localhost/Investing-app/index.php");
            die();
        }

        if ($statement->rowCount() > 0) {

            $data = $statement->fetchAll(PDO::FETCH_ASSOC);
            $checkPwd = password_verify($pwd, $data[0]["users_pwd"]);

            if (!$checkPwd) {
                $statement->closeCursor();
                return false; //return false to trigger the error when getUser is called
            } else {
                $_SESSION["username"] = $data[0]["users_uid"];
                $statement->closeCursor();
                return true;
            }
        } else {
            $statement = null;
            return false; //return false to trigger the error when getUser is called
        }
    }
}