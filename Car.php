<?php

include 'MovableInterface.php';

abstract class Car implements MovableInterface
{
    const MAX_SPEED = 100;
    const MIN_SPEED = 0;

    /**
     * @var
     */
    protected $engine;

    /**
     * @var
     */
    protected $transmission;

    public function __construct(Engine $engine, Transmission $transmission)
    {
        $this->engine = $engine;
        $this->transmission = $transmission;
    }

    public function start()
    {
        $this->engine->setIsOn(true);
    }

    public function stop()
    {
        $this->engine->setIsOn(false);
    }

    public function up()
    {
        $this->checkEngine();

        if ($this->transmission->getSpeed() === self::MAX_SPEED) {
            echo 'Автмобиль набрал максимально возможную скорость скорость ' . self::MAX_SPEED;
        } else {
            $this->transmission->speedUp();
            echo 'Текущая скорость автомибиля ' . $this->transmission->getSpeed();
        }

    }

    public function down()
    {
        $this->checkEngine();

        if ($this->transmission->getSpeed() === self::MIN_SPEED) {
            echo 'Автмобиль набрал минимально возможную скорость скорость ' . self::MIN_SPEED;
        } else {
            $this->transmission->speedDown();
            echo 'Текущая скорость автомибиля ' . $this->transmission->getSpeed();
        }

    }

    private function checkEngine()
    {
        if (!$this->engine->getIsOn()) {
            echo 'Изменение скорости не возможно, двигатель не включен';
            die;
        }
    }

    /**
     * @return string
     */
    abstract function getModelName();
}
