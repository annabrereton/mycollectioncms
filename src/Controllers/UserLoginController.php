<?php

namespace App\Controllers;

use App\Entities\Login;
use App\Entities\User;
use App\Models\LoginModel;
use App\Models\UserModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class UserLoginController
{
    private PhpRenderer $renderer;
    Private LoginModel $loginModel;
    private UserModel $userModel;

    public function __construct(PhpRenderer $phpRenderer, LoginModel $loginModel, UserModel $userModel)
    {
        $this->renderer = $phpRenderer;
        $this->loginModel = $loginModel;
        $this->userModel = $userModel;
    }

    function __invoke(RequestInterface  $request, ResponseInterface $response): ResponseInterface
    {
        if ($request->getMethod() === 'POST') {
            $data = $request->getParsedBody();

            // Grabbing the data
            $uid = $data["uid"];
            $pwd = $data["pwd"];

            // Instantiate Login and User object and perform login
            $login = new Login($uid, $pwd, $this->loginModel);
            $login->loginUser($uid, $pwd);


            $userData = $this->userModel->getIdByUserName($uid);
            $userId = $userData['id'];
//        echo '<pre>';
//        print_r($userData);
//        echo '</pre>';

            // Redirect to user's collection page
            return $response->withHeader("Location", "/collection/$userId")->withStatus(302);
        }
            // Rendering the login form
        return $this->renderer->render($response, 'login.php');
    }
}
