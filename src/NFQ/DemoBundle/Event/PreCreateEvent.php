<?php

namespace NFQ\DemoBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class PreCreateEvent extends Event
{
    const NAME = 'app.pre_create';


    private $shoes;


    public function __construct($shoes)
    {
        $this->setShoes($shoes);
    }

    /**
     * @return mixed
     */

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