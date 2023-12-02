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
    
    $array=mysqli_fetch_array($resultado); //devuelve el array como 2 veces uno numerico y otro asociativo 1fila a la vez

    ?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>clase 33 - datos en tabla</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <header>
            <img src="logomundo.png" alt="Logo_mundo">
            <p>Datos de algunos Paises</p>
        </header>
        <main>
            <div class="container">
            <table class="table ">
                <thead>
                    <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Capital</th>
                    <th scope="col">Idioma</th>
                    <th scope="col">Moneda</th>
                    <th scope="col">Continente al que pertenece</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php                     
                    while($array=mysqli_fetch_array($resultado)){
                    ?>
                        <tr>
                        <td><?php echo $array['nombre'];?></td>
                        <td><?php echo $array['capital'];?></td>
                        <td><?php echo $array['idioma'];?></td>
                        <td><?php echo $array['moneda'];?></td>
                        <td><?php echo $array['continente'];?></td>
                        </tr>
                    <?php 
                     }
                    ?>

                </tbody>
                </table>  
            </div>
        </main>
        <footer>
            Tarea de clase 33 enviando datos desde la base de datos y mostrandola en una tabla
        </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>   
    </body>
    </html>

    <?php
    mysqli_close($conexion);
}
?>