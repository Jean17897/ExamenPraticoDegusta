<?php

    class salario{

    public $horas;
    public $pago;

    public function MostrarSalarioBruto(){
        return $this->horas * $this->pago;
    }

    public function MostrarDescuento(){
        return ($this->horas * $this->pago) * 0.2;
    }

    public function MostrarSalarioNeto(){
        return ($this->horas * $this->pago) - (($this->horas * $this->pago) * 0.2);
    }
    
    }

?>