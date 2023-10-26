<header>
    <div class="header01">
        <div class="header02">
            <h3>Welcome to Sun Champ Global Trades </h3>
        </div>
        <div class="header03">
            <h3 style="padding-top:.19rem ;">Follow Us On:</h3>
            <!-- <a href=""> <img src="img/facebook.svg" alt=""></a>
            <a href=""><img src="img/twitter.svg" alt=""></a> -->
            <a href="https://in.linkedin.com/company/sun-champ-global-trades"><img src="img/link.svg" alt=""></a>
            <!-- <a href="">
                <img src="img/insta.svg" alt=""></a> -->
        </div>

    </div>
    <nav>
        <div class="logo">
          <a href="index.php">  <img src="img/logo.svg" alt=""></a>
        </div>


        <div class="manus active1" >
            <ul>
                <li><a href="index.php" <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"'; ?>>HOME</a></li>
                <li><a href="about.php" <?php if (basename($_SERVER['PHP_SELF']) == 'about.php') echo 'class="active"'; ?>>ABOUT US</a></li>
                <li><a href="product.php" <?php if (basename($_SERVER['PHP_SELF']) == 'product.php') echo 'class="active"'; ?>>TEXTILE PRODUCTS</a></li>
                <li><a href="chemical.php" <?php if (basename($_SERVER['PHP_SELF']) == 'chemical.php') echo 'class="active"'; ?>> CHEMICAL PRODUCTS</a></li>
                <li><a href="blog.php" <?php if (basename($_SERVER['PHP_SELF']) == 'blog.php') echo 'class="active"'; ?>>NEWS / BLOGS</a></li>

            </ul>

        </div>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>







        <div class="contactbtn headcontact">
            <a id="contactbtn01" href="contact.php">Contact Us </a>
            <img src="img/skip.svg" alt="" id="contactbtnimg">
        </div>

        <script>
  document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.querySelector(".hamburger");
    const manus = document.querySelector(".manus");
    const contactBtn = document.querySelector(".contactbtn");

    // Function to close the menu
    function closeMenu() {
      hamburger.classList.remove("active");
      manus.classList.remove("active");
      contactBtn.classList.remove("active");
      window.removeEventListener("scroll", closeMenu);
    }

    hamburger.addEventListener("click", function () {
      hamburger.classList.toggle("active");
      manus.classList.toggle("active");
      contactBtn.classList.toggle("active");

      if (manus.classList.contains("active")) {
        // If the menu is now active, add a scroll event listener to the window to close it when scrolled
        window.addEventListener("scroll", closeMenu);
      } else {
        // If the menu is not active, remove the scroll event listener from the window
        window.removeEventListener("scroll", closeMenu);
      }
    });

    manus.addEventListener("click", function () {
      // Scroll to the top of the page
      window.scrollTo(0, 0);
      // Deactivate the menu
      closeMenu();
    });
  });
</script>


    </nav>
</header>