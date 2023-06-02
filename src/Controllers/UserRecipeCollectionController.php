<?php

namespace App\Controllers;

use App\Models\RecipeCollectionModel;
use App\Models\UserModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class UserRecipeCollectionController
{
    private PhpRenderer $renderer;
    private RecipeCollectionModel $recipeCollectionModel;
    private UserModel $userModel;

    public function __construct(PhpRenderer $phpRenderer, RecipeCollectionModel $recipeCollectionModel, UserModel $userModel)
    {
        $this->renderer = $phpRenderer;
        $this->recipeCollectionModel = $recipeCollectionModel;
        $this->userModel = $userModel;
    }

    function __invoke(RequestInterface  $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $id = $args['userid']; // can put validation in here to check id is a valid integer
        $data = $this->recipeCollectionModel->getRecipesByUserId($id);
        $userData = $this->userModel->getUsernameById($id);
        $userName = $userData['uid'];
//        echo '<pre>';
//        print_r($userName);
//        echo '</pre>';

        return $this->renderer->render($response, 'collection.php', ['usersRecipes' => $data, 'userName' => $userName]);

    }
}

//        return $this->renderer->render($response, 'collection.php');

//getqueryparams to get user id