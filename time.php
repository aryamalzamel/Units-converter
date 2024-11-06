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

<?php
//function for calculate conversion result depending on the from unit and to unit
function convert($inputValue, $fromUnit, $toUnit)
{
    $result = 0;
    if ($fromUnit === "s" && $toUnit === "m") {
        $result = $inputValue / 60;
    } else if ($fromUnit === "s" && $toUnit === "s") {
        $result = $inputValue * 1;
    } else if ($fromUnit === "m" && $toUnit === "m") {
        $result = $inputValue * 1;
    } else if ($fromUnit === "d" && $toUnit === "d") {
        $result = $inputValue * 1;
    } else if ($fromUnit === "h" && $toUnit === "h") {
        $result = $inputValue * 1;
    } else if ($fromUnit === "s" && $toUnit === "h") {
        $result = $inputValue / 3600;
    } else if ($fromUnit === "s" && $toUnit === "d") {
        $result = $inputValue / 86400;
    } else if ($fromUnit === "m" && $toUnit === "s") {
        $result = $inputValue * 60;
    } else if ($fromUnit === "m" && $toUnit === "h") {
        $result = $inputValue / 60;
    } else if ($fromUnit === "m" && $toUnit === "d") {
        $result = $inputValue / 1440;
    } else if ($fromUnit === "h" && $toUnit === "s") {
        $result = $inputValue * 3600;
    } else if ($fromUnit === "h" && $toUnit === "m") {
        $result = $inputValue * 60;
    } else if ($fromUnit === "h" && $toUnit === "d") {
        $result = $inputValue / 24;
    } else if ($fromUnit === "d" && $toUnit === "s") {
        $result = $inputValue * 86400;
    } else if ($fromUnit === "d" && $toUnit === "m") {
        $result = $inputValue * 1440;
    } else if ($fromUnit === "d" && $toUnit === "h") {
        $result = $inputValue * 24;
    } else {
        $result = $inputValue;
    }
    return round($result, 4);
}
//initialize with empty string for display the page without post any data
$inputValue = $fromUnit = $toUnit = $result = '';
// Connect to the database
$con = mysqli_connect('localhost', 'root', '', 'conversion_db');

// Check the connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_select_db($con, "conversion_db");

//the process that work when we pass a value from the form in the same page
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //assign the variables with values from form
    $inputValue = $_POST['inputValue'];
    $fromUnit = $_POST['fromUnit'];
    $toUnit = $_POST['toUnit'];
    //validate if the input is null
    if (empty($_POST['inputValue'])) {
        echo 'The value are not filled in...<br>';

        exit();
    }
    //call the function with the variables that assigned befor
    $result = convert($inputValue, $fromUnit, $toUnit);
    // insert result in table in database
    mysqli_query($con, "INSERT INTO time_conversion (from_unit, to_unit, amount, result) VALUES ('$fromUnit', '$toUnit', $inputValue, $result);");
}
?>


<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="time-css.css">
    <script src="time-java.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@600&display=swap" rel="stylesheet">
    <link rel="icon" href="logo.png">

    <title> SI | Time </title>
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
    <section class="container">
        <br />
        <a id="arrow" href="covert.php"> Back> </a>
        <div class="content">
            <h1>Time conversion</h1>
            <p id="about">
                The unit of measurement of time or time is the second, which is the basic unit
                of time in the International System of Units and is used to measure time.
                In the past, the movement of the sun and the earth were used as a basis for defining time,
                but this is no longer the case in modern times. With the advent of atomic clocks,
                it became possible to define the second based on the basic properties of the atom.
                To learn more, you can see the tool for converting between time units below:
            </p>

            <form method="POST" action="">
                Input Value: <input type="number" id="inputValue" name="inputValue" placeholder="Enter Value" value="<?php echo htmlspecialchars($inputValue); ?>"><br>
                From Unit: &nbsp; <select name="fromUnit" id="fromUnit">
                    <option value="s" <?php if ($fromUnit == 's') echo 'selected'; ?>>Seconds</option>
                    <option value="m" <?php if ($fromUnit == 'm') echo 'selected'; ?>>Minutes</option>
                    <option value="h" <?php if ($fromUnit == 'h') echo 'selected'; ?>>Hours</option>
                    <option value="d" <?php if ($fromUnit == 'd') echo 'selected'; ?>>Days</option>
                </select><br>
                To Unit: &nbsp; &nbsp; &nbsp; &nbsp; <select name="toUnit" id="toUnit">
                    <option value="s" <?php if ($toUnit == 's') echo 'selected'; ?>>Seconds</option>
                    <option value="m" <?php if ($toUnit == 'm') echo 'selected'; ?>>Minutes</option>
                    <option value="h" <?php if ($toUnit == 'h') echo 'selected'; ?>>Hours</option>
                    <option value="d" <?php if ($toUnit == 'd') echo 'selected'; ?>>Days</option>
                </select><br>
                <button type="submit" class="styled-button">Convert</button>

                <p id="result"><?php echo htmlspecialchars($result); ?></p>
            </form>
        </div>
        <script src="nav.js"></script>

</body>

</html>