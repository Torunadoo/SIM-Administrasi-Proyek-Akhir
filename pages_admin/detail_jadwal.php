<?php
session_start();
error_reporting(0);
ini_set('display_errors', 0);

if ($_SESSION['user'] == '' || ($_SESSION['status'] == 4 && $_Session['status2'] == 1)) {
  header("location:../index.php");
}

include "../_database/config.php";
// Backend Pendaftaran Evaluasi
if(isset($_POST['input']))
{
  $nama = $_POST['nama'];
  $nrp = $_POST['nrp'];
  $angkatan = $_POST['angkatan'];
  $prodi = $_POST['prodi'];
  $jumlah_sks = $_POST['sks'];
  $semester = $_POST['smt'];
  $lab = $_POST['nl'];
  $pembimbing = $_POST['ds1'];
  $pembimbing_2 = $_POST['ds2'];
  $jenis_eval = $_POST['jenis_eval'];
  $topik_pa = $_POST['tema_pa'];
  $judul_pa = $_POST['judul_pa'];
  $transkrip_nilai = $_POST['trs_nilai'];
  $frs = $_POST['frs'];


  $query = mysqli_query($koneksi, "INSERT into pendaftareval values('','$nama','$nrp','$angkatan','$prodi','$jumlah_sks','$semester','$lab', '$pembimbing', '$pembimbing_2', '$jenis_eval','$topik_pa','$judul_pa','$transkrip_nilai','$frs', sysdate(),'')");

    if($query)
    {
      ?><script><?php $_SESSION['sukses'] = true;?></script> 
      <script>history.pushState({}, "", "")</script><?php

    }
    else
    {
      ?><script><?php $_SESSION['input'] = true;?></script> 
      <script>history.pushState({}, "", "")</script><?php
    }
}?>



