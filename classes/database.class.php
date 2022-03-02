<?php

class DataBase extends Conn {
    
//users table interation
    protected function createUser($name, $email, $phone_number, $gender, $pass) {
        $sql = "INSERT INTO Users (name, email, phone_number, gender, password) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$name, $email, $phone_number, $gender, $pass]);
    }

    public function checkUser($email, $pass) {
        $sql = "SELECT * FROM Users WHERE email = ? and password = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$email, $pass]);
        $details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $users = $stmt->rowCount();
        return $users;
    }

    public function getName($email) {
        $sql = "SELECT name FROM Users WHERE email = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$email]);
        $names = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $names[0]['name'];
    }

    protected function updateUser($name, $email, $phone_number, $gender, $pass) {
        $sql = "UPDATE Users WHERE email = $email SET name = ? OR phone_number = ? OR gender = ? OR password = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$name, $phone_number, $gender, $pass]);
        $details = $stmt->fetchAll();
    }

    public function createdUser($email) {
        $sql = "SELECT email FROM users WHERE email = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$email]);
        $existence = $stmt->rowCount();

        return $existence;
    }

//salat in jamah
    public function addEmail_Jamah($email) {
        $sql = "INSERT INTO salat_in_jamah (email) VALUES (?)";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$email]);
    }

    public function updateJamah($subh, $zuhr, $asr, $magrib, $isha, $email) {
        $sql = "UPDATE salat_in_jamah SET subh = subh + ?, zuhr = zuhr + ?, asr = asr + ?, magrib = magrib + ?, isha = isha + ?, total = subh + zuhr + asr + magrib + isha WHERE email = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$subh, $zuhr, $asr, $magrib, $isha, $email]);
    }

//adhkar after salat
    public function addEmail_AdhkarSalat($email) {
        $sql = "INSERT INTO adhkar_after_salat (email) VALUES (?)";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$email]);
    }

    public function updateAdhkar($subh, $zuhr, $asr, $magrib, $isha, $email) {
        $sql = "UPDATE adhkar_after_salat SET subh = subh + ?, zuhr = zuhr + ?, asr = asr + ?, magrib = magrib + ?, isha = isha + ?, total = subh + zuhr + asr + magrib + isha WHERE email = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$subh, $zuhr, $asr, $magrib, $isha, $email]);
    }

//Rawatib
    public function addEmail_Rawatib($email) {
        $sql = "INSERT INTO rawatib (email) VALUES (?)";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$email]);
    }

    public function updateRawatib($subh, $zuhr, $asr, $magrib, $isha, $email) {
        $sql = "UPDATE rawatib SET subh = subh + ?, zuhr = zuhr + ?, asr = asr + ?, magrib = magrib + ?, isha = isha + ?, total = subh + zuhr + asr + magrib + isha WHERE email = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$subh, $zuhr, $asr, $magrib, $isha, $email]);
    }

//quran
    public function addEmail_Quran($email) {
        $sql = "INSERT INTO quran (email) VALUES (?)";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$email]);
    }

    public function updateQuran($tilawah, $tadabbur, $hifz, $email) {
        $sql = "UPDATE quran SET tilawah = tilawah + ?, tadabbur = tadabbur + ?, hifz = hifz + ? WHERE email = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$tilawah, $tadabbur, $hifz, $email]);
    }

//wird dua
    public function addEmail_Wird($email) {
        $sql = "INSERT INTO wird_dua (email) VALUES (?)";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$email]);
    }

    public function updateWird($part_1, $part_2, $email) {
        $sql = "UPDATE wird_dua SET part_1 = part_1 + ?, part_2 = part_2 + ?, total = part_1 + part_2 WHERE email = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$part_1, $part_2, $email]);
    }

//morning and evening adhkar
    public function addEmail_AdhkarMornEve($email) {
        $sql = "INSERT INTO adhkar_m_e (email) VALUES (?)";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$email]);
    }

    public function updateMornEve($morning, $evening, $email) {
        $sql = "UPDATE adhkar_m_e SET morning = morning + ?, evening = evening + ?, total = morning + evening WHERE email = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$morning, $evening, $email]);
    }

    
