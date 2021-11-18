<?php

require 'FormatterInterface.php';

/**
 * Class Logger
 */
class Formatter implements FormatterInterface
{
    public const SIMPLE_FORMAT = "{level} : {date} - {message} {context}";

    /**
     * @var string
     */
    protected $format;

    public function __construct(?string $format = null)
    {
        $this->format = $format === null ? self::SIMPLE_FORMAT : $format;
    }

    /**
     * @param mixed $level
     * @param string $message
     * @param array $context
     *
     * @return mixed
     */
    public function format($level, string $message, array $context = [])
    {
        $replacement = [
            '{level}' => $level,
            '{date}' => date('Y-m-d H:i:s'),
            '{message}' => $message,
            '{context}' => $context,
        ];

        return strtr($this->format, $replacement);;
    }
}
