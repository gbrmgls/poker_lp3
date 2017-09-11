<?php

class Carta {

    //naipes: 1 (C), 2 (O), 3 (E), 4 (P));
    //valores: 2, 3, 4, 5, 6, 7, 8, 9, 10, 11 (J), 12 (Q), 13 (K), 14 (A));
    public $naipe;
    public $valor;
    public $naipe_real;
    public $valor_real;

    public function Carta($n, $v)
    {
        $this->naipe = $n;
        $this->valor = $v;

        switch($this->naipe)
        {
          case 1:
            $this->naipe_real = "COPAS";
            break;
          case 2:
            $this->naipe_real = "OUROS";
            break;
          case 3:
            $this->naipe_real = "ESPADAS";
            break;
          case 4:
            $this->naipe_real = "PAUS";
            break;
        }

        switch($this->valor)
        {
          case 2:
            $this->valor_real = "2";
            break;
          case 3:
            $this->valor_real = "3";
            break;
          case 4:
            $this->valor_real = "4";
            break;
          case 5:
            $this->valor_real = "5";
            break;
          case 6:
            $this->valor_real = "6";
            break;
          case 7:
            $this->valor_real = "7";
            break;
          case 8:
            $this->valor_real = "8";
            break;
          case 9:
            $this->valor_real = "9";
            break;
          case 10:
            $this->valor_real = "10";
            break;
          case 11:
            $this->valor_real = "J";
            break;
          case 12:
            $this->valor_real = "Q";
            break;
          case 13:
            $this->valor_real = "K";
            break;
          case 14:
            $this->valor_real = "A";
            break;
        }
    }
}
