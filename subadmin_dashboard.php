<?php
session_start();
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'subadmin') {
    header("Location: login.php");
    exit();
}
include 'head.php';
include 'header.php';
?>

<div class="container mt-5">
    <h1>Subadmin Dashboard</h1>
    <h2>Veri Yönetimi</h2>
    <a href="add_data.php" class="btn btn-primary">Veri Ekle</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Veri Adı</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
            <!-- Veriler burada listelenecek -->
            <?php
            // Veritabanı bağlantısı
            $conn = new mysqli("localhost", "root", "", "otel_rezervasyon");
            if ($conn->connect_error) {
                die("Bağlantı hatası: " . $conn->connect_error);
            }
            $result = $conn->query("SELECT * FROM data");
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['data_name']}</td>
                        <td>
                            <a href='delete_data.php?id={$row['id']}' class='btn btn-danger btn-sm'>Sil</a>
                            <a href='edit_data.php?id={$row['id']}' class='btn btn-warning btn-sm'>Düzenle</a>
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
