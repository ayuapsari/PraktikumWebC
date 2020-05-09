<?php 
    require 'function.php';

    if( !isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }

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
            <ul>
            <img class="logounud" src="./img/logo1.png" height="100px" width="300px"/>
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
            <h1>Pembuat Web</h1>
            <div class="garis"></div>
            <h2>MADE SRI AYU APSARI</h2>
            <img style="width: 30px; float: left; margin-right: 20px;" src="./img/logowa.png" alt="#">
            <h2>089669247014</h2>
            <img style="width: 30px; float: left; margin-right: 20px;" src="./img/logoline.png" alt="#">
            <h2>ayuapsaarii</h2>
            <img style="width: 30px; float: left; margin-right: 20px;" src="./img/logoemail.png" alt="#">
            <h2>ayuapsaarii25@gmail.com</h2>
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