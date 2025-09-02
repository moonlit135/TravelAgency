<?php 
$page_title = "Home";
require_once '../includes/header.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel Agency :: Best Agency</title>
   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="/TravelManagement/public/css/style.css">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
          $(".scroll-top").click(function() {
              $("html, body").animate({ 
                  scrollTop: 0 
              }, "slow");
              return false;
          });
      });
   </script>
</head>
<body>

<!-- home section starts  -->
<section class="home">
   <div class="swiper home-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide" style="background:url(/TravelManagement/assets/images/home-slide-1.jpg) no-repeat center/cover">
            <div class="content">
               <span>search, express, tour</span>
               <h3>tour around the universe</h3>
               <a href="package.php" class="btn">Explore Now</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(/TravelManagement/assets/images/home-slide-2.jpg) no-repeat center/cover">
            <div class="content">
               <span>discover, explore, enjoy</span>
               <h3>explore new destinations</h3>
               <a href="package.php" class="btn">Discover More</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(/TravelManagement/assets/images/home-slide-3.jpg) no-repeat center/cover">
            <div class="content">
               <span>adventure awaits you</span>
               <h3>make your journey memorable</h3>
               <a href="package.php" class="btn">Start Journey</a>
            </div>
         </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
   </div>
</section>
<!-- home section ends -->
<!-- services section starts  -->
<section class="services">
   <h1 class="heading-title"> our services </h1>
   <div class="box-container">
      <div class="box">
         <img src="/TravelManagement/assets/images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>
      <div class="box">
         <img src="/TravelManagement/assets/images/icon-6.png" alt="">
         <h3>camping</h3>
      </div>
      <div class="box">
         <img src="/TravelManagement/assets/images/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>
      <div class="box">
         <img src="/TravelManagement/assets/images/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>
      <div class="box">
         <img src="/TravelManagement/assets/images/icon-5.png" alt="">
         <h3>off road</h3>
      </div>
      <div class="box">
         <img src="/TravelManagement/assets/images/icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>
   </div>
</section>
<!-- services section ends -->
<!-- home about section starts  -->
<section class="home-about">
   <div class="image">
      <img src="/TravelManagement/assets/images/about-img.jpg" alt="">
   </div>
   <div class="content">
      <h3>about us</h3>
      <p>Amazing Tours a Best tour Operator and Travel agent in Bangladesh. We are Tour Package, Hotel booking. Bangladesh Tours & Travel agent. Find international and domestic tour packages from bangladesh at low prices including best ... Travel Package | Honeymoon Package | Tour Package</p>
      <a href="about.php" class="btn">read more</a>
   </div>
</section>
<!-- home about section ends -->
<!-- home packages section starts  -->
<section class="home-packages">
   <h1 class="heading-title"> our packages </h1>
   <div class="box-container">
      <div class="box">
         <div class="image">
            <img src="/TravelManagement/assets/images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Dubai Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Dubai top selling packages!</p>
            <h2>INR 10,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="/TravelManagement/assets/images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Delhi Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Delhi top selling packages!</p>
            <h2>INR 9,900</h2>
            <a href="./assets/book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="/TravelManagement/assets/images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Japan Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Japan top selling packages!</p>
            <h2>INR 11,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
   </div>
   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>
</section>
<!-- home packages section ends -->


<section class="partner">
   <h1 class="heading-title"> our partners </h1>
   <div class="box-container">
      <div class="partner">
         <img src="/TravelManagement/assets/images/sp1.png" alt="">
      </div>
      <div class="partner">
         <img src="/TravelManagement/assets/images/sp2.png" alt="">
      </div>
      <div class="partner">
         <img src="/TravelManagement/assets/images/sp3.png" alt="">
      </div>
      <div class="partner">
         <img src="/TravelManagement/assets/images/sp4.png" alt="">
      </div>
      <div class="partner">
         <img src="/TravelManagement/assets/images/sp5.png" alt="">
      </div>
   </div>
</section>


<!-- home offer section starts  -->
<section class="home-offer home-packages">
   <div class="content">
      <div class="offerimage">
      <img src="/TravelManagement/assets/images/offer.jpg">
      </div>
   </div>
   <div class="content">
      <h3>upto 40% off</h3>
      <p>Bali Dynasty Resort is centrally located within walking distance to the nightlife and excitement of the Kuta area. This popular Bali accommodation offers a wide range of room types to suit families and couples. The kids can enjoy the kids club while the adults spoil themselves at Ashoka Spa or the Beach Club. For a memorable and relaxing stay in Kuta why not stay at Bali Dynasty Resort.</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>
<!-- home offer section ends -->

<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="/TravelManagement/assets/js/script.js"></script>
</body>
</html>
<?php require_once '../includes/footer.php'; ?>