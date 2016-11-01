<?php

namespace NFQ\DemoBundle\Event;

use NFQ\DemoBundle\Service\Car;
use NFQ\DemoBundle\Service\Shoe;

class EventListener
{
    /**
     * @param PreCreateEvent $event
     */
    public function makeChanges($event)
    {
        /** @var Shoe $shoes */
        $shoes = $event->getShoes();
        foreach($shoes as $shoe)
        {
            $shoe->setShoeMaterial('Rubber from rubberry duckeys');
        }
    }
}
