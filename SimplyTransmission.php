<?php

include 'Transmission.php';

class SimplyTransmission implements Transmission
{
    const SPEED_STEEP = 10;

    protected $speed = 0;

    /**
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    public function speedUp() {
        $this->speed += self::SPEED_STEEP;
    }

    public function speedDown() {
        $this->speed -= self::SPEED_STEEP;
    }
}
