<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Caneta
 *
 * @author Alefe Filipe
 */
class Caneta {
  var $modelo;
  var $cor;
  var $ponta;
  var $carga;
  var $tampada;

  public function rabiscar()
  {
    if ($this->tampada) {
      echo "Não posso rabiscar! <br>";
    }else {
      echo "Estou rabiscando <br>";
    }
  }

  public function tampar()
  {
    $this->tampada = true;
  }

  public function destampar()
  {
    $this->tampada = false;
  }
}
