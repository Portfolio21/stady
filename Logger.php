<?php

require 'LoggerInterface.php';

/**
 * Class Logger
 */
class Logger implements LoggerInterface
{
    /**
     * @var WriteInterface
     */
    protected $driver;

    /**
     * @var FormatterInterface
     */
    protected $formatter;

    public function __construct(WriteInterface $driver, FormatterInterface $formatter)
    {
        $this->driver = $driver;
        $this->formatter = $formatter;
    }

    /**
     * @param mixed $level
     * @param string $message
     * @param array $context
     */
    public function log($level, string $message, array $context = [])
    {
        $message = $this->formatter->format($level, $message, $context);

       $this->driver()->write($message);
    }

    /**
     * @return WriteInterface
     */
    private function driver(): WriteInterface
    {
        return $this->driver;
    }
}
