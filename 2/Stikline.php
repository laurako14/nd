<?php 

class Stikline {

    private $turis;
    private $kiekis = 0;

    public function __construct($turis) {
        $this->turis = $turis;
    }

    public function ipilti($kiekis) {
        // $kiekis = $kiekis + $this->kiekis;
        // $this->kiekis = min($this->turis, $kiekis);
        if (($this->kiekis + $kiekis) >= $this->turis) {
            return $this->kiekis = $this->turis;
        } else {
            return $this->kiekis += $kiekis;
        }
    }

    public function ispilti($kiekis) {
        if ($this->kiekis = 0 || ($this->kiekis - $kiekis) <= 0) {
            return 0;
        } else {
            return $this->kiekis -= $kiekis;
        }
    }

}