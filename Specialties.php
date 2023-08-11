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
        <h1>Specialties / Niche</h1>
        <img src="img/clipimg2.svg" alt="">
    </section>






    <section class="products" id="p1">


        <div class="pro-dec">
        <div class="pro-img">
                <img src="img/productSec.svg" alt="">
                <div class="pro-head">
                    <img src="img/icon8.svg" alt="">
                    <h1>Spandex Yarn</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">


                <p>Spandex, Lycra, or elastane is a synthetic fibre known for its exceptional elasticity. It is a polyether-polyurea copolymer that was invented in 1958 by chemist Joseph Shivers at DuPont's Benger Laboratory in Waynesboro, Virginia. The generic name "spandex", which is an anagram of the word "expands", is the preferred name in North America.</p>
                <p>Spandex is a synthetic fabric that is prized for its elasticity. It is the most critical component in the manufacturing of denim/ sportswear/apparel.</p>
                <p>Rise in demand for spandex fibres from various industries such as automotive, healthcare, and transportation, growing use of spandex as an alternative to natural and synthetic rubber in industrial applications, increasing healthcare investments in various regions, and rise in the affluent population are the main factors that boost the spandex fibres market growth.</p>
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
            lustre: "Raw White, Black Dope Dyed, Colours",
            endUse: "Fabrics, Medicals",
            supplierOrigin: " Korea, China, India"
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
                dynamicCell3.textContent = "Denim, Knitted, Sportswear, Medicals, etc.";
                newRow3.appendChild(dynamicCell3);

                tableBody1.appendChild(newRow3);
    });
</script>
    </section>




    <section class="products" id="p2">


        <div class="pro-dec">
        <div class="pro-img">
                <img src="img/productSec.svg" alt="">
                <div class="pro-head">
                    <img src="img/icon8.svg" alt="">
                    <h1>Bamboo & Lyocell</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">

                <p>
                Bamboo fibre is a kind of cellulose fibre made of 100% bamboo. Advantages of Bamboo are :</p>
                    <p class="para">
                        <span>1. Naturally anti-bacterial</span></p>
                    <p class="para" > <span>2. Green & Biodegradable</span> </p>
                    <p class="para"><span>3. Breathable and Cool</span></p>


                <p>Bamboo can grow as much as 3 feet overnight. Because this is a fast-growing renewable resource it can replace cotton, wood etc.
Bamboo fibre is a biodegradable textile material. It can be 100% biodegraded in soil by microorganisms and sunshine. The decomposition process doesn't cause any pollution environment.
</p>

            </div>
        </div>
        <p class="para2" id="para2">Because the cross-section of the bamboo fibre is filled with various micro-gaps and micro-holes, it has much better moisture absorption and ventilation. With this unparalleled micro-structure, bamboo fibre apparel can absorb and evaporate humans sweat in a split second.</p>
                <p class="para2">According to authoritative testing figures, apparel made from bamboo fibres is 1-2 degrees lower than normal apparel in hot summer. Lyocell bamboo fibre is a Solvent Humidity Modulus bamboo fibre, during which there is no chemical reaction, wastewater and gas, and harmful chemical residues, therefore it is real environment-friendly green fibre.</p>
                <p class="para2">IT IS THE BEST SOLUTION FOR THE FTC CLAIM FROM USA, as this lyocell bamboo fibre is not viscose at all and it is the real GREEN fibre compared with normal bamboo fibre. In the bamboo cellulose, the unique gene “Bamboo Quinone” has natural functions of sterilization, bacteriostatic, anti-mite, and anti-odor. Lyocell Bamboo has been sent to the world's authoritative fibre testing organization  Nowadays, the fibre has passed the anti-bacterial test.
                </p>
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
            lustre: "RW and Colours",
            endUse: "Fabrics",
            supplierOrigin: " China, India"
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
                dynamicCell3.textContent = "Bath Fabrics, Socks, etc";
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
                    <img src="img/icon8.svg" alt="">
                    <h1>Linen</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">

                <p>The No. Line Manufacturer In India</p>
                <p>Linen is very strong, absorbent, and dries faster than cotton. Because of these properties, linen is comfortable to wear in hot weather and is valued for use in garments. It also has other distinctive characteristics, notably its tendency to wrinkle.</p>
                <p>Textiles in a linen weave texture, even when made of cotton, hemp, or other non-flax fibres, are also loosely referred to as "linen".</p>
                <p>Garments made of linen are desirable in hot and humid climates. Unlike cotton, which tends to retain moisture for a significant period of time, linen dries quickly, which helps reduce heat retention in overly warm conditions.</p>
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
            lustre: "RW and Colours",
            endUse: "Bed, Bath Fabrics, Furnishing ",
            supplierOrigin: "China, India"
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
                dynamicCell3.textContent = "Bed, Bath Fabrics, Furnishings, Shirtings, etc";
                newRow3.appendChild(dynamicCell3);

                tableBody3.appendChild(newRow3);
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