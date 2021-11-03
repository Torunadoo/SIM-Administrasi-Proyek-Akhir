<?php
  session_start();
  if($_SESSION['user']=='')
  {
        header("location:home.php");
    }
  ?>

<?php
  include "../_database/config.php";
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
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Sistem Administrasi Dosen</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link  " href="../dosen_2.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>credit-card</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(453.000000, 454.000000)">
                        <path class="color-background opacity-6" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"></path>
                        <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>

        <!--Nama mahasiswa>
        <li class="nav-item">
          <a class="nav-link  " href="../pages_dosen/datamahasiswa.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> 
                <title>document</title> 
                  <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> 
                    <g id="Rounded-Icons" transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero"> 
                      <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)"> 
                        <g id="document" transform="translate(154.000000, 300.000000)"> 
                          <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" id="Path" opacity="0.603585379"></path> 
                          <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z" id="Shape"></path> 
                        </g> 
                      </g> 
                    </g> 
                  </g> 
                </svg>
            </div>
            <span class="nav-link-text ms-1">Daftar Mahasiswa</span>
          </a>
        </li-->

        <!-- Permohonan Surat -->
<?php if($_SESSION['user'] !== "Imam Arifin, S.T, MT"){ ?>
        <li class="nav-item">
          <a class="nav-link  " href="./permohonandosen.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>office</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g id="office" transform="translate(153.000000, 2.000000)">
                        <path class="color-background opacity-6" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                        <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Permohonan Surat</span>
          </a>
        </li>
        <?php } ?>
        
        <!--Validasi Surat-->
        <li class="nav-item">
          <a class="nav-link  active" href="../pages_dosen/validasisurat.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg class="text-dark" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> 
                <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> 
                  <g id="Rounded-Icons" transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero"> 
                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)"> 
                      <g id="box-3d-50" transform="translate(603.000000, 0.000000)"> 
                        <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z" id="Path"></path> 
                        <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" id="Path" opacity="0.7"></path> 
                        <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" id="Path" opacity="0.7"></path> 
                      </g> 
                    </g> 
                  </g> 
                </g> 
              </svg>
            </div>
            <span class="nav-link-text ms-1">Validasi Surat Mahasiswa</span>
          </a>
        </li>

         <!-- Validasi Surat Dosen -->
         <?php if ($_SESSION['user'] == "Imam Arifin, S.T, MT") {?>
          <li class="nav-item">
            <a class="nav-link  " href="./validasidsn.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg class="text-dark" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> 
                  <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> 
                    <g id="Rounded-Icons" transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero"> 
                      <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)"> 
                        <g id="box-3d-50" transform="translate(603.000000, 0.000000)"> 
                          <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z" id="Path"></path> 
                          <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" id="Path" opacity="0.7"></path> 
                          <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" id="Path" opacity="0.7"></path> 
                        </g> 
                      </g> 
                    </g> 
                  </g> 
                </svg>
              </div>
              <span class="nav-link-text ms-1">Validasi Surat Dosen</span>
            </a>
          </li>
          <?php } ?>

        <!-- REKAP SURAT -->
<?php if($_SESSION['user'] !== "Imam Arifin, S.T, MT"){ ?>
                 <li class="nav-item"> 
        <a class="nav-link  " href="./rekapdsn.php">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> 
              <title>document</title> 
                <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> 
                  <g id="Rounded-Icons" transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero"> 
                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)"> 
                      <g id="document" transform="translate(154.000000, 300.000000)"> 
                        <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" id="Path" opacity="0.603585379"></path> 
                        <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z" id="Shape"></path> 
                      </g> 
                    </g> 
                  </g> 
                </g> 
              </svg>
          </div>
          <span class="nav-link-text ms-1">Rekap Surat</span>
        </a>
        <?php } ?>

      <!--SURAT MASUK KADEP -->
      <?php if($_SESSION['user'] == "Imam Arifin, S.T, MT"){ ?>
      </li> 
       <li class="nav-item"> 
        <a class="nav-link  " href="./suratmskkdp.php">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> 
              <title>document</title> 
                <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> 
                  <g id="Rounded-Icons" transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero"> 
                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)"> 
                      <g id="document" transform="translate(154.000000, 300.000000)"> 
                        <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" id="Path" opacity="0.603585379"></path> 
                        <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z" id="Shape"></path> 
                      </g> 
                    </g> 
                  </g> 
                </g> 
              </svg>
          </div>
          <span class="nav-link-text ms-1">Surat Masuk</span>
        </a>
      </li> <?php } ?>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
