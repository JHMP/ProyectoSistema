<?php

class RegistroCandidato {
    private $id;
    private $dui;
    private $apellido;
    private $nombre;
    private $id_depa;
    private $id_muni;
    private $tipo_candidato;
    private $id_inscrip_parti;
    private $id_depas;
    private $id_munis;
    private $cargo;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }


    public function getDui() {
        return $this->dui;
    }
    
    public function getApellido() {
        return $this->apellido;
    }

    public function getNombre() {
        return $this->nombre;
    }


    public function getId_depa() {
        return $this->id_depa;
    }

    public function getId_muni() {
        return $this->id_muni;
    }

   
    public function getTipo_candidato() {
        return $this->tipo_candidato;
    }

    public function getId_inscrip_parti() {
        return $this->id_inscrip_parti;
    }

    public function getId_depas() {
        return $this->id_depas;
    }

    public function getId_munis() {
        return $this->id_munis;
    }

    public function getCargo() {
        return $this->cargo;
    }
    
    /** Generando Get */

    public function setDui($dui) {
        $this->dui = $dui;
    }


    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setId_depa($id_depa) {
        $this->id_depa = $id_depa;
    }

    public function setId_muni($id_muni) {
        $this->id_muni = $id_muni;
    }

    public function setTipo_candidato($tipo_candidato) {
        $this->tipo_candidato = $tipo_candidato;
    }

    public function setId_inscrip_parti($id_inscrip_parti) {
        $this->id_inscrip_parti = $id_inscrip_parti;
    }


    public function setId_depas($id_depas) {
        $this->id_depas = $id_depas;
    }

    public function setId_munis($id_munis) {
        $this->id_munis = $id_munis;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }

}