<?php
/**
 * Description of ContaBanco
 *
 * @author Alefe Filipe
 */
class ContaBanco {
//    Atributos
    public $numconta;
    protected $tipo;
    private $dono,$saldo,$status;
//    Métodos especiais
    public function __construct() {
        
    }
    
    public function abrirConta() {
        
    }
    public function fecharConta() {
        
    }
    public function depositar() {
        
    }
    public function sacar() {
        
    }
    public function pagarMensal() {
        
    }
    
//    Métodos acessores
    public function getNumconta() {
        return $this->numconta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumconta($numconta): void {
        $this->numconta = $numconta;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    public function setDono($dono): void {
        $this->dono = $dono;
    }

    public function setSaldo($saldo): void {
        $this->saldo = $saldo;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }

}
