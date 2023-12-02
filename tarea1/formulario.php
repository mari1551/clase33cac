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
    <div>Formulario a objeto</div>
</header>
<main>
    <div id="contenido">
        <h3>Registro de Facturas</h3>
        <div class="container" id="formFactura">
        <form action="datos.php" method="post">
            <div class="mb-2">
                <label for="num_factura" class="form-label">Factura No</label>
                <input type="number" class="form-control" id="numfactura" name="num_factura" placeholder="0000234">
            </div>
            <div class="mb-2">
                <label for="fec_emision" class="form-label">Fecha de Emision</label>
                <input type="date" class="form-control" id="fec_emision" name="fec_emision" placeholder="01/01/2001">
            </div>
            <div class="mb-2">
                <label for="fec_vencimiento" class="form-label">Fecha de Vencimiento</label>
                <input type="date" class="form-control" id="fec_vencimiento" name="fec_vencimiento" placeholder="31/12/2001">
            </div>
            <div class="mb-2">
                <label for="num_cliente" class="form-label">Cliente No</label>
                <input type="number" class="form-control" id="num_cliente" name="num_cliente" placeholder="00012">
            </div>
            <div class="mb-2">
                <label for="monto" class="form-label">Monto</label>
                <input type="number" class="form-control" id="monto" name="monto">
            </div>
            <div class="mb-2">
                <label for="tipo" class="form-label">Tipo de servicio</label>
                <input type="text" class="form-control" id="tipo" name="tipo">
            </div>
            <div class="mb-2">
                <button class="btn btn-primary" type="submit">Enviar datos</button>
                <button class="btn btn-primary" type="reset">Limpiar datos</button>
            </div>
        </form>
        </div>
    </div> 
</main>
<footer>
    Tarea de clase 33 enviando datos de formulario para crear un objeto POO
</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>