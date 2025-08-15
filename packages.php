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
        <section class="pricing">
        <h1 class="heading">Choose Package</h1>
            <div class="box-container">
                <div class="box">
                    <h3>Ultimate</h3>
                    <div class="image">
                        <img src="image/wdnf8.jpg" alt="">
                    </div>
                    <div class="list">
                        <p><i class="fas fa-check"></i>Romantic Helicopter Ride </p>
                        <p><i class="fas fa-check"></i>2.5 Hours Of Photography makeup</p>
                        <p><i class="fas fa-check"></i>Exclusive After-wedding session</p>
                        <p><i class="fas fa-check"></i>Hair & Make Up</p>
                        <p><i class="fas fa-check"></i>2 Hours Of Personal Consultation And Planning</p>
                        <p><i class="fas fa-check"></i>Coordination Of The Day</p>
                        
                    </div>
                    <div class="price">10,50,000/-</div>
                    <a href="venue_details.php" class="btn" id="ultimateLink">book now</a>
                </div>
                <div class="box">
                    <h3>Prestige +</h3>
                    <div class="image">
                        <img src="image/wdnf2.jpg" alt="">
                    </div>
                    <div class="list">
                        <p><i class="fas fa-check"></i>Nosegay Bouquet & Boutonniere</p>
                        <p><i class="fas fa-check"></i>1 Hour Of Photography</p>
                        <p><i class="fas fa-check"></i>Express Digital Download</p>
                        <p><i class="fas fa-check"></i>Full Printing Rights</p>
                        <p><i class="fas fa-check"></i>Elopement Concierge</p>
                        <p><i class="fas fa-check"></i>Ceremony & Vows</p>
                    </div>  
                                      <div class="price">7,20,000/-</div>
                    <a href="venue_details.php" class="btn" id="prestigeLink">book now</a>
                </div>
                <div class="box">
                    <h3>Premium</h3>
                    <div class="image">
                        <img src="image/wdnf001.jpg" alt="">
                    </div>
                    <div class="list">
                        <p><i class="fas fa-check"></i>photography</p>
                        <p><i class="fas fa-check"></i>bride makeup</p>
                        <p><i class="fas fa-check"></i>wedding ceremony</p>
                        <p><i class="fas fa-check"></i>meals & drinks</p>
                        <p><i class="fas fa-check"></i>guest invitations</p>
                        <p><i class="fas fa-check"></i>entertainment & music</p>
                    </div>                    <div class="price">5,35,000/-</div>

                    <a href="venue_details.php" class="btn" id="premiumLink">book now</a>
                </div>
                <div class="box">
                    <h3> Classic </h3>
                    <div class="image">
                        <img src="image/raj palace.jpg" alt="">
                    </div>
                    <div class="list">
                        <p><i class="fas fa-check"></i>photography</p>
                        <p><i class="fas fa-check"></i>bride makeup</p>
                        <p><i class="fas fa-check"></i>wedding ceremony</p>
                        <p><i class="fas fa-check"></i>meals & drinks</p>
                        <p><i class="fas fa-check"></i>guest invitations</p>
                        <p><i class="fas fa-check"></i>entertainment & music</p>
                    </div>                    <div class="price">3,00,000/-</div>

                    <a href="venue_details.php" class="btn" id="classicLink">book now</a>
                </div>
                <div class="box">
                    <h3>Simple</h3>
                    <div class="image">
                        <img src="image/wdnf5.jpg" alt="">
                    </div>
                    <div class="list">
                        <p><i class="fas fa-check"></i>photography</p>
                        <p><i class="fas fa-check"></i>bride makeup</p>
                        <p><i class="fas fa-check"></i>wedding ceremony</p>
                        <p><i class="fas fa-check"></i>meals & drinks</p>
                        <p><i class="fas fa-check"></i>guest invitations</p>
                        <p><i class="fas fa-check"></i>entertainment & music</p>
                    </div>                    <div class="price">1,20,000/-</div>

                    <a href="venue_details.php" class="btn" id="simpleLink">book now</a>
                </div>
        
            </div>
        </section>   
        <?php @include 'footer.php';?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>