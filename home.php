<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <?php @include 'header.php';?>

        <section class="home">

            <div class="swiper home-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide" style="background:url(image/slide-5.jpg) no-repeat; background-size:cover">
                        <div class="content">
                            <h3>Extraordinary weddings Don't just happen, they are planned...</h3>
                            <a href="packages.php" class="btn">discover more</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide" style="background:url(image/slide6.jpg) no-repeat; background-size:cover">
                        <div class="content">
                            <h3>From today until your day, we do.</h3>
                            <a href="contact.php" class="btn">discover more</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide" style="background:url(image/slide5.jpg) no-repeat; background-size:cover">
                        <div class="content">
                            <h3>Imagine a better event...</h3>
                            <a href="gallery.php" class="btn">discover more</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </section>

        <section class="services">

        <h1 class="heading">our services</h1>

            <div class="swiper service-slider">

                <div class="swiper-wrapper">

                    <div class="swiper-slide slide">
                        <img src="image/service-1.jpg" alt="">
                        <div class="content">
                            <h3>decoration</h3>
                            <p>small spaces, big style</p>
                            <a href="about.php" class="btn">About</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="image/service-2.jpg" alt="">
                        <div class="content">
                            <h3>photography</h3>
                            <p>capture memories with us!</p>
                            <a href="about.php" class="btn">About</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="image/service-3.jpg" alt="">
                        <div class="content">
                            <h3>Food and Drink</h3>
                            <p>good food, good mood!</p>
                            <a href="about.php" class="btn">About</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="image/service-4.jpg" alt="">
                        <div class="content">
                            <h3>wedding cake</h3>
                            <p>cake+love= pure happines!</p>
                            <a href="about.php" class="btn">About</a>
                        </div>
                    </div>
                    
                    <div class="swiper-slide slide">
                        <img src="image/service-5.jpg" alt="">
                        <div class="content">
                            <h3>Makeup</h3>
                            <p>wake up and make up!</p>
                            <a href="about.php" class="btn">About</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="image/service-6.jpg" alt="">
                        <div class="content">
                            <h3>Entertainment & music</h3>
                            <p>when words fail, music speaks!</p>
                            <a href="about.php" class="btn">About</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="image/service-7.jpg" alt="">
                        <div class="content">
                            <h3>wedding stationery</h3>
                            <p>we also make wedding card for you!</p>
                            <a href="about.php" class="btn">About</a>
                        </div>
                    </div>

                </div>
                
                <div class="swiper-pagination"></div>
            </div>

        </section>

        <?php @include 'footer.php';?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="script.js"></script>
</body>
</html>