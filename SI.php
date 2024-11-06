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

<html lang="ar" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS sheet -->
  <link rel="stylesheet" href="SI-css.css">
  <!-- fonts sheets -->
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@600&display=swap" rel="stylesheet">
  <link rel="icon" href="logo.png">

  <title> SI | International System of Units </title>

</head>


<!-- beginning of body -->

<body>

  <nav>
    <ul id="navList">
      <li class="pages"><a href="index.php">Main</a></li>

      <!-- <li class="pages"><a href="SI.php">International System of Units</a></li> -->
      <li class="pages"><a href="covert.php">Conversions</a></li>

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


  <section class="container">
    <div class="content">

      <h1> Units of measurement and the international system of units </h1>

      <div class="bubble b1">

        <h4>International System of Units </h4>

        <p class="about">
          The International System of Units (SI) or International System of Units (SI) is the most widely used system of units in the world.
          The SI is used in all countries except the United States.
          It was derived from the metre-kilogram-second system of measurement by adding some units.
          The SI is a replacement for the old centimetre-gram-second system.
          This system is called the "metric system", especially in the United States, which has not widely adopted it,
          and the United Kingdom, which is still in the process of transitioning to the metric system.
          Not all metric units are accepted in the SI. </p>
      </div>

      <div class="bubble b2">
        <h4> Basic units of measurement in the international system</h4>

        <p class="about">
          The basic units of measurement in the International System of Units are only seven physical quantities,
          while the rest of the quantities are considered quantities derived from the basic quantities and are called
          derived units of measurement in the International System. The units are:
        <ul class="units">

          <li>Length <strong>&rarr;</strong>Unit of measurement: meter</li>

          <li>Time <strong>&rarr;</strong>Unit of measurement: second</li>

          <li>Mass <strong>&rarr;</strong>Unit of measurement: kilogram</li>

          <li>Electric Current <strong>&rarr;</strong>Unit of measurement: ampere</li>

          <li> Temperature <strong>&rarr;</strong>Unit of measurement: kelvin</li>

          <li>Luminous Intensity <strong>&rarr;</strong>Unit of measurement: candela</li>

          <li>Amount of Substance <strong>&rarr;</strong> Unit of measurement: mole</li>

        </ul>

        </p>
      </div>
    </div>
  </section>

  <script src="nav.js"></script>
</body>

</html>