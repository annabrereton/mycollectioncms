<?php

namespace App\Models;

use App\Entities\User;
use PDO;

class UserModel
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getUsernameById($id): array
    {
        $sql = 'SELECT `uid` '
            . 'FROM `users` '
            . 'WHERE `id` = :id; ';

        $values = [':id' => $id];

        $query = $this->db->prepare($sql);
        $query->execute($values);
        $userName = $query->fetch();

        return $userName;
    }

//    public function fetchUserDataFromUsersId($id): array
//    {
//        $sql = 'SELECT `id`, `uid`, `pwd`, `email` '
//            . 'FROM `users` '
//            . 'WHERE `id` = :id; ';
//
//        $values = [':id' => $id];
//
//        $query = $this->db->prepare($sql);
//        $query->execute($values);
//        $rows = $query->fetchAll();
//
//        $userData = [];
//        foreach ($rows as $row) {
//            $recipe = new User (
//                $row['id'],
//                $row['uid'],
//                $row['pwd'],
//                $row['email']
//            );
//            $userData[] = $recipe;
//        }
//        return $userData;
//    }
}
