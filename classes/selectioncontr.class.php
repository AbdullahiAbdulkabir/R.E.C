<?php

include "database.class.php";

class Controller extends DataBase {

    //user email
    private $email;

    //salah in Jamah
    private $jamah_subh;
    private $jamah_zuhr;
    private $jamah_asr;
    private $jamah_magrib;
    private $jamah_isha;

    //adhkar after salat
    private $adhkar_subh;
    private $adhkar_zuhr;
    private $adhkar_asr;
    private $adhkar_magrib;
    private $adhkar_isha;

    //rawatib
    private $rawatib_subh;
    private $rawatib_zuhr;
    private $rawatib_asr;
    private $rawatib_magrib;
    private $rawatib_isha;

    //quran
    private $tilawah;
    private $tadabbur;
    private $hifz;

    //Morning and Evening adhkar
    private $morning_adhkar;
    private $evening_adhkar;

    //wird duha
    private $part_1;
    private $part_2;

    //Daily
    private $tarawih;
    private $family_ties;
    private $iftar_saim;
    private $sadaqah;
    private $salat_duha;
    private $salat_taobah;
    private $salat_tasbih;
    private $book_reading;

    public function __construct($jamah_subh, $jamah_zuhr, $jamah_asr, $jamah_magrib, $jamah_isha, $adhkar_subh, $adhkar_zuhr, $adhkar_asr, $adhkar_magrib, $adhkar_isha, $rawatib_subh, $rawatib_zuhr, $rawatib_asr, $rawatib_magrib, $rawatib_isha, $tilawah, $tadabbur, $hifz, $morning_adhkar, $evening_adhkar, $part_1, $part_2, $tarawih, $family_ties, $iftar_saim, $sadaqah, $salat_duha, $salat_taobah, $salat_tasbih, $book_reading, $email) {
        $this->email = $email;

        //salah in Jamah
        $this->jamah_subh = $jamah_subh;
        $this->jamah_zuhr = $jamah_zuhr;
        $this->jamah_asr = $jamah_asr;
        $this->jamah_magrib = $jamah_magrib;
        $this->jamah_isha =$jamah_isha;
    
        //adhkar after salat
        $this->adhkar_subh = $adhkar_subh;
        $this->adhkar_zuhr = $adhkar_zuhr;
        $this->adhkar_asr = $adhkar_asr;
        $this->adhkar_magrib = $adhkar_magrib;
        $this->adhkar_isha = $adhkar_isha;
    
        //rawatib
        $this->rawatib_subh = $rawatib_subh;
        $this->rawatib_zuhr = $rawatib_zuhr;
        $this->rawatib_asr = $rawatib_asr;
        $this->rawatib_magrib = $rawatib_magrib;
        $this->rawatib_isha = $rawatib_isha;
    
        //quran
        $this->tilawah = $tilawah;
        $this->tadabbur = $tadabbur;
        $this->hifz = $hifz;
    
        //Morning and Evening adhkar
        $this->morning_adhkar = $morning_adhkar;
        $this->evening_adhkar = $evening_adhkar;
    
        //wird duha
        $this->part_1 = $part_1;
        $this->part_2 = $part_2;
    
        //Daily
        $this->tarawih = $tarawih;
        $this->family_ties = $family_ties;
        $this->iftar_saim = $iftar_saim;
        $this->sadaqah = $sadaqah;
        $this->salat_duha = $salat_duha;
        $this->salat_taobah = $salat_taobah;
        $this->salat_tasbih = $salat_tasbih;
        $this->book_reading = $book_reading;
    }

    public function updating() {
        $this->updateJamah($this->jamah_subh, $this->jamah_zuhr, $this->jamah_asr, $this->jamah_magrib, $this->jamah_isha, $this->email);
        $this->updateAdhkar($this->adhkar_subh, $this->adhkar_zuhr, $this->adhkar_asr, $this->adhkar_magrib, $this->adhkar_isha, $this->email);
        $this->updateRawatib($this->rawatib_subh, $this->rawatib_zuhr, $this->rawatib_asr, $this->rawatib_magrib, $this->rawatib_isha, $this->email);
        $this->updateQuran($this->tilawah, $this->tadabbur, $this->hifz, $this->email);
        $this->updateMornEve($this->morning_adhkar, $this->evening_adhkar, $this->email);
        $this->updateWird($this->part_1, $this->part_2, $this->email);
        $this->updateDailies($this->tarawih, $this->family_ties, $this->iftar_saim, $this->sadaqah, $this->salat_duha, $this->salat_taobah, $this->salat_tasbih, $this->book_reading, $this->email);
    }
}