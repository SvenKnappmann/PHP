<?php

class Opdracht1 {
    private $naam = "";
    private $omschrijving = "";

    public function getOpdracht1() {
        return array("naam" => $this->naam,
            "omschrijving" => $this->omschrijving
        );
    }

    public function setNaam($n) {
        $this->naam = $n;
    }

    public function setOmschrijving($o) {
        $this->omschrijving = $o;
    }
    public function getNaam() {
        return $this->naam;
    }
    public function getOmschrijving() {
        return $this->omschrijving;
    }
}
?>