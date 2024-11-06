<?php
// إعداد الاتصال بقاعدة البيانات باستخدام PDO
$dsn = "mysql:host=localhost;dbname=units_conversion_db;charset=utf8mb4"; // DSN مع اسم قاعدة البيانات
$username = "root"; // اسم المستخدم لقاعدة البيانات
$password = ""; // كلمة مرور قاعدة البيانات

try {
    // إنشاء اتصال PDO
    $conn = new PDO($dsn, $username, $password);
    // تعيين وضع الخطأ PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // معالجة بيانات التسجيل
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm-password'];

        // التحقق من تطابق كلمة المرور
        if ($password === $confirm_password) {
            // تشفير كلمة المرور
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // إعداد استعلام للإدخال
            $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");

            // ربط المتغيرات
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashed_password);

            // تنفيذ الاستعلام
            if ($stmt->execute()) {
                echo "Registration successful!";
                // يمكنك إعادة توجيه المستخدم أو عرض رسالة النجاح
            } else {
                echo "Error: Unable to register.";
            }
        } else {
            echo "Passwords do not match.";
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
    <link rel="stylesheet" href="login.css"> <!-- استخدم نفس ملف CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@600&display=swap" rel="stylesheet">
    <link rel="icon" href="logo.png">
    <title>Sign Up</title>
</head>

<body>
    <div class="bg"></div>

    <div class="login-container">
        <div class="login-box">
            <h2 class="login-title">Create Account</h2>
            <form action="signup.php" method="post"> <!-- تعديل هنا -->
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="input-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                </div>
                <button type="submit" class="login-btn">Sign Up</button>
                <p class="signup-link">Already have an account? <a href=" index.php">Log in</a></p>
            </form>
        </div>
    </div>
</body>

</html>