<?php

namespace NFQ\DemoBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class PreCreateEvent extends Event
{
    const NAME = 'app.pre_create';

    private $car;

    public function __construct($car)
    {
        $this->setCar($car);
    }

    /**
     * @return mixed
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * @param mixed $car
     */
    public function setCar($car)
    {
        $this->car = $car;
    }
}