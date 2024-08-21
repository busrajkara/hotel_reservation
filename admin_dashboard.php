<?php
session_start();
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: login.php");
    exit();
}
include 'head.php';
include 'header.php';
?>

<div class="container mt-5">
    <h1>Admin Dashboard</h1>
    <h2>Kullanıcı Listesi</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ad</th>
                <th>E-posta</th>
                <th>Rol</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
            <!-- Kullanıcılar burada listelenecek -->
            <?php
            // Veritabanı bağlantısı
            $conn = new mysqli("localhost", "root", "", "otel_rezervasyon");
            if ($conn->connect_error) {
                die("Bağlantı hatası: " . $conn->connect_error);
            }
            $result = $conn->query("SELECT * FROM users");
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['role']}</td>
                        <td>
                            <a href='delete_user.php?id={$row['id']}' class='btn btn-danger btn-sm'>Sil</a>
                            <a href='edit_user.php?id={$row['id']}' class='btn btn-warning btn-sm'>Düzenle</a>
                        </td>
                      </tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
