<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- swiper css links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lightgallery.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css"> 

</head>
<body>
   <div class="container">

   <?php @include 'header.php'?>

        <section class="portfolio">
            <h1 class="heading">our portfolio</h1>

              <div class="portfolio-container">

                    <a href="imagaes/ceremony-photo-1" class="box">
                      <div class="image">
                        <img src="images/ceremony-photo-1.jpg" alt="">
                    </div>
                        <h3>wedding ceremony</h3>
                    </a>


                    <a href="imagaes/ceremony-photo-2" class="box">
                    <div class="image">
                        <img src="images/ceremony-photo-2.jpg" alt="">
                    </div>
                        <h3>wedding ceremony</h3>
                    </a>


                    <a href="imagaes/ceremony-photo-3" class="box">
                    <div class="image">
                        <img src="images/ceremony-photo-3.jpg" alt="">
                    </div>
                        <h3>wedding ceremony</h3>
                    </a>


                    <a href="imagaes/ceremony-photo-4" class="box">
                    <div class="image">
                        <img src="images/ceremony-photo-4.jpg" alt="">
                    </div>
                        <h3>wedding ceremony</h3>
                    </a>

                    <a href="imagaes/ceremony-photo-5" class="box">
                    <div class="image">
                        <img src="images/ceremony-photo-5.jpg" alt="">
                    </div>
                        <h3>wedding ceremony</h3>
                    </a>


                    <a href="imagaes/ceremony-photo-6" class="box">
                    <div class="image">
                        <img src="images/ceremony-photo-6.jpg" alt="">
                    </div>
                        <h3>wedding ceremony</h3>
                    </a>

              </div>

        </section>

   <?php @include 'footer.php'?>

   </div>
    





















<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/lightgallery.min.js"></script>

<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>

<script>

lightGallery(document.querySelector('.portfolio .portfolio-container'));

</script>

</body>
</html>