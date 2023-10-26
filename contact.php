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
    <section class="all-hero">
      <h1>Contact Us</h1>
      <img src="img/clipimg2.svg" alt="" />
    </section>

   <div class="contact-page">

<section class="contact-index " id="contactus" >
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
      </div>
      <?php
    include "footer.php";
   ?>

</body>
</html>

