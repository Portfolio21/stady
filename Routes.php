<?php

/**
 * Class Application
 */
class Routes
{
    /**
     * @throws Exception
     */
    public static function getRoutes(): array
    {
        return [
            '/user/{id}' => 'UserController@view',
            '/user' => 'UserController@index',
        ];
    }
}


