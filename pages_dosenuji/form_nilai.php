<?php
session_start();
if($_SESSION['user']=='' || $_SESSION['status'] != 2)
{
  header("location:../index.php");
}


include "../_database/config.php";

if(isset($_POST['input']))
{
  $nama = $_POST['nama'];
  $nrp = $_POST['nrp'];
  $dosen_uji = $_SESSION['user'];
  $prodi = 'Teknologi Rekayasa Otomasi';
  $jenis_eval = $_POST['jenis_eval'];
  $judul_pa = $_POST['judul_pa'];
  $latar = $_POST['latar'];
  $manfaat = $_POST['manfaat'];
  $metode = $_POST['metode'];
  $tulis = $_POST['tata_tulis'];
  $bahasa = $_POST['tata_bahasa'];
  $sikap = $_POST['sikap'];
  $waktu_datang = $_POST['waktu_datang'];
  $datadok = $_POST['datadok'];
  $materi = $_POST['materi'];
  $nilai_angka = $_POST['nilai_angka'];
  $rekom = $_POST['rekom'];
  $catatan = $_POST['catatan_revisi'];
  
  $id=$_GET['nrp'];

  if($jenis_eval == 'Seminar'){
    $query= mysqli_query($koneksi,"SELECT * FROM nilai_seminar WHERE nrp='$id' ");
    $row = mysqli_fetch_assoc($query);
    $baris = mysqli_num_rows($query);

        if($baris != 1){
            $query1 = mysqli_query($koneksi, "INSERT INTO nilai_seminar VALUES('','','$nama','$nrp','$prodi','$judul_pa','$dosen_uji','','','$latar','','','$manfaat','','','$metode','','','$tulis','','','$bahasa','','','$sikap','','','$waktu_datang','','', '$datadok','','', '$materi','','', '$nilai_angka','','','$rekom','','','$catatan','','')");
                if($query1){
                    ?><script><?php $_SESSION['sukses'] = true;?></script> 
                    <script>history.pushState({}, "", "")</script><?php
                }
                else{
                    ?><script><?php $_SESSION['input'] = true;?></script> 
                    <script>history.pushState({}, "", "")</script><?php
                }
        }
        else if($row['nilai_sem2'] == 0){
            $query2 = mysqli_query($koneksi,"UPDATE nilai_seminar SET dosen_uji2='$dosen_uji', latar2='$latar', manfaat2='$manfaat', metode2='$metode', tulis2='$tulis',  bahasa2='$bahasa', sikap2='$sikap', waktu_datang2='$waktu_datang', datadok2='$datadok', materi2='$materi', nilai_sem2='$nilai_angka', rekom2='$rekom', catatan2='$catatan' WHERE nrp='$id'");
                if($query2){
                    ?><script><?php $_SESSION['sukses'] = true;?></script> 
                    <script>history.pushState({}, "", "")</script><?php
                }
                else{
                    ?><script><?php $_SESSION['input'] = true;?></script> 
                    <script>history.pushState({}, "", "")</script><?php
                }
        }
        else if($row['nilai_sem3'] == 0){
            $query3 = mysqli_query($koneksi,"UPDATE nilai_seminar SET dosen_uji3='$dosen_uji', latar3='$latar', manfaat3='$manfaat', metode3='$metode', tulis3='$tulis',  bahasa3='$bahasa', sikap3='$sikap', waktu_datang3='$waktu_datang', datadok3='$datadok', materi3='$materi', nilai_sem3='$nilai_angka', rekom3='$rekom', catatan3='$catatan' WHERE nrp='$id'");
                if($query3){
                    ?><script><?php $_SESSION['sukses'] = true;?></script> 
                    <script>history.pushState({}, "", "")</script><?php
                }
                else{
                    ?><script><?php $_SESSION['input'] = true;?></script> 
                    <script>history.pushState({}, "", "")</script><?php
                }
        }
        else{
            echo 'gagal su';
        }
  }
  else if($jenis_eval == 'Sidang'){
    $query= mysqli_query($koneksi,"SELECT * FROM nilai_sidang WHERE nrp='$id' ");
    $row = mysqli_fetch_assoc($query);
    $baris = mysqli_num_rows($query);

        if($baris != 1){
            $query1 = mysqli_query($koneksi, "INSERT INTO nilai_sidang VALUES('','','$nama','$nrp','$prodi','$judul_pa','$dosen_uji','','','$latar','','','$manfaat','','','$metode','','','$tulis','','','$bahasa','','','$sikap','','','$waktu_datang','','', '$datadok','','', '$materi','','', '$nilai_angka','','','$rekom','','','$catatan','','',sysdate())");
                if($query1){
                    ?><script><?php $_SESSION['sukses'] = true;?></script> 
                    <script>history.pushState({}, "", "")</script><?php
                }
                else{
                    ?><script><?php $_SESSION['input'] = true;?></script> 
                    <script>history.pushState({}, "", "")</script><?php
                }
        }
        else if($row['nilai_sid2'] == 0){
            $query2 = mysqli_query($koneksi,"UPDATE nilai_sidang SET dosen_uji2='$dosen_uji', latar2='$latar', manfaat2='$manfaat', metode2='$metode', tulis2='$tulis',  bahasa2='$bahasa', sikap2='$sikap', waktu_datang2='$waktu_datang', datadok2='$datadok', materi2='$materi', nilai_sid2='$nilai_angka', rekom2='$rekom', catatan2='$catatan' WHERE nrp='$id'");
                if($query2){
                    ?><script><?php $_SESSION['sukses'] = true;?></script> 
                    <script>history.pushState({}, "", "")</script><?php
                }
                else{
                    ?><script><?php $_SESSION['input'] = true;?></script> 
                    <script>history.pushState({}, "", "")</script><?php
                }
        }
        else if($row['nilai_sid2']){
            $query3 = mysqli_query($koneksi,"UPDATE nilai_sidang SET dosen_uji3='$dosen_uji', latar3='$latar', manfaat3='$manfaat', metode3='$metode', tulis3='$tulis',  bahasa3='$bahasa', sikap3='$sikap', waktu_datang3='$waktu_datang', datadok3='$datadok', materi3='$materi', nilai_sid3='$nilai_angka', rekom3='$rekom', catatan3='$catatan' WHERE nrp='$id'");
                if($query3){
                    ?><script><?php $_SESSION['sukses'] = true;?></script> 
                    <script>history.pushState({}, "", "")</script><?php
                }
                else{
                    ?><script><?php $_SESSION['input'] = true;?></script> 
                    <script>history.pushState({}, "", "")</script><?php
                }
        }
        else{
            echo 'gagal';
        }
  }
  else{
    echo 'gagal';
  }
  
}?>
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
                    <span class="ms-1 font-weight-bold">Dashboard Dosen Penguji</span>
                  </a>
                </div>
                <hr class="horizontal dark mt-0">
                <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
                  <ul class="navbar-nav">

                    <!-- HOME  -->
                    <li class="nav-item">
                      <a class="nav-link  " href="./dosen_uji.php">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                          </svg>
                        </div>
                        <span class="nav-link-text ms-1">Home</span>
                      </a>
                    </li>

                   
                    <!--Mahasiswa Bimbingan Proyek Akhir-->
                    <li class="nav-item">
                      <a class="nav-link  " href="./mahasiswa_uji.php">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                          </svg>
                        </div>
                        <span class="nav-link-text ms-1">Mahasiswa Uji</span>
                      </a>
                    </li>

                    <!--Kalender Proyek Akhir-->
                    <li class="nav-item">
                      <a class="nav-link  " href="./kalender_uji.php">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                          </svg>
                        </div>
                        <span class="nav-link-text ms-1">Kalender Proyek Akhir</span>
                      </a>
                    </li>

                    <!-- File Proyek Akhir -->
                    <li class="nav-item">
                      <a class="nav-link  active" href="./ujian_pa.php">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-up-fill" viewBox="0 0 16 16">
                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.354 9.854a.5.5 0 0 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 8.707V12.5a.5.5 0 0 1-1 0V8.707L6.354 9.854z"/>
                          </svg>
                        </div>
                        <span class="nav-link-text ms-1">Evaluasi Proyek Akhir</span>
                      </a>
                    </li>

                    <!-- Nilai Akhir Proyek Akhir -->
                    <li class="nav-item"> 
                      <a class="nav-link  " href="./nilaipa_uji.php">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
                            <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                          </svg>
                        </div>
                        <span class="nav-link-text ms-1">Nilai Evaluasi Proyek Akhir</span>
                      </a>
                    </li>   

                    

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
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard Dosen Penguji</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Evaluasi Proyek Akhir</li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Form Penilaian Evaluasi Proyek Akhir</li>
                      </ol>
                      <h5 class="font-weight-bolder mb-0">Form Penilaian Evaluasi Proyek Akhir</h5>
                    </nav>
                    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        
                      </div>
                      <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                          <a href="../profile.php" href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none"><?php echo $_SESSION['user']?></span>
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
                                  $query = mysqli_query($koneksi, 'SELECT * FROM suratmahasiswa UNION SELECT * FROM bimbingan ORDER BY tanggal DESC');
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
                          <?php } else if ($tujuan == $nama && $data['notif'] == 0 && $data['status_dosen1'] == 0) { 
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
                              <!-- dosen TKK dan bimbingan hima -->
                            <?php } } else if ($_SESSION['status2'] == 1 && $_SESSION['status'] == 2 && $data['notif'] == 1 && $tujuan3 == $nama) {
                              if ($data['perihal'] == "Bimbingan Proposal Kegiatan HIMA") { ?>
                                <li class="mb-2">
                                  <a class="dropdown-item border-radius-md" href="./validasisurat.php">
                                    <div class="d-flex py-1">
                                      <div class="d-flex flex-column justify-content-center">
                                        <button type="submit" name="bptkk" class="border-0 btn btn-outline-dark btn-sm px-0 mb-0 mt-1">
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
                              <?php } } } ?>
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

    <!--<div class="text-center">
      <a class="nav-link  " href="./unggahpa.php"> 
        <button type="button" class="btn btn-secondary btn-lg-center w-95 btn bg-gradient-info" >Unggah Proposal</button>
      </a>
    </div>-->

    <!-- Tabel Validasi -->
    <form action="" method="post" enctype="multipart/form-data">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 p-3">
             <div class="row">
                    <?php
                    include "../_database/config.php";
                    $id=$_GET['nrp'];
                    $no=1;
                    $query = mysqli_query($koneksi, "SELECT * FROM pendaftareval WHERE nrp='$id' ");
                    while($row = mysqli_fetch_assoc($query)){
                      
                      ?>
                     
                            <div class="form-group col-md-6">
                              <label for="formFile" class="form-label">Nama</label>
                              <input name="nama" class="form-control" type="hidden" aria-label="default input example"  value = "<?php echo $row['nama']?>" required>
                              <label name="nama" class="form-control" aria-label="default input example"><?php echo $row['nama']?></label>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="formFile" class="form-label">NRP</label>
                              <input name="nrp" class="form-control" type="hidden" aria-label="default input example"  value = "<?php echo $row['nrp']?>" required>
                              <label name="nrp" class="form-control" aria-label="default input example"><?php echo $row['nrp']?></label>
                            </div>
                            <input name="jenis_eval" class="form-control" type="hidden" aria-label="default input example"  value = "<?php echo $row['jenis_eval']?>" required>

                            
                  </div>
                  <div class="row">
                    <div class="form-group">
                        <label for="formFile" class="form-label">Judul Proyek Akhir</label>
                        <label name="judul_pa" class="form-control" aria-label="default input example"><?php echo $row['judul_pa']?></label>
                        <input name="judul_pa" class="form-control" type="hidden" aria-label="default input example"  value = "<?php echo $row['judul_pa']?>" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="formFile" class="form-label">Dosen Pembimbing 1</label>
                        <label name="dosbing1" class="form-control" aria-label="default input example"><?php echo $row['pembimbing']?></label>
                        <input name="dosbing1" class="form-control" type="hidden" aria-label="default input example"  value = "<?php echo $row['pembimbing']?>" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="formFile" class="form-label">Dosen Pembimbing 2</label>
                        <label name="dosbing2" class="form-control" aria-label="default input example"><?php echo $row['pembimbing_2']?></label>
                        <input name="dosbing2" class="form-control" type="hidden" aria-label="default input example"  value = "<?php echo $row['pembimbing_2']?>" required>
                    </div><?php }?>
                </div>
                    
                
              </div>
              
              <br>
              <div class="table-responsive scrollbar-deep-purple bordered-deep-purple thin mt-0 pt-0" style = "height:440px">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th >Sasaran Penilaian</th>
                      <th class="text-center">Nilai</th>
                    </tr>
                  </thead>
                </tbody>
                <tr>
                  <th class="text-center">1</th>
                  <th>Kebermanfaatan kepada mitra (20%)</th>
                </tr>
                <tr>
                  <td></td>
                  <td>Latar belakang sesuai dengan problem mitra</td>
                  <td class="text-center">
                    <select name="latar">
                      <option class="text-center">-</option>
                      <option class="text-center" value = "Kurang Sekali">Kurang Sekali</option>
                      <option class="text-center" value = "Kurang ">Kurang</option>
                      <option class="text-center" value = "Cukup">Cukup</option>
                      <option class="text-center" value = "Sangat Baik">Sangat Baik</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>Bermanfaat untuk mitra</td>
                  <td class="text-center">
                    <select name="manfaat">
                      <option class="text-center">-</option>
                      <option class="text-center" value = "Kurang Sekali">Kurang Sekali</option>
                      <option class="text-center" value = "Kurang ">Kurang</option>
                      <option class="text-center" value = "Cukup">Cukup</option>
                      <option class="text-center" value = "Sangat Baik">Sangat Baik</option>
                    </select>
                  </td>
                </tr>

                <tr>
                  <th class="text-center">2</th>
                  <th>Metode yang diusulkan pada proyek akhir (20%)</th>
                </tr>
                <tr>
                  <td></td>
                  <td>Metode yang relevan dengan prodi TRO</td>
                  <td class="text-center">
                    <select name="metode">
                      <option class="text-center">-</option>
                      <option class="text-center" value = "Kurang Sekali">Kurang Sekali</option>
                      <option class="text-center" value = "Kurang ">Kurang</option>
                      <option class="text-center" value = "Cukup">Cukup</option>
                      <option class="text-center" value = "Sangat Baik">Sangat Baik</option>
                    </select>
                  </td>
                </tr>

                <tr>
                  <th class="text-center">3</th>
                  <th>Tata Tulis Buku Proyek Akhir (20%)</th>
                </tr>
                <tr>
                  <td></td>
                  <td>Format dan Tata Tulis Rapi</td>
                  <td class="text-center">
                    <select name="tata_tulis">
                      <option class="text-center">-</option>
                      <option class="text-center" value = "Kurang Sekali">Kurang Sekali</option>
                      <option class="text-center" value = "Kurang ">Kurang</option>
                      <option class="text-center" value = "Cukup">Cukup</option>
                      <option class="text-center" value = "Sangat Baik">Sangat Baik</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>Gagasan disampaikan dengan Tata Bahasa yang jelas</td>
                  <td class="text-center">
                    <select name="tata_bahasa">
                      <option class="text-center">-</option>
                      <option class="text-center" value = "Kurang Sekali">Kurang Sekali</option>
                      <option class="text-center" value = "Kurang ">Kurang</option>
                      <option class="text-center" value = "Cukup">Cukup</option>
                      <option class="text-center" value = "Sangat Baik">Sangat Baik</option>
                    </select>
                  </td>
                </tr>

                <tr>
                  <th class="text-center">4</th>
                  <th>Presentasi (40%)</th>
                </tr>
                <tr>
                  <td></td>
                  <td>Sikap yang sopan</td>
                  <td class="text-center">
                    <select name="sikap">
                      <option class="text-center">-</option>
                      <option class="text-center" value = "Kurang Sekali">Kurang Sekali</option>
                      <option class="text-center" value = "Kurang ">Kurang</option>
                      <option class="text-center" value = "Cukup">Cukup</option>
                      <option class="text-center" value = "Sangat Baik">Sangat Baik</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>Kedatangan tepat waktu</td>
                  <td class="text-center">
                    <select name="waktu_datang">
                      <option class="text-center">-</option>
                      <option class="text-center" value = "Kurang Sekali">Kurang Sekali</option>
                      <option class="text-center" value = "Kurang ">Kurang</option>
                      <option class="text-center" value = "Cukup">Cukup</option>
                      <option class="text-center" value = "Sangat Baik">Sangat Baik</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>Data dan Dokumentasi Proses bisa dipertanggung-jawabkan</td>
                  <td class="text-center">
                    <select name="datadok">
                      <option class="text-center">-</option>
                      <option class="text-center" value = "Kurang Sekali">Kurang Sekali</option>
                      <option class="text-center" value = "Kurang ">Kurang</option>
                      <option class="text-center" value = "Cukup">Cukup</option>
                      <option class="text-center" value = "Sangat Baik">Sangat Baik</option>
                    </select>
                  </td>
                </tr><tr>
                  <td></td>
                  <td>Penguasaan Materi</td>
                  <td class="text-center">
                    <select name="materi">
                      <option class="text-center">-</option>
                      <option class="text-center" value = "Kurang Sekali">Kurang Sekali</option>
                      <option class="text-center" value = "Kurang ">Kurang</option>
                      <option class="text-center" value = "Cukup">Cukup</option>
                      <option class="text-center" value = "Sangat Baik">Sangat Baik</option>
                    </select>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>   
          <br>
          <div class="col-auto" >
            <label class="visually-hidden" for="nilaimbuh"></label>
            <input type="text" class="form-control" id="nilaimbuh" name="nilai_angka" placeholder="Nilai Pembimbing/Penguji(0-100)">
            <h3>Rekomendasi</h3>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="rekom" value="Lulus tanpa Revisi" >
              <label class="form-check-label">
                Lulus tanpa Revisi
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="rekom" value="Lulus dengan Revisi Minor" >
              <label class="form-check-label">
                Lulus dengan Revisi Minor
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="rekom" value="Lulus dengan Revisi Mayor">
              <label class="form-check-label">
                Lulus dengan Revisi Mayor
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="rekom" value="Tidak Lulus">
              <label class="form-check-label">
                Tidak Lulus
              </label>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Form Revisi (Bab/Halaman : Uraian : Keterangan)</label>
            <textarea class="form-control" name="catatan_revisi" id="exampleFormControlTextarea1" rows="5"></textarea>
          </div>
          <div class="col-auto" >
            <button type="submit" name="input" class="btn bg-gradient-info">Kirim</button>
          </div>
        </form>
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
      title: 'Berhasil',
      text: 'Berhasil',
      showConfirmButton: false,
      timer: 2000
    })
  </script>
  <?php unset($_SESSION['sukses']); ?>
<?php endif; ?>

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

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if(@$_SESSION['catatan']) : ?>
  <script>
    Swal.fire({
      position: 'center',
      icon: 'warning',
      title: 'Gagal',
      showConfirmButton: false,
      timer: 2000
    })
  </script>
  <?php unset($_SESSION['catatan']); ?>
<?php endif; ?>
</body>

</html>