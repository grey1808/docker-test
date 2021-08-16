<?php
/* Шаблон Фабричный*/
use controller\FabricController\Ford;
use controller\FabricController\Lada;

include "controller/FabricPatternController.php";
new Ford('Focus 1', 'Белый');
new Lada('Calina', 'Красный');

/*Шаблон Абстрактная фабрика*/
echo '<br>';
use controller\AbstractPatternController\AbstractFabric;
include "controller/AbstractPatternController.php";
$abstract = new \controller\AbstractPatternController\Start();
$abstract->render('Ford');
$abstract->render('Lada');