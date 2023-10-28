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
            Sun Champ Global Trades is The best Polyester exporter in
            Surat, India. Our business...
          </p>
          <a href="product.php#p1">
            <h4>READ MORE &nbsp;&nbsp;+</h4>
          </a>
          <img src="img/icon3.svg" alt="" id="our-ser-img" />
        </div>
        <div class="our-main-p">
          <div class="our-main01">
            <img src="img/icon4.svg" alt="" />
            <h1>Recycled</h1>
          </div>
          <p>
            We, Sun Champ Global Trades The Top recycled polyester fiber
            Trades in India...
          </p>
          <a href="product.php#p2">
            <h4>READ MORE &nbsp;&nbsp;+</h4>
          </a>
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
          <a href="product.php#p3">
            <h4>READ MORE &nbsp;&nbsp;+</h4>
          </a>
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
          <a href="product.php#p4">
            <h4>READ MORE &nbsp;&nbsp;+</h4>
          </a>
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
          <a href="product.php#p5">
            <h4>READ MORE &nbsp;&nbsp;+</h4>
          </a>
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
          <a href="product.php#p6">
            <h4>READ MORE &nbsp;&nbsp;+</h4>
          </a>
          <img src="img/icon3.svg" alt="" id="our-ser-img" />
        </div>
      </div>
    </div>


  </section>




  <section class="products" id="p1">


    <div class="pro-dec">
      <div class="pro-img">
        <img src="img/acy.webp" alt="" class="pimage" />
        <div class="pro-head">
          <img src="img/icon9.svg" alt="">
          <h1>Polyester</h1>
          <img src="img/icon3.svg" alt="" id="icon3">
        </div>

      </div>
      <div class="mission mis">

        <h1>Service..... <span>that builds Trust</span> </h1>
        <p>Sun Champ Global Trades is the best polyester exporter. Our company is specialized in
          producing high quality polyester chips, a major raw material for the textile industry.</p>
        <p>The top polyester exporters worldwide, Our advanced production facilities allow for
          effective export and distribution of our highest quality polyester chips to a large number of
          countries, so that textile customers are guaranteed the best products possible in order to
          produce their textiles.</p>
        <p>Our dedication to the highest quality and client satisfaction has made us one of the trusted
