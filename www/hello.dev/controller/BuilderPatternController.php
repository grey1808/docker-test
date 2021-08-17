<?php


namespace controller\BuilderPatternController;


interface BuilderPatternController
{
    public function Seats(); // Сиденья
    public function Engine(); // Двигатель
    public function TripCompute(); // Бортовой компьютер
    public function GPS(); // GPS
}

class BuilderCar implements BuilderPatternController
{


    public function Seats()
    {
        echo 'Сиденье для автомобиля созданно'.'<br>';
    }

    public function Engine()
    {
        echo 'Двигатель для автомобиля созданно'.'<br>';
    }

    public function TripCompute()
    {
        echo 'Бортовой компьютер для автомобиля созданно'.'<br>';
    }

    public function GPS()
    {
        echo 'GPS для автомобиля созданно'.'<br>';
    }
}

class ManualCar implements BuilderPatternController
{


    public function Seats()
    {
        echo 'Руковоство пользователя для сиденья для автомобиля созданно'.'<br>';
    }

    public function Engine()
    {
        echo 'Руковоство пользователя для Двигатель для автомобиля созданно'.'<br>';
    }

    public function TripCompute()
    {
        echo 'Руковоство пользователя для бортового компьютера для автомобиля созданно'.'<br>';
    }

    public function GPS()
    {
        echo 'Руковоство пользователя для GPS для автомобиля созданно'.'<br>';
    }
}

class Director
{
    public function constructSportsCar($object)
    {
        $object->Seats();
        $object->Engine();
        $object->TripCompute();
        $object->GPS();
    }
}