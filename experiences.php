<?php
include 'head.php';
include 'header.php';
include 'db_connect.php'; // Veritabanı bağlantısı için bir dosya.

$query = "SELECT * FROM experiences";
$result = $conn->query($query);
?>

<div class="content">
    <main>
        <!-- Deneyimler Bölümü -->
        <section class="experiences py-5">
            <div class="container"><br><br><br><br><br>
                <h1 class="text-center mb-5">Deneyimlerimiz</h1>
                
                <!-- ?php while ($row = $result->fetch_assoc()) { ?>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <img src="<?php echo $row['image_path']; ?>" class="img-fluid rounded" alt="<?php echo $row['title']; ?>" />
                    </div>
                    <div class="col-md-6">
                        <h2 class="mb-3"><?php echo $row['title']; ?></h2>
                        <p><?php echo $row['description']; ?></p>
                        <ul>
                            <?php
                            $features = explode(",", $row['features']);
                            foreach ($features as $feature) {
                                echo "<li>$feature</li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <br><br><br>
                <?php } ?>
                
            </div>
        </section>
    </main>
</div>

<?php
include 'footer.php';
$conn->close(); -->
