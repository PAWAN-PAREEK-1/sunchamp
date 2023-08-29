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
            We are a Leading supplier of Textile & Chemical Products in India,
            with a strong presence in global markets including India, China,
            Bangladesh, Egypt, Thailand, Indonesia, Vietnam, Europe, and North
            America.
          </p>
          <h4>
            <img src="img/icon2.svg" alt="" />Our name and strength arise from
            our skilled staff's 15+ years of global market expertise, ensuring
            customer satisfaction and Trust through our tagline, 'Service...
            that builds Trust'.
          </h4>
          <h4>
            <img src="img/icon2.svg" alt="" />Our Professionals are
            strategically navigating international trade in supplier/buyer host
            countries, adeptly responsive to cultural nuances and cost-effective
            practices.
          </h4>
          <h4>
            <img src="img/icon2.svg" alt="" />Built upon India's strong textile
            tradition, we proudly serve a diverse clientele, Texturizers,
            Weavers, Spinning Mills, Traders, and textile-related players.
          </h4>
        </div>
      </section>

      <section class="mission-vision">
        <div class="our-mission">
          <div class="mission">
            <h3>Our Mission</h3>
            <h1>No.1 Polyester <span>yarn manufacturer</span> in India</h1>
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
              We aim to be The best Nylon chips manufacturer in India providing
              services for sustainable textile products and practices. We have
              offices and a qualified workforce in all trading nations to
              guarantee first-rate service quality.
            </p>
            <p>
              As the No.1 Polyester Suppliers in India, We play a crucial role
              in building trust between buyers and sellers, acting as a bridge
              for trustworthy relationships.
            </p>
            <p>
              Everything we do at Sun Champ Global Trades is based on trust. It
              is a value that directs us in all aspects of our company.
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
    </section>
  </body>
</html>
