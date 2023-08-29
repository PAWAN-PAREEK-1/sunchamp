<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/5f77a54189.js" crossorigin="anonymous"></script>
    <title>Sunchamp</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    include "header.php";
    ?>

    <section class="all-hero">
        <h1>Recycled</h1>
        <img src="img/clipimg2.svg" alt="">
    </section>

    <div class="whatsapp-button">
        <a class="whatsapp-icon" href="https://api.whatsapp.com/send?phone=1234567890" target="_blank" rel="noopener noreferrer">
          <i class="fa-brands fa-whatsapp fa-2xl" style="color: #fff;"></i>
        </a>
      </div>



      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up fa-2xl" style="color: #ed3237;"></i></button>



      <script>
      // Get the button
      let mybutton = document.getElementById("myBtn");

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
      </script>




    <section class="products lastp" id="p1">


        <div class="pro-dec">
        <div class="pro-img">
                <img src="img/productSec.svg" alt="">
                <div class="pro-head">
                    <img src="img/icon4.svg" alt="">
                    <h1>Recycled</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">

                    <!-- <h1>About Our <span>Recycled Textile </span>  Products</h1> -->
                <p>The process of recovering PET plastic products for reuse or recovering its raw materials for production results in the creation of yarn.</p>
                <p>Although it uses fewer resources to produce, recycled polyester is just as good as virgin polyester. In terms of quality, recycled polyester is almost on par with virgin polyester, but it uses 59 percent less energy to produce it. Recycled plastic bottles are used to create recycled polyester, also known as rPet. It is a fantastic way to keep plastic out of the landfill. Recycled polyester is manufactured using substantially fewer resources and generating lower CO2 emissions compared to newly produced polyester.</p>

            </div>
        </div>


        <p class="para2" id="para2"> <i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i>Fabric that is made from recycled plastic need not be uncomfortable or stiff. The fabric is equally supple and durable as non-recycled materials.</p>
        <p class="para2"><i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i>Fabric that is made from recycled plastic need not be uncomfortable or stiff.</p>
        <p class="para2"><i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i>The fabric is just as supple and durable as polyester that has not been recycled.</p>
        <p class="para2"><i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i>Recycled plastic bottles are used to create recycled polyester, also known as rPet.</p>
        <p class="para2"><i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i>It is a fantastic way to keep plastic out of the landfill.</p>
        <p class="para2"><i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i>Recycled polyester is created with far fewer resources and CO2 emissions in comparison to newly produced polyester.</p>
        <p class="para2"><i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i>rPet production produces between 45% and 70% fewer CO2 emissions than virgin polyester does.</p>
        <p class="para2"> <i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i>When compared to virgin polyester, the production of rPet requires 60% less energy.</p>
        <p class="para2"><i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i>Polyester can be recycled in 2 different ways: To create new yarn for mechanical recycling, plastic is melted. The process can only be repeated so many times before the fibre starts to degrade.</p>
        <p class="para2"><i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i>The plastic molecules are broken down and transformed into yarn through chemical recycling. Although this method is more expensive, it preserves the integrity of the original fibre and makes the material infinitely recyclable.</p>
        <p class="para2"><i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i>We purchase from mills that produce recycled goods and have all necessary certifications, such as GRS and transaction certificates.
        </p>
    </section>

















    <?php
    include "testimonial.php";
    ?>
    <?php
    include "footer.php";
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>