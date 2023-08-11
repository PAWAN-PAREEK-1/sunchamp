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

                <h1>The <span>No.1 Nylon chips</span>  manufacturer in India</h1>
                <p>Nylon chips and fibers are the main raw material for making fiber nylon chips and engineering plastic-grade nylon chips.Nylon chips are downstream products of CPL which include fiber-grade nylon chips and engineering plastic-grade nylon chips. CPDC produces nylon chips from CPL through vertical integration.
                </p>
                <p>Nylon6 and Nylon66 chips are used for producing Nylon filament Yarn as well as Engineering Plastics.The usage of Nylon6 Chips in the compounding industry is very high. It can be compounded with many other polymers or even fibers. Nylon 6 is synthesized by polymerization of Caprolactam.
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
    <tbody id="table-body1">
    </tbody>
</table>

<script>
    const data1 = [
        {
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
                <p>Nylon Partially Oriented Yarn, commonly known as Nylon POY is the primary form of Nylon yarn. It is also known as Nylon Pre-Oriented Yarn. It is the first form of yarn made directly by spinning Nylon Chips. Nylon POY is mainly used for manufacturing textured yarn.</p>
                <p> Nylon POY can be available in two clusters: Semi Dull & Bright. Dope Dyed technology is used for making colored POY. Nylon POY is mainly available in packed-in cones as per customer requirements.</p>
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
    const data2 = [
        {
            lustre: "Semi Dull, Bright",
            endUse: "Texturising/Draw Winding/Industrial",
            supplierOrigin: "China, India, Chinese Taipei."
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
                <p>Nylon DTY is used for manufacturing hosiery items, fishing nets, and ropes, and high-tenacity nylon DTY is used for producing tire cords. Nylon DTY is available in semi-dull and bright DTY luster. The colour master-batch is mixed with the raw material to make the dope-dyed DTY. </p>
                <p>Dope-dyed POY yarn can be used to make the Dope Dyed DTY yarn. It is available in an international standard packing of 1.89 kg cone. DTY from China & India is being exported in large quantities to countries like Egypt, Syria, Argentina and several other countries. DTY yarn is normally available in the following deniers and we can offer you the best quality of nylon DTY for all of these specifications.</p>

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
    const data3 = [
        {
            lustre: "Bright Triloble, Semi dull, Set Yarn, Full Yarn, Dope Dyed black and colors",
            endUse: "Knitting/Weaving",
            supplierOrigin: "China, Chinese Taipei,India."
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
    });
</script>
    </section>


    <section class="products" id="p4">


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
                <p>Nylon filament yarn is a long continuous lustrous fiber, which is extensively used to produce a comprehensive range of textile fabrics such as sarees, draperies, furnishings and upholstery, sportswear, mosquito nets, and also for embroidery.</p>
                <p>Nylon filament yarn is known for its excellent dyeability, high tensile strength, and elasticity with enhanced abrasion resistance, durability, and toughness. Its properties make it the preferred choice over natural yarn options, such as cotton, silk, and wool.</p>
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
    const data4 = [
        {
            lustre: "Semi dull, Full dull, Bright, Ait textured Yarn",
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