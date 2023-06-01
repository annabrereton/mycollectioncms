<?php

namespace App\Controllers;

use App\Models\RecipeCollectionModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class HomeRecipeCollectionController
{
    private PhpRenderer $renderer;
    private RecipeCollectionModel $recipeCollectionModel;

    public function __construct(PhpRenderer $phpRenderer, RecipeCollectionModel $recipeCollectionModel)
    {
        $this->renderer = $phpRenderer;
        $this->recipeCollectionModel = $recipeCollectionModel;
    }

    function __invoke(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $data = $this->recipeCollectionModel->fetchAllRecipes();
        return $this->renderer->render($response, 'index.php', ['recipes' => $data]);
    }
}