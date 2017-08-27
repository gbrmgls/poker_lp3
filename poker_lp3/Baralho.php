<?php

class Baralho {
    
    private $maxSize;
    private $top;
    private $cartas = array();
    
    public function Baralho($newMaxSize)
    {
        $this->maxSize = $newMaxSize;
        $this->top = -1;
        for($i = 0; $i < 52; $i++)
        {
            $c = new Carta;
            $this->push($c);
        }
    }
    
    public function push($c)
    {
        if(($this->top + 1) < $this->maxSize)
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
        if($this->top == ($this->maxSize - 1))
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
        
        while($this->isFull() == false)
        {
            for($i = 0; $i < 52; $i++)
            {
                $c=new Carta();
                $this->push($c);
            }
        }
    }
}
