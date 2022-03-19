<?php

class SignupContr extends Signup
{
    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdrepeat, $email)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
        $this->email = $email;
    }


    public function signupUser () {
        if (!$this->emptyInput()) {
            //empty input handle
            header("location: ../index.php");
            die();
        }
        if (!$this->invalididUid()) {
            //invalid uid handle
            header("location: ../index.php");
            die();
        }
        if (!$this->invalidEmail()) {
            //invalid email handle
            header("location: ../index.php");
            die();
        }
        if (!$this->pwdMatch()) {
            //pwd does not match handle
            header("location: ../index.php");
            die();
        }
        if (!$this->uidTakenCheck()) {
            // name is taken handle
            header("location: ../index.php");
            die();
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
    }


    private function emptyInput()
    {
        if (empty($this->uid) || empty($this->pwd) || empty($this->pwdrepeat) || empty($this->email)) {
            return false;
        } else {
            return true;
        }
    }

    private function invalididUid()
    {
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            return false;
        } else {
            return true;
        }
    }

    private function invalidEmail()
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return false;
        } else {
            return true;
        }
    }

    private function pwdMatch()
    {
        if ($this->pwd !== $this->pwdrepeat) {
            return false;
        } else {
            return true;
        }
    }

    private function uidTakenCheck()
    {
        if (!$this->checkUser($this->uid, $this->email)) {
            return false;
        }
        else {
            return true;
        }
    }
}
