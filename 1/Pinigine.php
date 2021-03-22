<?php 

class Pinigine {

    private $popieriniaiPinigai;
    private $metaliniaiPinigai;

    public function ideti($kiekis) {
        if ($kiekis > 2) {
            $this->popieriniaiPinigai += $kiekis;
        } else {
            $this->metaliniaiPinigai += $kiekis;
        }
    }

    public function skaiciuoti() {
        echo $this->metaliniaiPinigai + $this->popieriniaiPinigai;
    }

    public function monetos() {
        return $this->metaliniaiPinigai - ($this->metaliniaiPinigai % 2);
    }

    public function banknotai() {
        return $this->popieriniaiPinigai - ($this->popieriniaiPinigai % 10) - ($this->popieriniaiPinigai % 5) - ($this->popieriniaiPinigai % 3);
    }

}