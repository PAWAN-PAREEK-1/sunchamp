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
      <a class="whatsapp-icon" href="https://api.whatsapp.com/send?phone=+919712885500" target="_blank" rel="noopener noreferrer">
        <i class="fa-brands fa-whatsapp fa-2xl" style="color: #fff;"></i>
      </a>
    </div>



  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up fa-2xl" style="color: #ed3237;"></i></button>



  <script>
    // Get the button
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
      scrollFunction()
    };

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
        <img src="img/productSec.svg" alt="" class="pimage" />
        <div class="pro-head">
          <img src="img/icon4.svg" alt="">
          <h1>Recycled</h1>
          <img src="img/icon3.svg" alt="" id="icon3">
        </div>

      </div>
      <div class="mission mis">

        <!-- <h1>Sunchamp Global Traders, the  No.1 <span>Recycled textile products </span> trader in Gujarat.</h1> -->
        <!-- <p class="para2" id="para2"> <i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i>Fabric that is made from recycled plastic need not be uncomfortable or stiff. The fabric is equally supple and durable as non-recycled materials.</p> -->
        <p class="para2 para21"><i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i>The recovery of PET plastic products for reuse or recovery of their raw materials for
          production results in the production of fibres.</p>
        <p class="para2 para21"><i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i> Recycled polyester is as good or equal to normal Polyester although it takes less resources to
          produce. Recycled Polyester uses less than 59 % lower of energy to produce as compared to
          Virgin Polyester. Recycled plastic bottles/Yarns/fabrics are used to create recycled polyester,
          which is commonly known as rPET. This is a brilliant way to keep plastic out of the landfill.
        </p>
        <p class="para2 para21"><i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i>It is not necessary to be unpleasant or soft when it comes to the fabrics which are produced by
          recycling plastic. The fabric is as durable and flexible as the unrecycled materials. There is no
          need to be uncomfortable or rigid in the fabrics that are produced by recyclized plastic.
        </p>

      </div>
    </div>


    <p class="para2" id="para2"> <i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i> The material is as soft and durable as polyester, which has not been recycled. </p>
    <p class="para2"><i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i> Recycled plastic bottles, commonly known as rPET, are used to manufacture recycled
      polyester.
      </p>
      <p class="para2"><i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i>Fabric that is made from recycled plastic need not be uncomfortable or stiff.</p>
    <p class="para2"><i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i>The rPET makes about 45 % or 70 % less CO2 emissions than virgin polyester.</p>
    <p class="para2"><i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i>The production of rPET has a 60% lower energy consumption than virgin polyester.</p>
    <p class="para2"><i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i> First method is converting Bottles into flakes and then optimized for melting and spinning in
      Yarn/Fibers.</p>
    <p class="para2"><i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i> Second process is chemical recycling process, Plastic molecules are broken down to
      molecular level and then transformed into fibres. The method is more expensive, but keeps
      the integrity of the original fibre and makes it infinitely recyclable.
    </p>
    <p class="para2"><i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i> We work with mills which are producing recycled products and have all the necessary
      Certificates, such as BPA free, GRS and transaction certificates.</p>

  </section>

















  <?php
  include "footer.php";
  ?>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>