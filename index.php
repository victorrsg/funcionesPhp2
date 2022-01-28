<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO EN PHP</title>
</head>
<body>
    <h2>POO EN PHP</h2>
    <?php
        echo "<h3>Clases y Objetos</h3>";
        require('./clases/clase1.php');
        
        $objeto=new ClasePropiedades();
        echo $objeto->ciudad;     # Propiedades protected solo en la misma carpeta
        echo "<br>";
        require('./clases/cliente.php');
        $cliente1=new Cliente("indra",5,true);
        echo $cliente1->getNombre();
        echo "<br>";
        #Modifica el nombre del cliente
        echo $cliente1->setNombre("Repsol");
        #Consulta nombre de nuevo para ver el cambio
        echo $cliente1->getnombre();
        echo "<br>";


        require('./clases/productos.php');  
        $producto1=new Productos(100,"camisa",5,7.99);
        echo $producto1->setPrecio(7.95);
        echo $producto1->getPrecio();
        

        
        

        echo "<h4>El total de la factura es: ".$producto1->factura()."</h4>";
    ?>
</body>
</html>