<?php

class Jogador {

    public $nome;
    public $idade;
    public $status;
    public $mao;

    public function Jogador($nome, $idade)
    {

      $this->mao = new Mao();
      $this->nome = $nome;
      $this->idade = $idade;

      if($this->idade < 18)
      {
        echo "<script>alert('JOGADOR ".$this->nome." É MENOR DE IDADE. INAPTO A JOGAR.')</script>";
        header("Refresh:2; url=tela1.html");
      }
    }
}
