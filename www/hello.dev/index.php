<?php
/* Шаблон Фабричный*/
use controller\FabricController\Ford;
use controller\FabricController\Lada;

/* Шаблон Фабричный*/
include "controller/FabricPatternController.php";
new Ford('Focus 1', 'Белый');
new Lada('Calina', 'Красный');

