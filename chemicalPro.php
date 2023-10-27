<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/5f77a54189.js" crossorigin="anonymous"></script>
    <title>Sunchamp</title>
    <link rel="stylesheet" href="style.css">
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




    <section class="products" id="p1">


        <div class="pro-dec">
            <div class="pro-img">
                <img src="img/PTA.svg" alt="" class="pimage" />
                <div class="pro-head">
                    <img src="img/icon6.svg" alt="">
                    <h1>PTA</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">


                <p>PTA is a significant organic raw material that is used globally in the chemical fibre industry, the
                    light industry, the electronics industry, the construction industry, and other fields. PET
                    production is the primary use of over 90 percent of the world's PTA. About 75% of PTA
                    produced is used to make polyester fibre in the textile industry, 20% to make bottle-grade
                    polyester predominantly used in packing and beverages, and 5% to make film-grade polyester,
                    with the associated products used as packaging material, films and magnetic tapes.</p>
            </div>
        </div>
        <h1 class="para3">Applications</h1>


        <p class="para2 " id="para2"><i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i> PTA-based polyester fibres make it easy to care for fabric, both alone and in
            blends with natural and other synthetic fibers. Among PTA derivatives,
            polyethylene terephthalate (PET) has emerged as the predominant material
            for containers like carbonated beverage bottles.
        </p>
        <p class="para2 "><i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i> PTA is an essential ingredient for low molecular weight saturated polyesters usedin
            powder and water-soluble coatings</p>
    </section>




    <section class="products" id="p2">


        <div class="pro-dec">
            <div class="pro-img">
                <img src="img/PP chips.svg" alt="" class="pimage" />
                <div class="pro-head">
                    <img src="img/icon6.svg" alt="">
                    <h1>PP Chips</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">


                <p>Polypropylene, also known as PP or PP Chips, stands as a thermoplastic polymer with a
                    diverse range of applications that incorporate the manufacturing of plastic parts, different
                    kinds of reusable containers, thermal pants and shirts made for the Military, Laboratory
                    Equipment, Loudspeakers, Automotive components and polymer Banknotes.</p>
                <p>The Sun Champ Global Trades offers one of the top PP chips in the world, which are
                    usually available in Homopolymer, Impact Co-polymer, and Random Co-polymer.</p>
            </div>
        </div>

    </section>


    <section class="products" id="p3">


        <div class="pro-dec">
            <div class="pro-img">
                <img src="img/HDPE.svg" alt="" class="pimage" />
                <div class="pro-head">
                    <img src="img/icon6.svg" alt="">
                    <h1>HDPE Chips</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">


                <p>High-density Polyethylene is a thermoplastic polyethylene that is derived from
                    petroleum. HDPE is a common material that is recycled and transformed into plastic or
                    composite timber.
                </p>
                <p>Creating packages for detergents, bleaches, shampoos, conditioners, milk, motor oil, and
                    soap is frequently done with Type 2 plastic HDPE.</p>
            </div>
        </div>

    </section>


    <section class="products lastp" id="p4">


        <div class="pro-dec">
            <div class="pro-img">
                <img src="img/PVC.svg" alt="" class="pimage" />
                <div class="pro-head">
                    <img src="img/icon6.svg" alt="">
                    <h1>PVC</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">


                <p>Polyvinyl chloride (PVC) is a thermoplastic material made by polymerizing vinyl chloride. The
                    quality is determined by the plasticizer used. Hosepipes, insulation, shoes, and clothing are
                    all flexible shapes. For items that are molded, rigid PVC is used.
                </p>
                <p>Polyvinyl chloride (PVC) is a polymer that is widely used around the world. Due to its
                    versatility is used extensively in a wide range of industrial, technical, and everyday
                    applications. Construction, transportation, packaging, electronics, and healthcare are
                    among the sectors that fall under this category.</p>
            </div>
        </div>



    </section>












    <?php
    include "footer.php";
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>