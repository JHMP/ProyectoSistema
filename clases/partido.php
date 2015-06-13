<?php


class Partido {
    private $id;
    private $nombre;
    private $bandera;
    private $dui;
    private $representante;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDui() {
        return $this->dui;
    }

    public function getBandera() {
        return $this->bandera;
    }

    public function getRepresentante() {
        return $this->representante;
    }

     
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setBandera($bandera) {
        $this->bandera = $bandera;
    }

    public function setDui($dui) {
        $this->dui = $dui;
    }

    public function setRepresentante($representante) {
        $this->representante = $representante;
    }


}