exporter in the world.</p>
      </div>
    </div>

    <div class="points">
      <div class="point1">
        <a href="./Polyster.php#p1">
          <h4><img src="img/icon2.svg" alt="">Polyester Chips - Textile Grade</h4>
        </a>
        <a href="./Polyster.php#p2">
          <h4><img src="img/icon2.svg" alt="">Polyester Chips - Bottle Grade</h4>
        </a>
        <a href="./Polyster.php#p3">
          <h4><img src="img/icon2.svg" alt="">Polyester Chips - Film Grade:</h4>
        </a>
        <a href="./Polyster.php#p10">
          <h4><img src="img/icon2.svg" alt="">High Tenacity Yarn</h4>
        </a>
      </div>
      <div class="point1">
        <a href="./Polyster.php#p4">
          <h4><img src="img/icon2.svg" alt="">Partially Oriented Yarn (POY)</h4>
        </a>
        <a href="./Polyster.php#p5">
          <h4><img src="img/icon2.svg" alt="">Textured Yarns (DTY)</h4>
        </a>
        <a href="./Polyster.php#p6">
          <h4><img src="img/icon2.svg" alt="">Filament Yarn - Fully Drawn Yarn (FDY)</h4>
        </a>

      </div>
      <div class="point1">
        <a href="./Polyster.php#p7">
          <h4><img src="img/icon2.svg" alt="">Air Covered Yarn (ACY)</h4>
        </a>
        <a href="./Polyster.php#p8">
          <h4><img src="img/icon2.svg" alt="">Polyester Staple Fiber (PSF)</h4>
        </a>
        <a href="./Polyster.php#p9">
          <h4><img src="img/icon2.svg" alt="">Solid And Hollow Fibers</h4>
        </a>

      </div>

    </div>
  </section>

  <section class="products p1" id="p2">


    <div class="pro-dec">
      <div class="pro-img">
        <img src="img/recyled.jpg" alt="" class="pimage" />
        <div class="pro-head">
          <img src="img/icon4.svg" alt="">
          <h1>Recycled</h1>
          <img src="img/icon3.svg" alt="" id="icon3">
        </div>

      </div>
      <div class="mission mis">

        <h1>Service..... <span>that builds Trust</span> </h1>
        <p> We at Sun Champ Global Trades (Sun Champ), The Top recycled polyester fiber importer, always focus on creating
          high-quality textile goods from the best Recycled Polyester Fiber and exporting them. We value the
          creation of environmentally friendly products that contribute to a better future. </p>
        <p> Due to their long life, reliability and positive environmental effects, our recycled polyester chips are
          increasingly sought after by customers in a number of countries
        </p>
        <p>Our  Mill Partners are also continuously developing and moving towards social and
          environmental responsibility, hence we are updating our Recycled products on a regular basis.</p>
      </div>
    </div>

    <div class="points">
      <div class="point1">
        <a href="./Recycled.php#p1">
          <h4><img src="img/icon2.svg" alt="">FSC Certified Bamboo Fibers</h4>
        </a>
        <a href="./Recycled.php#p1">
          <h4><img src="img/icon2.svg" alt="">Recycled Polyester Chips for Textile and Film applications</h4>
        </a>
        <a href="./Recycled.php#p1">
          <h4><img src="img/icon2.svg" alt="">Recycled Polyester Filament Yarns (POY, FDY, DTY)</h4>
        </a>
        <a href="./Recycled.php#p1">
          <h4><img src="img/icon2.svg" alt="">Recycled Spandex Yarns</h4>
        </a>
      </div>
      <div class="point1">
        <a href="./Recycled.php#p1">
          <h4><img src="img/icon2.svg" alt="">Recycled Polyester Fibers</h4>
        </a>
        <a href="./Recycled.php#p1">
          <h4><img src="img/icon2.svg" alt="">Recycled ACY, CSY & DCY</h4>
        </a>
        <a href="./Recycled.php#p1">
          <h4><img src="img/icon2.svg" alt="">Recycled Polyester Spun Yarns</h4>
        </a>
      </div>

    </div>
  </section>

  <section class="products p1" id="p3">


    <div class="pro-dec">
      <div class="pro-img">
        <img src="img/NFY 1.jpg" alt="" class="pimage" />
        <div class="pro-head">
          <img src="img/icon5.svg" alt="">
          <h1>Nylon</h1>
          <img src="img/icon3.svg" alt="" id="icon3">
        </div>

      </div>
      <div class="mission mis">

        <h1>Service..... <span>that builds Trust</span> </h1>
        <p>Nylon, a synthetic material derived from Caprolactum, is a used in textile and industrial products Nylon
          has better strength, durability, and resistance to water. </p>
        <p>Usage of Nylon is a very varied that can be used in manufacture of carpet, clothing, footwear, toothbrushes,
          airbags, car components, slings, ropes and strings for musical instruments, industrial fabrics, etc </p>
        <p>The following varieties of Nylon are available:
        </p>
      </div>
    </div>

    <div class="points">
      <div class="point1">
        <a href="./Nylon.php#p1">
          <h4><img src="img/icon2.svg" alt="">Nylon Chips And Fibers</h4>
        </a>
        <a href="./Nylon.php#p2">
          <h4><img src="img/icon2.svg" alt="">Nylon Partially Oriented Yarn (NPOY)</h4>
        </a>
      </div>
      <div class="point1">
        <a href="./Nylon.php#p3">
          <h4><img src="img/icon2.svg" alt="">Nylon Draw Textured Yarn (NDTY)</h4>
        </a>
        <a href="./Nylon.php#p4">
          <h4><img src="img/icon2.svg" alt="">Nylon Filament Yarn (NFY)</h4>
        </a>
      </div>

    </div>
  </section>


  <section class="products p1" id="p4">


    <div class="pro-dec">
      <div class="pro-img">
        <img src="img/spun yarn1.png" alt="" class="pimage" />
        <div class="pro-head">
          <img src="img/icon6.svg" alt="">
          <h1>Cotton/Yarn</h1>
          <img src="img/icon3.svg" alt="" id="icon3">
        </div>

      </div>
      <div class="mission mis">

        <h1>Service..... <span>that builds Trust</span> </h1>
        <p>In order to meet your specific quality needs, the cotton yarns which we offer use the most recent and
          efficient spinning machines. </p>
        <p>Indian cotton yarn is one of the most famous and widely used types of yarn in the world. In the
          world's best Blended Yarn importer.</p>
        <p>To ensure that you receive the best price on your order from us, we carefully select yarns which
          are perfectly matched for their intended purpose. </p>
        <p>Sun Champ Global Trade is a global importer of 100% pure cotton yarn. A variety of products, including
          knitted fabrics, woven fabrics, towels, denims and carpets, can be made with our yarns.
        </p>
      </div>
    </div>

    <div class="points">
      <div class="point1">
        <a href="./Cotton.php#p1">
          <h4><img src="img/icon2.svg" alt="">Raw Cotton</h4>
        </a>
        <a href="./Cotton.php#p2">
          <h4><img src="img/icon2.svg" alt="">Cotton Yarn</h4>
        </a>
        <a href="./Cotton.php#p3">
          <h4><img src="img/icon2.svg" alt="">Core Spun Yan (CSY)</h4>
        </a>
        <a href="./Cotton.php#p7">
          <h4><img src="img/icon2.svg" alt="">Polyester Spun Yarn</h4>
        </a>
      </div>
      <div class="point1">
        <a href="./Cotton.php#p4">
          <h4><img src="img/icon2.svg" alt="">Viscose Staple Fiber (VSF)</h4>
        </a>
        <a href="./Cotton.php#p5">
          <h4><img src="img/icon2.svg" alt="">Viscose Yarns</h4>
        </a>
        <a href="./Cotton.php#p6">
          <h4><img src="img/icon2.svg" alt="">Blended Yarn</h4>
        </a>
      </div>

    </div>
  </section>




  <section class="products p1" id="p5">


    <div class="pro-dec">
      <div class="pro-img">
        <img src="img/Fabrics2.jpg" alt="" class="pimage" />
        <div class="pro-head">
          <img src="img/icon7.svg" alt="">
          <h1>Fabrics</h1>
          <img src="img/icon3.svg" alt="" id="icon3">
        </div>

      </div>
      <div class="mission mis">

        <h1>Service..... <span>that builds Trust</span> </h1>
        <p>For the creation of premium quality materials that meet the requirements of different industry sectors,
          including fashion, home furnishing, automotive and more, fabric producers make use of modern
          technology and skills.</p>
        <p>The world's leading importer of knitted and woven fabrics. </p>
        <p>For fabric with special characteristics and properties we use a variety of materials, for example cotton, silk,
          wool, polyester as well as more.
        </p>
      </div>
    </div>

    <div class="points">
      <div class="point1">
        <a href="./Fabrics.php#p1">
          <h4><img src="img/icon2.svg" alt="">Fabrics</h4>
        </a>
      </div>


    </div>
  </section>



  <section class="products p1 lastp" id="p6">

    <div class="pro-dec">
      <div class="pro-img">
        <img src="img/LINEN.png" alt="" class="pimage" />
        <div class="pro-head">
          <img src="img/icon8.svg" alt="">
          <h1>Specialties</h1>
          <img src="img/icon3.svg" alt="" id="icon3">
        </div>

      </div>
      <div class="mission mis">

        <h1>The Best textile materials <span>importer and exporter</span> in the world</h1>
        <p>Welcome to our textile industry, where attractive Bamboo & Lyocell fiber yarns, Spandex & Lyocell fibres,
          and Linens are produced in perfect harmony with the latest technology and time innovate techniques. You
          will be dazzled by the intricate patterns and ingenious designs, which leave you in a state of complete
          astonishment with our elegant clothes.
        </p>
        <p>Enter a world of textiles, where creativity and ingenuity can be seen in every piece. </p>
        <p>Our Top Spandex yarn, well-known for its outstanding stretch and recovery capabilities, is widely
utilized in a variety of sectors, including lingerie, and medicals, it provides comfort and flexibility
to improve performance and fit.</p>
         </div>
    </div>

    <div class="points">
      <div class="point1">
        <a href="./Specialties.php#p1">
          <h4><img src="img/icon2.svg" alt="">Spandex Yarn</h4>
        </a>
        <a href="./Specialties.php#p2">
          <h4><img src="img/icon2.svg" alt="">Bamboo & Lyocell Fibers And Yarns</h4>
        </a>
      </div>
      <div class="point1">
        <a href="./Specialties.php#p3">
          <h4><img src="img/icon2.svg" alt="">Linen</h4>
        </a>

      </div>
  </section>










  <?php
  include "footer.php";
  ?>
</body>

</html>