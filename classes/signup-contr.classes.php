<?php

class SignupContr extends Signup
{
    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;
    public $errors = [];

    public function __construct($uid, $pwd, $pwdrepeat, $email)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
        $this->email = $email;
    }


    public function signupUser()
    {
        if (!$this->emptyInput()) {
            $this->errors["input"] = "no input";
        } elseif (!$this->invalididUid()) {
            $this->errors["uid"] = "invalid uid";
        } elseif (!$this->invalidEmail()) {
            $this->errors["email"] = "invalid email";
        } elseif (!$this->pwdMatch()) {
            $this->errors["pwd"] = "pwd has to match";
        } elseif (!$this->uidTakenCheck()) {
            $this->errors["uidtaken"] = "already taken";
        } else {
            $this->setUser($this->uid, $this->pwd, $this->email);
        }
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
        } else {
            return true;
        }
    }
}