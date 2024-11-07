<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // هنا يمكن إضافة كود لإرسال كود التحقق عبر SMS باستخدام API مثل Twilio

    // حفظ البيانات في قاعدة بيانات (مثال بدون قاعدة بيانات)
    // استخدام session لحفظ البيانات مؤقتًا
    session_start();
    $_SESSION['phone'] = $phone;
    $_SESSION['password'] = $password;
    // توجيه المستخدم لصفحة التأكيد
    header("Location: confirm.php");
}
?>