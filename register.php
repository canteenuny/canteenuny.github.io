<?php

include 'config.php';

error_reporting(0);

if(isset($_POST['register'])) {
  $nama_depan = mysqli_real_escape_string($conn, $_POST['namaDepan']);
  $nama_belakang = mysqli_real_escape_string($conn, $_POST['namaBelakang']);
  $telepon = '62'.mysqli_real_escape_string($conn, $_POST['telepon']);

  $check_telpon = mysqli_num_rows(mysqli_query($conn, "SELECT telepon FROM pembeli WHERE telepon='$telepon'"));

  if($check_telpon > 0) {
    echo "<script>alert('Nomor telepon sudah terdaftar.');</script>";
  } else {
    $sql = "INSERT INTO pembeli (nama_depan, nama_belakang, telepon) VALUES ('$nama_depan', '$nama_belakang', '$telepon')";
    $result = mysqli_query($conn, $sql);
    if($result) {
      $_POST["namaDepan"] = "";
      $_POST["namaBelakang"] = "";
      $_POST["telepon"] = "";
      echo "<script>alert('User berhasil didaftarkan.');</script>";
    } else {
      echo "<script>alert('Pendaftaran gagal.');</script>";
    }
  }

}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./register.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=SF Pro Display:wght@500;600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=SF Pro Text:wght@400;500;600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@700&display=swap"
    />
  </head>
  <body>
    <div class="registernull">
      <header class="navigation11">
        <a href="./login.php">
        <img
          class="button-icon"
          alt=""
          src="images/button.svg"
          id="buttonIcon"
        />
        </a>
        <div class="loginregister1">Daftar</div>
        <img class="navborder-icon1" alt="" src="images/navborder.svg" />
      </header>

      <form class="div4" method="post">
        <div class="div8">
          <div class="nama-depan">
            <span class="nama-depan-txt"
              ><span>Nama Depan</span><b class="b1">*</b></span
            >
          </div>
          <div class="div6">
            <div class="input4">
              <img
                class="inputborder-icon2"
                alt=""
                src="images/inputborder2.svg"
              /><input
                class="nama-depan1"
                type="text"
                placeholder="Nama depan"
                required
                id="namaDepan"
                name="namaDepan"
                value="<?php echo $_POST["namaDepan"]; ?>"
              />
            </div>
          </div>
        </div>
        
        <div class="div10">
          <div class="nama-depan2">
            <span class="nama-depan-txt"
              ><span>Nama Belakang</span><b class="b1">*</b></span
            >
          </div>
          <div class="div6">
            <div class="input4">
              <img
                class="inputborder-icon2"
                alt=""
                src="images/inputborder2.svg"
              /><input
                class="nama-depan1"
                type="text"
                placeholder="Nama belakang"
                required
                id="namaBelakang"
                name="namaBelakang"
                value="<?php echo $_POST["namaBelakang"]; ?>"
              />
            </div>
          </div>
        </div>

        <div class="div5">
          <div class="nama-depan">
            <span class="nama-depan-txt"
              ><span>No. Telepon</span><b class="b1">*</b></span
            >
          </div>
          <div class="div6">
            <div class="span1">
              <img
                class="indonesiasvg-icon1"
                alt=""
                src="images/indonesiasvg1.svg"
              />
              <div class="div7">+62</div>
            </div>
            <div class="input2">
              <img
                class="inputborder-icon1"
                alt=""
                src="images/inputborder.svg"
              /><input
                class="input3"
                type="telNo"
                placeholder="81234567890"
                required
                id="telepon"
                name="telepon"
                value="<?php echo $_POST["telepon"]; ?>"
              />
            </div>
          </div>
        </div>        

        <button class="tombol-blokaktif1" name="register">
          <div class="kirim-otp1">Daftar</div>
        </button>
        <div class="dengan-mendaftar-saya-mengert">
          <span class="nama-depan-txt"
            ><span>Dengan mendaftar, saya mengerti dan menyetujui </span
            ><span class="ketentuan-penggunaan">Ketentuan Penggunaan </span
            ><span>dan</span
            ><span class="ketentuan-penggunaan"> Kebijakan Privasi</span></span
          >
        </div>
        <a class="ketentuan-penggunaan1">Ketentuan Penggunaan</a
        ><a class="kebijakan-privasi1">Kebijakan Privasi</a>
      </form>
      
    </div>

    <script>
      var input = document.getElementById("input");
      if (input) {
        input.addEventListener("click", function (e) {
          // Please sync "19.2 Login/Register" to the project
        });
      }
      
      var namaDepan = document.getElementById("namaDepan");
      if (namaDepan) {
        namaDepan.addEventListener("click", function (e) {
          // Please sync "19.2 Login/Register" to the project
        });
      }
      
      var namaDepan1 = document.getElementById("namaDepan1");
      if (namaDepan1) {
        namaDepan1.addEventListener("click", function (e) {
          // Please sync "19.2 Login/Register" to the project
        });
      }
      
      var buttonIcon = document.getElementById("buttonIcon");
      if (buttonIcon) {
        buttonIcon.addEventListener("click", function (e) {
          // Please sync "1. Homepage/No login" to the project
        });
      }
      </script>
  </body>
</html>
