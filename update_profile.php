<?php
session_start();
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'customer') {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Veritabanı bağlantısı
    $conn = new mysqli("localhost", "root", "", "otel_rezervasyon");
    if ($conn->connect_error) {
        die("Bağlantı hatası: " . $conn->connect_error);
    }

    $sql = "UPDATE users SET name = '$name', email = '$email', phone = '$phone' WHERE id = $user_id";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['user_name'] = $name;
        $_SESSION['user_email'] = $email;
        $_SESSION['user_phone'] = $phone;
        header("Location: customer_dashboard.php");
    } else {
        echo "Hata: " . $conn->error;
    }

    $conn->close();
} else {
    header("Location: customer_dashboard.php");
}
?>

