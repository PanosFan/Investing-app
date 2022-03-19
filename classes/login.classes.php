<?php


class Login extends Dbh {

    protected function getUser ($uid, $pwd) {
        $statement = $this->connect()->prepare('SELECT users_uid, users_pwd FROM users WHERE users_uid =?;');
        
        if (!$statement->execute(array($uid))) {
            $statement = null;
            header("location: ../index.php");
            die();
        }

        if ($statement->rowCount() == 0) {
            $statement = null;
            header("location: ../index.php");
            // echo "no user found";
            die();
        }

        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $data[0]["users_pwd"]);


        if (!$checkPwd) {
            $statement = null;
            header("location: ../index.php");
            // echo 'wrong password';
            die();
        }

      
        
        session_start();
        $_SESSION["username"] = $data[0]["users_uid"];
        $statement = null;
    }
}