<?php
    session_start();
    if($_SESSION['user']=='')
    {
          header("location:../index.php");
      }
    include '../_database/config.php';
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
        header('location:./dosenkoor.php'); ?>
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
          header('location:./dosenkoor.php'); ?>
          <script>history.pushState({}, "", "")</script><?php
        } 
          } 
        }
      }

      // update notif bimbingan proposal tkk
      if (isset($_POST['bptkk'])) {
        $id = $_POST['id'];
        $nama = $_SESSION['user'];
        $query = mysqli_query($koneksi, 'SELECT * FROM bimbingan ORDER BY id_no DESC');
        while ($data = mysqli_fetch_array($query)) {
        if ($data['dosen1'] == $nama) {
        $query = mysqli_query($koneksi, "UPDATE bimbingan SET `notif`= 2 WHERE id_no = '$id' ");
        if ($query) { 
          header('location:bimbingansurat.php'); ?>
          <script>history.pushState({}, "", "")</script><?php
        } else { 
          header('location:./dosenkoor.php'); ?>
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
            header('location:./dosenkoor.php'); ?>
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
            header('location:./dosenkoor.php'); ?>
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
            header('location:./dosenkoor.php'); ?>
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
        header('location:./dosenkoor.php'); ?>
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
          header('location:./dosenkoor.php'); ?>
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
            header('location:./dosenkoor.php'); ?>
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
      <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css" rel="stylesheet" />

      <style>
            .scrollbar-deep-purple::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
            background-color: #F5F5F5;
            border-radius: 10px; }

            .scrollbar-deep-purple::-webkit-scrollbar {
            width: 12px;
            background-color: #F5F5F5; }

            .scrollbar-deep-purple::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
            background-color: #aaa; }

            .scrollbar-deep-purple {
            scrollbar-color: #512da8 #F5F5F5;
            }

            .bordered-deep-purple::-webkit-scrollbar-track {
            -webkit-box-shadow: none;
            border: 1px solid #ffffff00; }

            .bordered-deep-purple::-webkit-scrollbar-thumb {
            -webkit-box-shadow: none; }

            .thin::-webkit-scrollbar {
            width: 6px; }

            .example-1 {
            position: relative;
            overflow-y: scroll;
            height: 200px; }
  </style>
    </head>

    <body class="g-sidenav-show  bg-gray-100">
      <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="">
              <span class="ms-1 font-weight-bold">Dashboard Dosen Koordinator</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
          <ul class="navbar-nav">
            <!--home-->
              <li class="nav-item">
                <a class="nav-link  " href="./dosenkoor.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Home</span>
            </a>
            </li>

            

            <!--Mahasiswa Proyek Akhir terverifikasi-->
            <li class="nav-item">
              <a class="nav-link  " href="./mahasiswapa.php">
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
              <a class="nav-link  " href="./kalenderpa.php">
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
              <a class="nav-link  active" href="./nilaisempro.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
                    <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                  </svg>
                </div>
                <span class="nav-link-text ms-1">Nilai Proyek Akhir</span>
              </a>
            </li>
             
            <!-- File Proyek Akhir -->
            <li class="nav-item">
                <a class="nav-link  " href="./laporanpa.php">
                  <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-up-fill" viewBox="0 0 16 16">
                      <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.354 9.854a.5.5 0 0 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 8.707V12.5a.5.5 0 0 1-1 0V8.707L6.354 9.854z"/>
                    </svg>
                  </div>
                  <span class="nav-link-text ms-1">Laporan Akhir Proyek Akhir</span>
                </a>
              </li>  

            
          
            <!-- GANTI PASSWORD -->
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
  <!-- and sidebar -->

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard Dosen Koordinator</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Nilai Akhir Proyek Akhir</li>
          </ol>
          <h5 class="font-weight-bolder mb-0">Detail Nilai Akhir Proyek Akhir</h5>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <!--div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div-->
          </div>
          <ul class="navbar-nav justify-content-end">
            <!-- nama user -->
            <li class="nav-item d-flex align-items-center">
            <a href="../profile.php" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none"> Lucky Putri Rahayu, S.Si., M.Si </span>
              </a>
            </li>
            <!-- jarak -->
            <li class="nav-item px-3 d-flex align-items-center"></li>
            <!-- notif -->
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            
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
            <!-- logout -->
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
    <form action="" method="post" enctype="multipart/form-data">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 p-3">
            <h5>Detail Nilai Akhir Proyek Akhir</h5>
             <div class="row">
                
                    <div class="row">
                        <?php 
                        include "../_database/config.php";
                    
                        $id = $_GET['nrp'];
                        $query = mysqli_query($koneksi, "SELECT * FROM nilai_sidang WHERE nrp='$id'");
                        while($row = mysqli_fetch_assoc($query)){

                          $nilai1=$row['nilai_sid'];
                          $nilai2=$row['nilai_sid2'];
                          $nilai3=$row['nilai_sid3'];

                          $total= ($nilai1 + $nilai2 + $nilai3)/3;
                          if($total >= 85.60){
                              $tampil= 'A';
                          }
                          else if($total >= 75.60 && $total <= 85.59 ){
                              $tampil= 'AB';
                          }
                          else if($total >= 65.60 && $total <= 75.59){
                              $tampil= 'B';
                          }
                          else if($total >= 60.60 && $total <= 65.59){
                              $tampil= 'BC';
                          }
                          else if($total >= 55.60 && $total <= 60.59){
                              $tampil= 'C';
                          }
                          else if($total >= 40.60 && $total <= 55.59){
                              $tampil= 'D';
                          }
                          else if($total >= 0 && $total <= 40.59){
                              $tampil= 'E';
                          }
                          else{
                            echo 'Tidak ada nilai';
                          }
                        ?>
                        
                        <div class="form-group col-md-6">
                            <label for="formFile" class="form-label">Nama Mahasiswa</label>
                            <input name="nama" class="form-control" type="hidden" aria-label="default input example"  value = "<?php echo $row['nama'] ?>" required>
                            <label name="nama" class="form-control" aria-label="default input example"><?php echo $row['nama']?></label>
                            </div>
                        <div class="form-group col-md-6">
                            <label for="formFile" class="form-label">Nrp</label>
                            <label name="nrp" class="form-control" aria-label="default input example"><?php echo $row['nrp']?></label>
                            <input name="nama" class="form-control" type="hidden" aria-label="default input example"  value = "<?php $row['nrp'] ?>" required>
                            <input name="nrp" class="form-control" type="hidden" aria-label="default input example" value="<?php echo $row['nrp']?>" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0">
                          <label for="formFile" class="form-label">Judul Proyek Akhir</label>
                          <input name="nama" class="form-control" type="hidden" aria-label="default input example"  value = "<?php $row['judul_pa'] ?>" required>
                          <label name='judul_pa' class="form-control" aria-label="default input example"><?php echo $row['judul_pa']?></label>
      
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="formFile" class="form-label">Dosen Penguji 1</label>
                            <label name="nama" class="form-control" aria-label="default input example"><?php echo $row['dosen_uji']?></label>
                            
                        </div>
                        <div class="form-group col-md-6">
                            <label for="formFile" class="form-label">Nilai Sidang 1</label>
                            <label name="nrp" class="form-control" aria-label="default input example"><?php echo $row['nilai_sid']?></label>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                          <label for="formFile" class="form-label">Dosen Penguji 2</label>
                          <label name="jenis_eval" class="form-control" aria-label="default input example"><?php echo $row['dosen_uji2']?></label>
                          
                        </div>
                        <div class="form-group col-md-6">
                          <label for="formFile" class="form-label">Nilai Sidang 2</label>
                          <label name='prodi' class="form-control" aria-label="default input example"><?php echo $row['nilai_sid2']?></label>
                          
                        </div>
                    </div>

                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="formFile" class="form-label">Dosen Penguji 3</label>
                      <label name="jenis_eval" class="form-control" aria-label="default input example"><?php echo $row['dosen_uji3']?></label>
                      
                    </div>
                    <div class="form-group col-md-6">
                      <label for="formFile" class="form-label">Nilai Sidang 3</label>
                      <label name='prodi' class="form-control" aria-label="default input example"><?php echo $row['nilai_sid3']?></label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="formFile" class="form-label">Nilai Akhir</label>
                      <label name="jenis_eval" class="form-control" aria-label="default input example"><?php echo $total?></label>
                      
                    </div>
                    <div class="form-group col-md-6">
                      <label for="formFile" class="form-label">Predikat Nilai</label>
                      <label name='prodi' class="form-control" aria-label="default input example"><?php echo $tampil?></label>
                    </div>
                  </div>
                  <div class = "mx-4">
                    <a class="btn btn-primary" name="update_validasi" href="../pages_dosenkoor/post_nilai.php?nrp=<?php echo $id ?>" role="button">OK</a>
                      <?php }?>
                </div>
                </form>
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
</body>

</html>