<?php

class Carta {
    
    protected static $naipes = array("C", "D", "E", "P");
    protected static $valores = array(2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K", "A");
    private $naipe;
    private $valor;
    
    
    public function Carta()
    {
        $naipe = array_rand($Carta->naipes);
        $valor = array_rand($Carta->valor);
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
