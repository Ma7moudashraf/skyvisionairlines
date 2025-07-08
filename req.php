<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "mahmoud.ashraf@skyvisionairline.com"; // ضع هنا بريدك
    $subject = "طلب عرض سعر - Air Cargo Charter";

    $message = "الاسم: " . $_POST['name'] . "\n";
    $message .= "الوجهة: " . $_POST['destination'] . "\n";
    $message .= "التاريخ: " . $_POST['date'] . "\n";
    $message .= "الوقت: " . $_POST['time'] . "\n";
    $message .= "نوع الطائرة: " . $_POST['aircraft_type'] . "\n";
    $message .= "الحمولة: " . $_POST['cargo'] . "\n";
    $message .= "البريد الإلكتروني: " . $_POST['email'] . "\n";
    $message .= "رقم الهاتف: " . $_POST['phone'] . "\n";
    $message .= "ملاحظات: " . $_POST['notes'] . "\n";

    $headers = "From: no-reply@example.com\r\n"; // يفضل استخدام دومينك هنا

    if (mail($to, $subject, $message, $headers)) {
        echo "تم إرسال الطلب بنجاح.";
    } else {
        echo "حدث خطأ أثناء إرسال البريد.";
    }
}
?>
