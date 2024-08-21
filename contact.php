 <!-- ?php
// PHPMailer kütüphanesini dahil edin
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // PHPMailer'in yüklenmiş olduğundan emin olun

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        // Sunucu ayarları
        $mail->isSMTP();
        $mail->Host       = 'smtp.example.com'; // SMTP sunucu adresi
        $mail->SMTPAuth   = true;
        $mail->Username   = 'your_email@example.com'; // SMTP kullanıcı adı
        $mail->Password   = 'your_password'; // SMTP şifresi
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Alıcı ve Gönderici
        $mail->setFrom('your_email@example.com', 'Otel Rezervasyon Sistemi');
        $mail->addAddress('recipient@example.com'); // Alıcı e-posta adresi

        // İçerik
        $mail->isHTML(true);
        $mail->Subject = 'Yeni İletişim Formu Mesajı';
        $mail->Body    = "<p><strong>Ad:</strong> $name</p>
                          <p><strong>E-posta:</strong> $email</p>
                          <p><strong>Mesaj:</strong></p>
                          <p>$message</p>";

        $mail->send();
        echo '<div class="alert alert-success">Mesajınız başarıyla gönderildi.</div>';
    } catch (Exception $e) {
        echo '<div class="alert alert-danger">Mesaj gönderilemedi. Hata: ', $mail->ErrorInfo, '</div>';
    }
}
? -->

<?php include 'head.php'; ?>
<?php include 'header.php'; ?><link rel="stylesheet" href="css/contact.css">

<div class="content">
    <main> <br><br><br><br><br><br>
        <!-- İletişim Formu Bölümü -->
        <section class="contact-form py-5">
            <div class="container">
                <h1 class="text-center mb-4">Bizimle İletişime Geçin</h1>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form action="contact.php" method="post">
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Adınız</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">E-posta Adresiniz</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="message" class="form-label">Mesajınız</label>
                                <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Gönder</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- İletişim Bilgileri Bölümü -->
        <section class="contact-info py-5">
            <div class="container">
                <h2 class="text-center mb-4">İletişim Bilgilerimiz</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="contact-card p-4">
                            <h3 class="card-title">Adres</h3>
                            <p>1234 Otel Caddesi, Şehir, Ülke</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="contact-card p-4">
                            <h3 class="card-title">Telefon</h3>
                            <p>+123 456 7890</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="contact-card p-4">
                            <h3 class="card-title">E-posta</h3>
                            <p>info@example.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
