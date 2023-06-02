<?php
declare(strict_types=1);

use App\Controllers\HomeRecipeCollectionController;
use App\Controllers\UserRecipeCollectionController;
use Slim\App;
use Slim\Views\PhpRenderer;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/home', HomeRecipeCollectionController::class);
    $app->get('/collection/{userid}', UserRecipeCollectionController::class);


};
