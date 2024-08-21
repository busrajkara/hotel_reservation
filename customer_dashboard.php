<?php
session_start();
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'customer') {
    header("Location: login.php");
    exit();
}
include 'head.php';
include 'header.php';
?>

<div class="container mt-5">
    <h1>Customer Dashboard</h1>
    <h2>Oda Kiralama</h2>
    <a href="rent_room.php" class="btn btn-primary">Oda Kirala</a>

    <h2 class="mt-5">Kiralanmış Odalar</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Oda Adı</th>
                <th>Giriş Tarihi</th>
                <th>Çıkış Tarihi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Kiralanmış odalar burada listelenecek -->
            <?php
            // Veritabanı bağlantısı
            $conn = new mysqli("localhost", "root", "", "otel_rezervasyon");
            if ($conn->connect_error) {
                die("Bağlantı hatası: " . $conn->connect_error);
            }
            $customer_id = $_SESSION['user_id'];
            $result = $conn->query("SELECT * FROM rentals WHERE customer_id = $customer_id");
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['room_name']}</td>
                        <td>{$row['checkin_date']}</td>
                        <td>{$row['checkout_date']}</td>
                      </tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>

    <h2 class="mt-5">Bilgilerimi Güncelle</h2>
    <form action="update_profile.php" method="post">
        <div class="form-group mb-3">
            <label for="name" class="form-label">Adınız</label>
            <input type="text" id="name" name="name" class="form-control" value="<?php echo $_SESSION['user_name']; ?>" required>
        </div>
        <div class="form-group mb-3">
            <label for="email" class="form-label">E-posta Adresiniz</label>
            <input type="email" id="email" name="email" class="form-control" value="<?php echo $_SESSION['user_email']; ?>" required>
        </div>
        <div class="form-group mb-3">
            <label for="phone" class="form-label">Telefon Numaranız</label>
            <input type="tel" id="phone" name="phone" class="form-control" value="<?php echo $_SESSION['user_phone']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Bilgilerimi Güncelle</button>
    </form>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
