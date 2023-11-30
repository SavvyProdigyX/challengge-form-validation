<html>

<head>

<body>
  <h1>Membuat Form dengan Method POST</h1>

  <form action="tampil.php" method="post">
    Nama : <input type="text" name="nama" /><br><br>
    Email : <input type="text" name="email" /><br><br>
    <input type="radio" name="gender" value="female">Female <br>
    <input type="radio" name="gender" value="male">Male <br>
    <input type="radio" name="gender" value="other">Other <br>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

      Name: <input type="text" name="name">
      <span class="error">* <?php echo $nameErr; ?></span>
      <br><br>
      E-mail:
      <input type="text" name="email">
      <span class="error">* <?php echo $emailErr; ?></span>
      <br><br>
      Website:
      <input type="text" name="website">
      <span class="error"><?php echo $websiteErr; ?></span>
      <br><br>
      Comment: <textarea name="comment" rows="5" cols="40"></textarea>
      <br><br>
      Gender:
      <input type="radio" name="gender" value="female">Female
      <input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="other">Other
      <span class="error">* <?php echo $genderErr; ?></span>
      <br><br>
      <input type="submit" name="submit" value="Submit">

    </form>

    <input type="submit">
  </form>
</body>
</head>

</html>