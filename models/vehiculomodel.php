
<?php

class Vehiculomodel extends Model  implements IModel
{
    private $id;
    private $placa;
    private $marca;
    private $modelo;
    private $anio;
    private $color;

    public function __construct()
    {
        parent::__construct();

        $this->placa = '';
        $this->marca = '';
        $this->modelo = '';
        $this->anio = '';
        $this->color = '';
    }

    public function save()
    {
        try {
            $query = $this->prepare('INSERT INTO vehiculos (placa, marca, modelo, anio, color) VALUES(:placa, :marca, :modelo, :anio, :color )');
            $query->execute([
                'placa'  => $this->placa,
                'marca'  => $this->marca,
                'modelo'      => $this->modelo,
                'anio'    => $this->anio,
                'color'     => $this->color
            ]);
            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }
    public function getAll()
    {
        $items = [];

        try {
            $query = $this->query('SELECT * FROM vehiculos');

            while ($p = $query->fetch(PDO::FETCH_ASSOC)) {
                $item = new Vehiculomodel();
                $item->setId($p['id']);
                $item->setPlaca($p['placa']);
                $item->setMarca($p['marca'], false);
                $item->setModelo($p['modelo']);
                $item->setAnio($p['anio']);
                $item->setColor($p['color']);


                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            echo $e;
        }
    }
    public function get($id)
    {
        try {
            $query = $this->prepare('SELECT * FROM vehiculos WHERE id = :id');
            $query->execute(['id' => $id]);
            $user = $query->fetch(PDO::FETCH_ASSOC);

            $this->id = $user['id'];
            $this->placa = $user['placa'];
            $this->marca = $user['marca'];
            $this->modelo = $user['modelo'];
            $this->anio = $user['anio'];
            $this->color = $user['color'];

            return $this;
        } catch (PDOException $e) {
            return false;
        }
    }
    public function delete($id)
    {
        try {
            $query = $this->prepare('DELETE FROM vehiculos WHERE id = :id');
            $query->execute(['id' => $id]);
            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }
    public function update()
    {
        try {
            $query = $this->prepare('UPDATE vehiculos SET placa = :placa, marca = :marca, modelo = :modelo, anio = :anio, color = :color  WHERE id = :id');
            $query->execute([
                'id'        => $this->id,
                'placa' => $this->placa,
                'marca' => $this->marca,
                'modelo' => $this->modelo,
                'anio' => $this->anio,
                'color' => $this->color,
            ]);
            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }
    public function from($array)
    {
        $this->id = $array['id'];
        $this->placa = $array['placa'];
        $this->marca = $array['marca'];
        $this->modelo = $array['modelo'];
        $this->anio = $array['anio'];
        $this->color = $array['color'];
    }

    

    #region GET + SET 
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setPlaca($placa)
    {
        $this->placa = $placa;
    }
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    public function setAnio($anio)
    {
        $this->anio = $anio;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getPlaca()
    {
        return $this->placa;
    }
    public function getMarca()
    {
        return $this->marca;
    }
    public function getModelo()
    {
        return $this->modelo;
    }
    public function getAnio()
    {
        return $this->anio;
    }
    public function getColor()
    {
        return $this->color;
    }
    #endregion
}


?>