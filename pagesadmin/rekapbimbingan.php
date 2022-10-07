<?php session_start(); 
if($_SESSION['user']=='' ||  ($_SESSION['status'] != 4 && $_Session['status2'] != 1))
    {
        header("location:../index.php");
  }
  
  // submit notif tata usaha
if (isset($_POST['mhsw'])) {
  $id = $_POST['id3'];
if ($_SESSION['status2'] == 1 && $_SESSION['status'] == 4) {
  $query2 = mysqli_query($koneksi, "UPDATE suratmahasiswa SET `notif`= 9 WHERE id_no = '$id' ");
  if ($query2) { 
    header('location:../pagesadmin/validasiadmin.php'); ?>
    <script>history.pushState({}, "", "")</script><?php
  } else { 
    header('location:./tendik.php'); ?>
    <script>history.pushState({}, "", "")</script><?php
  }
} }


if (isset($_POST['dsn'])) {
  $id = $_POST['id2'];
  if ($_SESSION['status2'] == 1 && $_SESSION['status'] == 4) {
    $query2 = mysqli_query($koneksi, "UPDATE suratdosen SET `notif`= 9 WHERE id_no = '$id' ");
    if ($query2) { 
      header('location:../pagesadmin/validasiadmin2.php'); ?>
      <script>history.pushState({}, "", "")</script><?php
    } else { 
      header('location:./tendik.php'); ?>
      <script>history.pushState({}, "", "")</script><?php
    }
  } }

  if (isset($_POST['tndk'])) {
    $id = $_POST['id4'];
    if ($_SESSION['status2'] == 1 && $_SESSION['status'] == 4) {
      $query2 = mysqli_query($koneksi, "UPDATE surattendik SET `notif`= 9 WHERE id_no = '$id' ");
      if ($query2) { 
        header('location:../pagesadmin/validasiadmin3.php'); ?>
        <script>history.pushState({}, "", "")</script><?php
      } else { 
        header('location:./tendik.php'); ?>
        <script>history.pushState({}, "", "")</script><?php
      }
    } }
  // akhir aksi submit tata usaha
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
        
        <span class="ms-1 font-weight-bold">Sistem Administrasi Tata Usaha</span>
      </a>
    </div>

    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">

      <li class="nav-item">
          <a class="nav-link  " href="../pages/pagestendik/tendik.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                  </svg>
              </div>
            <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>

        <!--permohonan surat-->
        <li class="nav-item">
          <a class="nav-link  " href="../pages/pagestendik/permohonansurat.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Permohonan Surat</span>
          </a>
        </li>

        <!-- REKAP SURAT -->
      <li class="nav-item"> 
        <a class="nav-link  " href="../pages/pagestendik/rekapsurat.php">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
              <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
            </svg>
          </div>
          <span class="nav-link-text ms-1">Rekap Surat</span>
        </a>
      </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Navigasi Tata Usaha</h6>
        </li>

        <!-- Kirim Surat  -->
      <li class="nav-item"> 
        <a class="nav-link  " href="../pagesadmin/kirimadmin.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15.964.686a.5.5 0 0 0-.65-.65l-.095.038L.767 5.854l-.001.001-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.563 2.903.432.275.275.432 2.903 4.563.002.002.26.41a.5.5 0 0 0 .886-.083l.181-.453L15.926.78l.038-.095Zm-1.833 1.89.471-1.178-1.178.471L5.93 9.363l.338.215a.5.5 0 0 1 .154.154l.215.338 7.494-7.494Z"/>
                  </svg>
            </div>
            <span class="nav-link-text ms-1">Upload Informasi</span>
          </a>
       </li>

       <!-- Surat Masuk Dari Mahasiswa  -->
         <li class="nav-item"> 
          <a class="nav-link  " href="../pagesadmin/validasiadmin.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
              </div>
            <span class="nav-link-text ms-1">Surat Masuk dari Mahasiswa</span>
          </a>
        </li>

        <!-- Surat Masuk dari Dosen -->
        <li class="nav-item">
          <a class="nav-link  " href="../pagesadmin/validasiadmin2.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
              </div>
            <span class="nav-link-text ms-1">Surat Masuk dari Dosen</span>
          </a>
        </li>

        <!-- Surat Masuk dari Tendik -->
        <li class="nav-item">
            <a class="nav-link  " href="../pagesadmin/validasiadmin3.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Surat Masuk dari Tendik</span>
            </a>
          </li>


        <!-- rekap surat  -->
        <li class="nav-item"> 
          <a class="nav-link  active" href="../pagesadmin/rekapbimbingan.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
                  <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                </svg>
            </div>
            <span class="nav-link-text ms-1">Rekap Bimbingan</span>
          </a>
        </li>

           <!-- REKAP SURAT -->
      <li class="nav-item"> 
        <a class="nav-link  " href="./rekapadmin.php">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
              <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
            </svg>
          </div>
          <span class="nav-link-text ms-1">Rekap Surat</span>
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

      </ul>
    </div>

  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Sistem Administrasi Tata Usaha</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Rekap Bimbingan</li>
          </ol>
          <h5 class="font-weight-bolder mb-0">Rekap Bimbingan</h5>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <!--div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div-->
          </div>
          <ul class="navbar-nav  justify-content-end">
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
              </a-->
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <!--a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a-->
            </li>
            <!-- notif -->
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
                <!-- php surat masuk kadep -->
                <?php 
                include '../_database/config.php';
                if ($_SESSION['status2'] == 1 && $_SESSION['status'] == 4) {
                  $query_kadep = mysqli_query($koneksi, 
                  'SELECT * FROM suratmahasiswa WHERE status_kadep = 2 && notif = 3 
                  UNION SELECT * FROM suratdosen WHERE status_kadep = 2 && notif = 1
                  UNION SELECT * FROM surattendik  WHERE status_kadep = 2 && notif = 1 ORDER BY id_no DESC' );
                  $data = mysqli_num_rows($query_kadep); ?>

                  <span class="primary"><?php echo $data ?></span>
                <?php } ?>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-0 py-0 me-sm-n3" aria-labelledby="dropdownMenuButton">
                <div class="card example-1 scrollbar-deep-purple bordered-deep-purple thin" style = "height:200px">
                  <!-- surat masuk kadep dari mahasiswa, dosen, tendik -->
                  <?php 
                  include '../_database/config.php';
                  if ($_SESSION['status2'] == 1 && $_SESSION['status'] == 4) {
                    $query = mysqli_query($koneksi, 
                    'SELECT * FROM suratmahasiswa WHERE status_kadep = 2 && notif = 3 
                    UNION SELECT * FROM suratdosen WHERE status_kadep = 2 && notif = 1
                    UNION SELECT * FROM surattendik  WHERE status_kadep = 2 && notif = 1 ORDER BY tanggal DESC' );
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
                            <input name="id3" value=<?php echo $data['id_no'] ?> type="hidden">
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
                            <input name="id2" value=<?php echo $data['id_no'] ?> type="hidden">
                            <p class="text-xs text-left ps-0 text-secondary mb-0">
                              <?php echo $data['tanggal']; ?>
                            </p>
                            <?php } else if ($data['status'] == 4 ) { ?>
                            <button type="submit" name="tndk" class="border-0 btn btn-outline-dark btn-sm px-0 mb-0 mt-1">
                              <h6 class="text-sm font-weight-normal mb-1">
                                <span class="font-weight-bold"><?php echo $data['perihal']; ?></span>
                                <span class="font-weight"><?php echo $data['nama']; ?></span>
                              </h6>
                            </button>
                            <!-- Menginput id surat -->
                            <input name="id4" value=<?php echo $data['id_no'] ?> type="hidden">
                            <p class="text-xs text-left ps-0 text-secondary mb-0">
                              <?php echo $data['tanggal']; ?>
                            </p>
                            <?php } } } ?>
                          </div>
                        </div>
                      </a>
                    </li>
                  </form>
                </div>
              </ul>
            </li>
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


    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Proposal yang Selesai Bimbingan</h6>
                </div>

              </div>
            </div>

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class = "text-center">No</th>
                      <th class = "text-center">Nama Pengirim</th>
                      <th class = "text-center">Angkatan</th>
                      <th class = "text-center">Dosen Pembimbing</th>
                      <th class = "text-center">Perihal</th>
                      <th class = "text-center">Dokumen</th>
                      <th class = "text-center">Tanggal Pengajuan</th>
                      <th class = "text-center">Histori Bimbingan</th>
                    </tr>
                  </thead>
                 
                  <?php
                  include '../_database/config.php'; //panggil setiap ingin koneksi ke data
                  $no = 0;
                  $no2 = $no++;
                  $query = mysqli_query($koneksi, 'SELECT * FROM bimbingan ORDER BY tanggal DESC' );
                 
                  while ($data = mysqli_fetch_array($query)) {
                    if ($data['status_dosen1'] == 2 || $data['status_dosentkk'] == 2) {
                       ?>
                  
                 
                  <tbody>
                  <tr>
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td>
                      <h6 class="mb-0 text-sm ps-3"><?php echo $data['nama'] ?></h6>
                    </td>
                    <td>
                      <h6 class="mb-0 text-sm ps-3"><?php echo $data['angkatan'] ?></h6>
                    </td>
                    <td>
                      <h6 class="mb-0 text-sm ps-3"><?php echo $data['dosen1'] ?></h6>
                    </td>
                    <td>
                      <h6 class="mb-0 text-sm ps-3"><?php echo $data['perihal'] ?></h6>
                    </td>
                    <td class = "px-0">
                    <a href="./<?php echo $data['file'] ?>" target="_blank">
                                            <h6 class="modal-title" name="fl" id="hapus<?php echo $data['id_no'] ?>"><button type="button" class="btn btn-link mx-0 px-0"><em><?php echo $data['file'] ?></em></button></h6>
                    </a>
                    </td>
                    <td class="align-middle text-center">
                          <h6 class="mb-0 text-sm"><?php echo $data['tanggal'] ?></h6>
                        </td>
                  
                    <td class="align-middle text-center">
                            <button id="button" name="id" value="<?php echo $data['id_no'] ?>" type="submit" class="btn btn-default btn-sm" onclick="openWindowWithPost(<?php echo $data['id_no'] ?>)">Lihat</button>
                          </td>
                   
                  </tr>
                
                  <?php }  ?>
                  
                  <?php }  ?>   
                  
                 
                  <?php if ($no == 1) { ?>
                    
                   
                   <td></td>
                   <td></td>
               <td> <h6 class = "text-center">BELUM ADA PROPOSAL SELESAI DIBIMBING</h6>
               
             <?php } ?>
            </tr>
            <tbody>
                </table>
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
  <script type="text/javascript">
    function openWindowWithPost(id) {
      var f = document.getElementById('button');
      f.id.value = id;
      window.open('https://administration.cypiral.org/pagesmahasiswa/tabelrekap.php?id=' + id, 'MsgWindows', 'width=800, height=500');
      f.submit();
    }
  </script>
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