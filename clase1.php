<?php
class ClasePropiedades
{
    public $nombre="juan";
    public $unidades=1;
    protected $precio=7.95;     # Propiedades protected solo en la misma carpeta
    private $descuento=false;
    
    # Declaración de variables tipadas:
    public int $stock=50;
    public ?string $ciudad="madrid";    
}

