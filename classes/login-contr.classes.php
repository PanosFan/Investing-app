<?php

class LoginContr extends Login
{
    private $uid;
    private $pwd;
    public $errors;


    public function __construct($uid, $pwd)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
    }

    public function loginUser()
    {
        if (!$this->emptyInput()) {
            $this->errors = "empty input";
        } else {
            $this->getUser($this->uid, $this->pwd);
        }
    }


    private function emptyInput()
    {
        if (empty($this->uid) || empty($this->pwd)) {
            return false;
        } else {
            return true;
        }
    }
}