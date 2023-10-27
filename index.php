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
    <title>Sunchamp</title>
  </head>

  <body>
    <?php
    include "header.php";
   ?>

    <section class="main">
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

      <section class="hero">
        <div class="main-container">
          <img src="img/clipimg.svg" alt="" />
          <h3>We help businesses</h3>
          <h1>Grow and Innovate</h1>
          <p>Empowered by Sun Champ Global Trades' insights and foresight.</p>
          <p>
            Our business partners will discover our honesty as we help them achieve their desired results.
          </p>
          <div class="contactbtn indexhero">
            <a id="contactbtn01" href="contact.php">Contact Us </a>
            <img src="img/skip.svg" alt="" id="contactbtnimg" />
          </div>
        </div>
      </section>

      <section class="specelity">
        <div class="spheading">
          <h1>From <span>every angle</span> , we're giving the best</h1>
        </div>

        <div class="specelity-testi">
          <div class="spbox">
            <div class="spbox1">
              <img src="img/sp1.svg" alt="" />
              <h1>01</h1>
            </div>
            <hr />
            <p>
              We Create a world class Customer experience. With higher productivity levels, the focus is to achieve high growth consistently.

            </p>
            <img src="img/spdesign.svg" alt="" id="spdesign" />
          </div>
          <div class="spbox">
            <div class="spbox1">
              <img src="img/sp2.svg" alt="" />
              <h1>02</h1>
            </div>
            <hr />
            <p>
              We are one of the most admired and trusted for services rendered in bring
              Buyer .
            </p>
            <img src="img/spdesign.svg" alt="" id="spdesign" />
          </div>
          <div class="spbox">
            <div class="spbox1">
              <img src="img/sp3.svg" alt="" />
              <h1>03</h1>
            </div>
            <hr />
            <p>
              Being environmentally consious, we actively push Recycled and Green Yarns, specifically at
              the high end to allow continuous upgradation and innovation.
            </p>
            <img src="img/spdesign.svg" alt="" id="spdesign" />
          </div>
        </div>
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
            Your Trust, <span>Our Priority</span> <br>  Unwavering Service That Speaks for Itself
          </h1>
          <div class="aboutus0201">
            <img src="img/icon1.svg" alt="" />
            <p id="aboutP">
              We’re In This Business Since 2008 And We Provide The Best Services
            </p>
          </div>
          <p>
            Sun Champ Global Trades, We are a leading exporter of Textile and chemical Products from Surat, India. We have established a wide range of contacts and reputations in India, China, Bangladesh, Egypt, Thailand, Indonesia, Vietnam, Europe, and North America's international market.
          </p>
          <h4>
            <img src="img/icon2.svg" alt="" />India has a long-standing tradition of textile manufacturing and is known for its beautiful fabrics.
          </h4>
          <h4>
            <img src="img/icon2.svg" alt="" />From traditional materials like silk, cotton, and wool to more modern options like polyester and nylon, We  offer a diverse range of choices.
          </h4>
          <h4>
            <img src="img/icon2.svg" alt="" />Skilled artisans  in India take great pride in creating fabrics that are both stunning and of high quality.
          </h4>
        </div>
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
                Sun Champ Global Trades is The best Polyester Exporter in
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
                We, Sun Champ Global Trades The Top recycled polyester fiber
                Trades in India...
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

        <div class="ourindex">
          <div class="contactbtn" id="ourindex">
            <a id="contactbtn01" href="product.php">View All</a>
            <img src="img/skip.svg" alt="" id="contactbtnimg" />
          </div>
        </div>
      </section>

      <section class="ourproduct wp">
        <h3>working process</h3>
        <h1><span>FABIFLEX</span> WORKING PROCESS!</h1>
        <div class="wp-main">
          <div class="wp-box">
            <hr />

            <img src="img/wp1.svg" alt="" />
            <h2>Production of Fabric</h2>
            <p>Most fabrics are presently produced by interlacing.</p>
          </div>
          <div class="wp-box">
            <hr id="r1" />
            <hr id="l1" />

            <img src="img/wp2.svg" alt="" />
            <h2>Exportation Globally</h2>
            <p>
              Global trade goods and services exchanged worldwide.</p>
          </div>
          <div class="wp-box">
            <hr id="r2" />
            <hr id="l2" />

            <img src="img/wp3.svg" alt="" />
            <h2>Digital Shop Available</h2>
            <p>It manages company possessions and online transactions</p>
          </div>
          <div class="wp-box">
            <hr id="l3" />

            <img src="img/wp4.svg" alt="" />
            <h2>Great Client Support</h2>
            <p>Customer service can help in making cost-effective</p>
          </div>
        </div>
      </section>



      <!-- <section class="news-blogs">
        <div class="news">
          <div class="newsheading">
            <h4>Latest News & Blog</h4>
            <h2><span>We believe</span> in counting numbers</h2>
          </div>
          <div class="contactbtn" id="newsbtn">
            <a id="contactbtn01" href="blog.php">View All</a>
            <img src="img/skip.svg" alt="" id="contactbtnimg" />
          </div>
        </div>

        <div class="blogs">
          <div class="blog">
            <a href="">
              <div class="recent-post">
                <img src="img/blog1.svg" alt="Post Image" />
                <div class="post-content news-detail">
                  <p>July 10, 2023</p>
                  <p>Textilegence Magazine & Digital Platform</p>
                </div>
              </div>
            </a>
            <hr />
            <a href="">
              <div class="recent-post">
                <img src="img/blog2.svg" alt="Post Image" />
                <div class="post-content news-detail">
                  <p>July 9, 2023</p>
                  <p>Nulla vitae elit libero, a pharetra augue.</p>
                </div>
              </div>
            </a>
            <hr />
            <a href="">
              <div class="recent-post">
                <img src="img/blog3.svg " alt="Post Image" />
                <div class="post-content news-detail">
                  <p>July 10, 2023</p>
                  <p>Textilegence Magazine & Digital Platform</p>
                </div>
              </div>
            </a>
          </div>

          <a href="">
            <div class="news-box">
              <div class="h11">
                <h3>Traditional</h3>
              </div>

              <p>Textilegence Magazine & Digital Platform</p>

              <div class="news-time">
                <h5>By: John Doe</h5>
                <h5>9 June, 2022</h5>
              </div>
            </div>
          </a>
          <a href="">
            <div class="news-box newsbox2">
              <div class="h11">
                <h3 id="second-head">Industry</h3>
              </div>
              <p>Textilegence Magazine & Digital Platform</p>

              <div class="news-time">
                <h5>By: John Doe</h5>
                <h5>9 June, 2022</h5>
              </div>
            </div>
          </a>
        </div>
      </section> -->

      <section class="contact-index" id="contactus">
        <div class="box">
          <img src="img/contact.svg" alt="" />
        </div>
        <div class="box box22">
          <h2>Send Your Message Us</h2>
          <p>
            Feel free to reach out to us by sending a message through our website's contact form. -  we're here to listen
          </p>
          <form action="https://formspree.io/f/xeqbojpn" method="POST">
            <div class="nameemail">
              <input type="text" placeholder="Name" name="name" required />
              <input type="email" placeholder="Email" name="email" required />
            </div>
            <div class="nameemail">
              <input
                type="tel"
                placeholder="Phone Number"
                name="phone"
                required
              />
              <input
                type="text"
                placeholder="Subject"
                name="subject"
                required
              />
            </div>
            <textarea
              placeholder="Your Message"
              name="Message"
              required
            ></textarea>
            <button type="submit" name="submit">Submit</button>
          </form>
        </div>
      </section>
    </section>

    <?php
    include "footer.php";

   ?>

    <script>
      function smoothScroll(event) {
        event.preventDefault();

        const target = document.querySelector(
          event.target.getAttribute("href")
        );
        const topOffset = target.offsetTop;
        const duration = 10000; // Duration in milliseconds (0.3 seconds)
        const startTime = performance.now();
        const scrollAnimation = setInterval(function () {
          const currentTime = performance.now();
          const timeElapsed = currentTime - startTime;
          const progress = timeElapsed / duration;
          const distance = topOffset * progress;

          window.scrollTo(0, distance);

          if (timeElapsed >= duration) {
            clearInterval(scrollAnimation);
            window.scrollTo(0, topOffset);
          }
        }, 16); // Update every 16 milliseconds (approx. 60 FPS)
      }
    </script>
    <script src="script.js"></script>
  </body>
</html>
