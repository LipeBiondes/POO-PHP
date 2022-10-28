<?php
/**
 * @author Alefe Filipe
 */
require_once 'Controlador.php';
class ControleRemoto implements Controlador {
//    Atributos
    private $volume,$ligado,$tocando;
    
//    Métodos Especiais
    public function __construct() {
        $this->volume=50;
        $this->ligado=false;
        $this->tocando=false;
    }

    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($volume): void {
        $this->volume = $volume;
    }

    private function setLigado($ligado): void {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando): void {
        $this->tocando = $tocando;
    }

    public function abrirMenu() {
        echo '------MENU-----';
        echo "<br>Está ligado?: ".($this->getLigado()?"Sim":"Não");
        echo "<br>Está Tocando?: ".($this->getTocando()?"Sim":"Não");
        echo '<br>';
        echo 'Volume: '. $this->getVolume().' ';
        for ($i = 0; $i <= $this->getVolume(); $i+=10) {
            echo '|';
        }
        echo '<br>';
    }
    
    public function fecharMenu() {
        echo '<br> Fechando menu...';
    }
    
    public function ligar() {
        $this->setLigado(true);
    }
    
    public function deligar() {
        $this->setLigado(false);
    }

    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume()==0) {
            $this->setVolume(50);
        }
    }

    public function ligarMudo() {
        if ($this->getLigado() && $this->getVolume()>0) {
            $this->setVolume(0);
        }
    }

    public function maisVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume()+5);
        }
    }

    public function menosVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume()-5);
        }
    }

    public function pause() {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
            echo '<br> Pausando...';
        }
    }

    public function play() {
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
            echo '<br> Tocando...';
        }
    }

}
