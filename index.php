<!doctype html>
<html lang="es">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>REC_1_Servidor</title>
    
    <style>
        .btn-submit{background: <?php echo $_REQUEST['color']; ?>;border:solid 1px <?php echo $_REQUEST['color']; ?>;}
    </style>

    <body>

        <div class="container designForm border">
            <div class="row">
                <form class="d-flex flex-wrap align-items-center" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="container-fluid mb-3 mt-3">
                        <label for="codigo" class="form-label">Codigo:</label>
                        <input type="text" class="form-control" id="codigo" placeholder="Introduce Codigo" name="codigo" >
                    </div>
                    <div class="container mb-3 mt-3">
                        <label for="color" class="form-label">Color:</label>
                        <input type="color" class="form-control" id="color" name="color" value="<?php echo $_REQUEST['color']; ?>">
                    </div>
                    <div class="container mb-3 mt-3">
                        <label for="ancho" class="form-label">Ancho:</label>
                        <input type="text" class="form-control" id="ancho" placeholder="Introduce Ancho" name="ancho">
                    </div>
                    <div class="container mb-3 mt-3">
                        <label for="alto" class="form-label">Alto:</label>
                        <input type="text" class="form-control" id="alto" placeholder="Introduce Alto" name="alto">
                    </div>

                    <div class="container mb-3 mt-3 text-center align-item-center">
                        <button type="submit" name="btn-submit" class="form-control btn btn-primary btn-submit">Crear rectangulo</button>
                    </div>
                </form>
            </div>

        </div>


        <?php
        // Path 
        $file = './validar.php';

        // Comprobar si el archivo existe en la ubicación 
        if (file_exists($file) && is_readable($file)) {
            include $file;
        } else {
            throw new Exception('El archivo no se encuentra en el directorio');
        }
        ?>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>