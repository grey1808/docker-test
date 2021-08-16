<?php
namespace controllers\FabricPatternController;
use model\Model\Ford;
use model\Model\Lada;


class PatternsController
{
    public function Fabric()
    {
        new Ford('Focus 1', 'Белый');
        new Lada('Calina', 'Красный');
    }
}





