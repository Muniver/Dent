<?php
// تحقق من الحجز (مثال)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $day = $_POST['day'];
    $time = $_POST['time'];

    echo "تم الحجز بنجاح! الموعد هو: $day الساعة $time.";
}
?>