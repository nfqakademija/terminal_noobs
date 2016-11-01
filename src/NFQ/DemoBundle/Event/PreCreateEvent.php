<?php

namespace NFQ\DemoBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class PreCreateEvent extends Event
{
    const NAME = 'app.pre_create';

    private $car;
    private $shoes;


    public function __construct($shoes)
    {
        $this->setShoes($shoes);
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

    /**
     * @return mixed
     */
    public function getShoes()
    {
        return $this->shoes;
    }

    /**
     * @param mixed $shoes
     */
    public function setShoes($shoes)
    {
        $this->shoes = $shoes;
    }
}