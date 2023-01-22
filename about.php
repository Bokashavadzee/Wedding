<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

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

   <section class="about">

          <img src="images/about-photo.jpg" alt="">
          <h3>about us</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur voluptates aliquid quas sunt enim inventore doloremque vero, odio sed optio magnam quia modi id corporis molestiae blanditiis est natus iusto.</p>
          <a href="contact.php" class="btn">contact us</a>

   </section>

   <section class="team">

      <h1 class="heading">our team</h1>

      <div class="box-container">

             <div class="box">
                <img src="images/team-photo-1.jpg" alt="">
                <h3>John deo</h3>
                <p>wedding planner</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
             </div>

             <div class="box">
                <img src="images/team-photo-2.jpg" alt="">
                <h3>Sem Smith</h3>
                <p>wedding planner</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
             </div>


             <div class="box">
                <img src="images/team-photo-3.jpg" alt="">
                <h3>Sarah Lopez</h3>
                <p>wedding planner</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
             </div>


             <div class="box">
                <img src="images/team-photo-4.jpg" alt="">
                <h3>Kirra keshkov</h3>
                <p>wedding planner</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
             </div>

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