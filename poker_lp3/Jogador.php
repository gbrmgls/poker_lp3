<?php

class Jogador {

    public $nome;
    public $idade;
    public $status;
    public $mao;

    public function Jogador($nome, $idade){

      $this->mao = new Mao();
      $this->nome = $nome;
      $this->idade = $idade;
    }
}
