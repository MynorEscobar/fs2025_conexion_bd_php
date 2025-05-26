<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    
</head>
<body>
    

<?php 
    require_once("conexion.php");
    $sql="select * from regiones";
    //ejecutar la consulta en la base de datos utilizando
    //la conexión realizada
    $ejecutar =mysqli_query($conexion, $sql);
    //recorrer todos los datos y mostrarlos
    ?>
    <h1>Regiones</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Región</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>        
    <?php
    while($datos = mysqli_fetch_assoc($ejecutar)){
       ?>
        <tr>
            <td><?php echo $datos['cod_region'];?></td>
            <td><?php echo $datos['nombre'];?></td>
            <td><?php echo $datos['descripcion'];?></td>
        </tr>
       <?php
    }
?>      </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html> 
