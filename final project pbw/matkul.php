<?php 

include "function.php";

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$queryMatakuliah = mysqli_query($koneksi, "SELECT * FROM matakuliah");

$nama = $_SESSION['nama'];

$role = $_SESSION['role'];

if($_SESSION["role"] == "1") {
    header("Location: mhs.php");
    exit;
} elseif($_SESSION["role"] == "2"){
    header("Location: dosen.php");
    exit;
}

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
                            <a class="nav-link" href="kelas.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-clipboard-list"></i></div>
                                Daftar Kelas</a
                            >
                            <a class="nav-link" href="bimbingan.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-th-list"></i></div>
                                Daftar Bimbingan</a
                            >
                            <?php if($role == "0") { ?>
                            <a class="nav-link active" href="matkul.php"
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
                        <h3 class="mt-4">Daftar Matakuliah</h3>
                        <div class="card mb-4">
                        <?php if($role == "0") { ?>
                            <div class="tambah mt-3 px-4">
                                <a href="tambahMatkul.php" class="btn btn-secondary">Tambah Matakuliah</a>
                            </div>
                        <?php } ?>
                            <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="col-sm-1">No</th>
                                                <?php if($role == "0") { ?>
                                                <th class="col-sm-1">Aksi</th>
                                                <?php } ?>
                                                <th class="col-sm-2">Kode Matakuliah</th>
                                                <th class="col-sm-3">Nama Matakuliah</th>
                                                <th class="col-sm-3">Jumlah SKS</th>
                                            </tr>
                                        </thead>
                                        <?php $i=1; ?>
                                        <?php while ($data = mysqli_fetch_assoc($queryMatakuliah)) { ?>
                                        
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <?php if($role == "0") { ?>
                                                <td><a href="editMatkul.php?id_mk=<?= $data['id_mk']; ?>" class="badge badge-primary ">Edit</a> | <a href="function.php?act=hapusMatakuliah&id_mk=<?= $data['id_mk']; ?>" onclick="return confirm('Yakin ingin menghapus matakuliah?');" class="badge badge-danger ">Hapus</a></td>
                                                <?php } ?>
                                                <td><?= $data['kode_mk']; ?></td>
                                                <td><?= $data['matakuliah']; ?></td>
                                                <td><?= $data['sks']; ?></td>
                                            </tr>
                                        <?php $i++; ?>
                                        <?php } ?>
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
