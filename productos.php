<?php
class Productos
{
    private $id;
    private $nombre;
    private $unidades;
    private const iva=0.21;
    private $precio;
    


#Constructor
public function __construct(string $id, string $nombre, int $unidades, float $precio)
{
    $this->nombre=$nombre;
    $this->id=$id;
    $this->unidades=$unidades;
    $this->precio=$precio;
    #$this->iva= iva;
}

#setters
public function setNombre(string $nombre):void
{
    $this->nombre=$nombre;      
}

public function setId(int $id):void
{
    $this->id=$id;      
}

public function setUnidades(int $unidades):void
{
    $this->unidades=$unidades;      
}

public function setPrecio(float $precio):void
{
    $this->precio=$precio;      
}

// public function setIva(float $iva):void
//  {
//      $this->iva=$iva;      
//  }

#Getters
public function getId():int
{
    return $this->id;
}

public function getNombre():string
{
    return $this->nombre;      
}

public function getUnidades():int
{
    return $this->unidades;      
}

public function getPrecio():float
{
    return $this->precio;      
}

// public function getIva():float
// {
//     return $this->iva;      
// }

public function factura()
{
    return $this->unidades*$this->precio*(self::iva+1);
    
}

}


