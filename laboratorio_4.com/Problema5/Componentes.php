<?php 

    public $ti1;
    public $ti2;
    public $ti3;
    public $ti4;
    public $ti5;
    public $ti6;
    public $ti7;
    
    public static function myModal(){


    }
?>
 <?php 

echo Componentes::myModal("Ir a Google",
    "success",
    "Modal para ir a Google",
    "da click en el boton de Google para abrir el buscador",
    "Cerrar",
    "Abrir Google.com",
    "https://www.google.com/");

?>