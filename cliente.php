<?php
class Cliente
{
    #Propiedades
    private string $nombre;
    private int $pedidos;
    private bool $activo;

    #Constructor
    public function __construct(string $dato, int $compras, bool $activo)
    {
        $this->nombre=$dato;
        $this->pedidos=$compras;
        $this->activo=$activo;
    }

    #Setters
    public function setNombre(string $nombre):void
    {
        $this->nombre=$nombre;      
    }

    public function setActivo(bool $activo):void
    {
        $this->activo=$activo;      
    }

    public function setPedidos(int $pedidos):void
    {
        $this->pedidos=$pedidos;      
    }

    #Getters
    public function getNombre():string
    {
        return $this->nombre;      
    }

    public function getActivo():bool
    {
        return $this->activo;      
    }

    public function getPedidos():int
    {
        return $this->pedidos;      
    }

}