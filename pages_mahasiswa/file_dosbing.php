<?php
session_start();
  if($_SESSION['user']=='')
  {
  header("location:../index.php");
  }

  include "../_database/config.php";
// update notif bimbingan proposal1
if (isset($_POST['revisi'])) {
  $id = $_POST['id'];
  $query_revisi = mysqli_query($koneksi, "SELECT * FROM bimbingan ORDER BY id_no DESC");
  while ($data_revisi = mysqli_fetch_array($query_revisi)) {
  if ($data_revisi['status_dosen1'] == 1) {
    $query2 = mysqli_query($koneksi, "UPDATE bimbingan SET `notif`= 0 WHERE id_no = '$id' ");
    if ($query2) { 
      header('location:kalenderpa.php'); ?>
      <script>history.pushState({}, "", "")</script><?php
    } else { 
      header('location:./mahasiswa.php'); ?>
      <script>history.pushState({}, "", "")</script><?php
    }
  } } }

  // update notif bimbingan proposal2
if (isset($_POST['selesai'])) {
  $id = $_POST['id'];
  $nama = $_SESSION['user'];
  $query_selesai = mysqli_query($koneksi, "SELECT * FROM bimbingan ORDER BY id_no DESC");
  while ($data_selesai = mysqli_fetch_array($query_selesai)) {
  if ($data_selesai['status_dosen1'] == 2) {
  $query = mysqli_query($koneksi, "UPDATE bimbingan SET `notif`= 3 WHERE id_no = '$id' ");
  if ($query) { 
    header('location:bimbingan.php'); ?>
    <script>history.pushState({}, "", "")</script><?php
  } else { 
    header('location:./mahasiswa.php'); ?>
    <script>history.pushState({}, "", "")</script><?php
  } 
    } 
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/images/favicon.png">
  <title>
    SIM Administrasi Proyek Akhir
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
  <!-- css SCROLL -->
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
  <!-- sidebar -->
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="">
        <span class="ms-0 font-weight-bold">Dashboard Mahasiswa</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <!--Home-->
        <li class="nav-item">
          <a class="nav-link  " href="./mahasiswa.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>

        <!--Pendaftaran-->
        <li class="nav-item">
          <a class="nav-link  " href="./Evaluasipa.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-person-fill" viewBox="0 0 16 16">
                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Pendaftaran Proyek Akhir</span>
          </a>
        </li>

        <!--kalender-->
        <li class="nav-item">
          <a class="nav-link  " href="./kalenderpa.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="fa-solid fa-calendar-days" viewBox="0 0 448 512">
                <path d="M160 32V64H288V32C288 14.33 302.3 0 320 0C337.7 0 352 14.33 352 32V64H400C426.5 64 448 85.49 448 112V160H0V112C0 85.49 21.49 64 48 64H96V32C96 14.33 110.3 0 128 0C145.7 0 160 14.33 160 32zM0 192H448V464C448 490.5 426.5 512 400 512H48C21.49 512 0 490.5 0 464V192zM64 304C64 312.8 71.16 320 80 320H112C120.8 320 128 312.8 128 304V272C128 263.2 120.8 256 112 256H80C71.16 256 64 263.2 64 272V304zM192 304C192 312.8 199.2 320 208 320H240C248.8 320 256 312.8 256 304V272C256 263.2 248.8 256 240 256H208C199.2 256 192 263.2 192 272V304zM336 256C327.2 256 320 263.2 320 272V304C320 312.8 327.2 320 336 320H368C376.8 320 384 312.8 384 304V272C384 263.2 376.8 256 368 256H336zM64 432C64 440.8 71.16 448 80 448H112C120.8 448 128 440.8 128 432V400C128 391.2 120.8 384 112 384H80C71.16 384 64 391.2 64 400V432zM208 384C199.2 384 192 391.2 192 400V432C192 440.8 199.2 448 208 448H240C248.8 448 256 440.8 256 432V400C256 391.2 248.8 384 240 384H208zM320 432C320 440.8 327.2 448 336 448H368C376.8 448 384 440.8 384 432V400C384 391.2 376.8 384 368 384H336C327.2 384 320 391.2 320 400V432z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Kalender Evaluasi</span>
          </a>
        </li>

        <!--File Proyek Akhir-->
        <li class="nav-item">
          <a class="nav-link  active" href="../pages_mahasiswa/berkaspa.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-up" viewBox="0 0 16 16">
                  <path d="M8.5 11.5a.5.5 0 0 1-1 0V7.707L6.354 8.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 7.707V11.5z"/>
                  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                </svg>
              </div>
            <span class="nav-link-text ms-1">File Proyek Akhir</span>
          </a>
        </li>
        
        
        <!-- Nilai Akhir -->
        <li class="nav-item"> 
          <a class="nav-link  " href="./nilaipa.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
                <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Nilai Proyek Akhir</span>
          </a>
        </li>
        
        <!--ganti password-->
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
  <!-- End sidebar -->

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard Mahasiswa</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">File Proyek Akhir</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">File Proyek Akhir</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        
          </div>
          <ul class="navbar-nav  justify-content-end">
            <!-- nama user -->
            <li class="nav-item d-flex align-items-center">
              <a href="../profile.php" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none"><?php echo $_SESSION['user']?></span>
              </a>
            </li>
            <!-- jarak -->
            <li class="nav-item px-3 d-flex align-items-center">
            
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
                    
                    // surat bimbingan yang revisi
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
                    // surat bimbingan yang selesai
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
                
                    else { ?>
                    <?php } } ?>
                  </form>
                </div>
              </ul>
            </li>
            <!-- end notif -->
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
    <!-- button ajukan permohonan -->
    <!-- <div class="text-center">
      <a class="nav-link  " href="./unggahpa.php"> 
        <button type="button" class="btn btn-secondary btn-lg w-95 btn bg-gradient-info" >Unggah File</button>
      </a>
    </div> -->
    
    
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <!-- dropdown jenis surat -->
            <div class="card-header pb-0 p-3">
              <div class="row">
                <h5>Riwayat Bimbingan</h5>
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Status</h6>
                  <li class="nav-item dropdown pe-3 pt-3 d-flex text-right ps-4">
                    <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                      <button type="button" class="btn btn-outline-dark btn-sm px-5 text-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Semua File
                      </button>
                    </a>
                    <ul style = "height:200px" class="dropdown-menu dropdown-menu-end pt-2  px-0 py-3 me-sm-n1 " aria-labelledby="dropdownMenuButton">
                      <div class="card example-1 scrollbar-deep-purple bordered-deep-purple thin" style = "height:200px">  
                        <li>
                          <a class="dropdown-item border-radius-md" href="#">
                            <div class="d-flex py-1">
                              <div class="my-auto">
                                <h6 class="text-sm font-weight-normal mb-1">
                                  <span class="font-weight-bold">Semua File</span>
                                </h6>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item border-radius-md" href="propospa.php">
                            <div class="d-flex py-1">
                              <div class="my-auto">
                                <h6 class="text-sm font-weight-normal mb-1">
                                  <span class="font-weight-bold">Proposal Proyek Akhir</span>
                                </h6>
                            </div>
                          </a>
                        </li>
                        <li >
                          <a class="dropdown-item border-radius-md" href="laporpa.php">
                            <div class="d-flex py-1">
                              <div class="my-auto">
                                <h6 class="text-sm font-weight-normal mb-1">
                                  <span class="font-weight-bold">Laporan Proyek Akhir</span>
                                </h6>
                            </div>
                          </a>
                        </li>
                      </div>
                    </ul>
                  </li> 
                </div>
                <!--Tombol riwayat revisi -->
                <div class="col-auto" >
                  <button class="btn bg-gradient-info"><a href="../pages_mahasiswa/berkaspa.php">Riwayat File Terkirim</a></button>
               </div>
              </div>
            </div>
            <!-- end dropdown jenis surat -->

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0 scrollbar-deep-purple bordered-deep-purple thin mt-0 mb-0 pt-0" style = "height:375px" >
                  <table class="table align-items-center mb-0">
                    <thead>
                      <!-- judul kolom -->
                      <tr>
                        <th class="text-center"><strong>No</th>
                        <th class="text-center"><strong>Nama File</th>
                        <th class="text-center"><strong>Jenis File</th>
                        <th class="text-center"><strong>Tanggal Bimbingan</th>
                        <th class="text-center"><strong>Catatan</th>

                        
                      </tr>
                    </thead>
                    <tbody id="myTable">
                      <?php
                      include "../_database/config.php";
                      $nama= $_SESSION['user'];
                      $no = 1;
                      $query = mysqli_query($koneksi, "SELECT * FROM proses_bimbingan WHERE nama='$nama' ");
                      while($row = mysqli_fetch_assoc($query)){
                      
                      if(isset($row['status_bimbingan'])){
                        $status=$row['status_bimbingan'];

                        if($status==0){
                          $tampil='Belum diproses';
                        } elseif ($status==1) {
                          $tampil='Sudah diproses';
                        }
                      }
                      ?>

                      <tr>
                        <th class="text-center"><?php echo $no++ ?></th>
                        <th class="text-center"><?php echo $row['file']?></th>
                        <th class="text-center"><?php echo $row['keterangan']?></th>
                        <th class="text-center"><?php echo $row['waktu'] ?></th>
                        <th class="text-center"><button class="btn btn-light"><a href="../pages_mahasiswa/catatan_dosen.php?id=<?php echo $row['id']; ?>">Lihat Catatan</a></button></th>
                        
                      </tr>
                      <?php }?>
                    </tbody> 
                  </table>

                  <!-- php update surat -->
                  <?php
                include "../_database/config.php";
                if (isset($_POST['hapus'])) {
                  $id6 = $_POST['id'];
                  $query = mysqli_query($koneksi, "SELECT * FROM suratmahasiswa WHERE id_no = '$id6'");
                  $data = mysqli_fetch_assoc($query);
                  $nama_file = $data['file']; 
                  $target_file = "./$nama_file";
                 

                  unlink("$target_file");
                  $query6 = mysqli_query($koneksi, "DELETE FROM suratmahasiswa  WHERE id_no = '$id6' ");
                 
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
                }


                ?>
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
<!-- notif suskes mengajukan surat -->
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
    <!-- notif sukses menghapus -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['sukseshps']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Berhasil',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['sukseshps']); ?>
    <?php endif; ?>
    <!-- notif tipe tidak sesuai dengan pdf -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['pdf']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'warning',
            title: 'Gagal ! Ekstensi file harus pdf',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['pdf']); ?>
    <?php endif; ?>
    <!-- notif gagal input -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['input']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Gagal ',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['input']); ?>
    <?php endif; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>
</body>

</html>   