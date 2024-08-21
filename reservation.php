<!-- ?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini al
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $room = $_POST['room'];
    $message = $_POST['message'];

    // Veritabanına bağlan
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "database_name";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Bağlantıyı kontrol et
    if ($conn->connect_error) {
        die("Bağlantı hatası: " . $conn->connect_error);
    }

    // Veritabanına veri ekle
    $sql = "INSERT INTO reservations (name, email, phone, checkin, checkout, room, message)
            VALUES ('$name', '$email', '$phone', '$checkin', '$checkout', '$room', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success">Rezervasyonunuz başarıyla alındı.</div>';
    } else {
        echo '<div class="alert alert-danger">Hata: ' . $sql . '<br>' . $conn->error . '</div>';
    }

    $conn->close();
}
? -->


<?php include 'head.php'; ?><link rel="stylesheet" href="css/reservation.css">
<?php include 'header.php'; ?>

<div class="content">
    <main>
        <!-- Rezervasyon Formu Bölümü -->
        <section class="reservation-form py-5">
            <div class="container"><br><br><br><br><br>
                <h1 class="text-center mb-4">Rezervasyon Yapın</h1>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form action="reservation.php" method="post">
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Adınız</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div><br>
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">E-posta Adresiniz</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div><br>
                            <div class="form-group mb-3">
                                <label for="phone" class="form-label">Telefon Numaranız</label>
                                <input type="tel" id="phone" name="phone" class="form-control" required>
                            </div><br>
                            <div class="form-group mb-3">
                                <label for="checkin" class="form-label">Giriş Tarihi</label>
                                <input type="date" id="checkin" name="checkin" class="form-control" required>
                            </div><br>
                            <div class="form-group mb-3">
                                <label for="checkout" class="form-label">Çıkış Tarihi</label>
                                <input type="date" id="checkout" name="checkout" class="form-control" required>
                            </div><br>
                            <div class="form-group mb-3">
                                <label for="room" class="form-label">Oda Türü</label>
                                <select id="room" name="room" class="form-control" required>
                                    <option value="">Seçiniz</option>
                                    <option value="standard">Standart Oda</option>
                                    <option value="deluxe">Deluxe Oda</option>
                                    <option value="suite">Suit Oda</option>
                                </select>
                            </div><br>
                            <div class="form-group mb-3">
                                <label for="message" class="form-label">Özel Talepleriniz</label>
                                <textarea id="message" name="message" class="form-control" rows="4"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Rezervasyon Yap</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
