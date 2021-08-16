<?php
namespace model\Model;

use interface_patterns\FabricController\Fabric;


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
