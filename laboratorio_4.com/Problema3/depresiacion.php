<?php

    class depresiacion{

    public $precio;
    public $vida;
    public $depresiacion;

    public function MostrarDepresiacion(){
        return ($this->precio / $this->vida) * $this->depresiacion ;
    }

    public function MostrarValor(){
        return $this->precio - (($this->precio / $this->vida) * $this->depresiacion );
    }
    
    }

?>