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
  <link rel="stylesheet" href="temp-css.css">
  <script src="temp-java.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@600&display=swap" rel="stylesheet">
  <link rel="icon" href="logo.png">

  <title>SI | Temperature</title>
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
    <a id="arrow" href="covert.php"> Back> </a>
    <div class="content">
      <h1>Convert temperature</h1>
      <p id="about" style="color: #000;">
        Temperature is a measure of how hot or cold an object is. It is an indicator of the amount of thermal
        energy stored in the object, and it is also an indicator of the degree of movement of its atoms that
        caused this heat to arise. There are many units used to measure temperature, such as Kelvin and Celsius.
        To learn more, you can see the temperature conversion tool below: </p>

      <input type="number" id="inputValue" placeholder="Enter Value" oninput="convert()">

      <section class="lists" style="margin: auto;">
        <select id="fromUnit" onchange="convert()">
          <option value="kelvin">Kelvin (k)</option>
          <option value="c"> Celsius(c)</option>
          <option value="f">Fahrenheit (f)</option>
        </select>
        <select id="toUnit" onchange="convert()">
          <option value="kelvin">Kelvin (k)</option>
          <option value="c">Celsius (c)</option>
          <option value="f">Fahrenheit (f)</option>
        </select>
      </section>
      <p id="result">0.000000</p>
    </div>
    <script src="nav.js"></script>

</body>

</html>