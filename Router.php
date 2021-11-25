<?php

/**
 * Class Application
 */
class Router implements RouteInterface
{
    /**
     * @throws Exception
     */
    public function route()
    {
        $arg = explode('/', substr($_SERVER['REQUEST_URI'], 1));

        $parameters = [];
        $str = ucfirst($arg[0]) . 'Controller';

        if (class_exists($str)){
            $controller = new $str();
            $method = $arg[1];
            if (method_exists($controller, $method)) {
                if (isset($arg[2]) && isset($arg[3])) {
                    $name = $arg[2];
                    $value = $arg[3];
                    $parameters = [$name => $value];
                }

                return call_user_func_array([$controller, $method], [$parameters]);
            }
        }

        throw new Exception('Route not found');
    }
}
