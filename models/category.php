<?php

class Category{
    public $categoria1;
    public $categoria2;

    function __construct($_categoria1, $_categoria2){
        $this->categoria1 = $_categoria1;
        $this->categoria2 = $_categoria2;
    }

    public function setCategoria($categoria1, $categoria2){ 
        $this->categoria1 = $categoria1;
        $this->categoria2 = $categoria2;
    }
}

?>