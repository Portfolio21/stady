<?php

namespace car;

class Hyundai extends Car
{
    const MODEL_NAME = 'Hyundai';

    /**
     * @return string
     */
    function getModelName()
    {
        return self::MODEL_NAME;
    }

    /**
     * @return void
     */
    function start()
    {
        echo 'another method';

        $this->engine->setIsOn(true);
    }
}
