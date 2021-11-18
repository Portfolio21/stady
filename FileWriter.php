<?php

require 'WriteInterface.php';

/**
 * Class Logger
 */
class FileWriter implements WriteInterface
{
    /**
     * @param mixed $message
     */
    public function write($message)
    {
        file_put_contents("log.txt", $message . "\n"  , FILE_APPEND | LOCK_EX);
    }
}
