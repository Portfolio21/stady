<?php

namespace engine;

interface Engine
{
    /**
     * @return bool
     */
    public function getIsOn();

    public function setIsOn($isOn);
}