<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Karadeniz Oteli</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/header.css"> <!-- Header CSS dosyası -->
    <link rel="stylesheet" href="css/footer.css"> <!-- Footer CSS dosyası -->
    <link rel="stylesheet" href="css/styles.css"> <!-- Genel stil dosyası -->
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Carousel -->
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/slide.jpg" class="d-block w-100" alt="Karadeniz Manzarası 1">
            </div>
            <div class="carousel-item">
                <img src="images/slide2.jpg" class="d-block w-100" alt="Karadeniz Manzarası 2">
            </div>
            <div class="carousel-item">
                <img src="images/slide3.jpg" class="d-block w-100" alt="Karadeniz Manzarası 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Önceki</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Sonraki</span>
        </button>
    </div>
    
    <div class="content">
        <main>
            <!-- Ana Sayfa Başlığı ve Giriş Bölümü -->
            <section class="hero bg-dark text-light text-center py-5">
                <div class="container">
                    <h1 class="display-4">Karadeniz Oteline Hoş Geldiniz!</h1>
                    <p class="lead">Karadeniz'in eşsiz güzelliğinde unutulmaz bir tatil deneyimi yaşayın. Doğanın, kültürün ve lezzetin buluşma noktası.</p>
                    <a href="reservation.php" class="btn btn-light btn-lg">Rezervasyon Yapın</a>
                </div>
            </section>
            
            <!-- Bilgi Bölümleri -->
            <section class="info-section py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info-item" data-info="info1">
                                <h5>Karadeniz Doğası</h5>
                                <p>Doğanın güzellikleri, yemyeşil ormanlar ve berrak göller. Karadeniz'in eşsiz manzaralarıyla doğa yürüyüşleri yapın ve ruhunuzu dinlendirin.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-item" data-info="info2">
                                <h5>Kültürel Miras</h5>
                                <p>Karadeniz'in zengin kültürel geçmişi, geleneksel müzik ve danslarla dolu etkinlikler. Yerel festivaller ve kültürel gezilerle bölgenin tarihini keşfedin.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-item" data-info="info3">
                                <h5>Lezzetli Yemekler</h5>
                                <p>Karadeniz mutfağının nefis lezzetleri; deniz ürünleri, mısır ekmeği ve yöresel tatlarla damak tadınıza hitap eden menüler sunuyoruz.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="infoDetails" class="info-details"></div>
            </section>

            <!-- Otel Özellikleri Bölümü -->
            <section class="features py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card text-center">
                                <img src="images/room1.jpg" class="card-img-top" alt="Oda">
                                <div class="card-body">
                                    <h5 class="card-title">Konforlu Odalar</h5>
                                    <p class="card-text">Karadeniz'in huzur verici ortamında, konforlu ve şık tasarlanmış odalarımızda konaklayın. Geniş balkonlar ve muhteşem manzaralar ile rahatlayın.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center">
                                <img src="images/food.jpg" class="card-img-top" alt="Yemek">
                                <div class="card-body">
                                    <h5 class="card-title">Lezzetli Yemekler</h5>
                                    <p class="card-text">Karadeniz mutfağından çeşitli ve lezzetli yemekler. Şeflerimizin özenle hazırladığı menülerle tatilinizi unutulmaz kılın.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center">
                                <img src="images/MASAJ.jpg" class="card-img-top" alt="Spa">
                                <div class="card-body">
                                    <h5 class="card-title">Spa ve Sağlık</h5>
                                    <p class="card-text">Gevşeme ve yenilenme için rahatlatıcı spa hizmetleri. Masajlar, sauna ve wellness imkanları ile kendinizi yenileyin ve rahatlayın.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

           <!-- Keşfet Bölümü -->
<section class="hero bg-secondary text-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-content">
                <h1 class="text-primary">Karadeniz ile</h1>
                <h2>KEŞFET! DOĞA, KÜLTÜR VE EĞLENCE</h2>
                <p>Karadeniz Oteli, bu muazzam bölgenin doğal güzelliklerini ve kültürel zenginliklerini bir arada sunuyor. Yemyeşil ormanları, serin yaylaları ve eşsiz deniz manzaralarıyla Karadeniz, size huzur ve keyif dolu bir tatil vaat ediyor. Her yaşa hitap eden aktivitelerimiz, bölgenin yöresel lezzetleri ve geleneksel kültürel deneyimleri ile Karadeniz Oteli, doğa severler ve kültür tutkunları için ideal bir tatil noktasıdır.</p>
                <a href="experiences.php" class="btn btn-light">Keşfet!</a>
            </div>
            <div class="col-lg-6 image-gallery">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/travel.jpg" alt="Karadeniz Manzarası 1" class="img-fluid mb-3">
                    </div>
                    <div class="col-md-6">
                        <img src="images/tarvel2.jpg" alt="Karadeniz Manzarası 2" class="img-fluid mb-3">
                    </div>
                    <div class="col-md-6">
                        <img src="images/travel3.jpg" alt="Karadeniz Manzarası 3" class="img-fluid mb-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


            <!-- Yorumlar Bölümü -->
