<!DOCTYPE html>
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
<html dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="amber-css.css">
  <script src="amber-java.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@600&display=swap" rel="stylesheet">
  <link rel="icon" href="logo.png">

  <title>SI | Current Intensity</title>
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
    <a id="arrow" href="covert.php">Back> </a>
    <div class="content">
      <h1>Convert current intensity</h1>
      <p id="about" style="color: #000;">
        The ampere is a unit of electric current and is one of the seven basic units of
        measurement in the International System of Units. The ampere name was chosen to commemorate
        the French scientist Andre Ampere who studied electric current. The ampere is the
        current intensity resulting from the passage of an electric charge of 1 coulomb in
        a time of 1 second. To learn more, you can see the tool for converting between current units below: </p>

      <input type="number" id="inputValue" placeholder="Enter Value" oninput="convert()">
      <section class="lists">
        <select id="fromUnit" onchange="convert()">
          <option value="Ampere"> Ampere (A)</option>
          <option value="kiloampere"> kiloampere</option>
          <option value="nanoampere">nanoampere</option>
          <option value="milliampere"> Milliampere</option>
          <option value="gigaampere">Gigaampere</option>
          <option value="megaampere">Megaampere</option>
        </select>
        <select id="toUnit" onchange="convert()">
          <option value="Ampere"> Ampere (A)</option>
          <option value="kiloampere"> kiloampere(kiloampere)</option>
          <option value="nanoampere">nanoampere(nanoampere)</option>
          <option value="milliampere"> Milliampere(milliampere)</option>
          <option value="gigaampere">Gigaampere (gigaampere)</option>
          <option value="megaampere">Megaampere (megaampere)</option>
        </select>
      </section>
      <p id="result">0.000000</p>
    </div>
    <script src="nav.js"></script>
</body>

</html>