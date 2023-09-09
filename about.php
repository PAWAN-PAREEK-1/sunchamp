<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/5f77a54189.js"
      crossorigin="anonymous"
    ></script>
    <title>Document</title>
  </head>

  <body>
    <?php
    include "header.php";
    ?>
    <section class="about-main">
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
        <h1>About Us</h1>
        <img src="img/clipimg2.svg" alt="" />
      </section>

      <section class="aboutus">
        <div class="aboutus01">
          <img src="img/aboutusimg.svg" alt="" />
          <div class="aboutus0101">
            <h1><span>15</span>Year Of Experience</h1>
          </div>
        </div>
        <div class="aboutus02">
          <h3>About Us</h3>
          <h1>
            Let’s <span>Build Something </span> Build Something Creative
            together
          </h1>
          <div class="aboutus0201">
            <img src="img/icon1.svg" alt="" />
            <p id="aboutP">
              We’re In This Business Since 2008 And We Provide The Best Services
            </p>
          </div>
          <p>
            Sun Champ Global Traders, The best Polyester Trader in India, We are a leading exporter of Textile and chemical Products from Surat, India. We have established a wide range of contacts and reputations in India, China, Bangladesh, Egypt, Thailand, Indonesia, Vietnam, Europe, and North America's international market.
          </p>
          <h4>
            <img src="img/icon2.svg" alt="" />India has a long-standing tradition of textile manufacturing and is known for its beautiful fabrics.
          </h4>
          <h4>
            <img src="img/icon2.svg" alt="" />From traditional materials like silk, cotton, and wool to more modern options like polyester and nylon, Indian Merchants  offer a diverse range of choices.
          </h4>
          <h4>
            <img src="img/icon2.svg" alt="" />Skilled artisans and Traders  in India take great pride in creating fabrics that are both stunning and of high quality.
          </h4>
        </div>
      </section>

      <section class="mission-vision">
        <div class="our-mission">
          <div class="mission">
            <h3>Our Mission</h3>
            <h1>No.1 Polyester <span>yarn trader  </span> in India</h1>
            <p>
              Our goal at Sun Champ Global Trades is to promote economic growth
              by improving market competitiveness, enabling trade and
              investment, and supporting ethical business follows while
              providing respect to trade regulations and agreements.
            </p>
            <p>
              By actively promoting trade possibilities, encouraging
              collaborative joint ventures, and creating strategic alliances
              between companies from other nations, our primary goal is to forge
              strong international commercial partnerships.
            </p>
            <p>
              By providing clients to potential customers or partners, we want
              to increase productivity while saving time and money.
            </p>
            <p>As a superior foreign trade partner we are always a helping hand to all our international partners</p>
            <p>We offer comprehensive guidance and support for transparent and dependable international sales transactions. </p>
          </div>
          <div class="clipimg">
            <div class="img1">
              <img src="img/clip1.svg" alt="" />
            </div>
            <div class="img2">
              <img src="img/clip3.svg" alt="" />
            </div>
          </div>
        </div>
        <div class="our-mission vision vision-mission">
          <div class="clipimg">
            <div class="img1">
              <img src="img/clip1.svg" alt="" />
            </div>
            <div class="img2">
              <img src="img/clip3.svg" alt="" />
            </div>
          </div>
          <div class="mission">
            <h3>Our Vision</h3>
            <h1>
                We've focused on <span>improving </span> our office infrastructure.
            </h1>
            <p>
              We aim to be The best Nylon chips trader  in India providing services for sustainable textile products and practices.
            </p>
            <p>
              We have offices and a qualified workforce in all trading nations to guarantee first-rate service quality.
            </p>
            <p>
              As the No.1 Polyester Suppliers in India, We play a crucial role in building trust between buyers and sellers, acting as a bridge for trustworthy relationships.
            </p>
            <P>Everything we do at Sun Champ Global Trades is based on trust. It is a value that directs us in all aspects of our company.</P>
          </div>
        </div>
      </section>

      <?php
        include "testimonial.php";



        ?>

      <?php
        include "footer.php";



        ?>
    </section>
  </body>
</html>
