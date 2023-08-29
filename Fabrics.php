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
        <h1>Fabrics</h1>
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
                    <img src="img/icon7.svg" alt="">
                    <h1>Fabrics</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">


                <p>Fabrics are created using yarn, which is created using fibres. Fibres can be synthetic or natural. Natural fibres include things like cotton, wool, silk, and jute, while synthetic fibres like nylon and polyester are examples. Plants provide fibres like jute and cotton.</p>
                <p>
                    Fibre, the smallest part of a fabric, is usually spun into yarn, which is then used to create fabrics. The very thin, hair-like structures are known as fibres. Fibres can come from natural, synthetic, or a combination of sources.
                </p>
                <p>There are knit and woven fabrics. The majority of fabrics used in apparel, socks, and clothing are knit. Upholstery, denim, and clothing are woven from woven materials.</p>
            </div>
        </div>
        <table class="table">
            <thead class="gray">
                <tr>
                    <th id="col-1" scope="col">Lustre</th>
                    <th id="col-2" scope="col">End Use</th>
                    <th id="col-3" scope="col">Supplier Origin</th>
                </tr>
            </thead>
            <tbody id="table-body1">
            </tbody>
        </table>

        <script>
            const data1 = [{
                    lustre: "All possible colors and mix of yarns",
                    endUse: "Knitting/Weaving",
                    supplierOrigin: "China, India, Chinese Taipei"
                },
                // Add more data entries here if needed
            ];

            const tableBody1 = document.getElementById("table-body1");

            data1.forEach(item => {
                const row = document.createElement("tr");

                const lustreCell = document.createElement("td");
                lustreCell.textContent = item.lustre;
                row.appendChild(lustreCell);

                const endUseCell = document.createElement("td");
                endUseCell.textContent = item.endUse;
                row.appendChild(endUseCell);

                const supplierOriginCell = document.createElement("td");
                supplierOriginCell.textContent = item.supplierOrigin;
                row.appendChild(supplierOriginCell);

                tableBody1.appendChild(row);
                const newRow3 = document.createElement("tr");
                newRow3.className = "dynamic-row";

                const dynamicCell3 = document.createElement("td");
                dynamicCell3.colSpan = 3;
                dynamicCell3.textContent = "Shirtings, Suitings, Denim, Upholstery, Industrial, Knitted, Dress Materials, Ladies wear, etc.";
                newRow3.appendChild(dynamicCell3);

                tableBody1.appendChild(newRow3);


            });
        </script>
    </section>


















    <?php
    include "testimonial.php";
    ?>
    <?php
    include "footer.php";
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>