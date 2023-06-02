<?php

namespace App\Controllers;

use App\Entities\Login;
use App\Models\LoginModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class UserLoginController
{
    private PhpRenderer $renderer;
    Private LoginModel $loginModel;

    public function __construct(PhpRenderer $phpRenderer, LoginModel $loginModel)
    {
        $this->renderer = $phpRenderer;
        $this->loginModel = $loginModel;
    }

    function __invoke(RequestInterface  $request, ResponseInterface $response): ResponseInterface
    {
        if ($request->getMethod() === 'POST') {
            $data = $request->getParsedBody();

            // Grabbing the data
            $uid = $data["uid"];
            $pwd = $data["pwd"];

            // Instantiate User object and perform login
            $login = new Login($uid, $pwd, $this->loginModel);
            $login->loginUser($uid, $pwd);

            // Going back to the front page
            return $response->withHeader("Location", "/home?error=none")->withStatus(302);
        }
        return $this->renderer->render($response, 'login.php');
    }
}
