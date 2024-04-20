<?php
require './db/config.php';
    $select = mysql_query("SELECT * FROM projects_tbl");
  
?>
  <!-- Swiper -->
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Document</title>
    <style>
    .container4{
        margin:10vw 0;
    }
    .container4 h1{
    font-size: 2.8vw;
    text-align:center;
    margin:2vw 0;
}
    .swiper {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 450px;
      height: 350px;
      object-fit:cover;
      display:flex;
      align-items:center;
    }
    .swiper-slide img {
      display: block;
      width: 100%;
      border-radius:10px;
    }
    </style>
  </head>
  <body>
  <div class="container4" id="Projects">
<h1>Projects</h1>
      <div class="swiper mySwiper">
          <div class="swiper-wrapper">
<?php
 while($row= mysql_fetch_assoc($select)){
     echo " <div class='swiper-slide'>
            <img src='./img/project/$row[image]' alt=''>
     </div>";
    }
    ?>
    </div>
    <div class="swiper-pagination"></div>
</div> 
</div>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  </body>
  </html>
  <script>
 var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      autoplay:true,
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
