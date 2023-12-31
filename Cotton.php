<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

  <script src="https://kit.fontawesome.com/5f77a54189.js" crossorigin="anonymous"></script>
  <title>Sunchamp</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <?php
    include "header.php";
    ?>

  <section class="all-hero">
    <h1>Cotton / Viscose / Blend Yarn</h1>
    <img src="img/clipimg2.svg" alt="" />
  </section>

  <div class="whatsapp-button">
    <a class="whatsapp-icon" href="https://api.whatsapp.com/send?phone=+919712885500" target="_blank" rel="noopener noreferrer">
      <i class="fa-brands fa-whatsapp fa-2xl" style="color: #fff;"></i>
    </a>
  </div>

  <button onclick="topFunction()" id="myBtn" title="Go to top">
    <i class="fa-solid fa-arrow-up fa-2xl" style="color: #ed3237"></i>
  </button>

  <script>
    // Get the button
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction();
    };

    function scrollFunction() {
      if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
      ) {
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
         <img src="img/Raw Cotton .png" alt="" class="pimage" />
        <div class="pro-head">
          <img src="img/icon6.svg" alt="" />
          <h1>Raw Cotton</h1>
          <img src="img/icon3.svg" alt="" id="icon3" />
        </div>
      </div>
      <div class="mission mis">
        <p>
          Raw cotton is a natural fibre that is mostly used in the textile
          industry for the manufacture of variety fabrics.
        </p>
        <p>
          Raw cotton is initially delivered in tightly packed bales, and over
          time, these bales go through a number of processes before undergoing
          a drastic transformation. Although raw cotton does contain fibre,
          due to the method of harvesting cotton, it also contains small plant
          fragments and field trash (non-lint or foreign matter), both of
          which must be thoroughly removed.
        </p>
        <p>
          Many people don't know that cotton fibre has a natural wax coating
          on it to keep it dry in the rain, which makesit hydrophobic (a fancy
          word for water repellent).
        </p>
      </div>
    </div>
    <p class="para2" id="para2">
      <i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237"></i>
      Therefore, raw cotton cannot be used in a wide range of consumer
      products with absorption characteristics which are essential for many
      textile applications.
    </p>
    <table class="table">
      <thead class="gray">
        <tr>
          <th id="col-1" scope="col">Lustre</th>
          <th id="col-2" scope="col">End Use</th>
          <th id="col-3" scope="col">Exporter Origin</th>
        </tr>
      </thead>
      <tbody id="table-body1"></tbody>
    </table>

    <script>
      const data1 = [
        {
          lustre: "Raw White",
          endUse: "Spinning",
          supplierOrigin: "Egypt, India, Uzbekistan, China.",
        },
        // Add more data entries here if needed
      ];

      const tableBody1 = document.getElementById("table-body1");

      data1.forEach((item) => {
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
         <img src="img/Cotton Yarns .png" alt="" class="pimage" />
        <div class="pro-head">
          <img src="img/icon6.svg" alt="" />
          <h1>Cotton Yarn</h1>
          <img src="img/icon3.svg" alt="" id="icon3" />
        </div>
      </div>
      <div class="mission mis">
        <p>
          Raw cotton is rinsed and cleaned, to remove straw and dried leaves.
          The cotton is cleaned and fed to the machine. Cotton fibres are
          combed, twisted and slivered into a ropelike structure.
        </p>
        <p>
          The silver of the cotton fibres is transformed to yarn through
          spinning using machines. This is a soft breathable textile that
          blocks your skin's heat. They're perfect for garments like Tshirts,
          soft shawls and caps that can be worn in hot weather.
        </p>
        <p>
          In order to create shiny clothing, it is possible to use mercerized
          cotton fibres, whereas conventional cotton fibres give fabrics a
          neutral appearance.
        </p>
        <p>Both Open End and Ring Spun cotton yarns are obtainable</p>
      </div>
    </div>
    <table class="table">
      <thead class="gray">
        <tr>
          <th id="col-1" scope="col">Lustre</th>
          <th id="col-2" scope="col">End Use</th>
          <th id="col-3" scope="col">Exporter Origin</th>
        </tr>
      </thead>
      <tbody id="table-body2"></tbody>
    </table>

    <script>
      const data2 = [
        {
          lustre: "Raw White",
          endUse: "Knitting/Weaving",
          supplierOrigin: "Thailand, India, Vietnam, Indonesia, China",
        },
        // Add more data entries here if needed
      ];

      const tableBody2 = document.getElementById("table-body2");

      data2.forEach((item) => {
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
        dynamicCell3.textContent =
          "Carded, Combed, Combed Compact, OE, BCI, Organic - 5 count to 160 count";
        newRow3.appendChild(dynamicCell3);

        tableBody2.appendChild(newRow3);
      });
    </script>
  </section>

  <section class="products" id="p3">
    <div class="pro-dec">
      <div class="pro-img">
         <img src="img/core spun.webp" alt="" class="pimage" />
        <div class="pro-head">
          <img src="img/icon6.svg" alt="" />
          <h1>CSY</h1>
          <img src="img/icon3.svg" alt="" id="icon3" />
        </div>
      </div>
      <div class="mission mis">
        <p style="font-weight: bold">
          The Core Spun Yarns, with different types of yarns including Cotton,
          Polyester, Nylon and others blends, are made from pure spandex
        </p>
        <p class="para2 para21">
          <i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237"></i> Single or double covering modes are ordinarily available
        </p>
        <!-- <p class="para2 para21">
          <i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237"></i>The recovery of PET plastic products for
          reuse or recovery of their
          raw materials for production results in the production of fibres.
        </p> -->
        <p class="para2 para21">
          <i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237"></i>
          The two most common single-covering modes are nylon-covered yarn and
          polyester-covered yarn.
        </p>
        <p class="para2 para21">
          <i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237"></i>Knitting machines, woven fabrics, Denim,
          seamless undergarments,
          leggings, sportswear, pantyhose, protective gear, and knitted
          sweaters etc are predominantly utilize in CSY
        </p>
        <p class="para2 para21" >
          <i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237"></i>The fabric knitted with air covered yarn
          will have a soft and
          smooth hand feels.
        </p>


      </div>

    </div>


    <p class="para2 para21" id="para2">
      <i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237"></i>CSY Drafting the spandex yarn and outer
      covering fibre through a
      specific type of nozzle simultaneously, applying regular pressure
      with highly compressed air afterward, and forming the yarn with
      regularintersection points.
    </p>

    <table class="table">
      <thead class="gray">
        <tr>
          <th id="col-1" scope="col">Lustre</th>
          <th id="col-2" scope="col">End Use</th>
          <th id="col-3" scope="col">Exporter Origin</th>
        </tr>
      </thead>
      <tbody id="table-body3"></tbody>
    </table>

    <script>
      const data3 = [
        {
          lustre: "Raw White, Dobe Dyed Black",
          endUse: "Knitting/Weaving",
          supplierOrigin: "China, India",
        },
        // Add more data entries here if needed
      ];

      const tableBody3 = document.getElementById("table-body3");

      data3.forEach((item) => {
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
        dynamicCell3.textContent =
          "Cotton/Spun/Blend + Spandex (can be manufactured to specific requirement)";
        newRow3.appendChild(dynamicCell3);

        tableBody3.appendChild(newRow3);
      });
    </script>
  </section>

  <section class="products" id="p4">
    <div class="pro-dec">
      <div class="pro-img">
         <img src="img/VSF .png" alt="" class="pimage" />
        <div class="pro-head">
          <img src="img/icon6.svg" alt="" />
          <h1>VSF</h1>
          <img src="img/icon3.svg" alt="" id="icon3" />
        </div>
      </div>
      <div class="mission mis">
        <p class="para2 para21">
          <i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237"></i>
          Viscose Staple Fibre (VSF), a natural, biodegradable fibre with
          qualities somewhat resembling cotton, is produced from wood pulp or
          cotton pulp
        </p>
        <p class="para2 para21">
          <i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237"></i>
          VSF is used extensively in apparel, home textiles, dress material,
          knitted wear, and Non-Woven applications because itis very adaptable
          and simple to blend fibre
        </p>
        <p class="para2 para21">
          <i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237"></i>Viscose fibres can be converted into staple
          fibre, textile or cord
          threads, or both, depending on the end use.
        </p>
        <p class="para2 para21">
          <i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237"></i> Fabrics made from viscose fibres are simple to dye and have excellent hygienic qualities
          (hygroscopicity), which is crucial in products intended for extensive use.
        </p>
        <p class="para2 para21">
          <i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237"></i>
          Viscose Fibres are inexpensive to produce and widely used because of
          the availability of raw materials, the low cost of chemical
          reagents, satisfactory textile properties, and a wide range of
          modification options.
        </p>
      </div>
    </div>
    <!-- <p class="para2" id="para2">
        Viscose Fibres are inexpensive to produce and widely used because of the
        availability of raw materials, the low cost of chemical reagents,
        satisfactory textile properties, and a wide range of modification
        options.
      </p> -->
    <table class="table">
      <thead class="gray">
        <tr>
          <th id="col-1" scope="col">Lustre</th>
          <th id="col-2" scope="col">End Use</th>
          <th id="col-3" scope="col">Exporter Origin</th>
        </tr>
      </thead>
      <tbody id="table-body4"></tbody>
    </table>

    <script>
      const data4 = [
        {
          lustre: "White, Black",
          endUse: "Spinning",
          supplierOrigin: "China, Chinese Taipei",
        },
        // Add more data entries here if needed
      ];

      const tableBody4 = document.getElementById("table-body4");

      data4.forEach((item) => {
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

      // Adding a dynamic row
      const newRow = document.createElement("tr");
      newRow.className = "dynamic-row";

      const dynamicCell = document.createElement("td");
      dynamicCell.colSpan = 3;
      dynamicCell.textContent = "Semidull, Semidull Optical Bright";
      newRow.appendChild(dynamicCell);

      tableBody4.appendChild(newRow);
      // Adding a dynamic row
      const newRow2 = document.createElement("tr");
      newRow2.className = "dynamic-row";

      const dynamicCell2 = document.createElement("td");
      dynamicCell2.colSpan = 3;
      dynamicCell2.textContent = "1.2 d to 1.5 d";
      newRow2.appendChild(dynamicCell2);

      tableBody4.appendChild(newRow2);
    </script>
  </section>
  <section class="products" id="p5">
    <div class="pro-dec">
      <div class="pro-img">
         <img src="img/Viscose1.jpg" alt="" class="pimage" />
        <div class="pro-head">
          <img src="img/icon6.svg" alt="" />
          <h1>Viscose Yarns</h1>
          <img src="img/icon3.svg" alt="" id="icon3" />
        </div>
      </div>
      <div class="mission mis">
        <p>
          A synthetic fibre of natural origin made from the cellulose in wood
          pulp is termed as Viscose or Rayon. This substance offers a range of
          advantages including being an absorbing material that is ideal for
          breathable, cold fabrics. Enjoy silky-soft, knitwear that feels
          comfortable to wear.
        </p>
        <p>
          This "artificial silk" keeps the body dry, inhibiting the growth of
          bacteria and fungi, and does not retain static charge.
        </p>
      </div>
    </div>
    <table class="table">
      <thead class="gray">
        <tr>
          <th id="col-1" scope="col">Lustre</th>
          <th id="col-2" scope="col">End Use</th>
          <th id="col-3" scope="col">Exporter Origin</th>
        </tr>
      </thead>
      <tbody id="table-body5"></tbody>
    </table>

    <script>
      const data5 = [
        {
          lustre: "RW, Colours",
          endUse: "Knitting/Weaving",
          supplierOrigin: "Indonesia, China, India",
        },
        // Add more data entries here if needed
      ];

      const tableBody5 = document.getElementById("table-body5");

      data5.forEach((item) => {
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

        const newRow3 = document.createElement("tr");
        newRow3.className = "dynamic-row";

        const dynamicCell3 = document.createElement("td");
        dynamicCell3.colSpan = 3;
        dynamicCell3.textContent = "10s to 50s";
        newRow3.appendChild(dynamicCell3);

        tableBody5.appendChild(newRow3);
      });
    </script>
  </section>

  <section class="products" id="p6">
    <div class="pro-dec">
      <div class="pro-img">
         <img src="img/Blended Yarns 1.png" alt="" class="pimage" />
        <div class="pro-head">
          <img src="img/icon6.svg" alt="" />
          <h1>Blended Yarn</h1>
          <img src="img/icon3.svg" alt="" id="icon3" />
        </div>
      </div>
      <div class="mission mis">
        <p>
          Blended yarn is made from a number of raw materials such as
          polyester, cotton, viscose and acrylic, mixed together in different
          amounts. Since yarn is strong, mixing it with synthetic materials
          helps in keeping the finished product in good shape and appearance.
        </p>
        <p>
          The best of several worlds, such as the breathability of wool or
          cotton and the durability of acrylic or nylon, are typically offered
          by blended yarns. Blends offer a variety of color effects and have
          varying responses to dye.
        </p>
        <p>
          Fibre blending has been used in textile processing for a very long
          time. Numerous benefits can be obtained by combining fibres of
          various types to create textile yarns, such as property compensation
          or reinforcement between fibres, cost reduction without
          significantly sacrificing yarn performance..
        </p>
      </div>
    </div>
    <table class="table">
      <thead class="gray">
        <tr>
          <th id="col-1" scope="col">Lustre</th>
          <th id="col-2" scope="col">End Use</th>
          <th id="col-3" scope="col">Exporter Origin</th>
        </tr>
      </thead>
      <tbody id="table-body6"></tbody>
    </table>

    <script>
      const data6 = [
        {
          lustre: "RW, Colours",
          endUse: "Knitting/Weaving",
          supplierOrigin: "Indonesia, China, India, Vietnam",
        },
        // Add more data entries here if needed
      ];

      const tableBody6 = document.getElementById("table-body6");

      data6.forEach((item) => {
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

        const newRow3 = document.createElement("tr");
        newRow3.className = "dynamic-row";

        const dynamicCell3 = document.createElement("td");
        dynamicCell3.colSpan = 3;
        dynamicCell3.textContent =
          "PV, PC, or any other combination and in varying %  of mix";
        newRow3.appendChild(dynamicCell3);

        tableBody6.appendChild(newRow3);
      });
    </script>
  </section>

  <section class="products lastp" id="p7">
    <div class="pro-dec">
      <div class="pro-img">
         <img src="img/spun yarn1.png" alt="" class="pimage" />
        <div class="pro-head">
          <img src="img/icon6.svg" alt="" />
          <h1>Polyster Spun Yarn</h1>
          <img src="img/icon3.svg" alt="" id="icon3" />
        </div>
      </div>
      <div class="mission mis">
        <p>
          Polyester For use in weaving, knitting, and the production of
          clothing, spun yarn is composed of short, staple fibres that are
          woven together into a single yarn. Sewing and embroidery threads can
          both be made from spun yarn.
        </p>
        <p>
          Spun yarn comes in two different waxes: unwaxed for weaving and
          waxed for knitting fabrics. In the textile industry, PSY is
          frequently used and is readily available in both single and
          double-ply. It is also possible for it to be raw-white and
          drug-dyed. Fabrics can be made using both dope-dyed and
          conventionally dyed spun yarn.
        </p>
      </div>
    </div>
    <table class="table">
      <thead class="gray">
        <tr>
          <th id="col-1" scope="col">Lustre</th>
          <th id="col-2" scope="col">End Use</th>
          <th id="col-3" scope="col">Exporter Origin</th>
        </tr>
      </thead>
      <tbody id="table-body7"></tbody>
    </table>

    <script>
      const data7 = [
        {
          lustre: "Semi Dull, Raw White ",
          endUse: "Sewing Thread/Weaving",
          supplierOrigin: "India, China ",
        },
        // Add more data entries here if needed
      ];

      const tableBody7 = document.getElementById("table-body7");

      data7.forEach((item) => {
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

        tableBody7.appendChild(row);

        const newRow3 = document.createElement("tr");
        newRow3.className = "dynamic-row";

        const dynamicCell3 = document.createElement("td");
        dynamicCell3.colSpan = 3;
        dynamicCell3.textContent = "20s to 80s";
        newRow3.appendChild(dynamicCell3);

        tableBody7.appendChild(newRow3);
      });
    </script>
  </section>

  <?php
    include "footer.php";
    ?>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>