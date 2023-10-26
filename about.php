<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <script src="https://kit.fontawesome.com/5f77a54189.js" crossorigin="anonymous"></script>
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
      <h1>About Us</h1>
      <img src="img/clipimg2.svg" alt="" />
    </section>
    <div class="about-sec">
      <section class="aboutus aboutus02">
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
            We are the Top exporter of Textile and Chemical Products based in Surat, India. Our reach
            extends far and wide, as we have forged strong connections and established a solid reputation in
            international markets across India, China, Bangladesh, Egypt, Thailand, Indonesia, Vietnam,
            Europe, and North America.</p>
          <!-- <h4>
            <img src="img/icon2.svg" alt="" />India has a long-standing tradition of textile manufacturing and is known for its beautiful fabrics.
          </h4>
          <h4>
            <img src="img/icon2.svg" alt="" />From traditional materials like silk, cotton, and wool to more modern options like polyester and nylon, Indian Merchants  offer a diverse range of choices.
          </h4>
          <h4>
            <img src="img/icon2.svg" alt="" />Skilled artisans and Traders  in India take great pride in creating fabrics that are both stunning and of high quality.
          </h4> -->

          <p>Our Sales Network Office is strategically located in key regions, including India, Bangladesh,
            Canada, Thailand, and the UAE, and we maintain associate offices in numerous other nations such
            as China, Egypt, Turkey, and more.</p>
          <p>We're servicing a wide range of customers, from textile producers, weavers, and spinning
            mill operators to traders in the textile industry. We established very good relationships in
            several countries with well-known manufacturers.</p>
        </div>
      </section>
      <div class="about-con">
        <p>A more interconnected world business community has never existed before. There are
          opportunities and risks in all markets, industrial sectors, and legal fields. Thus, achieving
          business goals while reducing risk requires a connected point of view. Our integrated
          Client/Buyer solutions provide seamless advice, underpinned by deep practice and sector
          expertise, as well as first-rate local market knowledge. Business leaders can be confident that
          growth, which is both sustainable and inclusive, will be driven by the insight and foresight of
          Sun Champ Global Trade.
        </p>
        <p>To achieve a win-win situation, our company is honestly eager to work with businesses
          across the world. Our organization's reputation and current financial strength are a result
          of the professionally trained and talented staff, who have a variety of experience in the
          International Market (15+ years) and good knowledge of serving customers globally to
          their satisfaction, building trust factor. Therefore, our tagline is "Service that builds Trust"</p>
        <p>Sun Champ Global Trades is a coalition of professionals based in the host countries of
          Suppliers / Buyers with a strategic approach to International Trade, as best demonstrated by
          our responsiveness to cultural needs and cost efficiency</p>
      </div>

    </div>

    <section class="mission-vision">
      <div class="our-mission">
        <div class="mission">
          <h3>Our Mission</h3>
          <h1>No.1 Polyester <span>yarn trader </span> in India</h1>
          <p>
            The mission of The Sun Champ Global Trades is to create a scenario which is mutually
            beneficial for Supplier and Buyer, Create synergy between them and try to give inputs to
            both Suppliers and Buyers. With regards to latest market scenario, new developments, tax
            regulations and future forecasts.
          </p>
          <p>
            The goal of Sun Champ Global Trades is to establish international business relationships by
            facilitating trade opportunities and creating joint ventures and strategic alliances between
            international businesses from various countries. We intend to save companies valuable time
            and resources by maximizing contact with prospective Sellers, their marketing team, or
            partners.
          </p>
          <p>
            We strive to be a resourceful foreign trade manual for our stakeholders in our collective
            journey of transparent and trustworthy international sale transactions.
          </p>
          <!-- <p>As a superior foreign trade partner we are always a helping hand to all our international partners</p>
          <p>We offer comprehensive guidance and support for transparent and dependable international sales transactions. </p> -->
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
          To be an industry leader in the provision of services for eco-friendly textilepractices and
products.

          </p>
          <p>
          We have focused on placing our office infrastructure and manpower in all countriesof Trade for
uncompromising quality standardsin Service.
          </p>
          <p>
          Act as a key catalyst in the course of a Trustworthy relationship between Buyerand Seller.

          </p>
          <p>Trust is derived as a core value imperative to all aspects of Sun Champ Global Trades.</p>
          <P>To promote a culture that values quality by offering the most affordable option to all types of
customers, including industries, in order to relieve financial strain on our customers while
maintaining A++ quality.
</P>
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