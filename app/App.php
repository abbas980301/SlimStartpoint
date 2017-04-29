<?php

namespace app;

/**
 * Class App
 * @package app
 */
class App
{
    /**
     *
     */
    public function run()
    {
        $config = [
            'settings' => [
                'displayErrorDetails' => true,
            ]
        ];
        $app = new \Slim\App($config);

        $app->get('/a', '\app\controllers\UserController:index');

        $app->run();
    }
}