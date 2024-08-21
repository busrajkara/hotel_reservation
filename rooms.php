<?php include 'head.php'; ?>
<link rel="stylesheet" href="css/rooms.css">
<?php include 'header.php'; ?>

<div class="content">
    <main>
        <!-- Odalar Bölümü -->
        <section class="rooms py-5">
            <div class="container">
                <h1 class="text-center mb-5">Odalarımız</h1>
                <div class="row">
                    <!-- Oda 1 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="room-card shadow-lg rounded">
                            <img src="images/room1.jpg" class="card-img-top rounded-top" alt="Deluxe Oda">
                            <div class="card-body">
                                <h5 class="card-title">Deluxe Oda</h5>
                                <p class="card-text">Konforlu ve şık bir tasarıma sahip deluxe odamız, tüm modern olanakları sunmaktadır. Rahatlatıcı atmosferi ve zarif dekoru ile sizlere huzurlu bir konaklama deneyimi yaşatır.</p>
                                <p class="card-price">₺500 / gece</p>
                                <a href="reservation.php" class="btn btn-primary">Rezervasyon Yap</a>
                            </div>
                        </div>
                    </div>
                    <!-- Oda 2 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="room-card shadow-lg rounded">
                            <img src="images/room2.jpg" class="card-img-top rounded-top" alt="Standart Oda">
                            <div class="card-body">
                                <h5 class="card-title">Standart Oda</h5>
                                <p class="card-text">Özenle dekore edilmiş standart odamız, konforlu bir konaklama deneyimi sunar. Modern olanakları ve şık tasarımı ile tatilinizi keyifli hale getirir.</p>
                                <p class="card-price">₺300 / gece</p>
                                <a href="reservation.php" class="btn btn-primary">Rezervasyon Yap</a>
                            </div>
                        </div>
                    </div>
                    <!-- Oda 3 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="room-card shadow-lg rounded">
                            <img src="images/room3.jpg" class="card-img-top rounded-top" alt="Suit Oda">
                            <div class="card-body">
                                <h5 class="card-title">Suit Oda</h5>
                                <p class="card-text">Lüks ve geniş suit odamız, özel bir konaklama deneyimi için ideal bir seçenektir. Ferah alanları ve üst düzey konforu ile tatilinizi unutulmaz kılar.</p>
                                <p class="card-price">₺800 / gece</p>
                                <a href="reservation.php" class="btn btn-primary">Rezervasyon Yap</a>
                            </div>
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
