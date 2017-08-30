<?php

class Carta {
    
    public static $naipes = array("C", "D", "E", "P");
    public static $valores = array(2, 3, 4, 5, 6, 7, 8, 9, 10, 11 /*J*/, 12 /*Q*/, 13 /*K*/, 14 /*A*/);
    private $naipe;
    private $valor;
    
    
    public function Carta($n, $v)
    {
        $naipe = $Carta->naipes[$n];
        $valor = $Carta->valores[$v];
    }
    
    public function getValor()
    {
        return $this->valor;
    }
    
    public function getNaipe() 
    {
        return $this->naipe;
    }
}
