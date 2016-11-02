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

class ShoeFactory
{
    /**
     * @var EventDispatcher
     */
    private  $eventDispatcher;

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
        $fancy_shoe = new Shoe;
        $fancy_shoe->setHeelHeight(0.5);
        $fancy_shoe->setHeelMaterial("Platinum and Carbon mesh");
        $fancy_shoe->setHeelWidth(20);
        $fancy_shoe->setLacesColour("Chrome");
        $fancy_shoe->setLacesDiameter("15 units of laces diameter");
        $fancy_shoe->setShoeColour("Fancy Gray");
        $fancy_shoe->setLacesLength(15);
        $fancy_shoe->setShoeMaterial("Dark Matter");
        $this->eventDispatcher->dispatch(Events:: PRE_CREATE, new PreCreateEvent($basic_shoe));
        return $basic_shoe;

    }

    /**
     * Returns shoes
     * @return array
     *
     */
    public function getShoesList()
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
        $fancy_shoe = new Shoe;
        $fancy_shoe->setHeelHeight(0.5);
        $fancy_shoe->setHeelMaterial("Platinum and Carbon mesh");
        $fancy_shoe->setHeelWidth(20);
        $fancy_shoe->setLacesColour("Chrome");
        $fancy_shoe->setLacesDiameter("15 units of laces diameter");
        $fancy_shoe->setShoeColour("Fancy Gray");
        $fancy_shoe->setLacesLength(17);
        $fancy_shoe->setShoeMaterial("Dark Matter");
        return[$basic_shoe, $fancy_shoe];
    }

}