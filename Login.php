<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // تحقق من بيانات الدخول (مثال بدون قاعدة بيانات)
    if ($_SESSION['phone'] == $phone && $_SESSION['password'] == $password) {
        header("Location: book.php");
    } else {
        echo "البيانات غير صحيحة!";
    }
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>تسجيل الدخول</title>
</head>
<body>
    <h1>تسجيل الدخول</h1>
    <form method="post">
        <input type="text" name="phone" placeholder="رقم الهاتف" required><br>
        <input type="password" name="password" placeholder="كلمة المرور" required><br>
        <button type="submit">دخول</button>
    </form>
</body>
</html>