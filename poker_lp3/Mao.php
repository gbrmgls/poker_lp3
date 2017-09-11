<?php

class Mao {

    public $cartas = array();
    public $MAXSIZE = 5;
    public $seq;
    public $top = -1;

    public function pegarCarta($c)
    {
        if($this->isFull() == false)
        {
            $this->top++;
            $this->cartas[$this->top] = $c;
        }
        else
        {
          echo "Mão cheia!";
        }

    }

     public function isFull()
    {
        if($this->top == ($this->MAXSIZE - 1))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function seqCartas()
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
                $this->seq = "10";
                return "royal flush";
            }
            else
            {
                $this->seq = "9";
                return "straight flush";
            }
        }
        else if($this->cartas[0]->valor == $this->cartas[1]->valor && /*valor 1a = 2a*/
                $this->cartas[1]->valor == $this->cartas[2]->valor && /*valor 2a = 3a*/
                $this->cartas[2]->valor == $this->cartas[3]->valor && /*valor 3a = 4a*/
                $this->cartas[3]->valor != $this->cartas[4]->valor) /*valor 4a != 5a*/
        {
            $this->seq = "8";
            return "quadra";
        }
        else if($this->cartas[0]->valor == $this->cartas[1]->valor && /*valor 1a = 2a*/
                $this->cartas[1]->valor == $this->cartas[2]->valor && /*valor 2a = 3a*/
                $this->cartas[2]->valor != $this->cartas[3]->valor && /*valor 3a != 4a*/
                $this->cartas[3]->valor == $this->cartas[4]->valor) /*valor 4a = 5a*/
        {
            $this->seq = "7";
            return "full house";
        }
        else if($this->cartas[0]->naipe == $this->cartas[1]->naipe && /*naipe 1a = 2a*/
                $this->cartas[1]->naipe == $this->cartas[2]->naipe && /*naipe 2a = 3a*/
                $this->cartas[2]->naipe == $this->cartas[3]->naipe && /*naipe 3a = 4a*/
                $this->cartas[3]->naipe == $this->cartas[4]->naipe) /*naipe 4a = 5a*/
        {
            $this->seq = "6";
            return "flush";
        }
        else if($this->cartas[0]->valor + 1 == $this->cartas[1]->valor && /*valor 1a imediatamente menor que 2a*/
                $this->cartas[1]->valor + 1 == $this->cartas[2]->valor && /*valor 2a imediatamente menor que 3a*/
                $this->cartas[2]->valor + 1 == $this->cartas[3]->valor && /*valor 3a imediatamente menor que 4a*/
                $this->cartas[3]->valor + 1 == $this->cartas[4]->valor) /*valor 4a imediatamente menor que 5a*/
        {
            $this->seq = "5";
            return "sequência";
        }
        else if($this->cartas[0]->valor == $this->cartas[1]->valor && /*valor 1a = 2a*/
                $this->cartas[1]->valor == $this->cartas[2]->valor && /*valor 2a = 3a*/
                $this->cartas[2]->valor != $this->cartas[3]->valor && /*valor 3a != 4a*/
                $this->cartas[3]->valor != $this->cartas[4]->valor && /*valor 4a != 5a*/
                $this->cartas[3]->valor != $this->cartas[2]->valor && /*valor 4a != 3a*/
                $this->cartas[2]->valor != $this->cartas[0]->valor) /*valor 3a = 1a*/
        {
            $this->seq = "4";
            return "trinca";
        }
        else if($this->cartas[0]->valor == $this->cartas[1]->valor && /*valor 1a = 2a*/
                $this->cartas[1]->valor != $this->cartas[2]->valor && /*valor 2a != 3a*/
                $this->cartas[2]->valor == $this->cartas[3]->valor && /*valor 3a = 4a*/
                $this->cartas[3]->valor != $this->cartas[4]->valor && /*valor 4a = 5a*/
                $this->cartas[3]->valor != $this->cartas[0]->valor) /*valor 4a = 1a*/
        {
            $this->seq =  "3";
            return "dois pares";
        }
        else if($this->cartas[0]->valor == $this->cartas[1]->valor && /*valor 1a = 2a*/
                $this->cartas[1]->valor != $this->cartas[2]->valor && /*valor 2a != 3a*/
                $this->cartas[2]->valor != $this->cartas[3]->valor && /*valor 3a != 4a*/
                $this->cartas[3]->valor != $this->cartas[4]->valor && /*valor 4a != 5a*/
                $this->cartas[2]->valor != $this->cartas[0]->valor && /*valor 3a = 1a*/
                $this->cartas[3]->valor != $this->cartas[0]->valor && /*valor 4a = 1a*/
                $this->cartas[2]->valor != $this->cartas[4]->valor) /*valor 3a = 5a*/
        {
            $this->seq = "2";
            return "um par";
        }
        else
        {
            $this->seq = "1";
            return "carta alta";
        }
    }
}
