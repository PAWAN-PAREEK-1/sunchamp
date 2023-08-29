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
        <h1>Chemical Products</h1>
        <img src="img/clipimg2.svg" alt="">
    </section>

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




    <section class="products lastp" id="p1">


        <div class="pro-dec">
            <div class="pro-img">
                <img src="img/productSec.svg" alt="">
                <div class="pro-head">
                    <img src="img/icon9.svg" alt="">
                    <h1>Chemical Products</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">

                <h1>Service..... <span>that builds Trust</span> </h1>
                <p>At Sun Champ Global Traders, We offer a wide range of the best chemical products, including PET, and PPT Chips, which are examples of multiple petrochemicals and We are manufacturing the best quality chemical products in India.</p>
                <p>Our firm actively works in the quick supply and trade of chemical products, and preserving strong connections with our clients and suppliers continues to be the top priority for us.</p>
                <p>Today's world's contribution to boosting productivity, building sustainability, and raising our quality of life is one of the initial pillars of the advances that we observe.</p>
            </div>
        </div>

        <div class="points">
            <div class="point1">
                <a href="./chemicalPro.php#p1">
                    <h4><img src="img/icon2.svg" alt="">PTA</h4>
                </a>
                <a href="./chemicalPro.php#p2">
                    <h4><img src="img/icon2.svg" alt="">PP Chips</h4>
                </a>

            </div>
            <div class="point1">
                <a href="./chemicalPro.php#p3">
                    <h4><img src="img/icon2.svg" alt="">HDPE Chips</h4>
                </a>
                <a href="./chemicalPro.php#p4">
                    <h4><img src="img/icon2.svg" alt="">PVC</h4>
                </a>

            </div>

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