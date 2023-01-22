<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pricing</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- swiper css links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css"> 

</head>
<body>
   <div class="container">

   <?php @include 'header.php'?>


       <section class="pricing">

             <h1 class="heading">our pricing</h1>

             <div class="box-container">

             <div class="box">
                <h3>basic plan</h3>
                <div class="price">$250/-</div>
                <div class="list">
                    <p><i class="fas fa-check"></i> photography</p>
                    <p><i class="fas fa-check"></i> bribe makeup</p>
                    <p><i class="fas fa-check"></i> wedding ceremony</p>
                    <p><i class="fas fa-check"></i> meals & drinks</p>
                    <p><i class="fas fa-check"></i> guest invitations</p>
                </div>
                <a href="contact.php" class="btn">choose plan</a>
             </div>


             <div class="box">
                <h3>premium plan</h3>
                <div class="price">$650/-</div>
                <div class="list">
                    <p><i class="fas fa-check"></i> photography</p>
                    <p><i class="fas fa-check"></i> bribe makeup</p>
                    <p><i class="fas fa-check"></i> wedding ceremony</p>
                    <p><i class="fas fa-check"></i> meals & drinks</p>
                    <p><i class="fas fa-check"></i> guest invitations</p>
                </div>
                <a href="contact.php" class="btn">choose plan</a>
             </div>


             <div class="box">
                <h3>ultimate plan</h3>
                <div class="price">$1250/-</div>
                <div class="list">
                    <p><i class="fas fa-check"></i> photography</p>
                    <p><i class="fas fa-check"></i> bribe makeup</p>
                    <p><i class="fas fa-check"></i> wedding ceremony</p>
                    <p><i class="fas fa-check"></i> meals & drinks</p>
                    <p><i class="fas fa-check"></i> guest invitations</p>
                </div>
                <a href="contact.php" class="btn">choose plan</a>
             </div>

             </div>

       </section>



       <section class="reviews">

               <h1 class="heading">happy clients</h1>

               <div class="swiper reviews-slider">

               <div class="swiper-wrapper">

               <div class="swiper-slide slide">
                <img src="images/happy-client-1.jpg" alt="">
                <h3>maria azamasceva</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, earum dignissimos? Totam ducimus veritatis natus, labore eveniet quia illum similique.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
               </div>


               <div class="swiper-slide slide">
                <img src="images/happy-client-2.jpg" alt="">
                <h3>wowmaria gelashvili</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, earum dignissimos? Totam ducimus veritatis natus, labore eveniet quia illum similique.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
               </div>


               <div class="swiper-slide slide">
                <img src="images/happy-client-3.jpg" alt="">
                <h3>nuca sosodze</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, earum dignissimos? Totam ducimus veritatis natus, labore eveniet quia illum similique.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
               </div>


               <div class="swiper-slide slide">
                <img src="images/happy-client-4.jpg" alt="">
                <h3>lela wurwumia</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, earum dignissimos? Totam ducimus veritatis natus, labore eveniet quia illum similique.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
               </div>


               <div class="swiper-slide slide">
                <img src="images/happy-client-5.jpg" alt="">
                <h3>luis suarez</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, earum dignissimos? Totam ducimus veritatis natus, labore eveniet quia illum similique.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
               </div>

               <div class="swiper-slide slide">
                <img src="images/happy-client-6.jpg" alt="">
                <h3>john cena</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, earum dignissimos? Totam ducimus veritatis natus, labore eveniet quia illum similique.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
               </div>


               </div>
               <div class="swiper-pagination"></div>
               </div>

       </section>

   <?php @include 'footer.php'?>

   </div>
    























<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>