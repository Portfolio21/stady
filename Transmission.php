<?php

interface Transmission
{
    /**
     * @return int
     */
    public function getSpeed();

    public function speedUp();

    public function speedDown();
}