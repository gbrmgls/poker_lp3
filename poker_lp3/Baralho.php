<?php

class Baralho {
    
    private $MAXSIZE = 52;
    private $top;
    private $cartas = array();
    
    public function Baralho()
    {
        $this->top = -1;
        for($i = 0; $i < $this->MAXSIZE; $i++)
        {
            $c = new Carta;
            $this->push($c);
        }
    }
    
    public function push($c)
    {
        if(($this->top + 1) < $this->MAXSIZE)
        {
            $this->top++;
            $this->cartas[$this->top] += $c;
        }
        else
        {
            echo "Tamanho máximo atingido.";
        }
    }
    
    public function pop()
    {
        if($this->top != -1)
        {
            $this->cartas[$this->top]==null;
        }
        else
        {
            echo "Pilha vazia!";
        }
    }
    
    public function peek()
    {
        return $this->cartas[top];
    }
    
    public function isEmpty()
    {
        if($this->top == -1)
        {
            return true;
        }
        else
        {
            return false;
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


    public function embaralhar()
    {
        while($this->isEmpty() == false)
        {
            $this->pop();
        }
        
        for($i = 0; $i < 4; $i++)
        {
            for($j = 0; $j < 13; $j++)
            {
                $c = new Carta($i, $j);
                $this->push($c);
            }
        }
        
        shuffle($this->cartas);
        
    }
}
