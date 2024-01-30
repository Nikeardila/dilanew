<?php
include "proses.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aplikasi kalkulator </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="kalkulator">
    <h2 class="judul">KALKULATOR</h2>
    <a class="brand" href="">Dila</a>
    <form action="" method="post">
    <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukan bilangan pertama">
    <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukan bilangan kedua">
    <select name="operasi" class="opt">
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">*</option>
        <option value="bagi">/</option>
    </select>
    <input type="submit" name="hasil" value="Hasil" class="tombol">
    </form>
    <?php if(isset($_POST['hasil'])){ ?>
    <input type="text" value="<?php echo $hasil; ?>" class="bil">
    <?php }else{ ?>
        <input type="text" value="0" class="bil">
        <?php } ?>
    </div>
</body>
</html>