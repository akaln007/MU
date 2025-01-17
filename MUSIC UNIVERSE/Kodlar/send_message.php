if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'mehmetakalin660@gmail.com';
    $subject = 'Yeni Mesaj: ' . $name;
    $body = "Ad: $name\nE-posta: $email\n\nMesaj:\n$message";
    $headers = 'From: ' . $email . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        echo "Mesajınız başarıyla gönderildi!";
    } else {
        echo "Mesaj gönderilemedi. Lütfen tekrar deneyin.";
    }
} else {
    echo "Geçersiz istek.";
}
