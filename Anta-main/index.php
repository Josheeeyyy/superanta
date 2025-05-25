<?php
session_start();
include 'includes/auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Anta Philippines</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/jogging.ico" />

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/navbar.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="css/footer.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="css/index.css?v=<?= time(); ?>">
</head>

<body class="d-flex flex-column h-100">

    <!-- Success/Error Messages -->
    <?php if (isset($_SESSION['success'])): ?>
        <div class="alert alert-success text-center mb-0">
            <?= htmlspecialchars($_SESSION['success']); unset($_SESSION['success']); ?>
        </div>
    <?php endif; ?>
    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger text-center mb-0">
            <?= htmlspecialchars($_SESSION['error']); unset($_SESSION['error']); ?>
        </div>
    <?php endif; ?>

    <main class="flex-shrink-0">
        <!-- Navigation -->
        <?php include 'includes/navbar.php'; ?>

        <!-- Static Homepage Banner -->
    <div class="homepage-banner text-center my-4">
        <img src="images/banner1.jpg" class="img-fluid" style="max-width: 1200px; width: 100%;" alt="Homepage Banner">
    </div>



        <!-- New Arrivals Section -->
        <div class="container my-5 featured-products">
            <h3 class="mb-4 fw-normal text-start">Newest In The Game</h3>
            <div id="newArrivalsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $shoes = [
                        ['img' => 'images/ebuffer.jpg', 'hover_img' => 'images/ebuffer1.jpg', 'title' => 'ANTA Men Ebuffer 8.0 Cross-Training Shoes', 'desc' => 'Men Shoes', 'price' => '₱4,995'],
                        ['img' => 'images/superflex.jpg', 'hover_img' => 'images/superflex1.jpg', 'title' => 'ANTA Men Superflexi Cross-Training Shoes', 'desc' => 'Men Shoes', 'price' => '₱5,995'],
                        ['img' => 'images/training.jpg', 'hover_img' => 'images/training1.jpg', 'title' => 'ANTA Men Basic Cross Training Shoes', 'desc' => 'Men Shoes', 'price' => '₱3,995'],
                        ['img' => 'images/shockw.jpg', 'hover_img' => 'images/shockw1.jpg', 'title' => 'ANTA Men Shock The Game Shock Wave 6.0 Basketball Shoes', 'desc' => 'Men Shoes', 'price' => '₱3,995'],
                        ['img' => 'images/windt.jpg', 'hover_img' => 'images/windt1.jpg', 'title' => 'ANTA Men Wind Tunnel Basketball Shoes', 'desc' => 'Men Shoes', 'price' => '₱4,995'],
                        ['img' => 'images/wave5.jpg', 'hover_img' => 'images/wave51.jpg', 'title' => 'ANTA Men Shock The Game Shock Wave 5 Pro Basketball Shoes', 'desc' => 'Men Shoes', 'price' => '₱3,990'],
                        ['img' => 'images/thoms1.jpg', 'hover_img' => 'images/thoms11.jpg', 'title' => 'ANTA Men Klay Thompson KT Splash 7 Team Basketball Shoes', 'desc' => 'Men Shoes', 'price' => '₱3,895'],
                        ['img' => 'images/kyrie.jpg', 'hover_img' => 'images/kyrie1.jpg', 'title' => 'ANTA Men Kyrie Irving KAI 1 Fleur De Lis Basketball Shoes', 'desc' => 'Men Shoes', 'price' => '₱3,500']


                    ];
                    $chunks = array_chunk($shoes, 4);
                    foreach ($chunks as $index => $chunk): ?>
                        <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                            <div class="row">
                                <?php foreach ($chunk as $shoe): ?>
                                    <div class="col-md-3 mb-3">
                                        <div class="card h-100">
                                            <div class="card-img-wrapper">
                                                <img src="<?= $shoe['img']; ?>" class="card-img main-img" alt="<?= htmlspecialchars($shoe['title']); ?>">
                                                <img src="<?= $shoe['hover_img']; ?>" class="card-img hover-img" alt="<?= htmlspecialchars($shoe['title']); ?>">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title"><?= htmlspecialchars($shoe['title']); ?></h5>
                                                <p class="card-text"><?= htmlspecialchars($shoe['desc']); ?></p>
                                                <p class="card-text text-primary fw-bold"><?= htmlspecialchars($shoe['price']); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#newArrivalsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"><i class="bi bi-chevron-left"></i></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#newArrivalsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"><i class="bi bi-chevron-right"></i></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


    <!-- New dual-banner layout -->
    <div class="row g-3">
        <div class="col-md-6">
            <div class="position-relative">
                <img src="images/banner2.jpg" class="img-fluid w-100" alt="Promo 2">
            </div>
        </div>
        <div class="col-md-6">
            <div class="position-relative">
            <img src="images/banner3.jpg" class="img-fluid w-100" alt="Promo 3">
            </div>
        </div>
    </div>
    </section>

    <!-- Full-Width Triple Banner Section with Equal Spacing -->
    <section class="w-100 my-5">
    <div class="d-flex flex-wrap triple-banner-row">
        <div class="hover-box">
            <img src="images/banner2.jpg" class="img-fluid" alt="Sportstyle Apparel">
            <div class="hover-overlay d-flex justify-content-center align-items-center text-white fw-bold fs-4">
              
            </div>
        </div>
        <div class="hover-box">
            <img src="images/banner3.jpg" class="img-fluid" alt="Men's Shoes">
            <div class="hover-overlay d-flex justify-content-center align-items-center text-white fw-bold fs-4">
               
            </div>
        </div>
        <div class="hover-box">
            <img src="images/banner4.jpg" class="img-fluid" alt="Women's Shoes">
            <div class="hover-overlay d-flex justify-content-center align-items-center text-white fw-bold fs-4">
            </div>
        </div>
    </div>
    </section>




    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Login/Register Modals -->
    <?php include 'includes/user.php'; ?>

    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Scroll Footer JS -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let lastScrollTop = 0;
            const footer = document.getElementById('scroll-footer');

            window.addEventListener('scroll', function () {
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                footer.classList.toggle('show-footer', scrollTop > lastScrollTop);
                lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
            });
        });
    </script>
</body>
</html>
