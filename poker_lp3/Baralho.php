<?php

class Baralho {

    private $MAXSIZE = 52;
    private $top = -1;
    public $cartas = array();

    public function Baralho()
    {
      $this->embaralhar();
    }

    public function push($c)
    {
        if(($this->top + 1) < $this->MAXSIZE)
        {
            $this->top++;
            $this->cartas[$this->top] = $c;
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
            unset($this->cartas[$this->top]);
            array_values($this->cartas);
            $this->top--;
        }
        else
        {
            echo "Pilha vazia!";
        }
    }

    public function peek()
    {
        return $this->cartas[$this->top];
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

        for($i = 1; $i <= 4; $i++)
        {
            for($j = 2; $j <= 14; $j++)
            {
                $c = new Carta($i, $j);
                $this->push($c);
            }
        }

        shuffle($this->cartas);

    }
}