//daily activities
    public function addEmail_Daily($email) {
        $sql = "INSERT INTO daily_activities (email) VALUES (?)";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$email]);
    }

    public function updateDailies($tarawih, $family_ties, $iftar_saim, $sadaqah, $salat_duha, $salat_taobah, $salat_tasbih, $book_reading, $email) {
        $sql = "UPDATE daily_activities SET tarawih = tarawih + ?, family_ties = family_ties + ?, iftar_saim = iftar_saim + ?, sadaqah = sadaqah + ?, salat_duha = salat_duha + ?, salat_taobah = salat_taobah + ?, salat_tasbih = salat_tasbih + ?, book_reading = book_reading + ? WHERE email = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$tarawih, $family_ties, $iftar_saim, $sadaqah, $salat_duha, $salat_taobah, $salat_tasbih, $book_reading], $email);
    }
    
    //for dashboard calculations

    public function totalJamah($email) {
        $sql = "SELECT total FROM salat_in_jamah WHERE email = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute(array($email));
        $names = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $score = $names[0]['total'];
        // $percent = ($score/150) * 100;
        foreach ($names as $name) {
            $score = $name['total'];
            $percent = ($score/150) * 100;
            return $percent;
        }
        // return $percent;
    }

    public function totalAdhkar($email) {
        $sql = "SELECT total FROM adhkar_after_salat WHERE email = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute(array($email));
        $names = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $score = $names[0]['total'];
        // $percent = ($score/150) * 100;
        foreach ($names as $name) {
            return $name['total'];
        }
        // return $percent;
    }

    public function totalRawatib($email) {
        $sql = "SELECT total FROM rawatib WHERE email = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute(array($email));
        $names = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $score = $names[0]['total'];
        // $percent = ($score/150) * 100;
        foreach ($names as $name) {
            return $name['total'];
        }
        // return $percent;
    }

    public function tilawah($email) {
        $sql = "SELECT tilawah FROM quran WHERE email = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute(array($email));
        $names = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $score = $names[0]['total'];
        // $percent = ($score/150) * 100;
        foreach ($names as $name) {
            return $name['tilawah'];
        }
        // return $percent;
    }

    public function tadabbur($email) {
        $sql = "SELECT tadabbur FROM quran WHERE email = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute(array($email));
        $names = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $score = $names[0]['total'];
        // $percent = ($score/150) * 100;
        foreach ($names as $name) {
            return $name['tadabbur'];
        }
        // return $percent;
    }

    public function hifz($email) {
        $sql = "SELECT hifz FROM quran WHERE email = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute(array($email));
        $names = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $score = $names[0]['total'];
        // $percent = ($score/150) * 100;
        foreach ($names as $name) {
            return $name['hifz'];
        }
        // return $percent;
    }

    public function totalMonEve($email) {
        $sql = "SELECT total FROM adhkar_m_e WHERE email = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute(array($email));
        $names = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $score = $names[0]['total'];
        // $percent = ($score/150) * 100;
        foreach ($names as $name) {
            return $name['total'];
        }
        // return $percent;
    }

    public function totalWird($email) {
        $sql = "SELECT total FROM wird_dua WHERE  email = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute(array($email));
        $names = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $score = $names[0]['total'];
        // $percent = ($score/150) * 100;
        foreach ($names as $name) {
            return $name['total'];
        }
        // return $percent;
    }

    public function tarawih($email) {
        $sql = "SELECT tarawih FROM daily_activities WHERE email = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute(array($email));
        $names = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $score = $names[0]['total'];
        // $percent = ($score/150) * 100;
        foreach ($names as $name) {
            return $name['tarawih'];
        }
        // return $percent;
    }

    public function family_ties($email) {
        $sql = "SELECT family_ties FROM daily_activities WHERE email = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute(array($email));
        $names = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $score = $names[0]['total'];
        // $percent = ($score/150) * 100;
        foreach ($names as $name) {
            return $name['family_ties'];
        }
        // return $percent;
    }

    public function iftar_saim($email) {
        $sql = "SELECT iftar_saim FROM daily_activities WHERE email = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute(array($email));
        $names = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $score = $names[0]['total'];
        // $percent = ($score/150) * 100;
        foreach ($names as $name) {
            return $name['iftar_saim'];
        }
        // return $percent;
    }

    public function sadaqah($email) {
        $sql = "SELECT sadaqah FROM daily_activities WHERE email = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute(array($email));
        $names = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $score = $names[0]['total'];
        // $percent = ($score/150) * 100;
        foreach ($names as $name) {
            return $name['sadaqah'];
        }
        // return $percent;
    }

    public function salat_duha($email) {
        $sql = "SELECT salat_duha FROM daily_activities WHERE email = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute(array($email));
        $names = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $score = $names[0]['total'];
        // $percent = ($score/150) * 100;
        foreach ($names as $name) {
            return $name['salat_duha'];
        }
        // return $percent;
    }

    public function salat_taobah($email) {
        $sql = "SELECT salat_taobah FROM daily_activities WHERE email = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute(array($email));
        $names = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $score = $names[0]['total'];
        // $percent = ($score/150) * 100;
        foreach ($names as $name) {
            return $name['salat_taobah'];
        }
        // return $percent;
    }

    public function salat_tasbih($email) {
        $sql = "SELECT salat_tasbih FROM daily_activities WHERE email = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute(array($email));
        $names = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $score = $names[0]['total'];
        // $percent = ($score/150) * 100;
        foreach ($names as $name) {
            return $name['salat_tasbih'];
        }
        // return $percent;
    }

    public function book_reading($email) {
        $sql = "SELECT book_reading FROM daily_activities WHERE email = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute(array($email));
        $names = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $score = $names[0]['total'];
        // $percent = ($score/150) * 100;
        foreach ($names as $name) {
            return $name['book_reading'];
        }
        // return $percent;
    }

}