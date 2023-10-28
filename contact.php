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
          <form action="https://formspree.io/f/mknlyyld" method="POST" >
  <div class="nameemail">
    <input type="text" placeholder="Name" name="name" required />
    <input type="email" placeholder="Email" name="email" required />
  </div>
  <div class="nameemail">
    <input type="tel" placeholder="Phone Number" name="phone" required />
    <input type="text" placeholder="Subject" name ="subject" required />
  </div>
  <textarea placeholder="Your Message" name="message" required></textarea>
  <button type="submit">Submit</button>
</form>
<script>window.onbeforeunload = () => {
  for(const form of document.getElementsByTagName('form')) {
    form.reset();
  }
}</script>



        </div>
      </section>
      </div>
      <?php
    include "footer.php";
   ?>


</body>
</html>

