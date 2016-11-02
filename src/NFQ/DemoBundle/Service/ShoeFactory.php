<?php
/**
 * Created by PhpStorm.
 * User: matas
 * Date: 16.10.31
 * Time: 15.43
 */

namespace NFQ\DemoBundle\Service;

use NFQ\DemoBundle\Event\Events;
use NFQ\DemoBundle\Event\PreCreateEvent;
use Symfony\Component\EventDispatcher\EventDispatcher;
use NFQ\DemoBundle\Event\EventSubscriber;

class ShoeFactory
{
    /**
     * @var EventDispatcher
     */
    private  $eventDispatcher;
    private $eventSubscriber;

    public function __construct($eventDispatcher)
    {
        $this ->eventDispatcher = $eventDispatcher;
    }
    public function create()
    {
        $basic_shoe = new Shoe;
        $basic_shoe->setHeelHeight(12);
        $basic_shoe->setHeelMaterial("Žieminių Padangų Guma");
        $basic_shoe->setHeelWidth(20);
        $basic_shoe->setLacesColour("Blueys");
        $basic_shoe->setLacesDiameter("11 units of laces diameter");
        $basic_shoe->setShoeColour("Gray");
        $basic_shoe->setLacesLength(20);
        $basic_shoe->setShoeMaterial("Old rubber");
        $this->eventDispatcher->dispatch(Events:: PRE_CREATE, new PreCreateEvent($basic_shoe));
        $this->eventDispatcher->dispatch(Events:: DO_SOMETHING, new PreCreateEvent($basic_shoe));

        return $basic_shoe;

    }


}