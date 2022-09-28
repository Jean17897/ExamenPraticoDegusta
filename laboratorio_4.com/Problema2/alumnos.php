<?php

    class alumnos{

    public $alumnos;
    public $alumnas;

    public function MostrarTotalAlumnos(){
        return $this->alumnos + $this->alumnas;
    }

    public function MostrarPorcentajeAlumnos(){
        return ($this->alumnos / ($this->alumnos + $this->alumnas)) *100;
    }

    public function MostrarPorcentajeAlumnas(){
        return ($this->alumnas / ($this->alumnos + $this->alumnas)) *100;
    }
    
    }

?>