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
  <link rel="stylesheet" href="mass-css.css">
  <script src="mass-java.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@600&display=swap" rel="stylesheet">
  <link rel="icon" href="logo.png">

  <title> SI | Mass </title>
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
    <a id="arrow" href="covert.php">
      < Back </a>
        <div class="content">
          <h1>Convert Mass</h1>
          <p id="about" style="color: #000;">
            The kilogram or kilogram is one of the base units of the International System of Units,
            and the kilogram is referred to by several abbreviations.
            The standard model used to calibrate the kilogram or kilogram is a solid cylindrical mass
            with a diameter of 39 millimeters and a height of 39 millimeters, consisting of 90% platinum and 10% iridium, and is kept at zero degrees Celsius, and is located in Paris and at the Institute of Standardization in Boulder, Colorado, USA. To learn more, you can see the mass conversion tool below: </p>
          <input type="number" id="inputValue" placeholder="Enter Value" oninput="convert()">

          <section class="lists">

            <select id="fromUnit" onchange="convert()">
              <option value="g">Gram (g)</option>
              <option value="kg">kilogram (kg)</option>
              <option value="tonna">Ton (t)</option>
              <option value="lb">Pound (lb)</option>
              <option value="oz">Ounce (oz)</option>
            </select>
            <select id="toUnit" onchange="convert()">
              <option value="g">Gram (g)</option>
              <option value="kg">kilogram (kg)</option>
              <option value="tonna">Ton (t)</option>
              <option value="lb">Pound (lb)</option>
              <option value="oz">Ounce (oz)</option>
            </select>
          </section>
          <p id="result">0.000000</p>
        </div>
        <script src="nav.js"></script>

</body>

</html>