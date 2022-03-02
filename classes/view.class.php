<?php
session_start();
include 'controller.class.php';

if (isset($_POST['submit'])) {
        
    //salat in jamah
    $_SESSION['Jamah_subh'] = isset($_POST['Jamah_subh']) ? 1 : 0;
    $_SESSION['Jamah_zuhr'] = isset($_POST['Jamah_zuhr']) ? 1 : 0;
    $_SESSION['Jamah_asr'] = isset($_POST['Jamah_asr']) ? 1 : 0;
    $_SESSION['Jamah_magrib'] = isset($_POST['Jamah_magrib']) ? 1 : 0;
    $_SESSION['Jamah_isha'] = isset($_POST['Jamah_isha']) ? 1 : 0;

    //adhkar after salat
    $_SESSION['Adhkar_subh'] = isset($_POST['Adhkar_subh']) ? 1 : 0;
    $_SESSION['Adhkar_zuhr'] = isset($_POST['Adhkar_zuhr']) ? 1 : 0;
    $_SESSION['Adhkar_asr'] = isset($_POST['Adhkar_asr']) ? 1 : 0;
    $_SESSION['Adhkar_magrib'] = isset($_POST['Adhkar_magrib']) ? 1 : 0;
    $_SESSION['Adhkar_isha'] = isset($_POST['Adhkar_isha']) ? 1 : 0;

    //rawatib after salat
    $_SESSION['Rawatib_subh'] = isset($_POST['Rawatib_subh']) ? 1 : 0;
    $_SESSION['Rawatib_zuhr'] = isset($_POST['Rawatib_zuhr']) ? 1 : 0;
    $_SESSION['Rawatib_asr'] = isset($_POST['Rawatib_asr']) ? 1 : 0;
    $_SESSION['Rawatib_magrib'] = isset($_POST['Rawatib_magrib']) ? 1 : 0;
    $_SESSION['Rawatib_isha'] = isset($_POST['Rawatib_isha']) ? 1 : 0;

    //Quran
    $_SESSION['tilawah'] = isset($_POST['tilawah']) ? 1 : 0;
    $_SESSION['tadabbur'] = isset($_POST['tadabbur']) ? 1 : 0;
    $_SESSION['hifz'] = isset($_POST['hifz']) ? 1 : 0;

    //Morning and evening aadhkar
    $_SESSION['morning_adkar'] = isset($_POST['morning_adkar']) ? 1 : 0;
    $_SESSION['evening_adhkar'] = isset($_POST['evening_adhkar']) ? 1 : 0;

    //Wird Dua
    $_SESSION['part_1'] = isset($_POST['part_1']) ? 1 : 0;
    $_SESSION['part_2'] = isset($_POST['part_2']) ? 1 : 0;

    //Other
    $_SESSION['tarawih'] = isset($_POST['tarawih']) ? 1 : 0;
    $_SESSION['family_ties'] = isset($_POST['family_ties']) ? 1 : 0;
    $_SESSION['iftar_saim'] = isset($_POST['iftar_saim']) ? 1 : 0;
    $_SESSION['sadaqah'] = isset($_POST['sadaqah']) ? 1 : 0;
    $_SESSION['salat_duha'] = isset($_POST['salat_duha']) ? 1 : 0;
    $_SESSION['salat_taobah'] = isset($_POST['salat_taobah']) ? 1 : 0;
    $_SESSION['salat_tasbih'] = isset($_POST['salat_tasbih']) ? 1 : 0;
    $_SESSION['book_reading'] = isset($_POST['book_reading']) ? 1 : 0;

    //database instance
    $data = new Controller($_SESSION['Jamah_subh'], $_SESSION['Jamah_zuhr'], $_SESSION['Jamah_asr'], $_SESSION['Jamah_magrib'], $_SESSION['Jamah_isha'],
                           $_SESSION['Adhkar_subh'], $_SESSION['Adhkar_zuhr'], $_SESSION['Adhkar_asr'], $_SESSION['Adhkar_magrib'], $_SESSION['Adhkar_isha'],
                            $_SESSION['Rawatib_subh'], $_SESSION['Rawatib_zuhr'], $_SESSION['Rawatib_asr'], $_SESSION['Rawatib_magrib'], $_SESSION['Rawatib_isha'], 
                            $_SESSION['tilawah'], $_SESSION['tadabbur'], $_SESSION['hifz'], $_SESSION['morning_adkar'], $_SESSION['evening_adhkar'], 
                            $_SESSION['part_1'], $_SESSION['part_2'], $_SESSION['tarawih'], $_SESSION['family_ties'], $_SESSION['family_ties'], $_SESSION['sadaqah'], 
                            $_SESSION['salat_duha'], $_SESSION['salat_taobah'], $_SESSION['salat_tasbih'], $_SESSION['book_reading'], $_SESSION['email']);

    $data->updating();
    header('location: ../dashboard.php');
}
