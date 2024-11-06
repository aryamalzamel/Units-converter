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
<html dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="cd-css.css">
  <script src="candle-java.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@600&display=swap" rel="stylesheet">
  <link rel="icon" href="logo.png">

  <title>SI | Luminous Intensity</title>
</head>

<body>
  <nav>
    <ul id="navList">
      <li class="pages"><a href="index.php">Main</a></li>

      <!-- <li class="pages"><a href="SI.php">International System of Units</a></li> -->
      <li class="pages"><a href="covert.php">Conversions</a></li>
      <?php if (isset($_SESSION['user_id'])) { ?>
        <li class="pages"><a href="logout.php">Logout</a></li>
      <?php } ?>
    </ul>
    <a href="index.php">
      <img src="logo.png" width="70px">
    </a>

    <div class="menu-icon">
      <div id="bar1"></div>
      <div id="bar2"></div>
      <div id="bar3"></div>
    </div>
  </nav>
  <section class="container" style="background-color: #fff; border-radius: 0px  ;">
    <br />
    <a id="arrow" href="covert.php"> Back></a>
    <div class="content">
      <h1>Convert light intensity</h1>
      <p id="about" style="color: #000;">
        A candle is a unit of measurement for luminous intensity (or illumination intensity)
        and is a very old method of lighting that has not lost its importance over time.
        A candle is a column of wax with a cotton thread running through the middle. When the thread is lit,
        the fire melts the wax around the thread without damaging the thread,
        thus the fire shines to illuminate what is around it.
        To learn more, you can view the tool for converting between units of measurement of light below: </p>
      <input type="number" id="inputValue" placeholder="Enter Value" oninput="convert()">

      <section class="lists">
        <select id="fromUnit" onchange="convert()">
          <option value="cd"> Candela (cd)</option>
          <option value="kcd">Kilo of candela(kcd)</option>
          <option value="mcd"> milli candela(mcd)</option>
          <option value="lm/sr">Lumen/Steradian(lm/sr)</option>
        </select>
        <select id="toUnit" onchange="convert()">
          <option value="cd"> Candela (cd)</option>
          <option value="kcd">Kilo of candela(kcd)</option>
          <option value="mcd">milli candela(mcd)</option>
          <option value="lm/sr">Lumen/Steradian(lm/sr)</option>
        </select>
      </section>
      <p id="result">0.000000</p>
    </div>
    <script src="nav.js"></script>
</body>

</html>