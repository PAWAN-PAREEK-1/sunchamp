<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

  <script src="https://kit.fontawesome.com/5f77a54189.js" crossorigin="anonymous"></script>
  <title>Sunchamp</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <?php
  include "header.php";
  ?>

  <section class="all-hero">
    <h1>Polyster</h1>
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
    window.onscroll = function() {
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
        <img src="img/Polyester Chips textile Grade.svg" alt="" class="pimage" />
        <div class="pro-head">
          <img src="img/icon9.svg" alt="" />
          <h1>Textile Grade</h1>
          <img src="img/icon3.svg" alt="" id="icon3" />
        </div>
      </div>
      <div class="mission mis">
        <!-- <h1>We are the best <span>Polyester </span> Chips suppliers in India </h1> -->
        <p>We're the best Exporter of polyester chips.</p>
        <p>
          The pet is produced by the polymerization of Monoethylene glycol with pure
          terephthalic acid. Terephthalate Polyethylene Pet has a large range of uses.

        </p>
        <p>
          It is used in the textile industry for the spinning of Polyester Filament Yarns, POY, FDY
          and Polyester Staple Fibers. They're manufactured in Lusters like Semi Dull, Home
          Bright, Super Bright, and Full Dull. Cationic Semi Dulls and Bright also have them.
        </p>
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
          <th id="col-3" scope="col">Exporter Origin</th>
        </tr>
      </thead>
      <tbody id="table-body1"></tbody>
    </table>

    <script>
      const data1 = [{
          lustre: "Semi Dull, Super Bright, Home Bright, Full Dull, Cationic, Optical Bright, etc",
          endUse: "Textile",
          supplierOrigin: "China, Chinese Taipei, India, Indonesia",
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
        <img src="img/Polyester Chips Bottle Grade.svg" alt="" class="pimage" />
        <div class="pro-head">
          <img src="img/icon9.svg" alt="" />
          <h1>Bottle Grade</h1>
          <img src="img/icon3.svg" alt="" id="icon3" />
        </div>
      </div>
      <div class="mission mis">
        <!-- <h1>Service..... <span>that builds Trust</span> </h1> -->
        <p>
          Bottle Grade PET is a food-grade packaging material well known for its appealing physical features
          and chemical inertness. It is widely applied to PET bottles, PET sheets, and mono yarn.
        </p>
        <p>
          The Mineral Water Bottle grade and CSD grade (soda grade), distilled water, drinking water,
          flavoring and candy containers, and PET sheet material all use the bottle grade chips
        </p>
        <p>
          Low processing temperatures, a broad processing range, excellent transparency, and a high rate
          of finished product are characteristics of bottle-grade PET Chips. This product's lightweight,
          material strength, excellent optical qualities, and adequate gas barrier performance are
          additional noteworthy features.
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
      <tbody id="table-body2"></tbody>
    </table>

    <script>
      const data2 = [{
          lustre: "Bright",
          endUse: "Bottle/Packaging",
          supplierOrigin: "China, Chinese Taipei, India, Indonesia, Vietnam ",
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
      });
    </script>
  </section>

  <section class="products" id="p3">
    <div class="pro-dec">
      <div class="pro-img">
        <img src="img/Polyester Chips Film Grade.svg" alt="" class="pimage" />
        <div class="pro-head">
          <img src="img/icon9.svg" alt="" />
          <h1>Film Grade</h1>
          <img src="img/icon3.svg" alt="" id="icon3" />
        </div>
      </div>
      <div class="mission mis">
        <!-- <h1>Service..... <span>that builds Trust</span> </h1> -->
        <p>
          The foundation of all plastics and polymers is PET chips, also
          referred to as polyester chips or polyethylene terephthalate chips.
          Depending on the processing, PET can exist as a semi-crystalline
          material known as PET Semi-Dull Chips as well as an amorphous
          (transparent) material known as Bright or Super Bright Chips. PET
          Film is also produced using PET Chips. PET Film is made from
          high-quality chips that are free of SiO2 and silica.
        </p>
        <p>
          The Film Polyester chips are frequently found in Super Bright and
          Additive (Silica) varieties. The film is made to a very thin
          specification and even the smallest mistake in the raw materials can
          harm the film quality, film-grade PET chips have excellent clarity.
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
      <tbody id="table-body3"></tbody>
    </table>

    <script>
      const data3 = [{
          lustre: "Full Bright, Silica",
          endUse: "Film",
          supplierOrigin: "China, Chinese Taipei, India, Indonesia ",
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
      });
    </script>
  </section>

  <section class="products" id="p4">
    <div class="pro-dec">
      <div class="pro-img">
        <img src="img/poy.avif" alt="" class="pimage"  id="pimagepoy"/>
        <div class="pro-head">
          <img src="img/icon9.svg" alt="" />
          <h1>POY</h1>
          <img src="img/icon3.svg" alt="" id="icon3" />
        </div>
      </div>
      <div class="mission mis">
        <p>
          The most common type of polyester fibre is partially oriented polyester fibre, which is also known
          as POY. It's also known as Polyester Preoriented Yarn and can be spun from PET chips, or made
          directly out of PTA. In the texturizing process, Textured DTY Yarn is primarily produced using POY.
          POY is useful for draw warping when weaving and knitting fabric on a warp. POY can also be applied
          to ATY, ACY, etc.
        </p>
        <p>
          The Polyester POY comes in semi-dull, bright, full-dull lustres, and cationic
          varieties. Bright POY also has a bright lustre in the finished fabric. The majority of
          polyester POY yarn is available in Raw White, but it can also be found in other colors
          thanks to dope dyeing technology. White color and is made available in other colors using the
          Dope Dyed technology.

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
      <tbody id="table-body4"></tbody>
    </table>

    <script>
      const data4 = [{
          lustre: "Semi Dull,  Dope Dyed Black, Raw White, Trilobal Bright, Dope Dyed Colour, Circular, etc.",
          endUse: "Texturising",
          supplierOrigin: "China, India",
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

        const newRow3 = document.createElement("tr");
        newRow3.className = "dynamic-row";
        const dynamicCell3 = document.createElement("td");
        dynamicCell3.colSpan = 3;
        dynamicCell3.textContent = "30 d to 600 d and upto 288 filaments";
        newRow3.appendChild(dynamicCell3);

        tableBody4.appendChild(newRow3);
      });
    </script>
  </section>
  <section class="products" id="p5">
    <div class="pro-dec">
      <div class="pro-img">
        <img src="img/polyester-dty-yarn.jpg" alt="" class="pimage" />
        <div class="pro-head">
          <img src="img/icon9.svg" alt="" />
          <h1>DTY</h1>
          <img src="img/icon3.svg" alt="" id="icon3" />
        </div>
      </div>
      <div class="mission mis">
        <p>
          Texturized Yarn, abbreviated as DTY, represents a fully drawn and
          oriented polyester multifilament yarn. It possesses a gentle crimp,
          substantial volume, a texture akin to cotton, and exceptional
          durability, alongside remarkable retention properties. It is made by
          texturizing yarn that has been partially oriented using texturizing
          equipment.
        </p>
        <p>
          DTY yarn is appropriate for weaving and knitting fabrics used to
          create clothing, home décor, seat covers, bags, and a variety of
          other items. Depending on the type of filament sections, DTY yarn is
          available in Semi Dull, Bright, or Trilobal Bright.
        </p>
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
          <th id="col-3" scope="col">Exporter Origin</th>
        </tr>
      </thead>
      <tbody id="table-body5"></tbody>
    </table>

    <script>
      const data5 = [{
          lustre: "Semi Dull, Bright, Cationic",
          endUse: "Knitting / Weaving ",
          supplierOrigin: "China, Chinese Taipei, India ",
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
        dynamicCell3.textContent =
          "20 d to 1200 d and upto 288 filaments, NIM, SIM, HIM, etc.";
        newRow3.appendChild(dynamicCell3);

        tableBody5.appendChild(newRow3);
      });
    </script>
  </section>


  <section class="products" id="p6">
    <div class="pro-dec">
      <div class="pro-img">
        <img src="img/fdy.jpg" alt="" class="pimage" />
        <div class="pro-head">
          <img src="img/icon9.svg" alt="" />
          <h1>FDY</h1>
          <img src="img/icon3.svg" alt="" id="icon3" />
        </div>
      </div>
      <div class="mission mis">
        <p>
          Spin draw yarn (SDY) is another name for polyester fully drawn yarn (FDY). Similar to POY manufacturing, it is produced using a process, but the yarn is spun at faster rates while still incorporating intermediate drawing. This enables stabilization through crystallization and orientation. FDY is primarily utilized in fabrics such as wefts or weaves. To create a variety of fabrics, FDY can be knitted or woven with any other filament yarn. It is primarily used in fabrics for home furnishings, clothing, Terry towels, and denim, among other things.
        </p>
        <p>
          FDY comes in three different luster types: Semi-dull (SD), Bright (BR), and Trilobal Bright
          (TBR), which have a triangular cross-section. It is common practice to use filament yarn with a
          Trilobal bright luster to make curtains, bed sheets, and carpets. FDY is available in Raw-white
          as well as in different colors using the dope dyed mechanism. </p>
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
          <th id="col-3" scope="col">Exporter Origin</th>
        </tr>
      </thead>
      <tbody id="table-body6"></tbody>
    </table>

    <script>
      const data6 = [{
          lustre: "Raw White, Semi Dull, Trilobal Bright, Cationic, Dope Dyed Black and Colours",
          endUse: "Knitting / Weaving ",
          supplierOrigin: "China, Chinese Taipei, India ",
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
          "30 d to 450 d and upto 288 filaments";
        newRow3.appendChild(dynamicCell3);

        tableBody6.appendChild(newRow3);
      });
    </script>
  </section>





  <section class="products" id="p7">
    <div class="pro-dec">
      <div class="pro-img">
        <img src="img/acy.webp" alt="" class="pimage" />
        <div class="pro-head">
          <img src="img/icon9.svg" alt="" />
          <h1>ACY</h1>
          <img src="img/icon3.svg" alt="" id="icon3" />
        </div>
      </div>
      <div class="mission mis">
        <p>
          Uncovered spandex is covered in various types of polyester filament yarn (DTY) to create air-covered
          yarns. There are usually single or double covering options. Nylon covered yarns and polyester covered
          yarns are the two most common types of single covering.
        </p>
        <p>
          Knitting machines, textile fabrics, Denims, Unseamed Leggings, Sportswear, Panty hoses, Protective Gear
          and Knit Jackets are the main applications of ACY. </p>
        <p>ACY draughts the spandex yarn and outer covering fibre through a specific type of nozzle
          simultaneously, under regular pressure from highly compressed air, before forming the yarn with
          regular intersection points. ACY will knit fabrics with a smooth and plush hand feel.</p>
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
      const data7 = [{
          lustre: "Raw White, Dope Dyed Black",
          endUse: "Knitting / Weaving ",
          supplierOrigin: "China,  India",
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
        dynamicCell3.textContent =
          "DTY + Spandex (can be manufactured to specific requirement)";
        newRow3.appendChild(dynamicCell3);

        tableBody7.appendChild(newRow3);
      });
    </script>
  </section>




  <section class="products" id="p8">
    <div class="pro-dec">
      <div class="pro-img">
        <img src="img/psf.webp" alt="" class="pimage" />
        <div class="pro-head">
          <img src="img/icon9.svg" alt="" />
          <h1>PSF</h1>
          <img src="img/icon3.svg" alt="" id="icon3" />
        </div>
      </div>
      <div class="mission mis">
        <p>
          Polyester Staple Fibre is frequently used in Spinning, weaving, and non-woven materials. PSF is
          primarily employed in spinning. PSF can be classified as Semi Dull or Bright depending on the
          luster. Dope-dyed PSF can also be made in Optical White, Black, and other colors by combining
          different color masterbatches.</p>
        <p>Polyesters are made by polymerizing Purified Terephthalic Acid (PTA) and Mono Ethylene
          Glycol (MEG). The melt spun polymer is thus obtained and the bundle of continuous
          filament obtained by melt spinning is called the tow. In order to obtain cut fibres that are
          almost equal in length to cotton fibres, the tow is subjected to other processes such as
          drawing, crimping, spin finishing and then cutting into fixed lengths. The cut fibre is called
          PSF.</p>
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
      <tbody id="table-body8"></tbody>
    </table>

    <script>
      const data8 = [{
          lustre: "Semi Dull, Semidull Optical Bright",
          endUse: "Spinning / Nonwoven",
          supplierOrigin: "Thailand, China, Chinese Taipei, India",
        },
        // Add more data entries here if needed
      ];

      const tableBody8 = document.getElementById("table-body8");

      data8.forEach((item) => {
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

        tableBody8.appendChild(row);
        const newRow3 = document.createElement("tr");
        newRow3.className = "dynamic-row";
        const dynamicCell3 = document.createElement("td");
        dynamicCell3.colSpan = 3;
        dynamicCell3.textContent =
          "0.8 d to 6 d with varying lengths";
        newRow3.appendChild(dynamicCell3);

        tableBody8.appendChild(newRow3);
      });
    </script>
  </section>




  <section class="products" id="p9">
    <div class="pro-dec">
      <div class="pro-img">
        <img src="img/hollow.jpg" alt="" class="pimage" />
        <div class="pro-head">
          <img src="img/icon9.svg" alt="" />
          <h1>Solid & Hollow</h1>
          <img src="img/icon3.svg" alt="" id="icon3" />
        </div>
      </div>
      <div class="mission mis">
        <p>
          A polyester resin melt can be extracted through an arc-shaped spinning slit to create hollow polyester fibres. </p>
        <p>The thin, hollow strand of polyester from which hollow fibre is made gives that name. The hollow center holds air, which contributes to the lofty duvet filling. Due to the high tog rating of hollow fibre bedding, you can get incredibly warm bedding without using a heavy duvet. </p>
        <p>Conjugates, Non-Conjugates, with and without Silicon are all available in hollow fibre. The
main applicationsinclude fiberfill, filtering, padding, etc.</p>
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
      <tbody id="table-body9"></tbody>
    </table>

    <script>
      const data9 = [{
          lustre: "Hollow Conjugate Siliconised, Hollow Conjugate Non Siliconised",
          endUse: "Nonwoven",
          supplierOrigin: "Thailand, China, India",
        },
        // Add more data entries here if needed
      ];

      const tableBody9 = document.getElementById("table-body9");

      data9.forEach((item) => {
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

        tableBody9.appendChild(row);
        const newRow3 = document.createElement("tr");
        newRow3.className = "dynamic-row";
        const dynamicCell3 = document.createElement("td");
        dynamicCell3.colSpan = 3;
        dynamicCell3.textContent =
          "1.0 d to 15 d with varying lengths";
        newRow3.appendChild(dynamicCell3);

        tableBody9.appendChild(newRow3);
      });
    </script>
  </section>

  <section class="products lastp" id="p10">
    <div class="pro-dec">
      <div class="pro-img">
        <img src="img/High Tenacity Yarn.svg" alt="" class="pimage " />
        <div class="pro-head">
          <img src="img/icon9.svg" alt="" />
          <h1>High Tenacity</h1>
          <img src="img/icon3.svg" alt="" id="icon3" />
        </div>
      </div>
      <div class="mission mis">
        <p>
          The High Tenacity Yarn filaments should ideally have a cross-section with 5 to 8 vertices, forming a
          star shape.

        </p>
        <p class="para2 para21" id=""><i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i>60 to 85 cN/tex of force pertex</p>
        <p class="para2 para21"><i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i>15%–35% elongation at break</p>
        <p class="para2 para21"><i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i>shrinkage of 4% to 10% in hot air</p>
        <p class="para2 para21"><i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i>250–400 CN/tex of stretch recovery</p>
        <p class="para2 para21"><i class="fa-solid fa-circle-dot fa-sm" style="color: #ed3237;"></i>Typical, Low or Super Low Shrinkage is available</p>
        <p>
          High-tenacity yarn possesses the capacity to endure intensely hot environments, which can
          challenge the capabilities ofstandard multifilament fibersto their breaking limit.
        <p>The high-tenacity yarn is ideal for use in the production of commercial fabrics, carpets, and tarpaulin and
          apt with knitting and weaving process.
        </p>


      </div>

    </div>
    <!-- <p class="para2 para21"> id="para2">The High Tenacity Yarn filaments should ideally have a cross-section with 5 to 8 vertices, forming a star shape.</p> -->
    <!-- <div class="points para2">
            <div class="point1">
               <a href="./Specialties.php#p1"><h4><img src="img/icon2.svg" alt="">Spandex Yarn</h4></a>
               <a href="./Specialties.php#p2"> <h4><img src="img/icon2.svg" alt="">Bamboo & Lyocell Fibers And Yarns</h4></a>
            </div>
            <div class="point1">
               <a href="./Specialties.php#p3"> <h4><img src="img/icon2.svg" alt="">Linen</h4></a>

        </div> -->

    <table class="table">
      <thead class="gray">
        <tr>
          <th id="col-1" scope="col">Lustre</th>
          <th id="col-2" scope="col">End Use</th>
          <th id="col-3" scope="col">Exporter Origin</th>
        </tr>
      </thead>
      <tbody id="table-body10"></tbody>
    </table>

    <script>
      const data10 = [{
          lustre: "Brt , SD, FD",
          endUse: "Sling, Tie-down, Strapping. Geotextile, Conveyorbelt fabric, Dipped Cord, Hose,Sunshade,Outdoor furniture, Rope, Net",
          supplierOrigin: " China, India, Chinese Taipei, Indonesia, Vietnam, Malaysia, Korea ",
        },
        // Add more data entries here if needed
      ];

      const tableBody10 = document.getElementById("table-body10");

      data10.forEach((item) => {
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

        tableBody10.appendChild(row);
        const newRow3 = document.createElement("tr");
        newRow3.className = "dynamic-row";
        const dynamicCell3 = document.createElement("td");
        dynamicCell3.colSpan = 3;
        dynamicCell3.textContent =
          "150 d to 600 d";
        newRow3.appendChild(dynamicCell3);

        tableBody10.appendChild(newRow3);
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