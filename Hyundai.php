<?php

include 'Car.php';

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

}
