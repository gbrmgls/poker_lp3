<?php

class Carta {

    //naipes: 1 (C), 2 (D), 3 (E), 4 (P));
    //valores: 2, 3, 4, 5, 6, 7, 8, 9, 10, 11 (J), 12 (Q), 13 (K), 14 (A));
    public $naipe;
    public $valor;

    public function Carta($n, $v)
    {
        $this->naipe = $n;
        $this->valor = $v;
    }
}
