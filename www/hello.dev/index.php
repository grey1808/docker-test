<?php
/* Шаблон Фабричный*/
use controller\FabricController\Ford;
use controller\FabricController\Lada;

include "controller/FabricPatternController.php";
new Ford('Focus 1', 'Белый');
new Lada('Calina', 'Красный');

/* Шаблон Абстрактная фабрика */
echo '<br>';
use controller\AbstractPatternController\AbstractFabric;
include "controller/AbstractPatternController.php";
$abstract = new \controller\AbstractPatternController\Start();
$abstract->render('Ford');
$abstract->render('Lada');

/* Шаблон Строитель*/
echo '<br>';
echo '<h1>Строитель</h1>';
use controller\BuilderPatternController\Director;
use controller\BuilderPatternController\BuilderCar;
use controller\BuilderPatternController\ManualCar;
include "controller/BuilderPatternController.php";
$director = new Director();
$car = new BuilderCar();
$manual = new ManualCar();
echo '<h2>Создать автомобиль</h2>';
$director->constructSportsCar($car);
echo '<h2>Создать руководство пользователя</h2>';
$director->constructSportsCar($manual);
