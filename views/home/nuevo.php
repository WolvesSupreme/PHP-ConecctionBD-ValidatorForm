<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/login.css">
    <title>Registrar Vehiculo</title>
    <style>
        .error {
            color: red;
            font-style: italic;
        }
    </style>
</head>

<body>
    <?php require 'views/header.php'; ?>
    <?php $this->showMessages(); ?>
    <div id="login-main">
        <form action="<?php echo constant('URL'); ?>nuevo/newVehicle" id="registration" method="POST" >
            <div></div>
            <h2>Registrars Vehiculo</h2>

            <p>
                <label for="placa">Placa</label>
                <input type="text" name="placa" id="placa" placeholder="Ingrese Placa">
            </p>
            <p>
                <label for="marca">Marca</label>
                <input type="text" name="marca" id="marca" placeholder="Ingrese Marca">
            </p>
            <p>
                <label for="modelo">Modelo</label>
                <input type="text" name="modelo" id="modelo" placeholder="Ingrese Modelo">
            </p>
            <p>
                <label for="anio">Anio</label>
                <input type="text" name="anio" id="anio" placeholder="Ingrese Año">
            </p>
            <p>
                <label for="color">color</label>
                <input type="text" name="color" id="color" placeholder="Ingrese Color">
            </p>

            <button type="submit" class="btn btn-primary">Guardar</button>

        </form>

    </div>

    <br>
    <br>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="public/js/validator.js"></script>
</body>

</html>