<?php

class Mao {
    
    private $cartas = array();
    private $maxSize = 4;
    private $seq;
    
    public function pegarCarta($c)
    {
        if($this->isFull() == false)
        {
            $this->cartas += $c->cartas[$c->top];
        }
        else
        {
            echo "Mao cheia.";
        }
        
        $this->seq = $this->seqCartas();
    }
    
     public function isFull()
    {
        if($this->top == ($this->maxSize - 1))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    private function seqCartas()
    {
        if($this->cartas[0]->valor + 1 == $this->cartas[1]->valor && /*valor 1a imediatamente menor que 2a*/
           $this->cartas[1]->valor + 1 == $this->cartas[2]->valor && /*valor 2a imediatamente menor que 3a*/
           $this->cartas[2]->valor + 1 == $this->cartas[3]->valor && /*valor 3a imediatamente menor que 4a*/
           $this->cartas[3]->valor + 1 == $this->cartas[4]->valor && /*valor 4a imediatamente menor que 5a*/
           $this->cartas[0]->naipe == $this->cartas[1]->naipe && /*naipe 1a = 2a*/
           $this->cartas[1]->naipe == $this->cartas[2]->naipe && /*naipe 2a = 3a*/
           $this->cartas[2]->naipe == $this->cartas[3]->naipe && /*naipe 3a = 4a*/
           $this->cartas[3]->naipe == $this->cartas[4]->naipe) /*naipe 4a = 5a*/
        {
            if($this->cartas[4]->valor == 14)
            {
                return ("royal flush");
            }
            else
            {
                return ("straight flush");
            }
        }
        else if($this->cartas[0]->valor == $this->cartas[1]->valor && /*valor 1a = 2a*/
                $this->cartas[1]->valor == $this->cartas[2]->valor && /*valor 2a = 3a*/
                $this->cartas[2]->valor == $this->cartas[3]->valor && /*valor 3a = 4a*/
                $this->cartas[3]->valor != $this->cartas[4]->valor) /*valor 4a != 5a*/
        {
            return ("quadra");
        }
        else if($this->cartas[0]->valor == $this->cartas[1]->valor && /*valor 1a = 2a*/
                $this->cartas[1]->valor == $this->cartas[2]->valor && /*valor 2a = 3a*/
                $this->cartas[2]->valor != $this->cartas[3]->valor && /*valor 3a != 4a*/
                $this->cartas[3]->valor == $this->cartas[4]->valor) /*valor 4a = 5a*/
        {
            return ("full house");
        }
        else if($this->cartas[0]->naipe == $this->cartas[1]->naipe && /*naipe 1a = 2a*/
                $this->cartas[1]->naipe == $this->cartas[2]->naipe && /*naipe 2a = 3a*/
                $this->cartas[2]->naipe == $this->cartas[3]->naipe && /*naipe 3a = 4a*/
                $this->cartas[3]->naipe == $this->cartas[4]->naipe) /*naipe 4a = 5a*/
        {
            return ("flush");
        }
        else if($this->cartas[0]->valor + 1 == $this->cartas[1]->valor && /*valor 1a imediatamente menor que 2a*/
                $this->cartas[1]->valor + 1 == $this->cartas[2]->valor && /*valor 2a imediatamente menor que 3a*/
                $this->cartas[2]->valor + 1 == $this->cartas[3]->valor && /*valor 3a imediatamente menor que 4a*/
                $this->cartas[3]->valor + 1 == $this->cartas[4]->valor) /*valor 4a imediatamente menor que 5a*/
        {
            return ("sequencia");
        }
        else if($this->cartas[0]->valor == $this->cartas[1]->valor && /*valor 1a = 2a*/
                $this->cartas[1]->valor == $this->cartas[2]->valor && /*valor 2a = 3a*/
                $this->cartas[2]->valor != $this->cartas[3]->valor && /*valor 3a != 4a*/
                $this->cartas[3]->valor != $this->cartas[4]->valor && /*valor 4a != 5a*/
                $this->cartas[3]->valor != $this->cartas[2]->valor && /*valor 4a != 3a*/
                $this->cartas[2]->valor != $this->cartas[0]->valor) /*valor 3a = 1a*/
        {
            return ("trinca");
        }
        else if($this->cartas[0]->valor == $this->cartas[1]->valor && /*valor 1a = 2a*/
                $this->cartas[1]->valor != $this->cartas[2]->valor && /*valor 2a != 3a*/
                $this->cartas[2]->valor == $this->cartas[3]->valor && /*valor 3a = 4a*/
                $this->cartas[3]->valor != $this->cartas[4]->valor && /*valor 4a = 5a*/
                $this->cartas[3]->valor != $this->cartas[0]->valor) /*valor 4a = 1a*/
        {
            return ("dois pares");
        }
        else if($this->cartas[0]->valor == $this->cartas[1]->valor && /*valor 1a = 2a*/
                $this->cartas[1]->valor != $this->cartas[2]->valor && /*valor 2a != 3a*/
                $this->cartas[2]->valor != $this->cartas[3]->valor && /*valor 3a != 4a*/
                $this->cartas[3]->valor != $this->cartas[4]->valor && /*valor 4a != 5a*/
                $this->cartas[2]->valor != $this->cartas[0]->valor && /*valor 3a = 1a*/
                $this->cartas[3]->valor != $this->cartas[0]->valor && /*valor 4a = 1a*/
                $this->cartas[2]->valor != $this->cartas[4]->valor) /*valor 3a = 5a*/
        {
            return ("um par");
        }
        else
        {
            return ("carta alta");
        }
        
    }
}
