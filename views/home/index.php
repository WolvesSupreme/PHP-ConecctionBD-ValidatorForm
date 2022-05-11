<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/login.css">
    <title>Document</title>
</head>

<body>
    <?php require 'views/header.php'; ?>
    <?php $this->showMessages(); ?>
    <div id="login-main">


        <div></div>
        <h2>Vehiculo</h2>

        <a href="<?php echo constant('URL'); ?>nuevo"><input type="submit" value="Guadar"></a>
        <a href="<?php echo constant('URL'); ?>actualizar"><input type="submit" value="Actulizar"  disabled/></a>
        


    </div>
</body>

</html>