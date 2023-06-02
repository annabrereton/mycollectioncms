<?php

namespace App\Models;

use App\Entities\Login;
use PDO;

class LoginModel
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getUser($uid, $pwd)
    {
        $sql = 'SELECT `pwd` FROM `users` WHERE `uid` = ? OR `email` = ?;';
        $query = $this->db->prepare($sql);
        $query->setFetchMode(PDO::FETCH_CLASS, Login::class);
        $success = $query->execute(array($uid, $uid));
        if (!$success) {
            $query = null;
            header('location: /login?error=stmtfailed');
            exit();
        }
        $resultCheck = true;
        if ($query->rowCount() == 0) {
            $query = null;
            header('location: /login?error=usernotfound');
            exit();
        }
        $pwdHashed = $query->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHashed[0]['pwd']);

        if (!$checkPwd) {
            $query = null;
            header("location /login?error=usernotfound");
            exit();
        }

        $sql = 'SELECT `id`, `uid`, `pwd` FROM `users` WHERE `uid` = ?;';
        $query = $this->db->prepare($sql);
        $query->setFetchMode(PDO::FETCH_CLASS, Login::class);
        $success = $query->execute(array($uid));
        if (!$success) {
            $query = null;
            header('location: /login?error=stmtfailed');
            exit();
        }

        if ($query->rowCount() == 0) {
            $query = null;
            header("location /login?error=usernotfound");
            exit();
        }
        $user = $query->fetchAll(PDO::FETCH_ASSOC);
        $query = null;

        session_start();
        $_SESSION['userid'] = $user[0]['id'];
        $_SESSION['useruid'] = $user[0]['uid'];
    }
}