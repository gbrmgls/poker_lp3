<?php

class Empate
{

  public static function verificar($jogs, $n_jogs)
  {
    $maiores = array();
    $vencedor = $jogs[0];

    for($i = 0; $i < $n_jogs; $i++)
    {
      if($jogs[$i]->mao->seq > $vencedor->mao->seq)
      {
        $vencedor = $jogs[$i];
      }
    }

    for($i = 0; $i < $n_jogs; $i++)
    {
      if($jogs[$i]->mao->seq == $vencedor->mao->seq)
      {
        $maiores[$i] = $jogs[$i];
      }
    }

    $vencedor = $maiores[0];

    for($i = 0; $i < $n_jogs-1; $i++)
    {
      if($maiores[$i]->mao->seqCartas() == "straight flush")
      {
        if($maiores[$i]->mao->cartas[4]->valor > $maiores[$i+1]->mao->cartas[4]->valor)
        {
          $vencedor = $maiores[$i];
        }
        else
        {
          $vencedor = $maiores[$i+1];
        }
      }
      else if($maiores[$i]->mao->seqCartas() == "quadra")
      {
        if($maiores[$i]->mao->cartas[3]->valor > $maiores[$i+1]->mao->cartas[3]->valor)
        {
          $vencedor = $maiores[$i];
        }
        else
        {
          $vencedor = $maiores[$i+1];
        }
        if($maiores[$i]->mao->cartas[3]->valor == $maiores[$i+1]->mao->cartas[3]->valor)
        {
          if($maiores[$i]->mao->cartas[4]->valor > $maiores[$i+1]->mao->cartas[4]->valor)
          {
            $vencedor = $maiores[$i];
          }
          else
          {
            $vencedor = $maiores[$i+1];
          }
        }
      }
      else if($maiores[$i]->mao->seqCartas() == "full house")
      {
        if($maiores[$i]->mao->cartas[2]->valor > $maiores[$i+1]->mao->cartas[2]->valor)
        {
          $vencedor = $maiores[$i];
        }
        else
        {
          $vencedor = $maiores[$i+1];
        }
        if($maiores[$i]->mao->cartas[2]->valor == $maiores[$i+1]->mao->cartas[2]->valor)
        {
          if($maiores[$i]->mao->cartas[4]->valor > $maiores[$i+1]->mao->cartas[4]->valor)
          {
            $vencedor = $maiores[$i];
          }
          else
          {
            $vencedor = $maiores[$i+1];
          }
        }
      }
      else if($maiores[$i]->mao->seqCartas() == "flush")
      {
        if($maiores[$i]->mao->cartas[0]->valor > $maiores[$i+1]->mao->cartas[0]->valor)
        {
          $vencedor = $maiores[$i];
        }
        else
        {
          $vencedor = $maiores[$i+1];
        }
        if ($maiores[$i]->mao->cartas[1]->valor > $maiores[$i+1]->mao->cartas[1]->valor)
        {
          $vencedor = $maiores[$i];
        }
        else
        {
          $vencedor = $maiores[$i+1];
        }
        if ($maiores[$i]->mao->cartas[2]->valor > $maiores[$i+1]->mao->cartas[2]->valor)
        {
          $vencedor = $maiores[$i];
        }
        else
        {
          $vencedor = $maiores[$i+1];
        }
        if ($maiores[$i]->mao->cartas[3]->valor > $maiores[$i+1]->mao->cartas[3]->valor)
        {
          $vencedor = $maiores[$i];
        }
        else
        {
          $vencedor = $maiores[$i+1];
        }
        if ($maiores[$i]->mao->cartas[4]->valor > $maiores[$i+1]->mao->cartas[4]->valor)
        {
          $vencedor = $maiores[$i];
        }
        else
        {
          $vencedor = $maiores[$i+1];
        }
      }
      else if($maiores[$i]->mao->seqCartas() == "sequencia")
      {
        if($maiores[$i]->mao->cartas[4]->valor > $maiores[$i+1]->mao->cartas[4]->valor)
        {
          $vencedor = $maiores[$i];
        }
        else
        {
          $vencedor = $maiores[$i+1];
        }
      }
      else if($maiores[$i]->mao->seqCartas() == "trinca")
      {
        if($maiores[$i]->mao->cartas[2]->valor > $maiores[$i+1]->mao->cartas[2]->valor)
        {
          $vencedor = $maiores[$i];
        }
        else
        {
          $vencedor = $maiores[$i+1];
        }
        if ($maiores[$i]->mao->cartas[2]->valor == $maiores[$i+1]->mao->cartas[2]->valor)
        {
          if($maiores[$i]->mao->cartas[3]->valor > $maiores[$i+1]->mao->cartas[3]->valor)
          {
            $vencedor = $maiores[$i];
          }
          else
          {
            $vencedor = $maiores[$i+1];
          }
          if($maiores[$i]->mao->cartas[4]->valor > $maiores[$i+1]->mao->cartas[4]->valor)
          {
            $vencedor = $maiores[$i];
          }
          else
          {
            $vencedor = $maiores[$i+1];
          }
        }
      }
      else if($maiores[$i]->mao->seqCartas() == "dois pares")
      {
        if($maiores[$i]->mao->cartas[1]->valor > $maiores[$i+1]->mao->cartas[1]->valor)
        {
          $vencedor = $maiores[$i];
        }
        else
        {
          $vencedor = $maiores[$i+1];
        }
        if($maiores[$i]->mao->cartas[3]->valor > $maiores[$i+1]->mao->cartas[3]->valor)
        {
          $vencedor = $maiores[$i];
        }
        else
        {
          $vencedor = $maiores[$i+1];
        }
        if($maiores[$i]->mao->cartas[4]->valor > $maiores[$i+1]->mao->cartas[4]->valor)
        {
          $vencedor = $maiores[$i];
        }
        else
        {
          $vencedor = $maiores[$i+1];
        }
      }
      else if($maiores[$i]->mao->seqCartas() == "um par")
      {
        if($maiores[$i]->mao->cartas[1]->valor > $maiores[$i+1]->mao->cartas[1]->valor)
        {
          $vencedor = $maiores[$i];
        }
        else
        {
          $vencedor = $maiores[$i+1];
        }
        if($maiores[$i]->mao->cartas[2]->valor > $maiores[$i+1]->mao->cartas[2]->valor)
        {
          $vencedor = $maiores[$i];
        }
        else
        {
          $vencedor = $maiores[$i+1];
        }
        if($maiores[$i]->mao->cartas[3]->valor > $maiores[$i+1]->mao->cartas[3]->valor)
        {
          $vencedor = $maiores[$i];
        }
        else
        {
          $vencedor = $maiores[$i+1];
        }
        if($maiores[$i]->mao->cartas[4]->valor > $maiores[$i+1]->mao->cartas[4]->valor)
        {
          $vencedor = $maiores[$i];
        }
        else
        {
          $vencedor = $maiores[$i+1];
        }
      }
      else if($maiores[$i]->mao->seqCartas() == "carta alta")
      {
        if($maiores[$i]->mao->cartas[0]->valor > $maiores[$i+1]->mao->cartas[0]->valor)
        {
          $vencedor = $maiores[$i];
        }
        else
        {
          $vencedor = $maiores[$i+1];
        }
        if($maiores[$i]->mao->cartas[1]->valor > $maiores[$i+1]->mao->cartas[1]->valor)
        {
          $vencedor = $maiores[$i];
        }
        else
        {
          $vencedor = $maiores[$i+1];
        }
        if($maiores[$i]->mao->cartas[2]->valor > $maiores[$i+1]->mao->cartas[2]->valor)
        {
          $vencedor = $maiores[$i];
        }
        else
        {
          $vencedor = $maiores[$i+1];
        }
        if($maiores[$i]->mao->cartas[3]->valor > $maiores[$i+1]->mao->cartas[3]->valor)
        {
          $vencedor = $maiores[$i];
        }
        else
        {
          $vencedor = $maiores[$i+1];
        }
        if($maiores[$i]->mao->cartas[4]->valor > $maiores[$i+1]->mao->cartas[4]->valor)
        {
          $vencedor = $maiores[$i];
        }
        else
        {
          $vencedor = $maiores[$i+1];
        }
      }
    }

    return $vencedor;
  }
}
