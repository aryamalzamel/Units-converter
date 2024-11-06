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
<html lang="eng" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS sheet -->
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@600&display=swap" rel="stylesheet">
  <link rel="icon" href="logo.png">
  <title> SI | Main</title>
</head>

<body>
  <div class="bg"></div>
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
  <section class="container">
    <div class="logo-img">
      <a href="index.php">
        <img src="logo.png">
      </a>
    </div>
    <div class="text">
      <h1 class="title">
        International System of Units
      </h1>
      <p class="description">
        Your first destination for unit conversions
      </p>
      <a href="covert.php" class="btn">Start Converting</a>
    </div>
  </section>
  <script src="nav.js"></script>
</body>

</html>