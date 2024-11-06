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
  <link rel="stylesheet" href="length-css.css">
  <script src="length-java.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@600&display=swap" rel="stylesheet">
  <link rel="icon" href="logo.png">

  <title> SI | Length </title>
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
    <a id="arrow" href="covert.php"> >Back </a>
    <div class="content">
      <h1>Convert Length</h1>
      <p id="about" style="color: #000;">
        The unit of length or distance in the International System is the meter and its multiples or parts.
        It is an international unit of distance, and is defined as the distance traveled by light in a vacuum in 1/299,792,458 of
        a second. The word comes from the English word, and the meter is the most widely used unit of length in the world.
        To learn more about multiples and parts of the meter, you can see the length conversion tool below: </p>

      <input type="number" id="inputValue" placeholder="Enter Value" oninput="convert()">

      <section class="lists">
        <select id="fromUnit" onchange="convert()">
          <option value="cm">Centimeter (cm)</option>
          <option value="inch">Inch (in)</option>
          <option value="feet">Feet (ft)</option>
          <option value="meter">Meter (m)</option>
          <option value="yard">Yard (yd)</option>
          <option value="mile">Mile (mi)</option>
          <option value="kilometer">kilometer (km)</option>
        </select>
        <select id="toUnit" onchange="convert()">
          <option value="cm">Centimeter (cm)</option>
          <option value="inch">Inch (in)</option>
          <option value="feet">Feet (ft)</option>
          <option value="meter">Meter (m)</option>
          <option value="yard">Yard (yd)</option>
          <option value="mile">Mile (mi)</option>
          <option value="kilometer">kilometer (km)</option>
        </select>
      </section>
      <p id="result">0.000000</p>
    </div>
    <script src="nav.js"></script>
</body>

</html>