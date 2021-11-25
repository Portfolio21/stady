<?php

/**
 * Class Application
 */
class Router1 implements RouteInterface
{
    /**
     * @throws Exception
     */
    public function route()
    {
        $routes = Routes::getRoutes();
        $isMatch = false;
        foreach ($routes as $key => $route) {
            $strWithoutChars = preg_replace('/[^0-9]/', '', $_SERVER['REQUEST_URI']);
            if ($strWithoutChars) {
                $str = $this->getStringBetween($key, '{', '}');
                $resultString = strtr($key, ['{' . $str . '}' => $strWithoutChars]);
            } else {
                $resultString = $key;
            }

            if ($_SERVER['REQUEST_URI'] === $resultString) {
                $isMatch = true;
                break;
            }
        }

        if ($isMatch) {
            $component = explode('@', $route);
            $className = $component[0];

            if (class_exists($className)){
                $component = explode('@', $route);
                $controller = new $className();
                $method = $component[1];
                $parameters = [];

                if ($strWithoutChars) {
                    $parameters = [$str => $strWithoutChars];
                }

                return call_user_func_array([$controller, $method], [$parameters]);
            }
        }

        throw new Exception('Route not found');
    }

    /**
     * @param string $string
     * @param string $start
     * @param string $end
     *
     * @return false|string
     */
    private function getStringBetween(string $string, string $start, string $end)
    {
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;

        return substr($string, $ini, $len);
    }
}
