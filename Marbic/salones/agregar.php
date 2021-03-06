<?php
// todo lo que escribamos es php
include_once('../Config/config.php');
include_once('salones.php'); //llamamos al archivo


if ( isset($_POST) && !empty($_POST) ){
    $nuevo_elemento = new salones (); 
    $nuevo_elemento->crear_elemento($_POST);

    if ($nuevo_elemento){
        echo "Muy bien, elemento guardado";
    }
 }

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css">
</head>


<body>
    <?php
    include('../menu.php');
    ?>

    <div class="container">
        <h1>Agregar nuevo salón</h1>
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre salon</label>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="numero_sillas" class="form-label">Numero sillas </label>
                <input type="text" class="form-control" id="numero_sillas" name="numero_sillas"
                    aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="numero_mesas" class="form-label">Numero mesas</label>
                <input type="text" class="form-control" id="numero_mesas" name="numero_mesas"
                    aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="numero_mesas_grande" class="form-label">Numero mesas grande</label>
                <input type="text" class="form-control" id="numero_mesas_grande" name="numero_mesas_grande"
                    aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="numero_televisor" class="form-label">Numero televisor</label>
                <input type="text" class="form-control" id="numero_televisor" name="numero_televisor"
                    aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="numero_puerta_corrediza" class="form-label">Numero puerta corrediza</label>
                <input type="text" class="form-control" id="numero_puerta_corrediza"
                    name="numero_puerta_corrediza" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="numero_microscopio" class="form-label">Numero microscopio</label>
                <input type="text" class="form-control" id="numero_microscopio"
                    name="numero_microscopio" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="numero_antibacterial" class="form-label">Numero antibacterial</label>
                <input type="text" class="form-control" id="numero_antibacterial"
                    name="numero_antibacterial" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="numero_alcohol" class="form-label">Numero alcohol</label>
                <input type="text" class="form-control" id="numero_alcohol"
                    name="numero_alcohol" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="numero_toallas" class="form-label">Numero toallas</label>
                <input type="text" class="form-control" id="numero_toallas"
                    name="numero_toallas" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="numero_balones" class="form-label">Numero balones </label>
                <input type="text" class="form-control" id="numero_balones" name="numero_balones"
                    aria-describedby="emailHelp">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
    </script>
</body>

</html>