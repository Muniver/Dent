<?php
// تحقق من تسجيل الدخول
session_start();
if (!isset($_SESSION['phone'])) {
    header("Location: login.php");
}

$days = ["السبت", "الأحد", "الإثنين", "الثلاثاء", "الأربعاء"];
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>حجز المواعيد</title>
</head>
<body>
    <h1>حجز موعد</h1>
    <form action="confirm_booking.php" method="post">
        <label for="day">اختر اليوم:</label>
        <select name="day" required>
            <?php foreach ($days as $day): ?>
                <option value="<?php echo $day; ?>"><?php echo $day; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="time">اختر الوقت:</label>
        <select name="time" required>
            <option value="9:00 AM">9:00 AM</option>
            <option value="11:00 AM">11:00 AM</option>
            <option value="1:00 PM">1:00 PM</option>
        </select><br>

        <button type="submit">حجز</button>
    </form>
</body>
</html>