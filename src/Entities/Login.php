<?php

namespace App\Entities;

use App\Models\LoginModel;

class Login
{
    private string $uid;
    private string $pwd;
    private LoginModel $loginModel;



    public function __construct($uid, $pwd, LoginModel $loginModel)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->loginModel = $loginModel;

    }

    public function loginUser()
    {
        if($this->emptyLoginInput() == false) {
            //echo "empty input!";
            header("location: /login?error=emptyinput");
            exit();
        }
        $this->loginModel->getUser($this->uid, $this->pwd);
    }

    private function emptyLoginInput()
    {
        $result = true;
        if(empty($this->uid) || empty($this->pwd)) {
            $result = false;
        }
        return $result;
    }
}