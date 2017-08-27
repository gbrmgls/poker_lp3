<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mao
 *
 * @author mgz
 */
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
    
    public function seqCartas()
    {
        if()
        {
            return ("straight flush")
            if()
            {
                return ("royal flush")
            }
        }
        else if()
        {
            return ("quadra")
        }
        else if()
        {
            return ("full house")
        }
        else if()
        {
            return ("flush")
        }
        else if()
        {
            return ("sequencia")
        }
        else if()
        {
            return ("trinca")
        }
        else if()
        {
            return ("dois pares")
        }
        else if()
        {
            return ("um par")
        }
        else()
        {
            return ("carta alta")
        }
        
    }
}
