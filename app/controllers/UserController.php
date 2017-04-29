<?php
/**
 * Created by PhpStorm.
 * User: he
 * Date: 4/29/2017
 * Time: 11:24 AM
 */

namespace app\controllers;


use app\models\User;
use Slim\Http\Request;
use Slim\Http\Response;

class UserController
{
    public function index(Request $request, Response $response)
    {
        $userCount = User::count();
        $response->write('# of users: '.$userCount);
        return $response;
    }
}