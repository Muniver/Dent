<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = $_POST['code'];

    // تحقق من الكود (مثال: تحقق من الكود المرسل عبر SMS)
    if ($code == "123456") {  // في الواقع، يجب أن يكون الكود المرسل من SMS
        echo "تم تأكيد الحساب بنجاح!";
        // توجيه المستخدم لتسجيل الدخول
        header("Location: login.php");
    } else {
        echo "الكود غير صحيح!";
    }
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>تأكيد الحساب</title>
</head>
<body>
    <h1>إدخال كود التأكيد</h1>
    <form method="post">
        <input type="text" name="code" placeholder="أدخل كود التأكيد" required><br>
        <button type="submit">تأكيد</button>
    </form>
</body>
</html>