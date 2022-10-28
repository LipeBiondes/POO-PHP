<?php
/**
 * Description of Caneta
 *
 * @author Alefe Filipe
 */
class Caneta {
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    // Método construtor
    public function Caneta($m, $c, $p)
    {
      $this->modelo=$m;
      $this->cor=$c;
      $this->ponta=$p;
      $this->tampar();
    }

    public function tampar()
    {
      $this->tampada = true;
    }

    // Métodos getters e setters
    public function getModelo()
    {
      return $this->modelo;
    }
    public function setModelo($m)
    {
      $this->modelo = $m;
    }
    public function getPonta()
    {
      return $this->ponta;
    }
    public function setPonta($p)
    {
      $this->ponta=$p;
    }

}
