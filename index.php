<!DOCTYPE html>
<html>
  <head>
    <title>Canteen UNY</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="shortcut icon" type="image/png" href="images/logo.png">
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=SF Pro Display:wght@500&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=SF Pro Text:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@700&display=swap"
    />
  </head>
  <body>
    <div class="homepagelogin">
      <div class="stand flex-1 w-full flex-col">
        <div class="grid-makanan2" id="gridMakanan">
          <div class="foodgrid1">
            <div class="bg"></div>
            <img
              class="cara-membuat-ayam-kecap-spesia-icon"
              alt=""
              src="images/029143400-1587475246caramembuatayamkecapspesial780x440-12@1x.png"
            />
            <div class="nama-warung">Takoyaki</div>
            <div class="type2"><div class="tipe-jualan">Korean Food</div></div>
          </div>
        </div>
        <div class="grid-makanan5" id="gridMakanan">
          <div class="foodgrid1">
            <div class="bg"></div>
            <img
              class="cara-membuat-ayam-kecap-spesia-icon"
              alt=""
              src="images/029143400-1587475246caramembuatayamkecapspesial780x440-15@1x.png"
            />
            <div class="nama-warung">Teh Poci</div>
            <div class="type5">
              <div class="tipe-jualan">Teh Indonesia</div>
            </div>
          </div>
        </div>
        <div class="grid-makanan6" id="gridMakanan">
          <div class="foodgrid1">
            <div class="bg"></div>
            <img
              class="cara-membuat-ayam-kecap-spesia-icon"
              alt=""
              src="images/029143400-1587475246caramembuatayamkecapspesial780x440-16@1x.png"
            />
            <div class="nama-warung">Warung Andalas</div>
            <div class="type6">
              <div class="tipe-jualan">Spesial Gado-gado</div>
            </div>
          </div>
        </div>
        <div class="grid-makanan7" id="gridMakanan">
          <div class="foodgrid1">
            <div class="bg"></div>
            <img
              class="cara-membuat-ayam-kecap-spesia-icon"
              alt=""
              src="images/029143400-1587475246caramembuatayamkecapspesial780x440-17@1x.png"
            /><label class="nama-warung7">Warung Bu Dwi</label
            ><label class="type7"
              ><div class="tipe-jualan">Spesial Ayam</div></label
            >
          </div>
        </div>
      </div>
      <header class="title-bar flex-1 w-full flex-col">
        <div class="branding">
          <div class="daftar-stand">Daftar Stand</div>
          <div class="group-div">
            <b class="canteen">CANTEEN</b
            ><img
              class="branding-uny-1"
              alt=""
              src="images/branding-uny-1@2x.png"
            />
          </div>
        </div>
      </header>
      <section class="tab-bar flex-1 w-full flex-col">
        <button class="beranda">
          <img class="svg-icon" alt="" src="images/svg.svg" /><b
            class="beranda1"
            >Beranda</b
          ></button
        ><button class="pesanan" id="pesanan">
          <img class="svg-icon1" alt="" src="images/svg1.svg" /><b
            class="pesanan1"
            >Pesanan</b
          ></button
        ><button class="profil" id="profil">
          <img class="svg-icon2" alt="" src="images/svg2.svg" /><b
            class="profil1"
            >Profil</b
          >
        </button>
      </section>
    </div>

    <script>
      var gridMakanan = document.getElementById("gridMakanan");
      if (gridMakanan) {
        gridMakanan.addEventListener("click", function (e) {
          // Please sync "2. Stand/1" to the project
        });
      }
      
      var pesanan = document.getElementById("pesanan");
      if (pesanan) {
        pesanan.addEventListener("click", function (e) {
          // Please sync "15. List order/Ongoing/null" to the project
        });
      }
      
      var profil = document.getElementById("profil");
      if (profil) {
        profil.addEventListener("click", function (e) {
          // Please sync "17. Profile/Noname" to the project
        });
      }
      </script>
  </body>
</html>
