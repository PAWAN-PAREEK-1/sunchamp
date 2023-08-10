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
        <h1>Polyster</h1>
        <img src="img/clipimg2.svg" alt="">
    </section>






    <section class="products" id="p1">


        <div class="pro-dec">
        <div class="pro-img">
                <img src="img/productSec.svg" alt="">
                <div class="pro-head">
                    <img src="img/icon9.svg" alt="">
                    <h1> Textile Grade</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">

                <!-- <h1>We are the best <span>Polyester </span> Chips suppliers in India </h1> -->
                <p>We are the best Polyester Chips suppliers in India</p>
                <p>PET is produced with the polymerization of Monoethylene Glycol with Pure Terephthalic Acid. Polyethylene terephthalate (PET) has a wide array of usage. In the textile sector, it is used for spinning Polyester Filament Yarns (POY/FDY), Polyester Staple Fibres.</p>
                <p> These are manufactured in Lustres like Semi Dull, Home Bright, Super Bright, and Full Dull.  Also available in Cationic Semi Dull and Bright.</p>
                <!-- <p>The goal of Sun Champ Global Trades is to establish international business relationship through
                    facilitating trade opportunities, creating joint ventures and strategic alliances between
                    international businesses from various countries.</p> -->
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
            lustre: "Semi Dull, Super Bright, Home Bright, Full Dull, Cationic, Optical Bright, etc",
            endUse: "Textile",
            supplierOrigin: "China, Chinese Taipei, India, Indonesia"
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
                    <img src="img/icon9.svg" alt="">
                    <h1> Bottle Grade</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">

                <!-- <h1>Service..... <span>that builds Trust</span> </h1> -->
                <p>Bottle Grade PET is a food-grade packaging polymer that is renowned for its chemical inertness and appealing physical property. It is broadly used in the application of PET bottles, PET sheets, and mono yarn.</p>
                <p>The Bottle grade polyester chips are used in Mineral Water Bottle grade and CSD grade (soda grade) varieties, distilled water, drinking water, flavoring and candy containers, and PET sheet material.</p>
                <p>Features of bottle-grade PET Chips are low processing temperature, wide scope in processing, excellent transparency, and high finished product rate. Other noteworthy properties of these Polyester chips are their lightweight, material strength, excellent optical properties, and adequate gas barrier performance. </p>
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
            lustre: "Bright",
            endUse: "Bottle/Packaging",
            supplierOrigin: "China, Chinese Taipei, India, Indonesia, Vietnam "
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
                    <img src="img/icon9.svg" alt="">
                    <h1>Film Grade
                    </h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">

                <!-- <h1>Service..... <span>that builds Trust</span> </h1> -->
                <p>PET Chips, also known as Polyester Chips or Polyethylene Terephthalate Chips is the base of any type of plastics & polymer. Depending on the processing,</p>
                <p>PET may exist both as amorphous (transparent) commonly known as Bright or Super Bright Chips, and as a semi-crystalline material commonly known as PET Semi-Dull Chips. PET Chips are also used to make PET Film. High-quality chips without Silica & SiO2 contents are used to make PET Film.</p>
                <p>The Film grade polyester chips are commonly available in Super Bright and Additive (Silica) varieties. The feature of film grade PET chips is excellent clarity as the film is made in very thin specification & even the slightest mistake in raw material can be harmful to the film quality</p>
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
            lustre: "Full Bright, Silica",
            endUse: "Film",
            supplierOrigin: "China, Chinese Taipei, India, Indonesia "
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
                    <img src="img/icon9.svg" alt="">
                    <h1>POY</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">


                <p>Polyester Partially Oriented Yarn, commonly known as Polyester POY is the primary form of Polyester yarn. It is also known as Polyester Pre-Oriented Yarn made directly from PTA or by spinning Polyester PET Chips. POY is mainly used in texturizing to make Textured Yarn (DTY). </p>
                <p>POY is also used for ATY, ACY, etc. POY can also be used in Draw Warping for Weaving and Warp Knitting of Fabrics.</p>
                <p>Polyester POY is available in Semi Dull, Bright, Full Dull lusters and Cationic. The fabric made from Bright POY also has a bright luster. Polyester POY yarn is mainly available in Raw White color & is made available in other colors using the Dope Dyed technology.</p>
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
            lustre: "Semi Dull,  Dope Dyed Black, Raw White, Trilobal Bright, Dope Dyed Colour, Circular, etc.",
            endUse: "Texturising",
            supplierOrigin: "China, India"
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
    <section class="products" id="p5">


        <div class="pro-dec">
        <div class="pro-img">
                <img src="img/productSec.svg" alt="">
                <div class="pro-head">
                    <img src="img/icon9.svg" alt="">
                    <h1>DTY</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">


                <p>Draw Texturized Yarn (DTY) is a fully drawn, fully oriented polyester multifilament yarn with soft crimp, high bulk, and texture with a cotton feel and very high durability and retention properties. It is obtained by texturizing partially oriented yarn using texturizing machines.</p>
                <p>  DTY yarn is suitable for weaving & knitting fabrics for making clothes, home furnishings, seat covers, bags, and many other uses. DTY yarns are available in Semi Dull or Bright or Trilobal Bright depending upon the type of sections of filaments.</p>
                <!-- <p>The goal of Sun Champ Global Trades is to establish international business relationship through
                    facilitating trade opportunities, creating joint ventures and strategic alliances between
                    international businesses from various countries.</p> -->
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
    <tbody id="table-body5">
    </tbody>
</table>

<script>
    const data5 = [
        {
            lustre: "Semi Dull,  Dope Dyed Black, Raw White, Trilobal Bright, Dope Dyed Colour, Circular, etc.",
            endUse: "Texturising",
            supplierOrigin: "China, India"
        },
        // Add more data entries here if needed
    ];

    const tableBody5 = document.getElementById("table-body5");

    data5.forEach(item => {
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

        tableBody5.appendChild(row);
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