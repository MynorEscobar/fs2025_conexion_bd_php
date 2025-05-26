<?php 
    echo "archivo con procesos crud 
        para las regiones";
    $codigo = $_POST['txt_codigo'];
    $nombre = $_POST['txt_nombre'];
    $desc = $_POST['txt_desc'];

    echo "Datos de la región:";
    echo "<br>Codigo: ". $codigo;
    echo "<br>Nombre: ". $nombre;
    echo "<br>Descripción: ". $desc;
?>