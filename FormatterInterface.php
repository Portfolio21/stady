<?php

/**
 * Interface FormatterInterface
 */
interface FormatterInterface
{
    /**
     * @param $level
     * @param string $message
     * @param array $context
     *
     * @return mixed
     */
    public function format($level, string $message, array $context = []);
}
