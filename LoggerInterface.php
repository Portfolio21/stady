<?php

/**
 * Interface LoggerInterface
 */
interface LoggerInterface
{
    /**
     * @param mixed $level
     * @param string $message
     * @param array $context
     */
    public function log($level, string $message, array $context = []);
}
