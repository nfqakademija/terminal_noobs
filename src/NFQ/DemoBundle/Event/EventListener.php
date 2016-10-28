<?php

namespace NFQ\DemoBundle\Event;

use NFQ\DemoBundle\Service\Car;

class EventListener
{
    /**
     * @param PreCreateEvent $event
     */
    public function makeChanges($event)
    {
        /** @var Car $car */
        $car = $event->getCar();
        $car->setEngine('4.2 TFSI');
    }
}
