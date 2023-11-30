<html>
  <head>
    <body>
      <h1>Membuat Form dengan Method POST</h1>

      <form action="tampil_get.php" method="get">
        Nama :  <input type="text" name="nama" /><br><br>
        Email :  <input type="text" name="email" /><br><br>
        <input type="radio" name="gender" value="female">Female <br>
        <input type="radio" name="gender" value="male">Male <br>
        <input type="radio" name="gender" value="other">Other <br>

        <!-- operasi aritmatika dengan method get -->
        <h3>Operasi Aritmatika</h3>
        <form action="tampil_get.php" method="get">
          Angka 1 : <input type="text" name="angka1"><br><br>
          Angka 2 : <input type="text" name="angka2"><br><br>
          <input type="submit" name="operasi" value="tambah">
      </form>
    </body>
  </head>
</html>