<!--        <li class="nav-item">
          <a class="nav-link  " href="../pages_dosen/profiledosen.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>customer-support</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(1.000000, 0.000000)">
                        <path class="color-background opacity-6" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                        <path class="color-background" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                        <path class="color-background" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
      -->
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Validasi Surat</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Validasi Surat</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
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

<!-- Tabel Validasi -->
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Validasi Surat</h6>
                </div>
              </div>
            </div>
            
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-3">Perihal</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-1">Nama Mahasiswa</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-1">NRP Mahasiswa</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-5">Tanggal Pengajuan</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status Dosen</th>
                     
                     <?php 
                       include '../_database/config.php'; //panggil setiap ingin koneksi ke data
                       $query = mysqli_query($koneksi, 'SELECT * FROM suratmahasiswa ORDER BY id_no DESC');
                       $data = mysqli_fetch_array($query);

                       if ($_SESSION['user'] == "Imam Arifin, S.T, MT" ) { ?>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status Kadep</th>
                      <?php } ?>
                     
                    </tr>
                  </thead>
                  <!-- php tabel -->
                  <?php
                  include '../_database/config.php'; //panggil setiap ingin koneksi ke data
                  $nama = $_SESSION['user'];
                  $query = mysqli_query($koneksi, 'SELECT * FROM suratmahasiswa ORDER BY id_no DESC');
                  
                  while ($data = mysqli_fetch_array($query)) {
                  $tujuan = $data['dosen_pembimbing'];
                  
   ?>   <!-- Persetujuan yang hanya dilihat oleh kadep saja --> <?php 

                  if ($nama == "Imam Arifin, S.T, MT" && $data['status_surat'] == "2" ) {
                        
                    ?> 
                    <!-- tabel -->
                    <tbody>
                      <tr>
                        <!-- file -->
                        
                          <div class="d-flex px-2 py-1">
                            <div>
                              <!-- <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1"> -->
                            </div>          
                          </div>
                       
                        <!-- progres -->
                        <td>
                          <p class="text-xs font-weight-bold mb-0"><?php echo $data['progres'] ?></p>
                        </td>
                        <!-- nama -->
                        <td>
                        <h6 class="mb-0 text-sm"><?php echo $data['nama_mhsw'] ?></h6>
                        </td>
                        <!-- nrp -->
                        <td>
                        <h6 class="mb-0 text-sm"><?php echo $data['id_nrp'] ?></h6>
                        </td>
                        <!-- tanggal -->
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold "><?php echo $data['tanggal'] ?></span>
                        </td>

                        <!-- status surat dosen -->
                          <?php if ($data['status_surat'] == 0) {?>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_surat'] ?>">Sedang Di Proses</span>
                        </td> <?php } 
                              else if ($data['status_surat'] == 1) {?>
                          <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-danger" value="<?php echo $data['status_surat'] ?>">Ditolak</span>
                        </td> 
                              <?php }
  
                              else if ($data['status_surat'] == 2) {?>
                              <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['status_surat'] ?>">Diterima</span>
                        </td> <?php } ?> 

                        <!-- status surat kadep -->
                        <?php if ($data['status_kadep'] == 0) {?>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_surat'] ?>">Sedang Di Proses</span>
                        </td> <?php } 
                              else if ($data['status_kadep'] == 1) {?>
                          <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-danger" value="<?php echo $data['status_surat'] ?>">Ditolak</span>
                        </td> 
                              <?php }
  
                              else if ($data['status_kadep'] == 2) {?>
                              <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['status_surat'] ?>">Diterima</span>
                        </td> <?php } ?> 
                        <!-- button edit -->
                        <td class="align-middle">
                          <a  href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            <button type="button" class="btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_no'] ?>">Edit</button>
                          </a>
                        </td>
                        <!-- and tabel -->
                        
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
                          
                          <form action="" method="post">
                              <div class="card-header pb-0 p-3">
                                <div class="row">
                                  <div class="mb-3">
                                    <!-- nama mahasiswa -->
                                    <label for="formFile" class="form-label">Nama Mahasiswa</label>
                                    <label name="nm" class="form-control" aria-label="default input example"><?php echo $data['nama_mhsw'] ?></label>
                                    <!-- NRP mahasiswa -->
                                    <label for="formFile" class="form-label">NRP Mahasiswa</label>
                                    <label name="nrp" class="form-control" aria-label="default input example"><?php echo $data['id_nrp'] ?></label>
                                    <!-- progres -->
                                    <label for="formFile" class="form-label">Perihal</label>
                                    <label name="sr" class="form-control" aria-label="default input example"><?php echo $data['progres'] ?></label>
                                    <!-- file surat -->
                                    <label for="formFile" class="form-label">Lihat File</label>
                                    <a href="../pagesmahasiswa/<?php echo $data['file'] ?>" target="_blank">
                                    <p class="modal-title" name="fl" id="edit<?php echo $data['id_no'] ?>"><button type="button"  class="btn btn-link"><em><?php echo $data['file'] ?></em></button></p>
                                    </a>
                                    <!-- Menginput id surat -->
                                    <input name = "id" value = <?php echo $data['id_no'] ?> type = "hidden" >                
                                    
                                                   
                                    <!-- persetujuan surat -->
                                    <div class="form-check">
                                      <input class="form-check-input" Name="sk" type="radio" value="1" id="defaultCheck1">
                                      <label class="form-check-label" for="defaultCheck1">
                                        Tidak Di Setujui
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" Name="sk" type="radio" value="2" id="defaultCheck1">
                                      <label class="form-check-label" for="defaultCheck1">
                                        Di Setujui
                                      </label>

                                      <!-- Menginput catatan -->
                                    <div>
                                    <label for="catatan2" class = "form-label"> Catatan </label>
                                    <input name = "catatan2" type = "text"  >  
                                    </div>

                                 
                        
                                  </div>
                                </div>
                              </div>
                              <!-- button upload close -->
                              </div>
                            <div class="modal-footer">
                              <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submite" name="updatekdp" class="btn bg-gradient-primary" data-bs-toggle = "modal" data-bs-target="#edit<?php echo $data['id_no'] ?>">Upload</button>
                            </div>
                          </form>
                            </div>
                          </div>
                        </div>  
                        <!-- and popup ajuan surat mahasiswa -->
                        <?php  }

                     else if (strpos($tujuan, $nama) !== false && $nama !== "Imam Arifin, S.T, MT") {
                        

                    
                  ?> 
                  <!-- tabel -->
                  <tbody>
                    <tr>
                      <!-- file -->
                     
                        <div class="d-flex px-2 py-1">
                          <div>
                            <!-- <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1"> -->
                          </div>
                        </div>
                      
                      <!-- progres -->
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo $data['progres'] ?></p>
                      </td>
                      <!-- nama -->
                      <td>
                      <h6 class="mb-0 text-sm"><?php echo $data['nama_mhsw'] ?></h6>
                      </td>
                      <!-- nrp -->
                      <td>
                      <h6 class="mb-0 text-sm"><?php echo $data['id_nrp'] ?></h6>
                      </td>
                      <!-- tanggal -->
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold "><?php echo $data['tanggal'] ?></span>
                      </td>
                      <!-- status surat -->
                        <?php if ($data['status_surat'] == 0) {?>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_surat'] ?>">Sedang Di Proses</span>
                      </td> <?php } 
                            else if ($data['status_surat'] == 1) {?>
                        <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-danger" value="<?php echo $data['status_surat'] ?>">Ditolak</span>
                      </td> 
                            <?php }

                            else if ($data['status_surat'] == 2) {?>
                            <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['status_surat'] ?>">Diterima</span>
                      </td> <?php } ?> 

                      <!-- button edit -->
                      <td class="align-middle">
                        <a  href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          <button type="button" class="btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_no'] ?>">Edit</button>
                        </a>
                      </td>
                      <!-- and tabel -->
                      
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
                        
                        <form action="" method="post">
                            <div class="card-header pb-0 p-3">
                              <div class="row">
                                <div class="mb-3">
                                  <!-- nama mahasiswa -->
                                  <label for="formFile" class="form-label">Nama Mahasiswa</label>
                                  <label name="nm" class="form-control" aria-label="default input example"><?php echo $data['nama_mhsw'] ?></label>
                                  <!-- NRP mahasiswa -->
                                  <label for="formFile" class="form-label">NRP Mahasiswa</label>
                                  <label name="nrp" class="form-control" aria-label="default input example"><?php echo $data['id_nrp'] ?></label>
                                  <!-- progres -->
                                  <label for="formFile" class="form-label">Perihal</label>
                                  <label name="sr" class="form-control" aria-label="default input example"><?php echo $data['progres'] ?></label>
                                  <!-- file surat -->
                                  <label for="formFile" class="form-label">Lihat File</label>
                                  <a href="../pagesmahasiswa/<?php echo $data['file'] ?>" target="_blank">
                                  <p class="modal-title" name="fl" id="edit<?php echo $data['id_no'] ?>"><button type="button"  class="btn btn-link"><em><?php echo $data['file'] ?></em></button></p>
                                  </a>
                                  <!-- Menginput id surat -->
                                  <input name = "id" value = <?php echo $data['id_no'] ?> type = "hidden" >                               
                                  <!-- persetujuan surat -->
                                  <div class="form-check">
                                    <input class="form-check-input" Name="ss" type="radio" value="1" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                      Tidak Di Setujui
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" Name="ss" type="radio" value="2" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                      Di Setujui
                                    </label>
                                  </div>
                                        <!-- Menginput catatan -->
                                        <div>
                                    <label for="catatan" class = "form-label"> Catatan </label>
                                    <br>
                                    <input name = "catatan" type = "text"  >  
                                    </div>
                                  
                      
                                </div>
                              </div>
                            </div>
                            <!-- button upload close -->
                            </div>
                          <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submite" name="update" class="btn bg-gradient-primary" data-bs-toggle = "modal" data-bs-target="#edit<?php echo $data['id_no'] ?>">Upload</button>
                          </div>
                        </form>
                          </div>
                        </div>
                      </div>  
                      <!-- and popup ajuan surat mahasiswa -->
                      <?php  }
                    
                    }?>
                      <!-- and php tabel -->
                    <!-- and modal-->
                     
                   
                    </tr>
                     <!-- php update surat -->
                     <?php 
                    include "../_database/config.php";
                    if(isset($_POST['update'])){
                      $status = $_POST['ss'];
                      $id = $_POST['id'];
                      
                      
                      $query = mysqli_query($koneksi, "UPDATE suratmahasiswa SET `status_surat`='$status' WHERE id_no = '$id' ");
                      if($query){
                        echo '<a href="../pages_dosen/validasisurat.php"><script> alert ("Berhasil di ajukan")</script></a>';
                      }
                      else {
                        echo '<a href="../pages_dosen/validasisurat.php"><script> alert ("gagal di ajukan")</script></a>';
                      }
                    } ?>

                    <!-- php update catatan dosen -->
                    <?php 
                   include "../_database/config.php";
                   if(isset($_POST['update'])){
                     $catatan = $_POST['catatan'];
                     $id = $_POST['id'];
                     
                     
                     $query = mysqli_query($koneksi, "UPDATE suratmahasiswa SET `catatan`='$catatan' WHERE id_no = '$id' ");
                     if($query){
                       echo '<a href="../pages_dosen/validasisurat.php"></a>';
                     }
                     else {
                       echo '<a href="../pages_dosen/validasisurat.php"><script> alert ("gagal memberikan catatan")</script></a>';
                     }
                   }?>  

                    <!-- update catatan kadep -->
                  <?php 
                   include "../_database/config.php";
                   if(isset($_POST['updatekdp'])){
                     $catatan2 = $_POST['catatan2'];
                     $id = $_POST['id'];
                     
                     
                     $query = mysqli_query($koneksi, "UPDATE suratmahasiswa SET `catatan2`='$catatan2' WHERE id_no = '$id' ");
                     if($query){
                       echo '<a href="../pages_dosen/validasisurat.php"></a>';
                     }
                     else {
                       echo '<a href="../pages_dosen/validasisurat.php"><script> alert ("gagal memberikan catatan")</script></a>';
                     }
                   }?>  
                   
                   <!-- php update surat --> <?php
                      
                    include "../_database/config.php";
                    if(isset($_POST['updatekdp'])){
                      $status = $_POST['sk'];
                      $id = $_POST['id'];
                      
                      
                      $query = mysqli_query($koneksi, "UPDATE suratmahasiswa SET `status_kadep`='$status' WHERE id_no = '$id' ");
                      if($query){
                        echo '<a href="../pages_dosen/validasisurat.php"><script> alert ("Berhasil di ajukan")</script></a>';
                      }
                      else {
                        echo '<a href="../pages_dosen/validasisurat.php"><script> alert ("gagal di ajukan")</script></a>';
                      }
                    }

                    ?>
                  </tbody>
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