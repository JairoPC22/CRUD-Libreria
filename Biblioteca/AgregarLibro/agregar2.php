<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM libro";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Libro</title>
    <!--Importar CSS-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min (2).css">
    
</head>

<body background="1366_2000.jpg">
<header class="mb-auto">
                <div>
                    <nav class="nav nav-masthead justify-content-center float-md-start">
                        <a class="nav-link active" aria-current="page" href="http://localhost/Biblioteca/index.php">Inicio</a>
                    </nav>
                </div>
            </header>
    <div class="container" >

        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-2 col-md-3 col-xs-4 col-sm-3 col-xl-4 col-lg-4"></div>

            <div class="col-8 col-md-6 col-xs-4 col-sm-6 col-xl-4 col-lg-4">
                <div class="card text-white bg- mb-3">
                    
                    <div class="card-header text-center">
                        <h2>Agregar Libro</h2>
                        <form action="insertar.php" method="POST">

                    </div>
                    <div class="card-body">
                        <form action="">

                            <div class="form-group mt-2">
                                <label for="">Nombre:</label>
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Autor:</label>
                                <input type="text" class="form-control mb-3" name="Autor" placeholder="Autor">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Descripcion:</label>
                                <input type="text" class="form-control mb-3" name="Descripcion" placeholder="Descripcion">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Numero de Paginas:</label>
                                <input type="text" class="form-control mb-3" name="Paginas" placeholder="Paginas">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Editorial</label>
                                <input type="text" class="form-control mb-3" name="Editorial" placeholder="Editorial">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Año de Publicación</label>
                                <input type="text" class="form-control mb-3" name="Publicacion" placeholder="Publicacion">
                            </div>
        
                            <div class="mt-2 d-grid grap-2 mt-3">
                                <input type="submit" value="Agregar" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col">

                            </div>
                            <div class="col">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-2 col-md-3 col-xs-4 col-sm-3 col-xl-4 col-lg-4"></div>

        </div>



    </div>

    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>

</html>