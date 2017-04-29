<?php

namespace app\controllers;


use app\models\User;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Class UserController
 * @package app\controllers
 */
class UserController
{
    /**
     * @param Request $request
     * @param Response $response
     * @return Response
     */
    public function index(Request $request, Response $response)
    {
        $userCount = User::count();
        $response->write('# of users: '.$userCount);
        return $response;
    }
}