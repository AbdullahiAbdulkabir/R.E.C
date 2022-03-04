<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan Daily Chart</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Ramadan Evaluation Chart</h1>
    <h3>Date to be put here</h3>
    <p><?php echo 'Assalamalaykum Warahamatullah ' ?><b><?php echo $_SESSION['name'];?></b></p>
    <form action="classes/selectionview.class.php" method="post">
        <h3 align="center">Salat In Jamah</h3>
        <table>
        <tr>
          <td align="center">
            <label for="Jamah_subh">Subh</label><br>
            <input type="checkbox" name="Jamah_subh">
          </td>
          <td></td>
          <td align="center">
            <label for="Jamah_zuhr">Zuhr</label><br>
            <input type="checkbox" name="Jamah_zuhr">
          </td>
          <td></td>
          <td align="center">
            <label for="Jamah_asr">Asr</label><br>
            <input type="checkbox" name="Jamah_asr">
          </td>
          <td></td>
          <td align="center">
            <label for="Jamah_magrib">Magrib</label><br>
            <input type="checkbox" name="Jamah_magrib">
          </td>
          <td></td>
          <td align="center">
            <label for="Jamah_isha">Isha</label><br>
            <input type="checkbox" name="Jamah_isha">
          </td>
        </tr>
        </table>

        <h3 align="center">Adhkar after Salat</h3>
        <table>
        <tr>
          <td align="center">
            <label for="Adhkar_subh">Subh</label><br>
            <input type="checkbox" name="Adhkar_subh">
          </td>
          <td></td>
          <td align="center">
            <label for="Adhkar_zuhr">Zuhr</label><br>
            <input type="checkbox" name="Adhkar_zuhr">
          </td>
          <td></td>
          <td align="center">
            <label for="Adhkar_asr">Asr</label><br>
            <input type="checkbox" name="Adhkar_asr">
          </td>
          <td></td>
          <td align="center">
            <label for="Adhkar_magrib">Magrib</label><br>
            <input type="checkbox" name="Adhkar_magrib">
          </td>
          <td></td>
          <td align="center">
            <label for="Adhkar_isha">Isha</label><br>
            <input type="checkbox" name="Adhkar_isha">
          </td>
        </tr>
        </table>

        <h3 align="center">Rawatib</h3>
        <table>
        <tr>
          <td align="center">
            <label for="Rawatib_subh">Subh</label><br>
            <input type="checkbox" name="Rawatib_subh">
          </td>
          <td></td>
          <td align="center">
            <label for="Rawatib_zuhr">Zuhr</label><br>
            <input type="checkbox" name="Rawatib_zuhr">
          </td>
          <td></td>
          <td align="center">
            <label for="Rawatib_asr">Asr</label><br>
            <input type="checkbox" name="Rawatib_asr">
          </td>
          <td></td>
          <td align="center">
            <label for="Rawatib_magrib">Magrib</label><br>
            <input type="checkbox" name="Rawatib_magrib">
          </td>
          <td></td>
          <td align="center">
            <label for="Rawatib_isha">Isha</label><br>
            <input type="checkbox" name="Rawatib_isha">
          </td>
        </tr>
        </table>

        <h3 align="center">Quran</h3>
        <table>
        <tr>
          <td align="center">
            <label for="tilawah">Tilawah</label><br>
            <input type="checkbox" name="tilawah">
          </td>
          <td align="center">
            <label for="tadabbur">Tadabbur</label><br>
            <input type="checkbox" name="tadabbur">
          </td>
          <td align="center">
            <label for="hifz">Hifz</label><br>
            <input type="checkbox" name="hifz">
          </td>   
        </tr>
        </table>

        <h3 align="center">Morning and Evening Adhkar</h3>
        <table>
        <tr>
          <td align="center">
            <label for="morning_adhkar">Morning</label><br>
            <input type="checkbox" name="morning_adhkar">
          </td>
          <td align="center">
            <label for="evening_adhkar">Evening</label><br>
            <input type="checkbox" name="evening_adhkar">
          </td>
        </table>

        <h3 align="center">Wird Dua</h3>
        <table>
        <tr>
          <td align="center">
            <label for="part_1">Part 1</label><br>
            <input type="checkbox" name="part_1">
          </td>
          <td align="center">
            <label for="part_2">Part 2</label><br>
            <input type="checkbox" name="part_2">
          </td>
        </tr>
        </table>

        <h3 align="center"><u>Other</u></h3>
        <table>
        <tr class="other">
          <td align="center">
            <label for="tarawih">Tarawih</label><br>
            <input type="checkbox" name="tarawih">
          </td>
          <td align="center">
            <label for="family_ties">Family Ties</label><br>
            <input type="checkbox" name="family_ties">
          </td>
          <td align="center">
            <label for="iftar_saim">Iftar Saim</label><br>
            <input type="checkbox" name="iftar_saim">
          </td>
          <td align="center">
            <label for="sadaqah">Sadaqah</label><br>
            <input type="checkbox" name="sadaqah">
          </td>
        </tr>
        <tr class="other">
          <td align="center">
            <label for="salat_duha">Salat Duha</label><br>
            <input type="checkbox" name="salat_duha">
          </td>
          <td align="center">
            <label for="salat_taobah">Salat Taobah</label><br>
              <input type="checkbox" name="salat_taobah">
          </td>
          <td align="center">
            <label for="salat_tasbih">Salat Tasbih</label><br>
            <input type="checkbox" name="salat_tasbih">
          </td>
          <td align="center">
            <label for="book_reading">Book Reading</label><br>
            <input type="checkbox" name="book_reading">
          </td>
        </tr>
        </table>
        <a href="dashboard.php"><input type="submit" value="Submit" name="submit"></a>
    </form>
</body>
</html>