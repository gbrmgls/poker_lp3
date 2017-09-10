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

            $B1 = new Baralho();
            /*for ($i = 0; $i < 52; $i++)
            {
                echo "naipe: ".$B1->cartas[$i]->naipe ;
                echo " ";
                echo "valor: ".$B1->cartas[$i]->valor;
                echo "<br>";
            }*/
            $J1 = new Jogador("maicon", 19);
            for ($i = 0; $i < 5; $i++)
            {
              $J1->mao->pegarCarta($B1->peek());
              $B1->pop();
              echo "naipe: ".$J1->mao->cartas[$i]->naipe;
              echo " ";
              echo "valor: ".$J1->mao->cartas[$i]->valor;
              echo "<br>";
            }
            echo $J1->mao->seqCartas();

        ?>
    </body>
</html>
