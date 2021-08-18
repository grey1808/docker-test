<?php


namespace controller\FabricController;


abstract class PrototypePatternController
{
    public $height;
    public $width;
    public $component;

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}


