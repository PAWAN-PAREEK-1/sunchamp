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
        <h1>Nylon</h1>
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




    <section class="products" id="p1">


        <div class="pro-dec">
            <div class="pro-img">
                <img src="img/productSec.svg" alt="">
                <div class="pro-head">
                    <img src="img/icon5.svg" alt="">
                    <h1>Nylon</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">

                <h1>The <span>Best Nylon chips</span> traders in India</h1>
                <p>Nylon Chips and fibers are the main raw material for making fiber nylon chips and engineering plastic-grade nylon chips. Nylon chips, such as fiber-grade and engineering plastic-grade nylon chips, are downstream products of CPL. Vertical integration allows CPDC to produce nylon chips from CPL. </p>
                <p>Nylon filament yarn and engineering plastics are both made using Nylon6 and Nylon66 chips.
                    Nylon6 Chips are widely used in the compounding sector. It can combine with numerous other
                    polymers, even fibres. Nylon 6 issynthesized by the polymerization of Caprolactam</p>
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
                    lustre: "Semi Dull, Bright",
                    endUse: "Textile,Industrial",
                    supplierOrigin: "China, Chinese Taipei,India."
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
            });
        </script>
    </section>




    <section class="products" id="p2">


        <div class="pro-dec">
            <div class="pro-img">
                <img src="img/productSec.svg" alt="">
                <div class="pro-head">
                    <img src="img/icon5.svg" alt="">
                    <h1>NPOY</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">

                <h1>Service..... <span>that builds Trust</span> </h1>
                <p>Nylon Partially Oriented Yarn, also known as Nylon POY is the primary form of
                    Nylon yarn. It is also known as Nylon Pre-Oriented Yarn. Nylon Partially Oriented Yarn
                    is made by directly spinning nylon chips. Nylon POY is largely utilized for manufacturing
                    textured yarn</p>
                <p> For nylon POY, there are two lustre options: bright and semi-bright. The production of colored
                    POY uses dope dye technology. To satisfy customer needs, nylon POY is typically provided in cone
                    packaging.
                </p>
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
            <tbody id="table-body2">
            </tbody>
        </table>

        <script>
            const data2 = [{
                    lustre: "Semi Dull, Bright ",
                    endUse: "Texturising / Draw Winding / Industrial",
                    supplierOrigin: "China,  India, Chinese Taipei"
                },
                // Add more data entries here if needed
            ];

            const tableBody2 = document.getElementById("table-body2");

            data2.forEach(item => {
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

                tableBody2.appendChild(row);


                const newRow3 = document.createElement("tr");
                newRow3.className = "dynamic-row";
                const dynamicCell3 = document.createElement("td");
                dynamicCell3.colSpan = 3;
                dynamicCell3.textContent = "30 d to 600 d";
                newRow3.appendChild(dynamicCell3);

                tableBody2.appendChild(newRow3);
            });
        </script>
    </section>


    <section class="products" id="p3">


        <div class="pro-dec">
            <div class="pro-img">
                <img src="img/productSec.svg" alt="">
                <div class="pro-head">
                    <img src="img/icon5.svg" alt="">
                    <h1>NDTY</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">

                <h1>Service..... <span>that builds Trust</span> </h1>
                <p>High-tensile nylon DTY is used to make tyre cords, while nylon DTY is used to make hosiery, fishing nets
                    and ropes. Both a semi-dull and bright DTY luster are available in nylon. The color master batches are
                    mixed with the raw material in order to produce dope dyed DTY. </p>
                <p>
                    The dope dyed DTY yarn can be produced using dope dyed POY yarn. It is offered in 1.89 kg cones of international standard packaging. DTY from China and India is exported in significant numbers to nations like Egypt, Syria, Argentina, and a number of others. The following deniers of DTY yarn are typically offered, and we can provide you with the highest quality nylon DTY for all of these requirements
                </p>


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
            <tbody id="table-body3">
            </tbody>
        </table>

        <script>
            const data3 = [{
                    lustre: "Bright Triloble, Semi Dull, Set Yarn, Full Yarn, Dope Dyed Black and Colours",
                    endUse: "Knitting/Weaving",
                    supplierOrigin: "China, Chinese Taipei, India "
                },
                // Add more data entries here if needed
            ];

            const tableBody3 = document.getElementById("table-body3");

            data3.forEach(item => {
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

                tableBody3.appendChild(row);

                const newRow3 = document.createElement("tr");
                newRow3.className = "dynamic-row";
                const dynamicCell3 = document.createElement("td");
                dynamicCell3.colSpan = 3;
                dynamicCell3.textContent = "20 d to 600 d, NIM, SIM, HIM etc.";
                newRow3.appendChild(dynamicCell3);

                tableBody3.appendChild(newRow3);
            });
        </script>
    </section>


    <section class="products lastp" id="p4">


        <div class="pro-dec">
            <div class="pro-img">
                <img src="img/productSec.svg" alt="">
                <div class="pro-head">
                    <img src="img/icon5.svg" alt="">
                    <h1>NFY</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">

                <h1>Service..... <span>that builds Trust</span> </h1>
                <p>Nylon filament yarn is a long continuous lustrous fibre that is broadly utilized for producing textile fabrics such as sarees, draperies, furnishings and upholstery, sportswear, mosquito nets, and embroidery.</p>
                <p>The high tensile strength, elasticity, and superior abrasion resistance, durability, and toughness of nylon filament yarn are well known. </p>
                <p>It has been chosen as a result of its characteristics over natural fibres such as cotton, silk and wool.</p>
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
            <tbody id="table-body4">
            </tbody>
        </table>

        <script>
            const data4 = [{
                    lustre: " Semi Dull, Full Dull, Bright, Air Textured Yarn",
                    endUse: "Knitting /Weaving",
                    supplierOrigin: "China, Chinese Taipei,India."
                },
                // Add more data entries here if needed
            ];

            const tableBody4 = document.getElementById("table-body4");

            data4.forEach(item => {
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

                tableBody4.appendChild(row);
                const newRow3 = document.createElement("tr");
                newRow3.className = "dynamic-row";
                const dynamicCell3 = document.createElement("td");
                dynamicCell3.colSpan = 3;
                dynamicCell3.textContent = "20 d to 450 d";
                newRow3.appendChild(dynamicCell3);

                tableBody4.appendChild(newRow3);
            });
        </script>
    </section>









    <?php
    include "footer.php";
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>