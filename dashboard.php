<?php
    
session_start();
include 'classes/dashview.class.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1 align="center">Dashboard</h1>
    <p>Your progress <b><?php $_SESSION['name']; ?></b></p>
        <table>
            <tr>
                <td>
                    <label>Salat in Jamah</label>
                    <div class="progress">
                        <div class="progress_fill" style="width: <?php echo $progress->tJam() . "%" ?>;"></div>
                        <span class="progress_text"><?php echo $progress->tJam() . "%" ?></span>
                    </div>
                </td>
                <td>
                    <label>Adhkar After Salat</label>
                    <div class="progress">
                        <div class="progress_fill" style="width: <?php echo $progress->tAdhkar() . "%" ?>;"></div>
                        <span class="progress_text"><?php echo $progress->tAdhkar() . "%" ?></span>
                    </div>
                </td>
                <td>
                    <label>Rawatib</label>
                    <div class="progress">
                        <div class="progress_fill" style="width: <?php echo $progress->tRawatib() . "%" ?>;"></div>
                        <span class="progress_text"><?php echo $progress->tRawatib() . "%" ?></span>
                    </div>
                </td>
                <td>
                    <label>Tarawih</label>
                    <div class="progress">
                        <div class="progress_fill" style="width: <?php echo $progress->tTarawih() . "%" ?>;"></div>
                        <span class="progress_text"><?php echo $progress->tTarawih() . "%" ?></span>
                    </div>
                </td>
            </tr>

            <tr><td> </td></tr>
            
            <tr><td> </td></tr>
            
            <tr><td> </td></tr>
            
            <tr>
                <td>
                    <label>Joining Family Ties</label>
                    <div class="progress">
                        <div class="progress_fill" style="width: <?php echo $progress->tFamily() . "%" ?>;"></div>
                        <span class="progress_text"><?php echo $progress->tFamily() . "%" ?></span>
                    </div>
                </td>
                <td>
                    <label>Iftar Sa'im</label>
                    <div class="progress">
                        <div class="progress_fill" style="width: <?php echo $progress->tIftar() . "%" ?>;"></div>
                        <span class="progress_text"><?php echo $progress->tIftar() . "%" ?></span>
                    </div>
                </td>
                <td>
                    <label>Sadaqah</label>
                    <div class="progress">
                        <div class="progress_fill" style="width: <?php echo $progress->tsadaqah() . "%" ?>;"></div>
                        <span class="progress_text"><?php echo $progress->tsadaqah() . "%" ?></span>
                    </div>
                </td>
                <td>
                    <label>Salat Duha</label>
                    <div class="progress">
                        <div class="progress_fill" style="width: <?php echo $progress->tSalatDuha() . "%" ?>;"></div>
                        <span class="progress_text"><?php echo $progress->tSalatDuha() . "%" ?></span>
                    </div>
                </td>
            </tr>

            <tr><td> </td></tr>

            <tr><td> </td></tr>

            <tr><td> </td></tr>

            <tr>
                <td>
                    <label>Salat Taobah</label>
                    <div class="progress">
                        <div class="progress_fill" style="width: <?php echo $progress->tSalatTaobah() . "%" ?>;"></div>
                        <span class="progress_text"><?php echo $progress->tSalatTaobah() . "%" ?></span>
                    </div>
                </td>
                <td>
                    <label>Salat Tasbih</label>
                    <div class="progress">
                        <div class="progress_fill" style="width: <?php echo $progress->tSalatTasbih() . "%" ?>;"></div>
                        <span class="progress_text"><?php echo $progress->tSalatTasbih() . "%" ?></span>
                    </div>
                </td>
                <td>
                    <label>Tilawah</label>
                    <div class="progress">
                        <div class="progress_fill" style="width: <?php echo $progress->tTilawah() . "%" ?>;"></div>
                        <span class="progress_text"><?php echo $progress->tTilawah() . "%" ?></span>
                    </div>
                </td>
                <td>
                    <label>Tadabbur</label>
                    <div class="progress">
                        <div class="progress_fill" style="width: <?php echo $progress->tTadabbur() . "%" ?>;"></div>
                        <span class="progress_text"><?php echo $progress->tTadabbur() . "%" ?></span>
                    </div>
                </td>
            </tr>

            <tr><td> </td></tr>

            <tr><td> </td></tr>

            <tr><td> </td></tr>

            <tr>
                <td>
                    <label>Hifz</label>
                    <div class="progress">
                        <div class="progress_fill" style="width: <?php echo $progress->tHifz() . "%" ?>;"></div>
                        <span class="progress_text"><?php echo $progress->tHifz() . "%" ?></span>
                    </div>
                </td>
                <td>
                    <label>Wird Dua</label>
                    <div class="progress">
                        <div class="progress_fill" style="width: <?php echo $progress->tWird() . "%" ?>;"></div>
                        <span class="progress_text"><?php echo $progress->tWird() . "%" ?></span>
                    </div>
                </td>
                <td>
                    <label>Morning And Evening Adhkar</label>
                    <div class="progress">
                        <div class="progress_fill" style="width: <?php echo $progress->tMonEve() . "%" ?>;"></div>
                        <span class="progress_text"><?php echo $progress->tMonEve() . "%" ?></span>
                    </div>
                </td>
                <td>
                    <label>Book Reading</label>
                    <div class="progress">
                        <div class="progress_fill" style="width: <?php echo $progress->tBook() . "%" ?>;"></div>
                        <span class="progress_text"><?php echo $progress->tBook() . "%" ?></span>
                    </div>
                </td>
            </tr>

        </table>
    </form>
</body>
</html>