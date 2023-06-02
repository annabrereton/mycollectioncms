<?php

namespace App\Entities;

use App\Models\UserModel;

class User
{
    private string $uid;
    private string $pwd;
    private string $pwdRepeat;
    private string $email;

    public function __construct($uid, $pwd, $pwdRepeat, $email)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @return mixed
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * @return mixed
     */
    public function getPwdRepeat()
    {
        return $this->pwdRepeat;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
}
