<?php

require 'WriteInterface.php';

/**
 * Class Logger
 */
class DbWriter implements WriteInterface
{
    /**
     * @param mixed $message
     */
    public function write($message)
    {
        echo 'Лог был успешно записан в базу данных в таблицу logs и содержал данные: ' . $message;
    }
}
