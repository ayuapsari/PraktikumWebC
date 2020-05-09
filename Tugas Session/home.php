<?php 
  require 'function.php';

  if( !isset($_SESSION["login"])) {
      header("Location: login.php");
      exit;
  }

  $nama = $_SESSION["username"];
  $type = $_SESSION["role"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Telkom University</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="kiri">
    <section class="logo">
      <img class="logo-1" src="./img/logo.png" height="170px" width="150px"/>
    </section>
    <section class="kiri-bawah">
      <h3>ARTIKEL POPULER</h3>
    </section>
    <section class="kiri-bawah-1">
      <a href="#" style="text-decoration: none;">
        <h4>Desain Web</h4>
      </a>
    </section>
    <section class="kiri-bawah-1">
      <a href="#" style="text-decoration: none;">
        <h4>HTML</h4>
      </a>
    </section>
    <section class="kiri-bawah-1">
      <a href="#" style="text-decoration: none;">
        <h4>CSS</h4>
      </a>
    </section>
    <section class="kiri-bawah-1">
      <a href="#" style="text-decoration: none;">
        <h4>Lain-lain</h4>
      </a>
    </section>
    <section class="kiri-bawah-1">
      <a href="logout.php" style="text-decoration: none;">
        <h4>Logout</h4>
      </a>
    </section>
  </div>
  <div class="kanan">
    <section class="navbar">
      <img class="logo-1" src="./img/logo1.png" height="100px" width="300px"/>
    </section>
    <section class="cover"></section>
    <section class="navbar">
      <ul>
        <li>
          <a href="kontak.php">
            <h3>KONTAK</h3>
          </a>
        </li>
        <li>
          <a href="pengajar.php">
            <h3>PENGAJAR</h3>
          </a>
        </li>
        <li>
          <a href="about.php">
            <h3>TENTANG</h3>
          </a>
        </li>
        <li>
          <a href="home.php">
            <h3>HOME</h3>
          </a>
        </li>
      </ul>
    </section>
    <section class="content">
      <h1 style="text-align: center;">Selamat Datang, <span style="color: #990000; font-weight: bold"><?= $nama; ?></span>!</h1>
      <p style="text-align: center; font-size: 15px;">(Anda login sebagai : <?= $type; ?>)</p>
      <h2 style="color: black">Berita terkini</h2>
      <img style="width: 300px; float: left; margin-right: 20px; " src="./img/gambar1.jpeg">
      <p>Tim Dosen Fakultas Teknik Elektro membuat sebuah alat inovasi yaitu Disinfection Chamber. Alat ini dibuat untuk membantu banyak pihak untuk lebih siap menghadapi penularan virus Corona (Covid-19) yang pada saat artikel ini ditulis sudah menyebar ke wilayah Kota Bandung dan sekitarnya.
	  Implementasi dari alat ini dalam waktu dekat akan digunakan oleh Polresta Bandung, Soreang untuk mengantisipasi penyebaran Covid-19 di wilayah tersebut. Sehingga nantinya para pengunjung, petugas kepolisian dan ASN yang hendak masuk kantor dibersihkan terlebih dahulu pada Disinfection Chamber ini. Tidak hanya disinfektan, alat ini juga bisa membasmi bakteri dan virus berkat adanya sinar UV yang dipancarkan di dalam alat ini.
	  Alat ini merupakan kolaborasi antara Dosen dan Mahasiswa Telkom University. Mereka adalah (dosen) Ramdhan Nugraha, Faisal Budiman, Ridho Rosa, dan M Zakiyullah. Lalu ada (mahasiswa) Iqbal Al-Fayedh, Klin, dan Ahmad.
	  “Saat ini baru diimplementasikan di Kapolresta Bandung, insya allah dalam waktu dekat ke tempat lain.”....</p>
      <a href="#">Baca Selengkapnya</a>
      <h2 style="color: black; clear: both;">Galeri</h2>
      <img style="width: 300px; height: 200px; float: left; margin-right: 20px; margin-bottom: 30px;"
        src="./img/gambar2.jpg">
      <img style="width: 300px; height: 200px; float: left; margin-right: 20px; margin-bottom: 30px;"
        src="./img/gambar3.jpg">
      <img style="width: 300px; height: 200px; float: left; margin-right: 20px; margin-bottom: 30px;"
        src="./img/gambar4.jpg">
      <img style="width: 300px; height: 200px; float: left; margin-right: 20px; margin-bottom: 30px;"
        src="./img/gambar5.jpg">
    </section>
  </div>
  <div class="footer">
    <h3>TELKOM UNIVERSITY</h3>
      <h4>Gedung Bangkit Telkom University</h4>
      <h4>Jl. Telekomunikasi Terusan Buah Batu Indonesia 40257, Bandung , Indonesia</h4>
      <h4>(022) 7566456</h4>
      <h4>info@telkomuniversity.ac.id</h4>
  </div>
</body>
</html>