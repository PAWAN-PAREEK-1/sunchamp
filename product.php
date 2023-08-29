<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/5f77a54189.js" crossorigin="anonymous"></script>
    <title>Sunchamp</title>
</head>

<body>

    <?php
    include "header.php";
   ?>


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
    <section class="all-hero">
        <h1> Textile Products</h1>
        <img src="img/clipimg2.svg" alt="">
    </section>
    <section class="ourproduct">
        <h3>Our Product</h3>
        <h1>Let's Experience Exclusive <span>Quality</span></h1>
        <div>
          <div class="our-main">
            <div class="our-main-p">
              <div class="our-main01">
                <img src="img/ourp1.svg" alt="" />
                <h1>Polyster</h1>
              </div>
              <p>
                Sun Champ Global Traders is The best Polyester supplier in
                Surat, India. Our business...
              </p>
              <a href="product.php#p1"> <h4>READ MORE &nbsp;&nbsp;+</h4></a>
              <img src="img/icon3.svg" alt="" id="our-ser-img" />
            </div>
            <div class="our-main-p">
              <div class="our-main01">
                <img src="img/icon4.svg" alt="" />
                <h1>Recycled</h1>
              </div>
              <p>
                We, Sun Champ Global Traders The Top recycled polyester fiber
                manufacturer in India...
              </p>
              <a href="product.php#p2"> <h4>READ MORE &nbsp;&nbsp;+</h4></a>
              <img src="img/icon3.svg" alt="" id="our-ser-img" />
            </div>
            <div class="our-main-p">
              <div class="our-main01">
                <img src="img/icon5.svg" alt="" />
                <h1>Nylon</h1>
              </div>
              <p>
                A synthetic fiber created from petroleum is called nylon. It is
                frequently utilized in...
              </p>
              <a href="product.php#p3"> <h4>READ MORE &nbsp;&nbsp;+</h4></a>
              <img src="img/icon3.svg" alt="" id="our-ser-img" />
            </div>
          </div>
          <div class="our-main our-main2">
            <div class="our-main-p">
              <div class="our-main01">
                <img src="img/icon6.svg" alt="" />
                <h1>Cotton/Yarn</h1>
              </div>
              <p>
                The cotton yarns we provide are made using the most up-to-date
                spinning equipment to...
              </p>
              <a href="product.php#p4"> <h4>READ MORE &nbsp;&nbsp;+</h4></a>
              <img src="img/icon3.svg" alt="" id="our-ser-img" />
            </div>
            <div class="our-main-p">
              <div class="our-main01">
                <img src="img/icon7.svg" alt="" />
                <h1>Fabrics</h1>
              </div>
              <p>
                Fabric producers use advanced technology and skills to create
                high-quality materials that...
              </p>
              <a href="product.php#p5"> <h4>READ MORE &nbsp;&nbsp;+</h4></a>
              <img src="img/icon3.svg" alt="" id="our-ser-img" />
            </div>
            <div class="our-main-p">
              <div class="our-main01">
                <img src="img/icon8.svg" alt="" />
                <h1>Specialities</h1>
              </div>
              <p>
                Welcome to our exceptional textile industry, where the perfect
                harmony of modern technology...
              </p>
              <a href="product.php#p6"> <h4>READ MORE &nbsp;&nbsp;+</h4></a>
              <img src="img/icon3.svg" alt="" id="our-ser-img" />
            </div>
          </div>
        </div>


      </section>




    <section class="products"  id="p1">


        <div class="pro-dec">
            <div class="pro-img">
                <img src="img/productSec.svg" alt="">
                <div class="pro-head">
                    <img src="img/icon9.svg" alt="">
                    <h1>Polyester</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">

                <h1>Service..... <span>that builds Trust</span> </h1>
                <p>Sun Champ Global Traders is The best Polyester supplier in Surat, India. Our business specializes in producing the best polyester chips, an essential raw material for the textile sector.</p>
                <p>No.1 Polyester exporters in India, Can effectively export and distribute our highest quality polyester chips to many nations thanks to our advanced manufacturing facilities, ensuring that our customers get the finest products for their textile production requirements.</p>
                <p>We have established ourselves as a trusted and reliable supplier worldwide because of our commitment to exceptional quality and client satisfaction.</p>
            </div>
        </div>

        <div class="points">
            <div class="point1">
               <a href="./Polyster.php#p1"><h4><img src="img/icon2.svg" alt="">Polyester Chips - Textile Grade</h4></a>
               <a href="./Polyster.php#p2"> <h4><img src="img/icon2.svg" alt="">Polyester Chips - Bottle Grade</h4></a>
               <a href="./Polyster.php#p3"> <h4><img src="img/icon2.svg" alt="">Polyester Chips - Film Grade:</h4></a>
               <a href="./Polyster.php#p10"> <h4><img src="img/icon2.svg" alt="">High Tenacity Yarn</h4></a>
            </div>
            <div class="point1">
               <a href="./Polyster.php#p4"> <h4><img src="img/icon2.svg" alt="">Partially Oriented Yarn (POY)</h4></a>
               <a href="./Polyster.php#p5"> <h4><img src="img/icon2.svg" alt="">Textured Yarns (DTY)</h4></a>
               <a href="./Polyster.php#p6"> <h4><img src="img/icon2.svg" alt="">Filament Yarn - Fully Drawn Yarn (FDY)</h4></a>

            </div>
            <div class="point1">
              <a href="./Polyster.php#p7"> <h4><img src="img/icon2.svg" alt="">Air Covered Yarn (ACY)</h4></a>
              <a href="./Polyster.php#p8"> <h4><img src="img/icon2.svg" alt="">Polyester Staple Fiber (PSF)</h4></a>
              <a href="./Polyster.php#p9"> <h4><img src="img/icon2.svg" alt="">Solid And Hollow Fibers</h4></a>

           </div>

        </div>
    </section>

    <section class="products p1" id="p2">


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

                <h1>Service..... <span>that builds Trust</span> </h1>
                <p>We, Sun Champ Global Traders The Top recycled polyester fiber manufacturer in India, always focus on creating high-quality textile goods from The best Recycled Polyester Fiber and exporting them. </p>
                <p>We like making environmentally friendly products that help create a better future.
                    Our recycled polyester chips are in great demand from customers in several countries because of their long life, flexibility, and positive environmental impacts.
                    </p>
                <p>Our Supplier Mill Partners are also continuously developing and moving towards social and environmental responsibility, hence we are updating our Recycled products on a regular basis. Our recycled products are:--</p>
            </div>
        </div>

        <div class="points">
            <div class="point1">
               <a href="./Recycled.php#p1"><h4><img src="img/icon2.svg" alt="">FSC Certified Bamboo Fibers</h4></a>
               <a href="./Recycled.php#p1"> <h4><img src="img/icon2.svg" alt="">Recycled Polyester Chips for Textile and Film applications <br>The rayon fabrics wholesaler is available.</h4></a>
               <a href="./Recycled.php#p1"> <h4><img src="img/icon2.svg" alt="">Recycled Polyester Filament Yarns (POY, FDY, DTY)</h4></a>
               <a href="./Recycled.php#p1"> <h4><img src="img/icon2.svg" alt="">Recycled Spandex Yarns</h4></a>
            </div>
            <div class="point1">
               <a href="./Recycled.php#p1"> <h4><img src="img/icon2.svg" alt="">Recycled Polyester Fibers</h4></a>
               <a href="./Recycled.php#p1"> <h4><img src="img/icon2.svg" alt="">Recycled ACY, CSY & DCY</h4></a>
               <a href="./Recycled.php#p1"> <h4><img src="img/icon2.svg" alt="">Recycled Polyester Spun Yarns</h4></a>
            </div>

        </div>
    </section>

    <section class="products p1" id="p3">


        <div class="pro-dec">
            <div class="pro-img">
                <img src="img/productSec.svg" alt="">
                <div class="pro-head">
                    <img src="img/icon5.svg" alt="">
                    <h1>Nylon</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">

                <h1>Service..... <span>that builds Trust</span> </h1>
                <p>A synthetic fiber created from petroleum is called nylon. It is frequently utilized in textile items since it is a strong, durable, and water-resistant substance. Numerous uses call for nylon textile goods.</p>
                <p>Nylon is a flexible material that is applied in a variety of items, including carpets, apparel, footwear, toothbrush bristles, airbags, vehicle components, slings, rope, and musical instrument strings. </p>
                <p>The Top Nylon suppliers in the world. We gained a great position as a trusted provider of textiles, yarns, and other products, Recognized globally for quality and excellence.
                    Our Varieties in Nylon are:-
                    </p>
            </div>
        </div>

        <div class="points">
            <div class="point1">
               <a href="./Nylon.php#p1"><h4><img src="img/icon2.svg" alt="">Nylon Chips And Fibers</h4></a>
               <a href="./Nylon.php#p2"> <h4><img src="img/icon2.svg" alt="">Nylon Partially Oriented Yarn (NPOY)</h4></a>
            </div>
            <div class="point1">
               <a href="./Nylon.php#p3"> <h4><img src="img/icon2.svg" alt="">Nylon Draw Textured Yarn (NDTY)</h4></a>
               <a href="./Nylon.php#p4"> <h4><img src="img/icon2.svg" alt="">Nylon Filament Yarn (NFY)</h4></a>
            </div>

        </div>
    </section>


    <section class="products p1" id="p4">


        <div class="pro-dec">
            <div class="pro-img">
                <img src="img/productSec.svg" alt="">
                <div class="pro-head">
                    <img src="img/icon6.svg" alt="">
                    <h1>Cotton/Yarn</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">

                <h1>Service..... <span>that builds Trust</span> </h1>
                <p>The cotton yarns we provide are made using the most up-to-date spinning equipment to satisfy your particular needs for quality. One of the most famous and frequently used types of yarn internationally is Indian cotton yarn. </p>
                <p>As The Best Blended Yarn manufacturers in Surat. We prioritize the careful selection of yarn to perfectly match its desired purpose, Ensuring your best value when you buy from us.</p>
                <p>Sun champ global traders, is a 100% Pure Cotton Yarn manufacturer in India. Our yarns can be used to make a variety of products, including knitted fabric, woven fabric, towels, denim, carpet, socks, and twine.</p>
            </div>
        </div>

        <div class="points">
            <div class="point1">
               <a href="./Cotton.php#p1"><h4><img src="img/icon2.svg" alt="">Raw Cotton</h4></a>
               <a href="./Cotton.php#p2"> <h4><img src="img/icon2.svg" alt="">Cotton Yarn</h4></a>
               <a href="./Cotton.php#p3"> <h4><img src="img/icon2.svg" alt="">Core Spun Yan (CSY)</h4></a>
               <a href="./Cotton.php#p7"> <h4><img src="img/icon2.svg" alt="">Polyester Spun Yarn</h4></a>
            </div>
            <div class="point1">
               <a href="./Cotton.php#p4"> <h4><img src="img/icon2.svg" alt="">Viscose Staple Fiber (VSF)</h4></a>
               <a href="./Cotton.php#p5"> <h4><img src="img/icon2.svg" alt="">Viscose Yarns</h4></a>
               <a href="./Cotton.php#p6"> <h4><img src="img/icon2.svg" alt="">Blended Yarn</h4></a>
            </div>

        </div>
    </section>




    <section class="products p1" id="p5">


        <div class="pro-dec">
            <div class="pro-img">
                <img src="img/productSec.svg" alt="">
                <div class="pro-head">
                    <img src="img/icon7.svg" alt="">
                    <h1>Fabrics</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">

                <h1>Service..... <span>that builds Trust</span> </h1>
                <p>Fabric producers use advanced technology and skills to create high-quality materials that meet the needs of various industries like fashion, home furnishings, automotive, and more.</p>
                <p>We use different materials like cotton, silk, wool, polyester, and more to create fabrics with unique qualities and characteristics. </p>
                <p>Sun Champ global traders, The Best Knitted  Fabric supplier in Surat, and our Fabrics are crucial elements of our daily life since we provide clothes, furniture, bedding, and many other goods with their comfort, style, and practicality.
                </p>
            </div>
        </div>

        <div class="points">
            <div class="point1">
               <a href="./Fabrics.php#p1"><h4><img src="img/icon2.svg" alt="">Leading Knitted and Woven Fabric manufacturer in India</h4></a>
             </div>


        </div>
    </section>



    <section class="products p1" id="p6">

        <div class="pro-dec">
            <div class="pro-img">
                <img src="img/productSec.svg" alt="">
                <div class="pro-head">
                    <img src="img/icon8.svg" alt="">
                    <h1>Specialties</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">

                <h1>Service..... <span>that builds Trust</span> </h1>
                <p>Welcome to our exceptional textile industry, where the perfect harmony of modern technology and time-honored techniques gives rise to captivating fabrics. </p>
                <p> Feast your eyes on mesmerizing patterns and expertly crafted designs that will leave you spellbound by the elegance of our clothing. Enter a textile realm where every piece narrates creativity and ingenuity.</p>
                <p>Our Top Spandex yarn, well-known for its outstanding stretch and recovery capabilities, is widely utilized in a variety of sectors, including athletics, activity, lingerie, and medical textiles, it provides comfort and flexibility to improve performance and fit.</p>
            </div>
        </div>

        <div class="points">
            <div class="point1">
               <a href="./Specialties.php#p1"><h4><img src="img/icon2.svg" alt="">Spandex Yarn</h4></a>
               <a href="./Specialties.php#p2"> <h4><img src="img/icon2.svg" alt="">Bamboo & Lyocell Fibers And Yarns</h4></a>
            </div>
            <div class="point1">
               <a href="./Specialties.php#p3"> <h4><img src="img/icon2.svg" alt="">Linen</h4></a>

        </div>
    </section>









    <?php
    include "testimonial.php";
   ?>
   <?php
    include "footer.php";
   ?>
</body>

</html>