<?php
session_start();
include 'head.php';
include 'header.php';
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2>Kullanıcı Girişi Yap veya Yeni Kullanıcı Oluştur</h2>
            <div class="d-grid gap-2 mt-3">
                <a href="login.php" class="btn btn-primary btn-lg">Kullanıcı Girişi Yap</a>
                <a href="signup.php" class="btn btn-secondary btn-lg">Yeni Kullanıcı Oluştur</a>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
