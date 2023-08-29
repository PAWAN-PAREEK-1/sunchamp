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
        <h1>Chemical Products</h1>
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




    <section class="products" id="p1">


        <div class="pro-dec">
            <div class="pro-img">
                <img src="img/productSec.svg" alt="">
                <div class="pro-head">
                    <img src="img/icon6.svg" alt="">
                    <h1>PTA</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">


                <p>The chemical fibre business, the light industry, the electronics industry, the building industry, and various other areas all employ PTA as a key organic raw material. PET is created using more than 90% of the PTA produced worldwide. </p>
                <p> About 75% of PTA produced is used to make polyester fibre in the textile industry, 20% to make bottle-grade polyester mainly used in packing & beverages, and 5% To produce film-grade polyester, which is used to make packaging material, films, and magnetic tapes, and 5% to make bottle-grade polyester, which is mostly used in packaging and drinks.</p>
            </div>
        </div>
        <h1 class="para3">Applications</h1>


        <p class="para2" id="para2">Polyester fibres based on PTA provide easy fabric care, both alone and in blends with natural and other synthetic fibres. Polyester films are used widely in audio video recording tapes, data storage tapes, photographic films, labels, and other sheet materials requiring both dimensional stability and toughness.</p>
                <p class="para2">PTA derivatives, polyethylene terephthalate (PET) has become the primary container resin for applications such as carbonated beverage bottles, while other poly terephthalates provide dimensional stability, good heat resistance, and durability for engineering applications.</p>
                <p class="para2">For powder and water-soluble coatings, PTA is a crucial essential ingredient for low molecular weight saturated polyesters.</p>
    </section>




    <section class="products" id="p2">


        <div class="pro-dec">
            <div class="pro-img">
                <img src="img/productSec.svg" alt="">
                <div class="pro-head">
                    <img src="img/icon6.svg" alt="">
                    <h1>PP Chips</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">


                <p>Polypropylene or polypropylene (PP Chips) is a thermoplastic polymer that is used for a wide variety of applications which includes the manufacturing of plastic parts, different kinds of reusable containers, thermal pants and shirts made for Military, Laboratory Equipment, Loudspeakers, Automotive components and polymer Banknotes.</p>
                <p>Sun Champ Global Traders, We provide one of the best PP Chips in India. Which are generally available as Homopolymer, Impact Co-polymer and Random Co-polymer.</p>
            </div>
        </div>

    </section>


    <section class="products" id="p3">


        <div class="pro-dec">
            <div class="pro-img">
                <img src="img/productSec.svg" alt="">
                <div class="pro-head">
                    <img src="img/icon6.svg" alt="">
                    <h1>HDPE Chips</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">


                <p>High-Density Polyethylene is a petroleum-based polyethylene thermoplastic. HDPE is frequently recycled and transformed into plastic or composite timber. The Type 2 plastic HDPE is frequently used to create packages for detergents, bleaches, shampoos, conditioners, milk, motor oil, and soap.</p>
            </div>
        </div>

    </section>


    <section class="products" id="p4">


        <div class="pro-dec">
            <div class="pro-img">
                <img src="img/productSec.svg" alt="">
                <div class="pro-head">
                    <img src="img/icon6.svg" alt="">
                    <h1>PVC</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">


                <p>Polyvinyl chloride (PVC) is a synthetic thermoplastic material produced by polymerizing vinyl chloride. The qualities are determined by the plasticizer used. Hosepipes, insulation, shoes, and clothing are all examples of flexible shapes. For moulded items, rigid PVC is employed.
Polyvinyl chloride (PVC) is among the most frequently used polymers in the world. Due to its adaptability, PVC is widely utilised in a variety of industrial, technical, and daily applications, including as the construction, transportation, packaging, electrical/electronic, and healthcare industries.
</p>
            </div>
        </div>



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