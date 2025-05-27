<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="../css/animaciones.css">
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

    <div class="container">
        <h1>Regiones</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar región
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva Región</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="crud_region.php" method="post">
                            <label for="txt_codigo" class="form-label">Código</label>
                            <input type="number" name="txt_codigo" id="txt_codigo" class="form-control">
                            <label class="form-label" for="txt_nombre">Nombre</label>
                            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">
                            <label for="txt_desc" class="form-label">Descripción</label>
                            <input type="text" name="txt_desc" id="txt_desc" class="form-control">
                            <button type="submit" class="form-control btn btn-primary" name="btn_insertar">
                                Agregar Región</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>


        <a href="vista_regiones.php" class="btn btn-secondary">Regiones en formato tabla</a>

        <div class="row">
            



                <?php
    while($datos = mysqli_fetch_assoc($ejecutar)){
       ?>

                <div class="card col-3 m-2" style="width: 18rem;">
                    <img src="../imagenes/intecap.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $datos['nombre'];?></h5>
                        <p class="card-text">
                            <?= $datos['descripcion'];?>
                        <div class="d-flex flex-row">
                            <form action="crud_region.php" method="post" class="me-1">
                            <input type="hidden" name="hidden_codigo" id="hidden_codigo"
                                value="<?php echo $datos['cod_region'];?>">
                            <button type="submit" name="btn_eliminar" id="btn_eliminar"
                                class="btn btn-outline-danger p-1">
                                <i class="bi bi-trash3"> Eliminar</i>
                            </button>
                            
                        </form>
                        <form action="form_actualizar_region.php" method="post">
                            <input type="hidden" name="hidden_codigoa" id="hidden_codigoa"
                                value="<?php echo $datos['cod_region'];?>">
                            <button type="submit" class="btn btn-outline-success p-1"
                                name="btn_editar" id="btn_editar">
                                <i class="bi bi-pencil-square"> Editar</i>
                            </button>
                        </form>
                        </div>
                    </div>
                </div>

                <?php           
    }
?>
           
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>