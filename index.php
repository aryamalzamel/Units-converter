<?php
// بدء الجلسة
session_start();

// التحقق إذا كان المستخدم مسجل دخول بالفعل
if (isset($_SESSION['user_id'])) {
    // توجيه المستخدم إلى صفحة home.php
    header("Location: home.php");
    exit();
}

// إعداد الاتصال بقاعدة البيانات باستخدام PDO
$dsn = "mysql:host=localhost;dbname=units_conversion_db;charset=utf8mb4"; // DSN مع اسم قاعدة البيانات
$username = "root"; // اسم المستخدم لقاعدة البيانات
$password = ""; // كلمة مرور قاعدة البيانات

try {
    // إنشاء اتصال PDO
    $conn = new PDO($dsn, $username, $password);
    // تعيين وضع الخطأ PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // معالجة بيانات تسجيل الدخول
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // إعداد استعلام للتحقق من وجود المستخدم
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        // جلب النتائج
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // التحقق من صحة كلمة المرور
        if ($user && password_verify($password, $user['password'])) {
            // كلمة المرور صحيحة، قم بتسجيل الدخول
            echo "Login successful!";

            // تخزين معلومات المستخدم في الجلسة
            $_SESSION['user_id'] = $user['id']; // أو أي معرف فريد للمستخدم
            $_SESSION['username'] = $user['username']; // تخزين اسم المستخدم إذا كنت ترغب في ذلك

            // يمكنك إعادة توجيه المستخدم إلى صفحة أخرى
            header("Location: index.php"); // توجيه إلى صفحة لوحة التحكم
            exit();
        } else {
            echo "Invalid email or password.";
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// إغلاق الاتصال
$conn = null;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@600&display=swap" rel="stylesheet">
    <link rel="icon" href="logo.png">
    <title>Login</title>
</head>

<body>
    <div class="bg"></div>

    <div class="login-container">
        <div class="login-box">
            <h2 class="login-title">Log In</h2>
            <form action=" index.php" method="post">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="login-btn">Log In</button>
                <p class="signup-link">Don't have an account? <a href="signup.php">Sign up</a></p>
            </form>
        </div>
    </div>
</body>

</html>