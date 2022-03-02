<?php

class DashContr extends DataBase {
    private $email;

    public function __construct($email) {
        $this->email = $email;
    }

    public function tJam() {
        echo $this->totalJamah($this->email);
    }

    public function tAdhkar() {
        echo $this->totalAdhkar($this->email);
    }

    public function tRawatib() {
        echo $this->totalRawatib($this->email);
    }

    public function tTilawah() {
        echo $this->tilawah($this->email);
    }

    public function tTadabbur() {
        echo $this->tadabbur($this->email);
    }

    public function tHifz() {
        echo $this->hifz($this->email);
    }

    public function tWird() {
        echo $this->totalWird($this->email);
    }

    public function tMonEve() {
        echo $this->totalMonEve($this->email);
    }

    public function tTarawih() {
        echo $this->tarawih($this->email);
    }

    public function tFamily() {
        echo $this->family_ties($this->email);
    }

    public function tIftar() {
        echo $this->iftar_saim($this->email);
    }

    public function tsadaqah() {
        echo $this->sadaqah($this->email);
    }

    public function tSalatDuha() {
        echo $this->salat_duha($this->email);
    }

    public function tSalatTaobah() {
        echo $this->salat_taobah($this->email);
    }

    public function tSalatTasbih() {
        echo $this->salat_tasbih($this->email);
    }

    public function tBook() {
        echo $this->book_reading($this->email);
        
    }
}