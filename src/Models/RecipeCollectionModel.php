<?php

namespace App\Models;

use App\Entities\RecipeCollection;
use PDO;

class RecipeCollectionModel
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function fetchAllRecipes(): array
    {
        $sql = 'SELECT `id`, `imglink`, `title`, `description`, `users_id`, `timestamp`, `liked` '
            . 'FROM `recipes`; ';

        $query = $this->db->prepare($sql);
        $query->execute();
        $rows = $query->fetchAll();

        $recipes = [];
        foreach ($rows as $row) {
            $recipe = new RecipeCollection(
                $row['id'],
                $row['imglink'],
                $row['title'],
                $row['description'],
                $row['users_id'],
                $row['timestamp'],
                $row['liked']
            );

            $recipes[] = $recipe;
        }

        return $recipes;
    }

    public function fetchRecipeFromId(int $id): RecipeCollection
    {
        $sql = 'SELECT `id`, `imglink`, `title`, `description`, `users_id`,  `timestamp`, `liked` '
            . 'FROM `recipes` '
            . 'WHERE `id` = :id; ';

        $values = [':id' => $id];

        $query = $this->db->prepare($sql);
        $query->execute($values);
        $recipe = $query->fetch();

        return new RecipeCollection(
            $recipe['id'],
            $recipe['imglink'],
            $recipe['title'],
            $recipe['description'],
            $recipe['users_id'],
            $recipe['timestamp'],
            $recipe['liked']
        );
    }

    public function getRecipesByUserId($id): array
    {
        $sql = 'SELECT `id`, `imglink`, `title`, `description`, `users_id`,  `timestamp`, `liked` '
            . 'FROM `recipes` '
            . 'WHERE `users_id` = :id; ';

        $values = [':id' => $id];

        $query = $this->db->prepare($sql);
        $query->execute($values);
        $rows = $query->fetchAll();

        $usersRecipes = [];
        foreach ($rows as $row) {
            $recipe = new RecipeCollection (
                $row['id'],
                $row['imglink'],
                $row['title'],
                $row['description'],
                $row['users_id'],
                $row['timestamp'],
                $row['liked']
            );
            $usersRecipes[] = $recipe;
        }
        return $usersRecipes;
    }
}