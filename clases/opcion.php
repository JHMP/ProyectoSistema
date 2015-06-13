<?php


class Partido {
    private $id;
    private $tipo_cargo;
    private $year_electoral;
    

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTipo_cargo() {
        return $this->tipo_cargo;

    }

    public function setTipo_cargo($tipo_cargo) {
        $this->tipo_cargo = $tipo_cargo;
    }

    public function getYear_electoral() {
        return $this->year_electoral;
    }

    public function setYear_electoral($year_electoral) {
        $this->year_electoral = $year_electoral;
    }


}
