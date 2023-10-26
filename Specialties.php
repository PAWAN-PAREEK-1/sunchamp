<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />

    <script
      src="https://kit.fontawesome.com/5f77a54189.js"
      crossorigin="anonymous"
    ></script>
    <title>Sunchamp</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <?php
    include "header.php";
    ?>

    <section class="all-hero">
      <h1>Specialties / Niche</h1>
      <img src="img/clipimg2.svg" alt="" />
    </section>

    <div class="whatsapp-button">
      <a
        class="whatsapp-icon"
        href="https://api.whatsapp.com/send?phone=1234567890"
        target="_blank"
        rel="noopener noreferrer"
      >
        <i class="fa-brands fa-whatsapp fa-2xl" style="color: #fff"></i>
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
          <img src="img/productSec.svg" alt="" />
          <div class="pro-head">
            <img src="img/icon8.svg" alt="" />
            <h1>Spandex Yarn</h1>
            <img src="img/icon3.svg" alt="" id="icon3" />
          </div>
        </div>
        <div class="mission mis">
          <p>
            A synthetic fibre called spandex, lycra, or elastane is renowned for its exceptional
elasticity. Joseph Shivers, a chemist at DuPont's Benger Laboratory in Waynesboro, Virginia,
invented the polyether-polyurea copolymer in 1958. The preferred name in North America
is "spandex," which is an anagram ofthe word "expands."

          </p>
          <p>
            The elastic properties of spandex make it a popular synthetic fabric. The key
component in the production of denim, sportswear, and apparel.
          </p>
          <p>
            The rise in demand for spandex fibres from various industries such as automotive,
healthcare, and transportation, as well as the growing use of spandex as an alternative to
natural and synthetic rubber in industrial applications, rising healthcare investments in
various regions, and an increase in the affluent population are the primary factors that
raise the spandex fibres market growth.
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
        <tbody id="table-body1"></tbody>
      </table>

      <script>
        const data1 = [
          {
            lustre: "Raw White, Black Dope Dyed, Colours",
            endUse: "Fabrics, Medicals",
            supplierOrigin: " Korea, China, India",
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

          const newRow3 = document.createElement("tr");
          newRow3.className = "dynamic-row";
          const dynamicCell3 = document.createElement("td");
          dynamicCell3.colSpan = 3;
          dynamicCell3.textContent =
            "Denim, Knitted, Sportswear, Medicals, etc.";
          newRow3.appendChild(dynamicCell3);

          tableBody1.appendChild(newRow3);
        });
      </script>
    </section>

    <section class="products" id="p2">
      <div class="pro-dec">
        <div class="pro-img">
          <img src="img/productSec.svg" alt="" />
          <div class="pro-head">
            <img src="img/icon8.svg" alt="" />
            <h1>Bamboo & Lyocell</h1>
            <img src="img/icon3.svg" alt="" id="icon3" />
          </div>
        </div>
        <div class="mission mis">
          <p>
            Bamboo fibre is categorized cellulose fiber which is completely made
            of bamboo.
          </p>
          <p style="font-weight: bold;">
            Advantages of Bamboo Fibres and Yarns are :
          </p>
          <p class="para">
            <span>1. Naturally anti-bacterial</span>
          </p>
          <p class="para"><span>2. Green & Biodegradable</span></p>
          <p class="para"><span>3. Breathable and Cool</span></p>

          <p style="margin-top: 15px">
            Bamboo quite fast and sometimes as fast as grow 3 feet in a one
            night. Therefore due to characteristic rapidly growing Bamboo can
            substitute cotton, wood, and other materials, partially or fully.
          </p>
          <p class="para2 para21">
            <i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237"></i>
            Bamboo fibre is a biodegradable. Microorganisms and sunbeams can
            biodegrade it completely in oil. Therefore, Considered as Green Yarn
            though few contest on slightly higher water intake.
          </p>
        </div>
      </div>
      <p class="para2" id="para2">
        <i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237"></i>
        Bamboo yarn is better in moisture absorption and better wicking property
        gives it a edge as summer fabric and Towel applications. Wicking
        property can lead to 1-2 degrees more cooler than even cotton.
      </p>

      <p class="para2">
        <i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237"></i>The
        unique gene "Bamboo Ǫuinone" in bamboo cellulose makes it’s natural
        sterilized, Bacteriostatic, anti-mite, and anti-odor functions. Lyocell
        Bamboo was sent to the most reputable fiber testing organization in the
        world, and it has passed the anti- bacterial test
      </p>

      <table class="table">
        <thead class="gray">
          <tr>
            <th id="col-1" scope="col">Lustre</th>
            <th id="col-2" scope="col">End Use</th>
            <th id="col-3" scope="col">Supplier Origin</th>
          </tr>
        </thead>
        <tbody id="table-body2"></tbody>
      </table>

      <script>
        const data2 = [
          {
            lustre: "RW and Colours",
            endUse: "Fabrics",
            supplierOrigin: " China, India",
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
          dynamicCell3.textContent = "Bath Fabrics, Socks, etc";
          newRow3.appendChild(dynamicCell3);

          tableBody2.appendChild(newRow3);
        });
      </script>
    </section>

    <section class="products lastp" id="p3">
      <div class="pro-dec">
        <div class="pro-img">
          <img src="img/productSec.svg" alt="" />
          <div class="pro-head">
            <img src="img/icon8.svg" alt="" />
            <h1>Linen</h1>
            <img src="img/icon3.svg" alt="" id="icon3" />
          </div>
        </div>
        <div class="mission mis">
          <p>
            Linen is superior to cotton in terms of its increased durability,
            absorbent properties, and accelerated drying rate. Another
            characteristic that distinguishes it is its tendency to wrinkle.
          </p>
          <p>
            Linen is a term used to describe textiles that have a linen weave texture, even if they're
            made of cotton, hemp, or other non-flax fibers.
          </p>
          <p>
            In hot and humid climates, linen garments are preferred. While
            cotton retains moisture for a long time, linen dries quickly, which
            helps to reduce heat retention in extremely hot conditions.
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
        <tbody id="table-body3"></tbody>
      </table>

      <script>
        const data3 = [
          {
            lustre: "RW and Colours",
            endUse: "Bed, Bath Fabrics, Furnishing ",
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
            "Bed, Bath Fabrics, Furnishings, Shirtings, etc";
          newRow3.appendChild(dynamicCell3);

          tableBody3.appendChild(newRow3);
        });
      </script>
    </section>

    <?php
    include "footer.php";
    ?>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
