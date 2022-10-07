<?php
session_start();
if ($_SESSION['user'] == '') {
  header("cation:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/images/favicon.png">
  <title>
  SIM Administrasi Proyek Akhir
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="">
        <!-- <img src="./assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo"> -->
        <span class="ms-1 font-weight-bold">SIM Administrasi Proyek Akhir</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">

<?php if ($_SESSION['status'] == 1) { ?>
        <li class="nav-item">
          <a class="nav-link  " href="./pagesadmin/billingadmin.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                  </svg>
              </div>
            <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>
<?php } 

 else if ($_SESSION['status'] == 2 || $_SESSION['status'] == 5) { ?>
        <li class="nav-item">
          <a class="nav-link  " href="./pages_dosen/dosen.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                  </svg>
              </div>
            <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>
<?php } 

else if ($_SESSION['status'] == 3) { ?>
        <li class="nav-item">
          <a class="nav-link  " href="./pagesmahasiswa/mahasiswa.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>
<?php } 

else if ($_SESSION['status'] == 4) { ?>
        <li class="nav-item">
          <a class="nav-link  " href="./pages/pagestendik/tendik.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                  </svg>
              </div>
            <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>
<?php } ?>
  
        
        
        
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link  active" href="profile.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-lock" viewBox="0 0 16 16">
                    <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                    <path d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415z"/>
                  </svg>
                </div>
              <span class="nav-link-text ms-1">Ganti Password</span>
            </a>
          </li>
        </ul>
      </div>
    
  </aside>
  <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2">
      
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid">
      <div class="page-header min-height-100 border-radius-xl mt-4">
        <span class="mask bg-gradient-info opacity-6"></span>
      </div>
      <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row gx-4">
          <div class="col-auto">
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                <?php echo $_SESSION['user'] ?>
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                <?php echo $_SESSION['NIP'] ?>
              </p>
            </div>
          </div>
          
        </div>
      </div>
    </div>

    <?php 
include "./_database/config.php";
$npp = $_SESSION['NIP'];
    $query = mysqli_query($koneksi, "SELECT * FROM masuk WHERE user = '$npp' ");
    $data = mysqli_fetch_array($query);  
?>

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12 col-xl-11">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">Ganti Password</h6>
            </div>
            <div class="card-body p-3">
              <form action = "" method = "post" enctype = "multipart/form-data">

                <div class="form-group row">
                  <label for="inputPasswordLama" class="col-sm-3 col-form-label">Password Lama</label>
                  <div class="col-sm-6">
                    <input name ="pwl" type="password" class="form-control" placeholder="Masukan Password Lama">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputPasswordBaru" class="col-sm-3 col-form-label">Password Baru</label>
                  <div class="col-sm-6">
                    <input name ="pwb" type="password" class="form-control"  placeholder="Masukan Password Baru">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="KonfirmasiPassword" class="col-sm-3 col-form-label">Konfirmasi Password</label>
                  <div class="col-sm-6">
                    <input name ="kpwb" type="password" class="form-control" placeholder="Masukan Ulang Password Baru">
                  </div>
                </div>

                <input type="hidden" name="user" value="<?php echo $_SESSION['user'] ?>">

              </div>
              <div class="d-grid gap-1 col-4 mx-auto" class="btn bg-gradient-info" >
                  <input class="btn bg-gradient-info" type="submit" name="btnChangePassword" class="btn btn-primary" value="Ganti Password"/>
              </div>

              </form>  
              
            </div>
          </div>
        </div>
      </div>

       <!-- php update surat saat dosen menolak -->
       <?php
                include "./_database/config.php";
                if (isset($_POST['btnChangePassword'])) {

                  $passwordasli = $data['pass'];
                  $passwordlama = $_POST['pwl'];
                  $passwordbaru = $_POST['pwb'];
                  $konfirmasipassword = $_POST['kpwb'];

                  $user = $_SESSION['NIP'];
                 
                if ($passwordlama !== '' || $passwordbaru !== '' || $konfirmasipassword !== '') {
                  if ($passwordlama == $passwordasli) {

                    if($konfirmasipassword == $passwordbaru) {

                      $query = mysqli_query($koneksi, 'SELECT * FROM masuk' );
                      $query2 = mysqli_query($koneksi, "UPDATE masuk SET `pass` = '$konfirmasipassword' WHERE user = '$user' ");
                      session_reset();
                      if ($query2) {
                                echo '<script> alert ("Berhasil Merubah Password, Silahkan Logout Untuk Mencoba Password Baru Anda")</script>';
                                ?> <?php
                                session_destroy();
                                        } 
                      else {
                                echo '<a href="./pmhnsurat.php"><script> alert ("gagal merubah password")</script></a>';
                              }
                            }
                    else { echo '<a href="./pmhnsurat.php"><script> alert ("Konfirmasi Password Salah")</script></a>';
                      ?>  <script> history.pushState({}, "", "")</script> <?php }
                          } 
                  else { 
                      echo '<script> alert ("Password Lama Salah")</script></a>';
                      ?> <?php }
                        } 
                      else {
                        echo '<script> alert ("Mohon Untuk Mengisi Data dengan Lengkap")</script></a>';
                      }
                      
                      
                      } 

                      

                                ?>
      
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
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
  <script src="./assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>