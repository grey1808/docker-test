<?php

namespace controller\AbstractPatternController;


interface AbstractFabric
{
    public function wheel(); // Колесо
    public function mirror  (); // Зеркало
}

class FordAbstract implements AbstractFabric
{
    public $name;

    public function __construct($name)
    {

        echo '<h1> Абстрактный паттерн </h1>';
        $this->name = $name;
        $this->wheel();
        $this->mirror();
    }

    public function wheel()
    {
        echo '<h2>Запчасти для завода ' . $this->name . ' </h2>';
        echo 'Колесо для фабрики ' .$this->name . ' создано <br>';
    }

    public function mirror()
    {
        echo 'Зеркало для фабрики ' .$this->name . ' создано <br>';
    }
}



class LadaAbstract implements AbstractFabric
{
    public $name;

    public function __construct($name)
    {

        $this->name = $name . ' ';
        $this->wheel();
        $this->mirror();
    }

    public function wheel()
    {

        echo '<h2>Запчасти для завода ' . $this->name . ' </h2>';
        echo 'Колесо для фабрики ' .$this->name . ' создано <br>';
    }

    public function mirror()
    {
        echo 'Зеркало для фабрики ' .$this->name . ' создано <br>';
    }
}

class Start
{
    public function render($name)
    {
        if ($name == 'Ford'){
            return new FordAbstract($name);
        }elseif ($name == 'Lada'){
            return new LadaAbstract($name);
        }else{
            echo '<h1>Вы должны указать производителя автомобиля</h1>';
        }
    }
}