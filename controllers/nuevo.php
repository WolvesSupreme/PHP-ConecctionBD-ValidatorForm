
<?php

class Nuevo extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        $this->view->errorMessage = '';
        $this->view->render('home/nuevo');
    }

    function newVehicle()
    {
        if ($this->existPOST(['placa', 'marca', 'modelo', 'anio', 'color'])) {

            $placa = $this->getPost('placa');
            $marca = $this->getPost('marca');
            $modelo = $this->getPost('modelo');
            $anio = $this->getPost('anio');
            $color = $this->getPost('color');

            // validar data
            if (
                $placa == '' || empty($placa) || $marca == '' || empty($marca) ||
                $modelo == '' || empty($modelo) || $anio == '' || empty($anio) ||
                $color == '' || empty($color)
            ) {
                error_log('Campos vacios');
                return;
            }

            $vehicle = new Vehiculomodel();
            $vehicle->setPlaca($placa);
            $vehicle->setMarca($marca);
            $vehicle->setModelo($modelo);
            $vehicle->setAnio($anio);
            $vehicle->setColor($color);

            $vehicle->save();
            $this->redirect('signup', ['success' => Success::SUCCESS_SIGNUP_NEWUSER]);
        } else {
            $this->redirect('signup', ['error' => Errors::ERROR_SIGNUP_NEWUSER_EXISTS]);
        }
    }
}

?>