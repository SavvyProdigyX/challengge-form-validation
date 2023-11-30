<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Validation</title>
</head>
<style>
  .error{
    color: red;
  }
</style>
<body>
  <h3>Form Validation </h3>
  <?php 
  //definisikan variable
  $nameErr = $emailErr = $genderErr = $aErr = $bErr = "";
  $name = $email = $gender = $a = $b = $c="";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name di perlukan";
    } else {
      $name = test_input($_POST["name"]);
    }
    if (empty($_POST["email"])) {
      $emailErr = "Email di perlukan";
    } else {
      $email = test_input($_POST["email"]);
    }
    if (empty($_POST["gender"])) {
      $genderErr = "gender di perlukan";
    } else {
      $gender = test_input($_POST["gender"]);
    }
    if (empty($_POST["a"])) {
      $aErr = "angka a di perlukan";
    } else {
      $a = test_input($_POST["a"]);
    }
    if (empty($_POST["b"])) {
      $bErr = "angka b di perlukan";
    } else {
      $b = test_input($_POST["b"]);
    }
  }
  ?>
<?php
// menghitung operasi aritmatika
$a = isset($_POST["a"]) ? (int)$_POST["a"] : 0;
$b = isset($_POST["b"]) ? (int)$_POST["b"] : 0;
$c = $a + $b;
?>

<?php
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="name">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
E-mail:
<input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<span class="error">* <?php echo $genderErr;?></span>
<br><br>


<br><br>
  angka a : <input type="text" name="a">
  <span class="error">* <?php echo $aErr;?></span>
  <br><br>
  angka b : <input type="text" name="b">
  <span class="error">* <?php echo $bErr;?></span>
  <br><br>
<input type="submit" name="submit" value="Submit">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
echo "<h2>Your Input:</h2>";
echo "Nama:$name";
echo "<br>";
echo "Email:$email";
echo "<br>";
echo "Jenis Kelamin mu adalah $gender";
echo "<br>";
echo "Nilai a: $a <br>";
echo "Nilai b: $b <br>";
echo "Jumlah a dan b adalah: $c <br>";
}
?>
</form>
</body>
</html>