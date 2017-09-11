<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

            include_once "Baralho.php";
            include_once "Carta.php";
            include_once "Jogador.php";
            include_once "Mao.php";

            $jogs = array();
            $n_jogs = $_GET["num"];
            $B1 = new Baralho();

            for($i = 0; $i < $n_jogs; $i++)
            {
              $jogs[$i] = new Jogador($_GET["nome".$i], $_GET["idade".$i]);
              for($j = 0; $j < 5; $j++)
              {
                $jogs[$i]->mao->pegarCarta($B1->peek());
                $B1->pop();
              }
            }

            for($i = 0; $i < $n_jogs; $i++)
            {
              echo "MÃO DO JOGADOR ".$jogs[$i]->nome.":<br>";
              for($j = 0; $j < 5; $j++)
              {
                echo "naipe: ".$jogs[$i]->mao->cartas[$j]->naipe_real." / valor: ".$jogs[$i]->mao->cartas[$j]->valor_real."<br>";
              }
              echo "sequencia: ".$jogs[$i]->mao->seqCartas();
              echo "<br><br>";
            }

        ?>
    </body>
</html>
