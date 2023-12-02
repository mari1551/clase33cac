<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST)&&!empty($_POST)){            
            $num_factura=$_POST['num_factura'];
            $fec_emision=$_POST['fec_emision'];
            $fec_vencimiento=$_POST['fec_vencimiento'];
            $num_cliente=$_POST['num_cliente'];
            $monto=$_POST['monto'];
            $tipo=$_POST['monto'];

            require 'factura.php';
            $nueva_factura= new Factura();
            $nueva_factura->setNumFactura($num_factura);
            $nueva_factura->setFecEmision($fec_emision);
            $nueva_factura->setFecVencimiento($fec_vencimiento);
            $nueva_factura->setNumCliente($num_cliente);
            $nueva_factura->setMonto($monto);
            $nueva_factura->setTipo($tipo);

            $mostrar_pagina=true;
        }
        else{
            echo "No se recibieron datos para procesar";
        }
    }
    else{
        echo "Error al abrir la pagina con normalidad";
    }

    if($mostrar_pagina==true){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel=StyleSheet href="estilo.css"  type="text/css">
    <title>Clase33 form a objeto</title>
</head>
<body>
<header>
    <div>Recibiendo datos</div>
</header>
<main id="pag_datos">
    <div id="factura">
        <div id="divLogo">
            <img src="logo.avif" alt="Logo" id="imgLogo">
        </div>
        <div id="divTitulo">
            <p>FACTURA</p>
        </div>
        <div id="divNumFactura">
            <p>FACTURA No: <?php echo $nueva_factura->getNumFactura()?></p>
        </div>
        <div id="divFecEmision">
            <p>FECHA EMISION: <?php echo $nueva_factura->getFecEmision()?></p>
        </div> 
        <div id="divFecVencimiento">
            <p>FECHA VENCIMIENTO: <?php echo $nueva_factura->getFecVencimiento()?></p>
        </div> 
        <div id="divCliente">
            <p>CLIENTE No: <?php echo $nueva_factura->getNumCliente()?></p>
        </div> 
        <div id="divMonto">
            <p>MONTO: <?php echo $nueva_factura->getMonto()?></p>
        </div> 
        <div id="divTipo">
            <p>DESCRIPCION / TIPO FACTURA: <?php echo $nueva_factura->getTipo()?></p>
        </div> 
        
        
        

        
    </div> 
</main>
<footer>
    Tarea de clase 33 enviando datos de formulario para crear un objeto POO
</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<?php
    }
?>