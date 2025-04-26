<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "canaksoy@example.com"; // 🔧 Burayı mail adresinle değiştir
    $subject = "Yeni Mesaj - Portfolyo Web Sitesi";
    $body = "Ad: $name\nEmail: $email\nMesaj:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        header("Refresh:1; url=thankyou.html"); // 1 saniye bekle ve sonra yönlendir
        echo "Mesajınız gönderiliyor...";
    } else {
        echo "Hata oluştu. Lütfen tekrar deneyin.";
    }
}
?>
