<!DOCTYPE html>

<html lang="en">
    <head>
        <!-- CSS -->
        <link rel="stylesheet" href="css/styles.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css"/>
        <link rel="stylesheet" href="bootstrap/animation.css"/>
        
        <!-- Bootstrap JS -->
        <script src="js/script.min.js"></script>
        <script src="js/carousel.js"></script>
        <script src="js/hoverAnimation.js"></script>
        <script src="js/bs-init.js"></script>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0", shrink-to-fit=no">
        <title>Endurance Fitness - Home</title>
    </head>
    
    <?php
    include 'nav.php';
    ?>
    
    <!-- Header Carousel -->
    <header class="placeholder bg-dark" style="min-width: 100%;">
        <div id="carousel-1" class="carousel slide d-block" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100 d-block" src="img/gym1.jpg" alt="Slide Image" /></div>
                <div class="carousel-item">
                    <img class="img-fluid w-100 d-block" src="img/gym2-2.jpg" alt="Slide Image" /></div>
                <div class="carousel-item">
                    <img class="w-100 d-block" src="img/gym3.jpg" alt="Slide Image" /></div>
                <div class="carousel-item">
                    <img class="w-100 d-block d-flex" src="img/gym4.jpg" alt="Slide Image" /></div>
                <div class="carousel-item">
                    <img class="w-100 d-block d-flex" src="img/gym5.jpg" alt="Slide Image" /></div>
            </div>
            <div>
                <a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                    <a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span></a>
            </div>
            <ol class="carousel-indicators">
                <li class="active" data-bs-target="#carousel-1" data-bs-slide-to="0"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="3"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="4"></li>
            </ol>
        </div>
    </header>
    
    <body>
        <section class="py-5">
            <div class="container text-center py-5">
                <p data-bss-hover-animate="pulse" class="mb-4" style="font-size: 2.5rem;">
                    <strong>Welcome to Endurance Fitness, Your Ultimate Fitness Destination!</strong>
                </p>
            </div>
        </section>
        
    <?php
    include 'footer.php';
    ?>
        
    </body>
</html>
