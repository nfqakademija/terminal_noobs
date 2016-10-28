<?php

namespace NFQ\DemoBundle\Service;

use NFQ\DemoBundle\Event\Events;
use NFQ\DemoBundle\Event\PreCreateEvent;
use Symfony\Component\EventDispatcher\EventDispatcher;

class CarFactory
{
    /**
     * @var EventDispatcher
     */
    private $eventDispatcher;

    public function __construct($eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    public function create()
    {
        $car = new Car();
        $car->setEngine('v8');
        $this->eventDispatcher->dispatch(Events::PRE_CREATE, new PreCreateEvent($car));

        return $car;
    }
}