<section class="testimonials bg-dark text-light py-5">
    <div class="container">
        <h2 class="text-center">Misafir Yorumları</h2>
        <div class="row">
            <div class="col-md-4">
                <blockquote class="blockquote text-center">
                    <p class="mb-0">“Karadeniz'in huzuru içinde harika bir tatil geçirdik. Hizmet ve manzara mükemmeldi! Personel çok yardımseverdi ve her şey harikaydı.”</p><br>
                    <footer class="blockquote-footer">Ayşe Yılmaz</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="blockquote text-center">
                    <p class="mb-0">“Odamız çok konforluydu ve otelin konumu mükemmel. Güneşin tadını çıkarırken deniz manzarasına doyamadık. Kesinlikle tekrar geleceğiz.”</p><br>
                    <footer class="blockquote-footer">Mehmet Demir</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="blockquote text-center">
                    <p class="mb-0">“Karadeniz Oteli’nde geçirdiğimiz tatil gerçekten unutulmazdı. Otelin temizliği, odaların konforu ve kahvaltıdaki yöresel lezzetler mükemmeldi. Kesinlikle tavsiye ederim.”</p><br>
                    <footer class="blockquote-footer">Elif Karan</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="blockquote text-center">
                    <p class="mb-0">“Ailemizle geçirdiğimiz tatil süresince otelin sunduğu aktiviteler gerçekten çok eğlenceliydi. Doğanın içinde huzur bulmak isteyenler için ideal bir yer.”</p><br>
                    <footer class="blockquote-footer">Ali Yurt</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="blockquote text-center">
                    <p class="mb-0">“Karadeniz’in eşsiz güzellikleriyle dolu bir tatil geçirdik. Otelin personeli son derece güler yüzlü ve yardımcıydı. Mutlaka tekrar gelmeyi düşünüyoruz.”</p><br>
                    <footer class="blockquote-footer">Fatma Çelik</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="blockquote text-center">
                    <p class="mb-0">“Karadeniz Oteli, huzurlu ve keyifli bir tatil arayanlar için mükemmel bir tercih. Odamız çok rahat ve manzara muazzamdı. Her şeyden memnun kaldık.”</p><br>
                    <footer class="blockquote-footer">Hüseyin Karataş</footer>
                </blockquote>
            </div>
        </div>
    </div>
</section>

           <!-- İletişim ve Sosyal Medya Bölümü -->
<section class="contact py-5 text-center">
    <div class="container">
        <h2>Bizimle İletişime Geçin</h2>
        <p>Otelimiz hakkında daha fazla bilgi almak veya özel taleplerinizi iletmek için bizimle iletişime geçebilirsiniz. Size yardımcı olmak için buradayız. Karadeniz'in eşsiz doğası ve konforlu konaklama seçeneklerimiz hakkında detaylı bilgi almak, rezervasyon yapmak veya herhangi bir sorunuz varsa lütfen bizimle iletişime geçin.</p>
        <p>Yardımcı olabileceğimiz konular arasında:</p>
        <ul class="list-unstyled">
            <li>Otelimizin sunduğu özel fırsatlar ve paketler</li>
            <li>Rezervasyon işlemleri ve fiyat bilgileri</li>
            <li>Otelimizin sunduğu aktiviteler ve olanaklar</li>
            <li>Özel etkinlikler ve grup rezervasyonları</li>
            <li>Geri bildirimleriniz ve önerileriniz</li>
        </ul>
        <p>Bizimle iletişime geçmek için <a href="contact.php" >İletişim Sayfamızı Ziyaret Edin</a> veya aşağıdaki iletişim bilgilerini kullanabilirsiniz:</p>
        <p><strong>Telefon:</strong> +90 123 456 78 90</p>
        <p><strong>E-posta:</strong> info@karadenizoteli.com</p>
        <p><strong>Adres:</strong> Karadeniz Mah. Doğa Sok. No:1, 61000 Trabzon, Türkiye</p>
    </div>
</section>

   <!-- Anket -->
<<div id="poll" class="text-center py-5">
        <h3>Kuymak nerde yenir?</h3>
        <div class="btn-group">
            <button id="trabzon" class="btn btn-warning">Trabzon</button>
            <button id="rize" class="btn btn-primary">Rize</button>
            <button id="artvin" class="btn btn-success">Artvin</button>
        </div>
        <div id="pollResult" class="mt-4"></div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const pollResult = document.getElementById('pollResult');

            document.getElementById('trabzon').addEventListener('click', function () {
                pollResult.innerHTML = '<div class="alert alert-warning" role="alert">Trabzon, kuymak ve diğer Karadeniz yemeklerinin en iyi yapıldığı yerlerden biridir. Trabzon’da bu lezzetli yemeği en iyi şekilde deneyimleyebilirsiniz.</div>';
            });

            document.getElementById('rize').addEventListener('click', function () {
                pollResult.innerHTML = '<div class="alert alert-primary" role="alert">Rize, çay tarlaları ve yöresel yemekleri ile ünlüdür. Kuymak burada da oldukça popüler ve yöresel lezzetlerin tadını çıkarabilirsiniz.</div>';
            });

            document.getElementById('artvin').addEventListener('click', function () {
                pollResult.innerHTML = '<div class="alert alert-success" role="alert">Artvin, muazzam doğası ve geleneksel Karadeniz yemekleri ile bilinir. Kuymak burada da çok lezzetli bir şekilde hazırlanır.</div>';
            });
        });
    </script>




    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const navbar = document.querySelector('.navbar');

            window.addEventListener('scroll', function () {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php include 'footer.php'; ?>
</body>    
</html>
