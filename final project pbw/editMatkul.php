<?php 

include "function.php";

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
$nama = $_SESSION['nama'];

$role = $_SESSION['role'];
$role = $_SESSION['id'];

$id = $_GET['id_mk'];
$queryMK = mysqli_query($koneksi, "SELECT * FROM matakuliah WHERE id_mk = '$id'");
$mk = mysqli_fetch_assoc($queryMK);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard Sistem Informasi Udayana</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Sistem Perkuliahan</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i>Hai, <?= $nama; ?> </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <?php if($role == "1") { ?>
                            <a class="dropdown-item" href="profilMhs.php">Lihat Profil</a>
                        <?php } elseif($role == "2") { ?>
                            <a class="dropdown-item" href="profilDosen.php">Lihat Profil</a>
                        <?php } elseif($role == "0") { ?>
                            <a class="dropdown-item" href="profilAdmin.php">Lihat Profil</a>
                        <?php } ?>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="mhs.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-list-alt"></i></div>
                                Daftar Mahasiswa</a
                            >
                            <a class="nav-link" href="dosen.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-list-alt"></i></div>
                                Daftar Dosen</a
                            >
                            <a class="nav-link active" href="kelas.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-clipboard-list"></i></div>
                                Daftar Kelas</a
                            >
                            <a class="nav-link" href="bimbingan.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-th-list"></i></div>
                                Daftar Bimbingan</a
                            >
                            <?php if($role == "0") { ?>
                            <a class="nav-link" href="matkul.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Matakuliah</a>
                            <?php } ?>
                            <?php if($role == "1") { ?>
                            <a class="nav-link" href="krs.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-copy"></i></div>
                                KRS</a>
                            <?php } ?>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h3 class="mt-4">Mengedit Matakuliah</h3>
                        <div class="card mb-4">
                            <form form action="function.php?act=editMatakuliah&id_mk=<?= $id; ?>" id="buat" method="POST" >
                                <div class="form-group ml-4 py-3 mb-0">
                                    <label for="kode_mk">Kode Matakuliah</label>
                                    <input type="text" class="form-control col-sm-3" id="kode_mk" name="kode_mk"  value="<?= $mk['kode_mk']; ?>" >
                                </div>
                                <div class="form-group ml-4">
                                    <label for="matakuliah">Nama Matakuliah</label>
                                    <input type="text" class="form-control col-sm-3" id="matakuliah" name="matakuliah"  value="<?= $mk['matakuliah']; ?>">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="sks">SKS</label>
                                    <input type="number" class="form-control col-sm-3" id="sks" name="sks" value="<?= $mk['sks']; ?>">
                                </div>
                                <input type="submit" name="buat_btn" id="buat" class="btn btn-primary ml-4 mb-3" value="Edit Matakuliah">
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="scripts.js"></script>
    </body>
</html>
