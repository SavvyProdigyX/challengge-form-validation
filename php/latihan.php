<html>
  <?php
  // type of sintaks here 
  echo "selamat datang di pertemuan ke 8";

  echo "<br>";

  ?>
  <?php
  // membuat variabel dan tipe data

  // string
  $a = "Selamat datang di pertemuan ke 8";
  $b = 10;
  $c = 20;
  $d = $b + $c;

  // float
  $m = 3.14;
  // boolean
  $x = true;

  $matkul = array("Matematika Diskrit", "Pemrograman Web" , "Jarkom" , "Algoritma");

  echo $a;
  echo "<br>";

  echo "nilai variabel satu : $b ";
  echo "<br>";
  echo "nilai variabel dua : $c ";
  echo "<br>";
  echo "Jumlah variabel satu dan dua : $b + $c";
  echo "<br>";
  echo "Tampilkan total variabel satu dan dua : $d";
  echo "<br>";

  // Gabungkan elemen array dengan string:
  echo implode("-", $matkul)."<br>";
  echo implode("-", $matkul)."<br>";
  echo implode("-", $matkul)."<br>";
  echo implode("-", $matkul)."<br>";



  $coba = 3;
  $coba += 10;

  $test = "Hai";
  $test .=" Siapa Kamu";

  print $test;
  echo "<br>";
  print $coba;
  echo "<br>";


  //Condition
  $nilai = 75;
  if($nilai = 75){
    echo "anda lulus";
  }else{
    echo "anda tidak lulus";
  }

  echo "<br>";

  $nilai2 = 40;
  if ($nilai2 == 80) {
      echo "anda mendapatkan nilai B";
  } elseif ($nilai2 < 80) {
      echo "anda mendapatkan nilai C";
  } else { 
      echo "anda mendapatkan nilai A";
  }
  
  echo "<br>";

  // Looping
  $looping = 50;
  while ($looping % 2 !=1){
    echo "Bilangan tsb adalah $looping <br>";
    $looping++;
  }
  echo "<br>";

  ?>
  <?php
  // type of sintaks here 

  ?>
  <?php
  // type of sintaks here 

  ?>
  <?php
  // type of sintaks here 

  ?>
</html>

