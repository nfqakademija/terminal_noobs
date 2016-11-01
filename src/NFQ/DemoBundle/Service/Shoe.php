<?php
/**
 * Created by PhpStorm.
 * User: matas
 * Date: 16.10.31
 * Time: 12.56
 */

namespace NFQ\DemoBundle\Service;


class Shoe
{
    private $laces_colour;
    private $laces_length;
    private $laces_diameter;
    private $heel_material;
    private $heel_width;
    private $heel_height;
    private $shoe_colour;
    private $shoe_material;

    /**
     * @return mixed
     */
    public function getLacesColour()
    {
        return $this->laces_colour;
    }

    /**
     * @param mixed $laces_colour
     * @return Shoe
     */
    public function setLacesColour($laces_colour)
    {
        $this->laces_colour = $laces_colour;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLacesLength()
    {
        return $this->laces_length;
    }

    /**
     * @param mixed $laces_lenght
     * @return Shoe
     */
    public function setLacesLength($laces_length)
    {
        $this->laces_length = $laces_length;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLacesDiameter()
    {
        return $this->laces_diameter;
    }

    /**
     * @param mixed $laces_diameter
     * @return Shoe
     */
    public function setLacesDiameter($laces_diameter)
    {
        $this->laces_diameter = $laces_diameter;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeelMaterial()
    {
        return $this->heel_material;
    }

    /**
     * @param mixed $heel_material
     * @return Shoe
     */
    public function setHeelMaterial($heel_material)
    {
        $this->heel_material = $heel_material;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeelWidth()
    {
        return $this->heel_width;
    }

    /**
     * @param mixed $heel_width
     * @return Shoe
     */
    public function setHeelWidth($heel_width)
    {
        $this->heel_width = $heel_width;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeelHeight()
    {
        return $this->heel_height;
    }

    /**
     * @param mixed $heel_height
     * @return Shoe
     */
    public function setHeelHeight($heel_height)
    {
        $this->heel_height = $heel_height;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShoeColour()
    {
        return $this->shoe_colour;
    }

    /**
     * @param mixed $shoe_colour
     * @return Shoe
     */
    public function setShoeColour($shoe_colour)
    {
        $this->shoe_colour = $shoe_colour;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShoeMaterial()
    {
        return $this->shoe_material;
    }

    /**
     * @param mixed $shoe_material
     * @return Shoe
     */
    public function setShoeMaterial($shoe_material)
    {
        $this->shoe_material = $shoe_material;
        return $this;
    }

}