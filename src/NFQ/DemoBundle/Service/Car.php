<?php

namespace NFQ\DemoBundle\Service;

class Car
{

    private $wheels;

    private $steering;

    private $engine;

    private $body;

    /**
     * @return mixed
     */
    public function getWheels()
    {
        return $this->wheels;
    }

    /**
     * @param mixed $wheels
     * @return Car
     */
    public function setWheels($wheels)
    {
        $this->wheels = $wheels;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSteering()
    {
        return $this->steering;
    }

    /**
     * @param mixed $steering
     * @return Car
     */
    public function setSteering($steering)
    {
        $this->steering = $steering;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * @param mixed $engine
     * @return Car
     */
    public function setEngine($engine)
    {
        $this->engine = $engine;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     * @return Car
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public function start()
    {
        return $this->engine;
    }
}