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
        <h1>Cotton / Viscose / Blend Yarn</h1>
        <img src="img/clipimg2.svg" alt="">
    </section>






    <section class="products" id="p1">


        <div class="pro-dec">
        <div class="pro-img">
                <img src="img/productSec.svg" alt="">
                <div class="pro-head">
                    <img src="img/icon9.svg" alt="">
                    <h1>Raw Cotton</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">


               <p>Many people are also unaware that cotton Fibre has a coating of natural waxes that protect it from rain, which ultimately makes it hydrophobic (which is a fancy word for water repellent). This means raw cotton is unsuitable for use in many consumer products that require absorbency, a trait that is critical in many cotton applications.</p>
                <p>Settling the issue of water repellence vs water absorbency is just one reason that cotton undergoes processing, and as you’ll read further, finishing, so that it can transform to meet end-customer expectations for product performance without losing its natural goodness.</p>
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
            lustre: "Raw White",
            endUse: "Spinning",
            supplierOrigin: "Egypt, India, Uzbekistan, China."
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
                    <h1>Cotton Yarn</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">


                <p>The raw cotton is loosened and cleaned; to remove straw and dried leaves. The cleaned cotton is then fed into a machine.The cotton fibre is combed, straightened, and converted into a rope-like structure called a sliver. The sliver of cotton fibre is converted into yarn by spinning using machines. Cotton yarns are available in Open End and Ring Spun. and at Sun champ global traders, we provide the best cotton yarn in the world. </p>
                <p>The cotton yarn makes a lightweight, breathable garment that pulls heat away from your skin. They are excellent for making garments worn in hot weather, like T-shirts, light shawls, or caps. Although conventional cotton yarn gives a neutral appearance to the fabric, mercerized cotton yarn can make shiny clothing.</p>
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
            lustre: "Raw White",
            endUse: "Knitting/Weaving",
            supplierOrigin: "Thailand, India, Vietnam, Indonesia, China"
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
                    <h1>CSY</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">


                <p>Core Spun Yarns are made of bare spandex covered with various yarns such as Cotton, Polyester Spun, Nylon, and other Blend Yarns. </p>
                <p> It usually has single or double covering modes. Nylon-covered yarn and polyester-covered yarn are mainly used in single-covering mode. CSY is mainly used in knitting machines, woven fabric, Denim, seamless undergarments, leggings, sportswear, pantyhose, protective gear, knitted sweater, etc.</p>
                <p>CSY Drafting the outer covering fibre and spandex yarn through the specified type of nozzle at the same time, after regular pressure by high compressed air and then forming the yarn with regular intermingle points. The fabric knitted by air-covered yarn will have soft and smooth hand feels.</p>
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
            lustre: "Raw White, Dobe Dyed Black",
            endUse: "Knitting/Weaving",
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
    });
</script>
    </section>


    <section class="products" id="p4">


        <div class="pro-dec">
        <div class="pro-img">
                <img src="img/productSec.svg" alt="">
                <div class="pro-head">
                    <img src="img/icon9.svg" alt="">
                    <h1>VSF</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">


                <p>Viscose Staple Fibre (VSF), a natural, bio-degradable Fibre with characteristics somewhat similar to cotton is obtained from wood pulp or cotton pulp. . Depending upon the intended use, viscose Fibres are made into textile or cord threads, as well as staple Fibre. Fabrics of viscose Fibres are easily dyed and have excellent hygienic properties (hygroscopicity), which is especially important in goods made for popular use.</p>
                <p>As an extremely versatile and easily blendable Fibre, VSF is widely used in apparel, home textiles, dress material, knitted wear, and non-woven applications.</p>
                <p>The accessibility of raw materials and the low cost of the chemical reagents, as well as the satisfactory textile properties and broad possibilities for modification, ensure that Viscose Fibres are economical to produce and widely used.</p>
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
            lustre: "Semi Dull, Super Bright, Home Bright, Full Dull, Cationic, Optical Bright, etc",
            endUse: "Textile",
            supplierOrigin: "China, Chinese Taipei, India, Indonesia"
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
                    <h1>Polyster</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">

                <h1>Service..... <span>that builds Trust</span> </h1>
                <p>The mission of the Sun Champ Global Trades is to create prosperity by strengthening the
                    competitiveness of industry, promoting trade and investment, and ensuring fair trade and
                    compliance with trade laws and agreements.</p>
                <p>We strive to be a resourceful foreign trade manual for our stakeholders in our collective journey
                    of transparent and trustworthy international sale transactions.</p>
                <p>The goal of Sun Champ Global Trades is to establish international business relationship through
                    facilitating trade opportunities, creating joint ventures and strategic alliances between
                    international businesses from various countries.</p>
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
            lustre: "Semi Dull, Super Bright, Home Bright, Full Dull, Cationic, Optical Bright, etc",
            endUse: "Textile",
            supplierOrigin: "China, Chinese Taipei, India, Indonesia"
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


    <section class="products" id="p6">


        <div class="pro-dec">
        <div class="pro-img">
                <img src="img/productSec.svg" alt="">
                <div class="pro-head">
                    <img src="img/icon9.svg" alt="">
                    <h1>Polyster</h1>
                    <img src="img/icon3.svg" alt="" id="icon3">
                </div>

            </div>
            <div class="mission mis">

                <h1>Service..... <span>that builds Trust</span> </h1>
                <p>The mission of the Sun Champ Global Trades is to create prosperity by strengthening the
                    competitiveness of industry, promoting trade and investment, and ensuring fair trade and
                    compliance with trade laws and agreements.</p>
                <p>We strive to be a resourceful foreign trade manual for our stakeholders in our collective journey
                    of transparent and trustworthy international sale transactions.</p>
                <p>The goal of Sun Champ Global Trades is to establish international business relationship through
                    facilitating trade opportunities, creating joint ventures and strategic alliances between
                    international businesses from various countries.</p>
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
    <tbody id="table-body6">
    </tbody>
</table>

<script>
    const data6 = [
        {
            lustre: "Semi Dull, Super Bright, Home Bright, Full Dull, Cationic, Optical Bright, etc",
            endUse: "Textile",
            supplierOrigin: "China, Chinese Taipei, India, Indonesia"
        },
        // Add more data entries here if needed
    ];

    const tableBody6 = document.getElementById("table-body6");

    data6.forEach(item => {
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

        tableBody6.appendChild(row);
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