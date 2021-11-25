<?php

/**
 * Class Application
 */
class Application implements RunnableInterface
{
    /**
     * @var Router
     */
    private $router;

    public function __construct(RouteInterface $router)
    {
        $this->router = $router;
    }

    public function run()
    {
        try {
            $this->router->route();
        } catch (Throwable $exception) {
            http_response_code();
            echo "Not Found";
        }
    }
}
