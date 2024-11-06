<?php
// بدء الجلسة
session_start();

// التحقق مما إذا كان المستخدم مسجل دخول
if (!isset($_SESSION['user_id'])) {
  // توجيه المستخدم إلى index.php إذا لم يكن مسجل دخول
  header("Location: index.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="convert-css.css">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@600&display=swap" rel="stylesheet">
  <link rel="icon" href="logo.png">
  <title>Unit Conversion</title>
</head>

<body>

  <nav>
    <ul id="navList">
      <li class="pages"><a href="index.php">Home</a></li>

      <!-- <li class="pages"><a href="SI.php">SI Units</a></li> -->
      <li class="pages"><a href="covert.php">Conversions</a></li>
      <?php if (isset($_SESSION['user_id'])) { ?>
        <li class="pages"><a href="logout.php">Logout</a></li>
      <?php } ?>
    </ul>
    <a href="index.php">
      <img src="logo.png" width="70px">
    </a>
  </nav>

  <div class="container">
    <a href="amount.php" class="card">
      <img src="icons/mol.png" style="width: 100px; height: 100px;" alt="Amount of Substance Icon" class="icon">
      <span>Amount of Substance</span>
    </a>
    <a href="length.php" class="card">
      <img src="icons/length.png" style="width: 100px; height: 100px;" alt="Length Icon" class="icon">
      <span>Length</span>
    </a>
    <a href="mass.php" class="card">
      <img src="icons/mass.png" style="width: 100px; height: 100px;" alt="Mass Icon" class="icon">
      <span>Mass</span>
    </a>
    <a href="candle.php" class="card">
      <img src="icons/luminous.png" style="width: 100px; height: 100px;" alt="Luminous Intensity Icon" class="icon">
      <span>Luminous Intensity</span>
    </a>
    <a href="amber.php" class="card">
      <img src="icons/electric.png" style="width: 100px; height: 100px;" alt="Electric Current Icon" class="icon">
      <span>Electric Current</span>
    </a>
    <a href="temp.php" class="card">
      <img src="icons/temperature.png" style="width: 100px; height: 100px;" alt="Temperature Icon" class="icon">
      <span>Temperature</span>
    </a>
    <a href="time.php" class="card">
      <img src="icons/time.png" alt="Time Icon" style="width: 100px; height: 100px;" class="icon">
      <span>Time</span>
    </a>
  </div>

</body>

</html>