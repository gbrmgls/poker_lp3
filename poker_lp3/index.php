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

            for($i = 0; $i < $n_jogs; $i++)
            {
              $jogs[$i] = new Jogador($_GET["nome".$i], $_GET["idade".$i]);
            }
            
        ?>
    </body>
</html>
