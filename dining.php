<?php include 'head.php'; ?><link rel="stylesheet" href="css/dining.css">
<?php include 'header.php'; ?>

<div class="content"><br><br> 
             <main><br><br><br>
        <!-- Yeme & İçme Bölümü -->
        <section class="dining py-5">
            <div class="container">
                <h1 class="text-center mb-5">Yeme & İçme</h1>
                <br><br><br>
                <!-- Restoran Tanıtımı -->
                <div class="row mb-5">
                    <div class="col-md-6">
                        <img src="images/restaurant.jpg" class="img-fluid rounded" alt="Restoran" /> <!-- Restoran Resmi -->
                    </div>
                    <div class="col-md-6">
                        <h2 class="mb-4">Restoranımız</h2>
                        <p>Otelimizin restoranı, şeflerimizin özenle hazırladığı geniş bir menü seçeneği sunar. Kahvaltı, öğle yemeği ve akşam yemeği için çeşitli lezzetlerimizle konuklarımızı ağırlamaktan mutluluk duyuyoruz.</p>
                        <p>Modern ve rahat bir atmosferde yemeklerinizi keyifle yiyebilir, her öğün için özel hazırlanmış yemeklerin tadını çıkarabilirsiniz.</p>
                    </div>
                </div>
                
                <!-- Menü Seçenekleri -->
                <div class="row">
                    <!-- Menü 1 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="menu-card shadow-lg rounded">
                            <img src="images/dish1.jpg" class="card-img-top rounded-top" alt="Yemek 1" /> <!-- Menü 1 Resmi -->
                            <div class="card-body">
                                <h5 class="card-title">Garnitürlü Izgara Tavuk</h5>
                                <p class="card-text">Izgara tavuk göğsü, taze garnitür ve özel soslar ile hazırlanmıştır.</p>
                                <p class="card-price">₺120</p>
                            </div>
                        </div>
                    </div>
                    <!-- Menü 2 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="menu-card shadow-lg rounded">
                            <img src="images/dish2.jpg" class="card-img-top rounded-top" alt="Yemek 2" /> <!-- Menü 2 Resmi -->
                            <div class="card-body">
                                <h5 class="card-title">Sebzeli Kısır</h5>
                                <p class="card-text">Taze sebzelerle hazırlanan kısır, hafif ve sağlıklı bir seçenektir.</p>
                                <p class="card-price">₺80</p>
                            </div>
                        </div>
                    </div>
                    <!-- Menü 3 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="menu-card shadow-lg rounded">
                            <img src="images/dish3.jpg" class="card-img-top rounded-top" alt="Yemek 3" /> <!-- Menü 3 Resmi -->
                            <div class="card-body">
                                <h5 class="card-title">Deniz Ürünleri Çorbası</h5>
                                <p class="card-text">Deniz ürünleriyle hazırlanan bu lezzetli çorba, enfes bir başlangıçtır.</p>
                                <p class="card-price">₺100</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- İçki Menü -->
                <section class="beverages py-5">
                    <div class="container">
                        <h2 class="text-center mb-4">İçkiler</h2>
                        <p>Restoranımızda çeşitli içki seçenekleri sunulmaktadır. Kokteyllerden yerel şaraplara kadar geniş bir içki menüsüyle hizmetinizdeyiz.</p>
                        <div class="row">
                            <!-- İçki 1 -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="beverage-card shadow-lg rounded">
                                    <img src="images/drink1.jpg" class="card-img-top rounded-top" alt="İçki 1" /> <!-- İçki 1 Resmi -->
                                    <div class="card-body">
                                        <h5 class="card-title">Tropikal Kokteyl</h5>
                                        <p class="card-text">Egzotik meyvelerle hazırlanan tropikal kokteyl.</p>
                                        <p class="card-price">₺60</p>
                                    </div>
                                </div>
                            </div>
                            <!-- İçki 2 -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="beverage-card shadow-lg rounded">
                                    <img src="images/drink2.jpg" class="card-img-top rounded-top" alt="İçki 2" /> <!-- İçki 2 Resmi -->
                                    <div class="card-body">
                                        <h5 class="card-title">Şarap</h5>
                                        <p class="card-text">Yerli ve uluslararası şarap seçenekleri.</p>
                                        <p class="card-price">₺80</p>
                                    </div>
                                </div>
                            </div>
                            <!-- İçki 3 -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="beverage-card shadow-lg rounded">
                                    <img src="images/drink3.jpg" class="card-img-top rounded-top" alt="İçki 3" /> <!-- İçki 3 Resmi -->
                                    <div class="card-body">
                                        <h5 class="card-title">Meyve Suyu</h5>
                                        <p class="card-text">Taze sıkılmış meyve suları.</p>
                                        <p class="card-price">₺40</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </main>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
