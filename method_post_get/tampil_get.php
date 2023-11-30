<html>
 <head>
  <body>
    <div>
    <h3>Tampilan Hasil Form Method POST php</h3>  
    Selamat Datang <?php echo $_GET["nama"]; ?> <br><br>
    Ini email kamu <?php echo $_GET["email"]; ?>  <br><br>
    Jenis Kelamin : <?php echo $_GET["gender"]; ?> <br><br>


    <!-- operasi aritmatika -->
    <h3>Hasil Operasi Aritmatika</h3>
    <?php
    $a = $_GET["angka1"];
    $b = $_GET["angka2"];
    $c = $a+$b;
    ?>

    Nilai a : <?php echo $a; ?> <br>
    Nilai b : <?php echo $b; ?> <br>
    Jumlah a dan b adalah : <?php echo $c; ?> <br>
    </div>
  </body>
 </head>
</html>