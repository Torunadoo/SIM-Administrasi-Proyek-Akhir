<?php
  session_start();
  if($_SESSION['user']==''  || $_SESSION['status'] != 2)
  {
        header("location:../index.php");
    }


    // aksi submit pada dosen
    if (isset($_POST['notif'])) {
      $id = $_POST['id'];
      $nama = $_SESSION['user'];
  
      // update notif dosen pemb 
      $query = mysqli_query($koneksi, 'SELECT * FROM suratmahasiswa ORDER BY id_no DESC');
      while ($data = mysqli_fetch_array($query)) {
      if ($data['dosen1'] == $nama) {
      $query = mysqli_query($koneksi, "UPDATE suratmahasiswa SET `notif`= 1 WHERE id_no = '$id' ");
      if ($query) { 
        header('location:validasisurat.php'); ?>
        <script>history.pushState({}, "", "")</script><?php
      } else { 
        header('location:./dosen.php'); ?>
        <script>history.pushState({}, "", "")</script><?php
      } } } }

      // update notif bimbingan proposal
      if (isset($_POST['bp'])) {
        $id = $_POST['id'];
        $nama = $_SESSION['user'];
        $query = mysqli_query($koneksi, 'SELECT * FROM bimbingan ORDER BY id_no DESC');
        while ($data = mysqli_fetch_array($query)) {
        if ($data['dosen1'] == $nama) {
        $query = mysqli_query($koneksi, "UPDATE bimbingan SET `notif`= 1 WHERE id_no = '$id' ");
        if ($query) { 
          header('location:bimbingansurat.php'); ?>
          <script>history.pushState({}, "", "")</script><?php
        } else { 
          header('location:./dosen.php'); ?>
          <script>history.pushState({}, "", "")</script><?php
        } 
          } 
        }
      }
  
      // update notif dosen koor1
      if (isset($_POST['koor1'])) {
        $id = $_POST['id'];
        if ($_SESSION['status2'] == 2 && $_SESSION['status'] == 2) {
          $query2 = mysqli_query($koneksi, "UPDATE suratmahasiswa SET `notif`= 2 WHERE id_no = '$id' ");
          if ($query2) { 
            header('location:validasisurat.php'); ?>
            <script>history.pushState({}, "", "")</script><?php
          } else { 
            header('location:./dosen.php'); ?>
            <script>history.pushState({}, "", "")</script><?php
          }
        }
      }
  
      // update notif dosen koor 2
      if (isset($_POST['koor2'])) {
        $id = $_POST['id'];
        if ($_SESSION['status3'] == 2 && $_SESSION['status'] == 2) {
          $query3 = mysqli_query($koneksi, "UPDATE suratmahasiswa SET `notif`= 2 WHERE id_no = '$id' ");
          if ($query3) { 
            header('location:validasisurat.php'); ?>
            <script>history.pushState({}, "", "")</script><?php
          } else { 
            header('location:./dosen.php'); ?>
            <script>history.pushState({}, "", "")</script><?php
          }
        }
      }
  
      // update notif dosen tkk
      if (isset($_POST['tkk'])) {
        $id = $_POST['id'];
        if ($_SESSION['status2'] == 1 && $_SESSION['status'] == 2) {
          $query3 = mysqli_query($koneksi, "UPDATE suratmahasiswa SET `notif`= 2 WHERE id_no = '$id' ");
          if ($query3) { 
            header('location:validasisurat.php'); ?>
            <script>history.pushState({}, "", "")</script><?php
          } else { 
            header('location:./dosen.php'); ?>
            <script>history.pushState({}, "", "")</script><?php
          }
        }
      }
      // akhir aksi submit dosen
    
    // aski submit kadep
    if (isset($_POST['mhsw'])) {
      $id = $_POST['id'];
    if ($_SESSION['status2'] == 5) {
      $query2 = mysqli_query($koneksi, "UPDATE suratmahasiswa SET `notif`= 3 WHERE id_no = '$id' ");
      if ($query2) { 
        header('location:validasisurat2.php'); ?>
        <script>history.pushState({}, "", "")</script><?php
      } else { 
        header('location:./dosen.php'); ?>
        <script>history.pushState({}, "", "")</script><?php
      }
    } }

    if (isset($_POST['dsn'])) {
      $id = $_POST['id'];
      if ($_SESSION['status2'] == 5) {
        $query2 = mysqli_query($koneksi, "UPDATE suratdosen SET `notif`= 1 WHERE id_no = '$id' ");
        if ($query2) { 
          header('location:validasidsn.php'); ?>
          <script>history.pushState({}, "", "")</script><?php
        } else { 
          header('location:./dosen.php'); ?>
          <script>history.pushState({}, "", "")</script><?php
        }
      } }

      if (isset($_POST['tndk'])) {
        $id = $_POST['id'];
        if ($_SESSION['status2'] == 5) {
          $query2 = mysqli_query($koneksi, "UPDATE surattendik SET `notif`= 1 WHERE id_no = '$id' ");
          if ($query2) { 
            header('location:validasitndk.php'); ?>
            <script>history.pushState({}, "", "")</script><?php
          } else { 
            header('location:./dosen.php'); ?>
            <script>history.pushState({}, "", "")</script><?php
          }
        } }
      // akhir aksi submit kadep
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Sistem Administrasi DTEO
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
        
        <span class="ms-1 font-weight-bold">Sistem Administrasi Dosen</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link  " href="./dosen.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>

        <!-- bar navigasi kadep  -->
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

        <!-- BAR NAVIGASI DOSEN  -->
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Navigasi Dosen</h6>
        </li>
        <?php } ?>

        <!--Permohonan Surat-->
        <li class="nav-item">
          <a class="nav-link  active" href="./permohonandosen.php">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-up" viewBox="0 0 16 16">
              <path d="M8.5 11.5a.5.5 0 0 1-1 0V7.707L6.354 8.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 7.707V11.5z"/>
              <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
            </svg>
            </div>
            <span class="nav-link-text ms-1">Permohonan Surat </span>
          </a>
        </li>

         <!--BIMBINGAN PROPOSAL-->
         <li class="nav-item">
          <a class="nav-link  " href="./bimbingansurat.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-up" viewBox="0 0 16 16">
                <path d="M8.5 11.5a.5.5 0 0 1-1 0V7.707L6.354 8.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 7.707V11.5z"/>
                <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Bimbingan Proposal</span>
          </a>
        </li>
        
        <!--Validasi Surat mAHASISWA-->
        <li class="nav-item">
          <a class="nav-link  " href="../pages_dosen/validasisurat.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Validasi Surat Mahasiswa</span>
          </a>
        </li>

        <!-- REKAP SURAT -->
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

        <!-- REKAP SURAT -->
        <?php if($_SESSION['status2'] !== '5'){ ?>
          <li class="nav-item"> 
            <a class="nav-link  " href="./rekapmndt.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
                  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Mandat Kadep</span>
            </a>
          </li>  
        <?php } ?>

        <!-- REKAP SURAT -->
        <?php if($_SESSION['status'] !== '5'){ ?>
          <li class="nav-item"> 
            <a class="nav-link  " href="./rekapdsn.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
                    <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                  </svg>
                </div>
              <span class="nav-link-text ms-1">Rekap Surat</span>
            </a>
          </li>
        <?php } ?>

    
        <!--GANTI PASSWORD -->
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
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Sistem Administrasi Dosen</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Permohonan Surat</li>
          </ol>
          <h5 class="font-weight-bolder mb-0">Permohonan Surat</h5>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="../profile.php" href="javascript:;" class="nav-link text-body font-weight-bold px-0">
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
            <li class="nav-item px-3 d-flex align-items-center">
              <!--a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a-->
            </li>
            <!-- Notif -->
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
                  <!-- icon lonceng/bel -->
                  <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell cursor-pointer"></i>
                    <!-- php surat masuk kadep -->
                    <?php 
                    include '../_database/config.php';
                    if ($_SESSION['status2'] == 5) {
                      $query_kadep = mysqli_query($koneksi, 
                      'SELECT * FROM suratmahasiswa WHERE (status_dosen2 = 2 || status_dosentkk = 2) && notif = 2 
                      UNION SELECT * FROM suratdosen WHERE notif = 0
                      UNION SELECT * FROM bimbingan WHERE notif = 0
                      UNION SELECT * FROM surattendik  WHERE notif = 0 ORDER BY id_no DESC' );
                      $data = mysqli_num_rows($query_kadep); ?>

                      <span class="primary"><?php echo $data ?></span>
                   <?php } 
                   $nama = $_SESSION['user'];
                   $query_mhs = mysqli_query($koneksi, "SELECT * FROM suratmahasiswa UNION SELECT * FROM bimbingan ORDER BY id_no DESC");
                   $data_mhs = mysqli_fetch_array($query_mhs); {
                     $tujuan = $data_mhs['dosen1'];
                     $tujuan2 = $data_mhs['dosen2'];
                     $tujuan3 = $data_mhs['dosen_tkk'];

                    //  php pesan masuk dosen tkk
                    if (($_SESSION['status'] == 2 && $tujuan == $nama ) ||
                    ($_SESSION['status2'] == 1 && $_SESSION['status'] == 2 && $tujuan3 == $nama) || 
                    ($_SESSION['status'] == 2 && $_SESSION['status3'] == 2 && $tujuan2 == $nama)) {
                      $query_tkk = mysqli_query($koneksi, 
                      "SELECT * FROM suratmahasiswa WHERE (dosen1 = '$nama' && notif = 0) || 
                      (dosen2 = '$nama' && status_dosen1 = 2 && notif = 1) || 
                      (dosen_tkk = '$nama' && notif = 1)
                      UNION SELECT * FROM bimbingan WHERE notif = 0 ORDER BY id_no DESC" );
                      $data_tkk = mysqli_num_rows($query_tkk); ?>

                      <span class="primary"><?php echo $data_tkk ?></span>

                   <?php }
                  //  php pesan masuk dosen koor1
                   else if (($_SESSION['status'] == 2 && $tujuan == $nama) || 
                   ($_SESSION['status'] == 2 && $_SESSION['status2'] == 2 && $tujuan2 == $nama) ||
                   ($_SESSION['status'] == 2 && $_SESSION['status3'] == 2 && $tujuan2 == $nama)) {
                    $query_koor = mysqli_query($koneksi, 
                      "SELECT * FROM suratmahasiswa WHERE (dosen1 = '$nama' && notif = 0) || 
                      (dosen2 = '$nama' && status_dosen1 = 2 && notif = 1) ORDER BY id_no DESC" );
                      $data_koor = mysqli_num_rows($query_koor); ?>

                      <span class="primary"><?php echo $data_koor ?></span>
                   <?php }
                   //  php pesan masuk dosen koor2
                   else if (($_SESSION['status'] == 2 && $tujuan == $nama) || 
                   ($_SESSION['status'] == 2 && $_SESSION['status3'] == 2 && $tujuan2 == $nama)) {
                    $query_koor = mysqli_query($koneksi, 
                      "SELECT * FROM suratmahasiswa WHERE (dosen1 = '$nama' && notif = 0) || 
                      (dosen2 = '$nama' && status_dosen1 = 2 && notif = 1) ORDER BY id_no DESC" );
                      $data_koor = mysqli_num_rows($query_koor); ?>

                      <span class="primary"><?php echo $data_koor ?></span>
                   <?php }
                   //  php pesan masuk dosen pemb dan bimbingan proposal
                   else if (($_SESSION['status'] == 2 && $tujuan == $nama)) {
                    $query_pemb = mysqli_query($koneksi, 
                      "SELECT * FROM suratmahasiswa WHERE dosen1 = '$nama' && notif = 0 
                      UNION SELECT * FROM bimbingan WHERE  notif = 0 && dosen1 = '$nama' ORDER BY id_no DESC" );
                      $data_pemb = mysqli_num_rows($query_pemb); ?>

                      <span class="primary"><?php echo $data_pemb ?></span>
                   <?php }
                   } ?>
                  </a>

                  <!-- dropdown surat masuk -->
                  <ul class="dropdown-menu  dropdown-menu-end  px-1 py-1 me-sm-n3" aria-labelledby="dropdownMenuButton">
                    <div class="card example-1 scrollbar-deep-purple bordered-deep-purple thin" style = "height:200px">
                    <!-- surat masuk kadep dari mahasiswa, dosen, tendik -->
                      <?php 
                        include '../_database/config.php';
                        if ($_SESSION['status2'] == 5) {
                          $query = mysqli_query($koneksi, 
                          'SELECT * FROM suratmahasiswa WHERE (status_dosen2 = 2 || status_dosentkk = 2) && notif = 2 
                          UNION SELECT * FROM suratdosen WHERE status_kadep = 0 && notif = 0
                          UNION SELECT * FROM surattendik  WHERE status_kadep = 0 && notif = 0 ORDER BY tanggal DESC' );
                          while ($data = mysqli_fetch_array($query)) { ?>
                      <form action="" method = "post">
                        <li class="mb-2">
                          <a class="dropdown-item border-radius-md" href="">
                            <div class="d-flex py-1">
                              <div class="d-flex flex-column justify-content-center">
                                <?php if ($data['status'] == 3) { ?>
                                <button type="submit" name="mhsw" class="border-0 btn btn-outline-dark btn-sm px-0 mb-0 mt-1">
                                  <h6 class="text-sm font-weight-normal mb-1">
                                    <span class="font-weight-bold"><?php echo $data['perihal']; ?></span>
                                    <span class="font-weight"><?php echo $data['nama']; ?></span>
                                  </h6>
                                </button>
                                <!-- Menginput id surat -->
                                <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                                <p class="text-xs text-left ps-0 text-secondary mb-0">
                                  <?php echo $data['tanggal']; ?>
                                </p>
                                <?php } else if ($data['status'] == 2) { ?>
                                <button type="submit" name="dsn" class="border-0 btn btn-outline-dark btn-sm px-0 mb-0 mt-1">
                                  <h6 class="text-sm font-weight-normal mb-1">
                                    <span class="font-weight-bold"><?php echo $data['perihal']; ?></span>
                                    <span class="font-weight"><?php echo $data['nama']; ?></span>
                                  </h6>
                                </button>
                                <!-- Menginput id surat -->
                                <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                                <p class="text-xs text-left ps-0 text-secondary mb-0">
                                  <?php echo $data['tanggal']; ?>
                                </p>
                                <?php } else if ($data['status'] == 4) { ?>
                                <button type="submit" name="tndk" class="border-0 btn btn-outline-dark btn-sm px-0 mb-0 mt-1">
                                  <h6 class="text-sm font-weight-normal mb-1">
                                    <span class="font-weight-bold"><?php echo $data['perihal']; ?></span>
                                    <span class="font-weight"><?php echo $data['nama']; ?></span>
                                  </h6>
                                </button>
                                <!-- Menginput id surat -->
                                <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                                <input type="hidden" name = "lokasi" value = "home">
                                <p class="text-xs text-left ps-0 text-secondary mb-0">
                                  <?php echo $data['tanggal']; ?>
                                </p>
                                <?php } ?>
                              </div>
                            </div>
                          </a>
                        </li>
                      </form>

                      <!-- dropdown surat masuk dosen dari mahasiswa -->
                      <?php } } ?>
                      <form action="" method = "post">
                        <?php 
                        include '../_database/config.php';
                        $nama = $_SESSION['user'];
                        $tkk = "Tidak Memerlukan Dosen TKK";
                        $query = mysqli_query($koneksi, 'SELECT * FROM suratmahasiswa UNION SELECT * FROM bimbingan ORDER BY id_no DESC');
                        while ($data = mysqli_fetch_array($query)) {
                        $tujuan = $data['dosen1'];
                        $tujuan2 = $data['dosen2'];
                        $tujuan3 = $data['dosen_tkk'];
                         // if (($tujuan == $nama || $tujuan2 == $nama) && ($data['status_dosen1'] == 0 || $data['status_dosen2'] == 0) && $data['notif'] == 0) { ?>
                        <!-- dosen koor magang & proyek akhir -->
                        <?php if ($_SESSION['status2'] == 2 && $data['status_dosen1'] == 2 && $data['notif'] == 1 && $tujuan2 == $nama) { ?>
                        <li class="mb-2">
                          <a class="dropdown-item border-radius-md" href="./validasisurat.php">
                            <div class="d-flex py-1">
                              <div class="d-flex flex-column justify-content-center">
                                <button type="submit" name="koor1" class="border-0 btn btn-outline-dark btn-sm px-0 mb-0 mt-1">
                                  <h6 class="text-sm font-weight-normal mb-1">
                                    <span class="font-weight-bold"><?php echo $data['perihal']; ?></span>
                                    <span class="font-weight"><?php echo $data['nama']; ?></span>
                                  </h6>
                                </button>
                                <p class="text-xs text-left ps-0 text-secondary mb-0">
                                  <?php echo $data['tanggal']; ?>
                                </p>
                                <!-- Menginput id surat -->
                                <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                              </div>
                            </div>
                          </a>
                        </li>
                        <!-- dosen koor PBL -->
                        <?php } else if ($_SESSION['status3'] == 2 && $data['status_dosen1'] == 2 && $data['notif'] == 1 && $tujuan2 == $nama) { ?>
                        <li class="mb-2">
                          <a class="dropdown-item border-radius-md" href="./validasisurat.php">
                            <div class="d-flex py-1">
                              <div class="d-flex flex-column justify-content-center">
                                <button type="submit" name="koor2" class="border-0 btn btn-outline-dark btn-sm px-0 mb-0 mt-1">
                                  <h6 class="text-sm font-weight-normal mb-1">
                                    <span class="font-weight-bold"><?php echo $data['perihal']; ?></span>
                                    <span class="font-weight"><?php echo $data['nama']; ?></span>
                                  </h6>
                                </button>
                                <p class="text-xs text-left ps-0 text-secondary mb-0">
                                  <?php echo $data['tanggal']; ?>
                                </p>
                                <!-- Menginput id surat -->
                                <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                              </div>
                            </div>
                          </a>
                        </li>
                        <!-- dosen pembimbing dan bimbingan proposal -->
                        <?php } else if ($tujuan == $nama && $data['notif'] == 0) { 
                          if ($data['perihal'] == "Bimbingan Proposal Magang" || $data['perihal'] == "Bimbingan Proposal Proyek Akhir" || $data['perihal'] == "Bimbingan Proposal PBL") { ?>
                        <li class="mb-2">
                          <a class="dropdown-item border-radius-md" href="./validasisurat.php">
                            <div class="d-flex py-1">
                              <div class="d-flex flex-column justify-content-center">
                                <button type="submit" name="bp" class="border-0 btn btn-outline-dark btn-sm px-0 mb-0 mt-1">
                                  <h6 class="text-sm font-weight-normal mb-1">
                                    <span class="font-weight-bold"><?php echo $data['perihal']; ?></span>
                                    <span class="font-weight"><?php echo $data['nama']; ?></span>
                                  </h6>
                                </button>
                                <p class="text-xs text-left ps-0 text-secondary mb-0">
                                  <?php echo $data['tanggal']; ?>
                                </p>
                                <!-- Menginput id surat -->
                                <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                              </div>
                            </div>
                          </a>
                        </li>
                        <?php } else { ?>
                          <li class="mb-2">
                          <a class="dropdown-item border-radius-md" href="./validasisurat.php">
                            <div class="d-flex py-1">
                              <div class="d-flex flex-column justify-content-center">
                                <button type="submit" name="notif" class="border-0 btn btn-outline-dark btn-sm px-0 mb-0 mt-1">
                                  <h6 class="text-sm font-weight-normal mb-1">
                                    <span class="font-weight-bold"><?php echo $data['perihal']; ?></span>
                                    <span class="font-weight"><?php echo $data['nama']; ?></span>
                                  </h6>
                                </button>
                                <p class="text-xs text-left ps-0 text-secondary mb-0">
                                  <?php echo $data['tanggal']; ?>
                                </p>
                                <!-- Menginput id surat -->
                                <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                              </div>
                            </div>
                          </a>
                        </li>
                        <!-- dosen TKK -->
                        <?php } } else if ($_SESSION['status2'] == 1 && $_SESSION['status'] == 2 && $data['notif'] == 1 && $tujuan3 == $nama) { ?>
                        <li class="mb-2">
                          <a class="dropdown-item border-radius-md" href="./validasisurat.php">
                            <div class="d-flex py-1">
                              <div class="d-flex flex-column justify-content-center">
                                <button type="submit" name="tkk" class="border-0 btn btn-outline-dark btn-sm px-0 mb-0 mt-1">
                                  <h6 class="text-sm font-weight-normal mb-1">
                                    <span class="font-weight-bold"><?php echo $data['perihal']; ?></span>
                                    <span class="font-weight"><?php echo $data['nama']; ?></span>
                                  </h6>
                                </button>
                                <p class="text-xs text-left ps-0 text-secondary mb-0">
                                  <?php echo $data['tanggal']; ?>
                                </p>
                                <!-- Menginput id surat -->
                                <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                              </div>
                            </div>
                          </a>
                        </li>
                        <?php } } ?>
                    </div>
                  </ul>
                  <!-- akhir dropdown -->
                </li>
                <!-- and notif -->
            <li class="nav-item px-2 d-flex align-items-center">
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
    <div class="text-center">
      <a class="nav-link  " href="./ajukandosen.php"> 
        <button type="button" class="btn btn-secondary btn-lg-center w-95 btn bg-gradient-info" >Ajukan Surat</button>
      </a>
    </div>

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Status Surat</h6>
                </div>
              </div>
            </div>

            <div class="form-group d-flex justify-content-around mt-4 my-0 md-0">
          <form action = "" method = "post">
                <input type="hidden" name = "filterid" value = "12">
                <?php if ($_POST['filterid'] == 0 || $_POST['filterid'] == 2 || $_POST['filterid'] == 1 ) { ?>
               <button type = "submit" name = "filterall" class = "btn btn-outline-info">Lihat Semua</button>
               <?php } 
               else { ?>
               <button type = "submit" name = "filterall" class = "btn btn-info">Lihat Semua</button>
             <?php } ?>
               </form>
            <form action = "" method = "post">
                <input type="hidden" name = "filterid" value = "0">
                <?php if ($_POST['filterid'] == 12 || $_POST['filterid'] == 2 || $_POST['filterid'] == 1 || $_POST['filterid'] == NULL  ) { ?>
               <button type = "submit" name = "filter0" class = "btn btn-outline-info">Belum Diproses</button>
               <?php } 
               else { ?>
             <button type = "submit" name = "filter0" class = "btn btn-info">Belum Diproses</button>
             <?php } ?>
            </form>
            <form action = "" method = "post">
                <input type="hidden" name = "filterid" value = "1">
                <?php if ($_POST['filterid'] == 12 || $_POST['filterid'] == 2 || $_POST['filterid'] == 0 || $_POST['filterid'] == NULL  ) { ?>
               <button type = "submit" name = "filter1" class = "btn btn-outline-info">Ditolak</button>
               <?php } 
               else { ?>
              <button type = "submit" name = "filter1" class = "btn btn-info">Ditolak</button>
             <?php } ?>
            </form>
            <form action = "" method = "post">
                <input type="hidden" name = "filterid" value = "2">
                <?php if ($_POST['filterid'] == 12 || $_POST['filterid'] == 1 || $_POST['filterid'] == 0 || $_POST['filterid'] == NULL  ) { ?>
               <button type = "submit" name = "filter2" class = "btn btn-outline-info">Disetujui</button>
               <?php } 
               else { ?>
              <button type = "submit" name = "filter2" class = "btn btn-info">Disetujui</button>
             <?php } ?>
            </form>
        </div>
            

          <div class="card-body px-0 pt-0 pb-2 mt-0">
            <div class="table-responsive scrollbar-deep-purple bordered-deep-purple thin mt-0 pt-0" style = "height:320px" >
                <table class="table align-items-center mb-0 mt-0">
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th>Perihal</th>
                      <th class = "text-center">Tanggal Upload</th>
                      <th class="text-center">Persetujuan Kadep</th>
                      <th class="text-center">Proses Admin</th>
                      <th>Catatan</th>
                    </tr>
                  </thead>

                  <?php
                  include '../_database/config.php'; //panggil setiap ingin koneksi ke data
                  $no = 0;
                  $no2 = $no++;
                  $query = mysqli_query($koneksi, 'SELECT * FROM suratdosen ORDER BY id_no DESC');
                  while ($data = mysqli_fetch_array($query)) {
                    if ($data['nama'] == $_SESSION['user']) {
                      if (isset($_POST['filter0']) || isset($_POST['filter1']) || isset( $_POST['filter1']) || isset( $_POST['filter2'])) {
                        $idf = $_POST['filterid'];
                          if ($data['status_kadep'] == $idf) {
                      
                  ?>
                      <tr>
                        <td class="text-center"><?php echo $no++ ?></td>
                        <td>
                          <h6 class="mb-0 text-sm ps-3"><?php echo $data['perihal'] ?></h6>
                        </td>
                        <td class="text-center">
                          <h6 class="mb-0 text-sm"><?php echo $data['tanggal'] ?></h6>
                        </td>

                        <!-- persetujuan kadep -->
                        <?php if ($data['status_kadep'] == 0) { ?>
                          <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_kadep'] ?>">Sedang Diproses</span>
                          </td> <?php } else if ($data['status_kadep'] == 1) { ?>
                          <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-danger" value="<?php echo $data['status_kadep'] ?>">Ditolak</span>
                          </td>
                        <?php } else if ($data['status_kadep'] == 2) { ?>
                          <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['status_kadep'] ?>">Disetujui</span>
                          </td> <?php } ?>
                          
                          <!-- status aktivitas admin -->
                      <?php if ($data['status_admin'] == 0) {?>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_admin'] ?>">Sedang Diproses</span>
                        </td> 
  
                         <?php } else if ($data['status_admin'] == 2) {?>
                              <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['status_admin'] ?>">Sudah Diproses</span>
                        </td> <?php } ?> 

                        <!-- button edit -->
                        <td class="align-middle">
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            <button type="button" class="btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_no'] ?>">Lihat</button>
                          </a>
                        </td>
                        <!-- Modal -->
                        <div class="modal fade" id="edit<?php echo $data['id_no'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <!-- popup ajuan surat mahasiswa -->
                              <div class="modal-header">
                                <h5 class="modal-title" id="edit<?php echo $data['id_no'] ?>">Persetujuan Surat</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>

                              <div class="modal-body">

                           
                                  <div class="card-header pb-0 p-3">
                                    <div class="row">
                                      <div class="mb-3">

                                        <!-- Cek File -->
                                        <label for="formFile" class="form-label">File Anda (Klik Untuk Melihat)</label>
                                        <a href="./<?php echo $data['file'] ?>" target="_blank">
                                        <p class="modal-title" name="fl" id="edit<?php echo $data['id_no'] ?>"><button type="button"  class="btn btn-link"><em><?php echo $data['file'] ?></em></button></p></a>

                                        <!-- Keterangan File -->
                                        <label for="formFile" class="form-label">Keterangan Tambahan</label>
                                        <label name="keterangan" class="form-control" aria-label="default input example"><?php echo $data['keterangan'] ?></label>
                                        
                                        <!-- Catatan Kadep -->
                                        <label for="formFile" class="form-label">Catatan Kadep</label>
                                        <label name="catatan" class="form-control" aria-label="default input example"><?php echo $data['catatan'] ?></label>
 
                                        <!-- Input ID untuk memberikan identitas surat -->
                                        <input type="hidden" name="id2" value="<?php echo $data['id_no'] ?>">
                         </div>
                         </div>
                         </div>
                         </div>
                        
                                        <div class="modal-footer">
                                          <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Tutup</button>
                                          <button type = "button" class = "btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?php echo$data['id_no']?>">Hapus</a>
                                          <!-- Saat dosen menolak -->
                                          <?php if ($data['status_kadep'] == 1) { ?>
                         <form action = "./ubahajuandsn.php" method = "post">
                         <!-- Input ID untuk memberikan identitas surat -->
                         <input type="hidden" name = "lokasi" value = "permohonan">
                         <input type="hidden" name="id" value="<?php echo $data['id_no'] ?>">
                         <button class ="btn btn-info">Ubah</button>
                         </form>
                         <?php } ?>
                         </div>
                         </div>
                         </div>
                         </div>

                                                                                     <!-- Modal Hapus -->
                  <div class="modal fade" id="hapus<?php echo $data['id_no'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                   <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">

                       <!-- popup ajuan surat mahasiswa -->
                       <div class="modal-header">
                         <h5 class="modal-title" id="hapus<?php echo $data['id_no'] ?>">Hapus File</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>

                     
                       <div class="modal-body">
                          <form action="" method="post" enctype="multipart/form-data">
                           <div class="card-header pb-0 p-3">
                             <div class="row">
                                <div class="mb-3">
                               
                                 <!-- Nama File -->
                                 <label for="formFile" class="form-label">Nama File</label>
                                 <label name="flhps" class="form-control" aria-label="default input example"><?php echo $data['file'] ?></label>

                                 <!-- NRP mahasiswa -->
                                 <label for="formFile" class="form-label">Perihal</label>
                                 <label name="prhlhps" class="form-control" aria-label="default input example"><?php echo $data['perihal'] ?></label>
                                 
                                 <!-- Lihat File -->
                                 <label for="formFile" class="form-label">File Yang Akan Dihapus</label>
                                 <a href="../pages_dosen/<?php echo $data['file'] ?>" target="_blank">
                                    <h6 class="modal-title" name="fl" id="hapus<?php echo $data['id_no'] ?>"><button type="button"  class="btn btn-link"><em><?php echo $data['file'] ?></em></button></h6>
                                    </a>
                                 
                                 <!-- Input ID untuk memberikan identitas surat -->
                                 <input type="hidden" name="id3" value="<?php echo $data['id_no'] ?>">

                                 <!-- Memberi peringatan -->
                                 <h5 class = "text-danger modal-title text-center">APAKAH ANDA YAKIN ?</h5>
                                 <h6 class = " modal-title text-center">MENGHAPUS FILE BERARTI MENGHILANGKAN SELURUH DATA PERSETUJUAN</h6>
                                </div>
                              </div>
                            </div>
                            </div>


                            <div class="modal-footer">
                              <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
                              <!-- Saat dosen menolak -->
                                <button type="submite" name="hapus" class="btn bg-gradient-info" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_no'] ?>">Hapus</button>
                            </div>
                          </form>
                      </div>
                    </div>
                  </div>
                                         
                      <?php }
                      }
                      else { ?>
                        <tr>
                        <td class="text-center"><?php echo $no++ ?></td>
                        <td>
                          <h6 class="mb-0 text-sm ps-3"><?php echo $data['perihal'] ?></h6>
                        </td>
                        <td class="text-center ">
                          <h6 class="mb-0 text-sm"><?php echo $data['tanggal'] ?></h6>
                        </td>

                        <!-- persetujuan kadep -->
                        <?php if ($data['status_kadep'] == 0) { ?>
                          <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_kadep'] ?>">Sedang Diproses</span>
                          </td> <?php } else if ($data['status_kadep'] == 1) { ?>
                          <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-danger" value="<?php echo $data['status_kadep'] ?>">Ditolak</span>
                          </td>
                        <?php } else if ($data['status_kadep'] == 2) { ?>
                          <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['status_kadep'] ?>">Disetujui</span>
                          </td> <?php } ?>
                          
                        <!-- status aktivitas admin -->
                        <?php if ($data['status_admin'] == 0) {?>
                          <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_admin'] ?>">Sedang Diproses</span>
                          </td> 
  
                        <?php } else if ($data['status_admin'] == 2) {?>
                          <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['status_admin'] ?>">Sudah Diproses</span>
                          </td> 
                        <?php } ?> 

                        <!-- button edit -->
                        <td class="align-middle">
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            <button type="button" class="btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_no'] ?>">Lihat</button>
                          </a>
                        </td>

                        <!-- Modal -->
                        <div class="modal fade" id="edit<?php echo $data['id_no'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <!-- popup ajuan surat mahasiswa -->
                              <div class="modal-header">
                                <h5 class="modal-title" id="edit<?php echo $data['id_no'] ?>">Persetujuan Surat</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>

                              <div class="modal-body">

                             
                                  <div class="card-header pb-0 p-3">
                                    <div class="row">
                                      <div class="mb-3">

                                        <!-- Cek File -->
                                        <label for="formFile" class="form-label">File Anda (Klik Untuk Melihat)</label>
                                        <a href="./<?php echo $data['file'] ?>" target="_blank">
                                        <p class="modal-title" name="fl" id="edit<?php echo $data['id_no'] ?>"><button type="button"  class="btn btn-link"><em><?php echo $data['file'] ?></em></button></p></a>

                                        <!-- Keterangan File -->
                                        <label for="formFile" class="form-label">Keterangan Tambahan</label>
                                        <label name="keterangan" class="form-control" aria-label="default input example"><?php echo $data['keterangan'] ?></label>
                                        
                                        <!-- Catatan Kadep -->
                                        <label for="formFile" class="form-label">Catatan Kadep</label>
                                        <label name="catatan" class="form-control" aria-label="default input example"><?php echo $data['catatan'] ?></label>
 
                                        <!-- Input ID untuk memberikan identitas surat -->
                                        <input type="hidden" name="id2" value="<?php echo $data['id_no'] ?>">

                                        <div class="modal-footer">
                                          <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Tutup</button>
                                          <button type = "button" class = "btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?php echo$data['id_no']?>">Hapus</a>
                                          <?php if ($data['status_kadep'] == 1) { ?>
                         <form action = "./ubahajuandsn.php" method = "post">
                         <!-- Input ID untuk memberikan identitas surat -->
                         <input type="hidden" name = "nama" value = "permohonan">
                         <input type="hidden" name="id" value="<?php echo $data['id_no'] ?>">
                         <button class ="btn btn-info">Ubah</button>
                         </form>
                                      </div>    
                                          </div>
                                          </div>
                                          </div>
                                          </div>
                                          </div>
                                          </div>
                                          </div>

                  <!-- Modal Hapus -->
                  <div class="modal fade" id="hapus<?php echo $data['id_no'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                   <div class="modal-dialog modal-dialog-centered" role="document">
                     <div class="modal-content">

                       <!-- popup ajuan surat mahasiswa -->
                       <div class="modal-header">
                         <h5 class="modal-title" id="hapus<?php echo $data['id_no'] ?>">Hapus File</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>

                     
                       <div class="modal-body">
                         <form action="" method="post" enctype="multipart/form-data">
                           <div class="card-header pb-0 p-3">
                             <div class="row">
                               <div class="mb-3">
                               
                                 <!-- Nama File -->
                                 <label for="formFile" class="form-label">Nama File</label>
                                 <label name="flhps" class="form-control" aria-label="default input example"><?php echo $data['file'] ?></label>

                                 <!-- NRP mahasiswa -->
                                 <label for="formFile" class="form-label">Perihal</label>
                                 <label name="prhlhps" class="form-control" aria-label="default input example"><?php echo $data['perihal'] ?></label>
                                 
                                 <!-- Lihat File -->
                                 <label for="formFile" class="form-label">File Yang Akan Dihapus</label>
                                 <a href="../pages_dosen/<?php echo $data['file'] ?>" target="_blank">
                                    <h6 class="modal-title" name="fl" id="hapus<?php echo $data['id_no'] ?>"><button type="button"  class="btn btn-link"><em><?php echo $data['file'] ?></em></button></h6>
                                    </a>
                                 
                                 <!-- Input ID untuk memberikan identitas surat -->
                                 <input type="hidden" name="id3" value="<?php echo $data['id_no'] ?>">

                                 <!-- Memberi peringatan -->
                                 <h5 class = "text-danger modal-title text-center">APAKAH ANDA YAKIN ?</h5>
                                 <h6 class = " modal-title text-center">MENGHAPUS FILE BERARTI MENGHILANGKAN SELURUH DATA PERSETUJUAN</h6>
 
                                
                               </div>
                             </div>
                           </div>
                       </div>


                       <div class="modal-footer">
                         <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>

                         <!-- Saat dosen menolak -->
                           <button type="submite" name="hapus" class="btn bg-gradient-info" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_no'] ?>">Hapus</button>
                        
                       </div>

                       </form>

                     </div>
                     </div>
                     </div>

                        <?php } ?>
                                       


                                        <?php } } }  ?>

                                       
                                        
                      </tr>
                      <?php 
                      if ($no == 1) { ?>

                         <td></td>
                         <td></td>
                         <td></td>
                    <td class = "text-center"><h6 class = "font-weight-bold">BELUM ADA SURAT YANG DIAJUKAN</h6></td>
                    <?php } ?>

                </table>
                  <!-- php update surat saat kadep menolak -->
                 <!-- php hapus file -->
               <?php
                include "../_database/config.php";
                if (isset($_POST['hapus'])) {
                  $id6 = $_POST['id'];
                  $query = mysqli_query($koneksi, "SELECT * FROM suratdosen WHERE id_no = '$id6'");
                  $data = mysqli_fetch_assoc($query);
                  $nama_file = $data['file']; 
                  $target_file = "./$nama_file";
                 

                  unlink("$target_file");
                  $query6 = mysqli_query($koneksi, "DELETE FROM suratdosen  WHERE id_no = '$id6' ");
                 
                  if ($query6) {
                ?><script>
                      <?php $_SESSION['sukseshps'] = true; ?>
                    </script>
                    <script>
                      history.pushState({}, "", "")
                    </script><?php
                              ?> <script>
                      history.pushState({}, "", "")
                    </script>
                <?php } else {
                    echo '<script> alert ("gagal di ajukan")</script></a>';
                  }
                } ?>
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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['sukses']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Berhasil Mengajukan Surat',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['sukses']); ?>
    <?php endif; ?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <?php if (@$_SESSION['sukseshps']) : ?>
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Berhasil Menghapus',
                showConfirmButton: false,
                timer: 2000
            })
        </script>
        <?php unset($_SESSION['sukseshps']); ?>
    <?php endif; ?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['pdf']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'warning',
            title: 'Gagal mengajukan permohonan surat ! Ekstensi file harus pdf',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['pdf']); ?>
    <?php endif; ?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['input']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Gagal Input',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['input']); ?>
    <?php endif; ?>
</body>

</html>