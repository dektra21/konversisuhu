<?php

require_once "konversi.php";
if (isset($_POST['submit'])){
    $hasil = convertsuhu($_POST);
    $pilihan_suhu = $_POST['pilihan_suhu'];
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konversi Suhu Dektra</title>
</head>
<body>
<form action="" method="post">
    <h4>Konversi Satuan Suhu</h4>
    
        Suhu <label for="valSuhu"><input type="text"  name="valSuhu"><br><br></label>
        Konversi: <br>
       <label for="reamur"><input type="radio" name="pilihan_suhu"  value="reamur" >Reamur<br></label> 
      <label for="fahrenheit"> <input type="radio" name="pilihan_suhu" value="fahrenheit" >Fahrenhait<br></label>
       <label for="kelvin"><input type="radio" name="pilihan_suhu" value="kelvin" >Kelvin<br><br></label>
        <input type="submit" name="submit" value="Konversi" >
    </form>
    <?php
    
        if(isset($hasil)) :
    
    ?>
        <h3>
            Hasil Konversi ke <?=$pilihan_suhu;?> adalah <?=$hasil;?>
        </h3>
        <?php endif;?>
</body>
</html>