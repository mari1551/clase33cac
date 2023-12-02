<?php
$host="localhost";
$usuario="root";
$clave="";
$base="paises";

$conexion=mysqli_connect($host,$usuario,$clave,$base);
if(mysqli_connect_errno()){
    echo "<br>No se ha conectado a la base de datos".mysqli_connect_errno();
}
else{
    $query="SELECT * FROM datos_paises";
    $resultado=mysqli_query($conexion,$query);
    
    //probando fetch_asoc
    /*
    $array_asoc=mysqli_fetch_assoc($resultado); //solo trae 1 registro a la vez
    
    echo "<pre>";
    echo var_dump($array_asoc);
    echo "<pre>";

    mysqli_data_seek($resultado, 0); //devuelve el puntero a la primera posicion para recorrerlo
    echo "<br>-----------while feth assoc----------------<br>";
    while($array_asoc=mysqli_fetch_assoc($resultado)){
        echo "<br>Nombre: ".$array_asoc['nombre'];
        echo "<br>Capital: ".$array_asoc['capital'];
        echo "<br>Idioma Oficial: " . $array_asoc['idioma'];
        echo "<br>Moneda: " . $array_asoc['moneda'];
        echo "<br>Continente: " . $array_asoc['continente'];
        echo "<br><br>";
    }
    echo "<br>---------------------------------------------<br>";
    
    */



    //probando con fetch_array
    /*
    $array=mysqli_fetch_array($resultado); //devuelve el array como 2 veces uno numerico y otro asociativo 1fila a la vez

    echo "<pre>";
    echo var_dump($array);
    echo "<pre>";

    //recorriendolo de forma asociativa
    while($array=mysqli_fetch_array($resultado)){
        echo "<br>Nombre: ".$array['nombre'];
        echo "<br>Capital: ".$array['capital'];
        echo "<br>Idioma Oficial: " . $array['idioma'];
        echo "<br>Moneda: " . $array['moneda'];
        echo "<br>Continente: " . $array['continente'];
        echo "<br><br>";
    }
    
    //recorriendolo de forma numerica
    while($array=mysqli_fetch_array($resultado)){
        echo "<br>Nombre: ".$array[0];
        echo "<br>Capital: ".$array[1];
        echo "<br>Idioma Oficial: " . $array[2];
        echo "<br>Moneda: " . $array[3];
        echo "<br>Continente: " . $array[4];
        echo "<br><br>";
    }
    */

    //probando fetch_all
    /* 
    $array_all=mysqli_fetch_all($resultado); //devuelve el resultado en un array asociativo, numérico, o ambos.
                                            //trae todas las filas de una vez -> MYSQLI_ASSOC, MYSQLI_NUM, o MYSQLI_BOTH como 2do parametro
                                           
    echo "<pre>";
    echo var_dump($array_all);
    echo "<pre>";
                     
    foreach($array_all as $array2){
        foreach($array2 as $valor){
            echo $valor." / ";
        }
        echo ".<br>";
    }

    */
        
    // Cerrar la conexión (recuerda hacerlo al finalizar)
    mysqli_close($conexion);


}
?>