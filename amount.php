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
  <link rel="stylesheet" href="amount-css.css">
  <script src="amount-java.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@600&display=swap" rel="stylesheet">
  <link rel="icon" href="logo.png">

  <title> SI |Amount of Matter </title>
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
      <h1>Convert the amount of matter</h1>
      <p id="about" style="color: #000;">
        The mole is a unit of measurement for the amount of a substance in chemistry.
        It is one of the fundamental units of measurement and one of the few units used to measure a physical quantity.
        The term "mole" comes from the German language, where Wilhelm Ostwald first coined the name in 1893,
        although the unit "equivalent weight" had been in use for a century.
        To learn more about multiples and parts of the mole, you can see the conversion tool
        between units of measurement of matter below: </p>

      <input type="number" id="inputValue" placeholder="Enter Value" oninput="convert()">
      <section class="lists">
        <select id="fromUnit" onchange="convert()">
          <option value="mole"> mole</option>
          <option value="kilomole"> kilomole</option>
          <option value="nanomole">nanomole</option>
          <option value="millimole">millimole</option>
          <option value="picomole"> picomole</option>
          <option value="micromole">micromole</option>
        </select>
        <select id="toUnit" onchange="convert()">
          <option value="mole"> mole</option>
          <option value="kilomole">kilomole</option>
          <option value="nanomole"> nanomole</option>
          <option value="millimole">millimole</option>
          <option value="picomole">picomole</option>
          <option value="micromole">micromole</option>
        </select>
      </section>
      <p id="result">0.000000</p>
    </div>

    </div>
    <script src="nav.js"></script>
</body>

</html>