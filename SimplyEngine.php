<?php

include 'Engine.php';

class SimplyEngine implements Engine
{
    /**
     * @return bool
     */
    protected $isOn = false;

    /**
     * @return bool
     */
    public function getIsOn()
    {
        return $this->isOn;
    }

    /**
     * @param mixed $isOn
     */
    public function setIsOn($isOn)
    {
        $this->isOn = $isOn;
    }

}
