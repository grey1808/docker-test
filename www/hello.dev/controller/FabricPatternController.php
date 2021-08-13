<?php

namespace controller\FabricController;

interface Fabric
{
    public function name();
    public function color();
}

class Ford implements Fabric
{

    public $name;
    public $color;
    public $fabricName = 'Фабрика FORD';

    public function __construct($name,$color)
    {
        echo '<h1>' .$this->fabricName. '</h1>';
        $this->name = $name;
        $this->color = $color;
        $this->name();
        $this->color();
    }

    public function name()
    {
        echo 'Имя: ' . $this->name . '<br>';
    }

    public function color()
    {
        echo 'Цвет: ' . $this->color . '<br>';
    }
}


class Lada implements Fabric
{

    public $name;
    public $color;
    public $fabricName = 'Фабрика LADA';

    public function __construct($name,$color)
    {
        echo '<h1>' .$this->fabricName. '</h1>';
        $this->name = $name;
        $this->color = $color;
        $this->name();
        $this->color();
    }

    public function name()
    {
        echo 'Имя: ' . $this->name . '<br>';
    }

    public function color()
    {
        echo 'Цвет: ' . $this->color . '<br>';
    }
}

