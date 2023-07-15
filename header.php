<header>
    <div class="header01">
        <div class="header02">
            <h3>Welcome to Sun Champ Global Trades !</h3>
        </div>
        <div class="header03">
            <h3 style="padding-top:.19rem ;">Follow Us On:</h3>
            <a href=""> <img src="img/facebook.svg" alt=""></a>
            <a href=""><img src="img/twitter.svg" alt=""></a>
            <a href=""><img src="img/link.svg" alt=""></a>
            <a href="">
                <img src="img/insta.svg" alt=""></a>
        </div>

    </div>
    <nav>
        <div class="logo">
            <img src="img/logo.svg" alt="">
        </div>
        <div class="manus">
            <ul>
                <li><a href="index.php" <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"'; ?>>HOME</a></li>
                <li><a href="about.php" <?php if (basename($_SERVER['PHP_SELF']) == 'about.php') echo 'class="active"'; ?>>ABOUT US</a></li>
                <li><a href="product.php" <?php if (basename($_SERVER['PHP_SELF']) == 'product.php') echo 'class="active"'; ?>>TEXTILE PRODUCTS</a></li>
                <li><a href="blog.php" <?php if (basename($_SERVER['PHP_SELF']) == 'blog.php') echo 'class="active"'; ?>>NEWS / BLOGS</a></li>

            </ul>

        </div>

        <div class="contactbtn">
            <a id="contactbtn01" href="#contactus">Contact Us </a>
            <img src="img/skip.svg" alt="" id="contactbtnimg">
        </div>



    </nav>
</header>