<!-- KIRIM SURAT -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    SIM Administrasi Proyek Akhir
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link rel="icon" type="image/png" href="../assets/images/favicon.png">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="">
        <span class="ms-1 font-weight-bold">Dashboard Admin</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">

        <!-- HOME  -->
        <li class="nav-item">
          <a class="nav-link  " href="./admin.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                </svg>
            </div>
            <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>

        <!-- BAR NAVIGASI UNTTUK KADEP  -->
        <?php if ($_SESSION['status2'] == 5) { ?>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Navigasi Kadep</h6>
        </li>

        <!-- Pemberian mandat kadep -->
        <?php if($_SESSION['status2'] == '5'){ ?>
          <li class="nav-item">
            <a class="nav-link  " href="./kirimkadep.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-exclamation-fill" viewBox="0 0 16 16">
                  <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 1.59 2.498C8 14 8 13 8 12.5a4.5 4.5 0 0 1 5.026-4.47L15.964.686Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
                  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1.5a.5.5 0 0 1-1 0V11a.5.5 0 0 1 1 0Zm0 3a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Pengajuan Mandat </span>
            </a>
          </li>
        <?php } ?>
          
        <!--Validasi Surat MAHASISWA-->
        <?php if ($_SESSION['status2'] == '5') {?>
        <li class="nav-item">
          <a class="nav-link  " href="./validasisurat2.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-check-fill" viewBox="0 0 16 16">
                <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1.146 6.854-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Validasi Surat Mahasiswa</span>
          </a>
        </li>
        <?php } ?>

        <!-- Validasi Surat Dosen -->
        <?php if ($_SESSION['status2'] == '5') {?>
        <li class="nav-item">
          <a class="nav-link  " href="./validasidsn.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-check-fill" viewBox="0 0 16 16">
                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Z"/>
                <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Validasi Surat Dosen</span>
          </a>
        </li>
        <?php } ?>

        <!-- Validasi Surat Tendik -->
        <?php if ($_SESSION['status2'] == '5') {?>
        <li class="nav-item">
          <a class="nav-link  " href="./validasitndk.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-check-fill" viewBox="0 0 16 16">
                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm1.354 4.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Validasi Surat Tendik</span>
          </a>
        </li>
        <?php } ?>


        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Navigasi Dosen</h6>
        </li>
        <?php } ?>
        
        <!--Mahasiswa Pendaftar Proyek Akhir-->
            <!-- <li class="nav-item">
              <a class="nav-link  " href="./pendaftarpa_min.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  </svg>
                </div>
                <span class="nav-link-text ms-1">Pendaftar Proyek Akhir</span>
              </a>
            </li> -->

            <!--Mahasiswa Proyek Akhir terverifikasi-->
            <li class="nav-item">
              <a class="nav-link  " href="./mahasiswapa_min.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  </svg>
                </div>
                <span class="nav-link-text ms-1">Mahasiswa Proyek Akhir</span>
              </a>
            </li>

            <!--Kalender Proyek Akhir-->
            <li class="nav-item">
              <a class="nav-link  active" href="./jadwalpa_min.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  </svg>
                </div>
                <span class="nav-link-text ms-1">Penjadwalan Evaluasi</span>
              </a>
            </li>

              <!-- Nilai Akhir Proyek Akhir -->
              <li class="nav-item"> 
              <a class="nav-link  " href="./nilaipa_min.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
                    <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                  </svg>
                </div>
                <span class="nav-link-text ms-1">Nilai Proyek Akhir</span>
              </a>
            </li>
             
         
        <!-- DATA MAGANG -->
        <?php if($_SESSION['status2'] == '2'){ ?>
        <li class="nav-item"> 
          <a class="nav-link  " href="./datamagang.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
                <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Data Magang</span>
          </a>
        </li>  
        <?php } ?>

        <!--Ganti Password-->
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="../profile.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-lock-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Ganti Password</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard Admin</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Penjadwalan Evaluasi Proyek Akhir</li>
          </ol>
          <h5 class="font-weight-bolder mb-0"> Penjadwalan Evaluasi Proyek Akhir</h5>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            
          </div>
          <ul class="navbar-nav  justify-content-end">
            <!-- nama user -->
            <li class="nav-item d-flex align-items-center">
              <a href="../profile.php" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none"><?php echo $_SESSION['user'] ?></span>
              </a>
            </li>
            <!--li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li-->
            <!-- jarak -->
            <li class="nav-item px-3 d-flex align-items-center">
              <!--a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a-->
            </li>
            <!-- notif -->
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <!-- <i class="fa fa-bell cursor-pointer"></i> -->
                <!-- angka pesan masuk -->
                <?php 
                include "../_database/config.php";
                $nama = $_SESSION['user'];
                $query_mhsw = mysqli_query($koneksi, "SELECT * FROM bimbingan WHERE nama = '$nama'");
                $data_mhsw = mysqli_fetch_assoc($query_mhsw);

                if ($nama) {
                  $query1 = mysqli_query($koneksi, "SELECT * FROM bimbingan WHERE (status_dosen1 = 1 || status_dosen1 = 2) & (notif = 1 || notif = 2) ORDER BY id_no DESC");
                  $data1 = mysqli_num_rows($query1); ?>

                <i class="fa fa-bell cursor-pointer" <?php if($data1 > 0){echo 'style="color:#63B3ED"';} ?>></i>
                <span class="primary"><?php echo $data1 ?></span>
                <?php } else if ($_SESSION["status2"] == 3) {
                  $query2 = mysqli_query($koneksi, "SELECT * FROM bimbingan WHERE ((status_dosen1 = 1 || status_dosen1 = 2) & (notif = 1 || notif = 2)) || ((status_dosentkk = 1 || status_dosentkk = 2) & (notif = 1 || notif = 2)) ORDER BY id_no DESC");
                  $data2 = mysqli_num_rows($query2); ?>

                <i class="fa fa-bell cursor-pointer" <?php if($data2 > 0){echo 'style="color:#63B3ED"';} ?>></i>
                <span class="primary"><?php echo $data2 ?></span>
                
                <?php } ?>
              </a>
              <!-- dropdown surat masuk -->
              <ul class="dropdown-menu  dropdown-menu-end  px-1 py-1 me-sm-n3" aria-labelledby="dropdownMenuButton">
                <div class="card example-1 scrollbar-deep-purple bordered-deep-purple thin" style = "height:200px">
                  <form action="" method = "post">
                    <?php 
                    include '../_database/config.php';
                    $nama = $_SESSION['user'];
                    $query = mysqli_query($koneksi, 'SELECT * FROM bimbingan ORDER BY id_no DESC');
                    while ($data = mysqli_fetch_array($query)) { 
                    
                    if ($data['status_dosen1'] == 1 && $data['notif'] == 1 && $data['nama'] == $nama) { ?>
                    <li class="mb-2">
                      <a class="dropdown-item border-radius-md" href="javascript:;">
                        <div class="d-flex py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <button type="submit" name="revisi" class="border-0 btn btn-outline-dark btn-sm px-0 mb-0 mt-1">
                              <h6 class="text-sm font-weight-normal mb-1">
                                <span class="font-weight-bold">Revisi</span>
                                <span class="font-weight"><?php echo $data['perihal']; ?></span>
                              </h6>
                            </button>
                            <p class="text-xs text-secondary mb-0">
                              <?php echo $data['tanggal'] ?>
                            </p>
                            <!-- Menginput id surat -->
                            <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                          </div>
                        </div>
                      </a>
                    </li>
                    <?php } 
                    else if ($data['status_dosen1'] == 2 && $data['notif'] == 2 && $data['nama'] == $nama) { ?>
                    <li class="mb-2">
                      <a class="dropdown-item border-radius-md" href="javascript:;">
                        <div class="d-flex py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <button type="submit" name="selesai" class="border-0 btn btn-outline-dark btn-sm px-0 mb-0 mt-1">
                              <h6 class="text-sm font-weight-normal mb-1">
                                <span class="font-weight-bold">Selesai</span>
                                <span class="font-weight"><?php echo $data['perihal']; ?></span>
                              </h6>
                            </button>
                            <p class="text-xs text-secondary mb-0">
                              <?php echo $data['tanggal'] ?>
                            </p>
                            <!-- Menginput id surat -->
                            <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                          </div>
                        </div>
                      </a>
                    </li>
                    <?php } 
                    else if ($data['status_dosentkk'] == 1 && $data['notif'] == 1 && $_SESSION["status2"] == 3) { ?>
                    <li class="mb-2">
                      <a class="dropdown-item border-radius-md" href="javascript:;">
                        <div class="d-flex py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <button type="submit" name="hima1" class="border-0 btn btn-outline-dark btn-sm px-0 mb-0 mt-1">
                              <h6 class="text-sm font-weight-normal mb-1">
                                <span class="font-weight-bold">Revisi</span>
                                <span class="font-weight"><?php echo $data['perihal']; ?></span>
                              </h6>
                            </button>
                            <p class="text-xs text-secondary mb-0">
                              <?php echo $data['tanggal'] ?>
                            </p>
                            <!-- Menginput id surat -->
                            <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                          </div>
                        </div>
                      </a>
                    </li>
                    <?php } 
                    else if ($data['status_dosentkk'] == 2 && $data['notif'] == 2 && $_SESSION["status2"] == 3) { ?>
                    <li class="mb-2">
                      <a class="dropdown-item border-radius-md" href="javascript:;">
                        <div class="d-flex py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <button type="submit" name="hima2" class="border-0 btn btn-outline-dark btn-sm px-0 mb-0 mt-1">
                              <h6 class="text-sm font-weight-normal mb-1">
                                <span class="font-weight-bold">selesai</span>
                                <span class="font-weight"><?php echo $data['perihal']; ?></span>
                              </h6>
                            </button>
                            <p class="text-xs text-secondary mb-0">
                              <?php echo $data['tanggal'] ?>
                            </p>
                            <!-- Menginput id surat -->
                            <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                          </div>
                        </div>
                      </a>
                    </li>
                    <?php } } ?>
                  </form>
                </div>
              </ul>
            </li>
            <!-- and notif -->
            <!-- jarak -->
            <li class="nav-item px-3 d-flex align-items-center">
              <!-- <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a> -->
            </li>
            <li class="nav-item d-flex align-items-center">
                <a href="../logout.php" href="javascript:;" class="nav-link text-body p-0" >
                  <i class="fas fa-sign-out-alt"></i>
                  <span class="d-sm-inline d-none">Logout </span>
                </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 p-3">
            <h5>Form Penjadwalan Evaluasi Proyek Akhir</h5>
             <div class="row">
                
                    <div class="row">
                        <?php 
                        include "../_database/config.php";
                    
                        $id = $_GET['nrp'];
                        $query = mysqli_query($koneksi, "SELECT * FROM form_penjadwalan WHERE nrp='$id'");
                        while($row = mysqli_fetch_assoc($query)){

                          if(isset($row['jenis_eval'])){
                            $status=$row['jenis_eval'];
      
                            if($status== 'Seminar Proposal Proyek Akhir'){
                              $tampil='Seminar Proposal Proyek Akhir';
                            } elseif ($status== 'Sidang') {
                              $tampil='Sidang Proyek Akhir';
                            }
                            else{
                              echo 'Tidak ada data';
                            }
                          }
                        ?>
                        
                        <div class="form-group col-md-6">
                            <label for="formFile" class="form-label">Nama Mahasiswa</label>
                            <label name="nama" class="form-control" aria-label="default input example"><?php echo $row['nama']?></label>
                            <input name="nama" class="form-control" type="hidden" aria-label="default input example" value="<?php echo $row['nama']?>" >
                            </div>
                        <div class="form-group col-md-6">
                            <label for="formFile" class="form-label">NRP Mahasiswa</label>
                            <label name="nrp" class="form-control" aria-label="default input example"><?php echo $row['nrp']?></label>
                            <input name="nrp" class="form-control" type="hidden" aria-label="default input example" value="<?php echo $row['nrp']?>" >
                        </div>
                    </div>
                
                
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="formFile" class="form-label">Jenis Evaluasi</label>
                      <label name="jenis_eval" class="form-control" aria-label="default input example"><?php echo $tampil?></label>
                      <input name="jenis_eval" class="form-control" type="hidden" aria-label="default input example" value="<?php echo $tampil?>" >
                    </div>
                    <div class="form-group col-md-6">
                      <label for="formFile" class="form-label">Program Studi</label>
                      <label name='prodi' class="form-control" aria-label="default input example"><?php echo $row['prodi']?></label>
                      <input name="prodi" class="form-control" type="hidden" aria-label="default input example" value="<?php echo $row['prodi']?>" >
                    </div>
                  </div>
              
                
                  <div class="row">
                    <div class="mb-0">
                      <label for="formFile" class="form-label">Judul Proyek Akhir</label>
                      <label name='judul_pa' class="form-control" aria-label="default input example"><?php echo $row['judul_pa']?></label>
                      <input name="judul_pa" class="form-control" type="hidden" aria-label="default input example" value="<?php echo $row['judul_pa']?>" >
                    </div>
                  </div>
                
                
                  <div class="row">
                    <div class="mb-0">
                      <label for="formFile" class="form-label">Dosen Pembimbing 1</label>
                      <label name='dosbing1' class="form-control" aria-label="default input example"><?php echo $row['dosbing1']?></label>
                      <input name="dosbing1" class="form-control" type="hidden" aria-label="default input example" value="<?php echo $row['dosbing1']?>" >
                    </div>
                  </div>
                
                
                  <div class="row">
                    <div class="mb-0">
                      <label for="formFile" class="form-label">Dosen Pembimbing 2</label>
                      <label name='dosbing2' class="form-control" aria-label="default input example"><?php echo $row['dosbing2']?></label>
                      <input name="dosbing2" class="form-control" type="hidden" aria-label="default input example" value="<?php echo $row['dosbing2']?>" >
                    </div>
                  </div>
                
              
                  <div class="row">
                    <div class="mb-0">
                      <div class="form-group col-md-12">
                        <label for="formFile" class="form-label">Dosen Penguji</label>
                        <label name='dosji' class="form-control" aria-label="default input example"><?php echo $row['dosji']?></label>
                        <input name="dosbing2" class="form-control" type="hidden" aria-label="default input example" value="<?php echo $row['dosji']?>" >
                      </div>
                    </div>
                  </div>
                
                <div class="row">
                  <div class="form-group col-md-6">
                    <label id="label-tgl1" for="example-date-input" class="form-control-label">Tanggal Pelaksanaan</label>
                    <label name='tanggal' class="form-control" aria-label="default input example"><?php echo $row['tanggal']?></label>
                    
                  </div>    
                  <div class="form-group col-md-6">
                  <label for="appt" class="form-control-label">Waktu Pelaksanaan</label>
                  <label name='waktu' class="form-control" aria-label="default input example"><?php echo $row['waktu']?></label>
                  </div> 
                </div>
                <div class="row">
                    <div class="mb-0">
                      <label for="formFile" class="form-label">Tempat Pelaksanaan</label>
                      <label name='tempat' class="form-control" aria-label="default input example"><?php echo $row['tempat']?></label>
                    </div>
                  </div>
                  
                <div class="col-auto" >
                  <div class="mb-0">
                    <a href="./validasi_jadwal.php"><button type="button" class="btn bg-gradient-secondary">Kembali</button></a>
              
                    <a class="btn btn-primary" name="update_validasi" href="../pages_admin/update_jadwal.php?nrp=<?php echo $row['nrp'] ?>" role="button">Validasi</a>
                  </div>
                        <?php } ?>
                </div>
             </div>
            </div>          
          </div>
        </div>
      </div>
    </div>
  </main>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
  <!-- notif sukses memohon pencarian dosbing -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['sukses']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Berhasil',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['sukses']); ?>
    <?php endif; ?>
    <!-- notif gagal diajukan -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['input']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Gagal',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['input']); ?>
    <?php endif; ?>
    <!-- notif sukses melakukan perubahan -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['sukses2']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Berhasil Melakukan Perubahan',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['sukses2']); ?>
    <?php endif; ?>
    <!-- notif sukses membatalkan pengiriman -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['sukses3']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Berhasil Membatalkan Pengiriman',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['sukses3']); ?>
    <?php endif; ?>
</body>

</html>