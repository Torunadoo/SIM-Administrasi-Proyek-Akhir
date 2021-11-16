<?php
    session_start();
    if($_SESSION['user']=='')
    {
          header("location:home.php");
      }
    ?>
  
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
      <link rel="icon" type="image/png" href="/assets/img/favicon.png">
      <title>
        Sistem Administrasi DTEO
      </title>
      <!--     Fonts and icons     -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
      <link rel="icon" type="image/png" href="./assets/images/favicon.png">
      <!-- Nucleo Icons -->
      <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
      <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
      <!-- Font Awesome Icons -->
      <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
      <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
      <!-- CSS Files -->
      <link id="pagestyle" href="/assets/css/soft-ui-dashboard.css" rel="stylesheet" />

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
            
            <span class="ms-1 font-weight-bold">Sistem Administrasi Dosen</span>
          </a>
        </div>

        <!--Nefbar-->
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
          <ul class="navbar-nav">
            
          <!--home-->
            <li class="nav-item">
              <a class="nav-link  active" href="../dosen_2.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>

          
          <!-- Permohonan Surat -->
  <?php if($_SESSION['status'] !== '5'){ ?>
          <li class="nav-item">
            <a class="nav-link  " href="./pages_dosen/permohonandosen.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Permohonan Surat</span>
            </a>
          </li>
          <?php } ?>
          
          <!--Validasi Surat-->
          <li class="nav-item">
            <a class="nav-link  " href="./pages_dosen/validasisurat.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Validasi Surat Mahasiswa</span>
            </a>
          </li>

          <!-- Validasi Surat Dosen -->
          <?php if ($_SESSION['status'] == '5') {?>
          <li class="nav-item">
            <a class="nav-link  " href="./pages_dosen/validasidsn.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Validasi Surat Dosen</span>
            </a>
          </li>
          <?php } ?>

                   <!-- Validasi Surat Tendik -->
                   <?php if ($_SESSION['status'] == '5') {?>
          <li class="nav-item">
            <a class="nav-link  " href="./pages_dosen/validasitndk.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Validasi Surat Tendik</span>
            </a>
          </li>

          <?php } ?>

          <!-- REKAP SURAT -->
          <?php if($_SESSION['status'] !== '5'){ ?>
          <li class="nav-item"> 
            <a class="nav-link  " href="./pages_dosen/rekapdsn.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
                  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Rekap Surat</span>
            </a>
          </li>  
          <?php } ?>

          
          
        <!--SURAT MASUK KADEP -->
        <?php if($_SESSION['status'] == '5'){ ?>
        </li> 
        <li class="nav-item"> 
          <a class="nav-link  " href="./pages_dosen/suratmskkdp.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
              </div>
            <span class="nav-link-text ms-1">Surat Masuk</span>
          </a>
        </li> <?php } ?>
        
<!--profil-->
<li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="./profile.php">
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
            <span class="nav-link-text ms-1">Ganti Password</span>
          </a>
  </li>
            
      
          </ul>
        </div>
        <!--barusan dicopy nefbar-->

      </aside>

      <!--BAtas-->
      <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
          <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Sistem Administrasi Dosen</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Home</li>
              </ol>
              <h6 class="font-weight-bolder mb-0">Home</h6>
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
                  <a href="./pages_dosen/profiledosen.php" class="nav-link text-body font-weight-bold px-0">
                    <i class="fa fa-user me-sm-1"></i>
                    <span class="d-sm-inline d-none"> <?php echo $_SESSION['user']?> </span>
                  </a>
                </li>
                <!-- <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                  <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                    <div class="sidenav-toggler-inner">
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                    </div>
                  </a>
                </li> -->
                <li class="nav-item px-3 d-flex align-items-center">
                  <!--a href="javascript:;" class="nav-link text-body p-0">
                    <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                  </a--> 
                </li>
                
                <li class="nav-item d-flex align-items-center">
              <a href="./logout.php" href="javascript:;" class="nav-link text-body p-0" >
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
            <div class="col-lg-7">
              <div class="row">
                <!---->
                
                <div class="col-md-12 mb-lg-0 mb-4">
                  <div class="card mt-4">
                    <div class="card-header pb-0 p-3">
                      <div class="row">
                        <div class="col-6 d-flex align-items-center">
                          <h6 class="mb-0">Informasi</h6>
                        </div>
                        
                      </div>
                    </div>

                    <div class="card example-1 scrollbar-deep-purple bordered-deep-purple thin">
                      <div class="card-body p-3">
                        <div class="row">
                          <?php 
                          include "_database/config.php";
                          $query = mysqli_query($koneksi, 'SELECT * FROM adminsurat ORDER BY tanggal DESC' );

                          while ($data = mysqli_fetch_array($query)) {
                            if( ($data['tujuan'] == "Dosen") or ($data['tujuan'] == "Dosen, Tendik, Mahasiswa") )
                            {?>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-4 mb-2 border-radius-lg">
                              <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark font-weight-bold text-sm"><?=$data['nama']?></h6>
                                <span class="text-xs"><?=$data['tanggal']?></span>
                              </div>
                              <div class="d-flex align-items-center text-sm">
                                <a href="./pagesadmin/<?php echo $data['dokumen'] ?>" target="_blank">
                                  <p class="modal-title" name="fl" id="edit<?php echo $data['nomor'] ?>"><button type="button" class="btn btn-link text-dark text-sm " class="btn btn-link"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</em></button></p>
                                </a>
                              </div>
                            </li>
                            <?php }?>
                            <?php if ($data['tujuan'] == "Dosen, Tendik" or $data['tujuan'] == "Dosen, Mahasiswa"){?>
                              <li class="list-group-item border-0 d-flex justify-content-between ps-4 mb-2 border-radius-lg">
                              <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark font-weight-bold text-sm"><?=$data['nama']?></h6>
                                <span class="text-xs"><?=$data['tanggal']?></span>
                              </div>
                              <div class="d-flex align-items-center text-sm">
                                <a href="./pagesadmin/<?php echo $data['dokumen'] ?>" target="_blank">
                                  <p class="modal-title" name="fl" id="edit<?php echo $data['nomor'] ?>"><button type="button" class="btn btn-link text-dark text-sm " class="btn btn-link"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</em></button></p>
                                </a>
                              </div>
                            </li>
                            <?php }?>
                          <?php } ?>
                          <div class="col-md-6 mb-md-0 mb-4">
                          
                          </div>
                          <div class="col-md-6">

                          </div>
                        </div>
                      </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="card h-100">
                <div class="card-header pb-0 px-4">
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0">Surat Masuk</h6>
                    </div>
                    <div class="col-6 text-end">

                      <a href = pages_dosen/rekapdsn.php> <button class="btn btn-outline-primary btn-sm mb-0">View All</button> </a>
                    </div>
                  </div>
                </div>
                    <hr>    
                <div class="card example-1 scrollbar-deep-purple bordered-deep-purple thin" style = "height:400px"> 
                  <ul class="list-group">
                        <br>
                    <?php
                        include "./_database/config.php";

                    $query = mysqli_query($koneksi, 'SELECT * FROM kirimadmindsn ');
                    $no = 0;
                    $no2 = $no++;
                    while ($data = mysqli_fetch_array($query)){
                      $tujuan = $data['nama'];
                      if (strpos($tujuan, $_SESSION['user']) !== false) { $no++ ?>
                     
                    <li class="list-group-item border-0 d-flex justify-content-between ps-4 mb-2 border-radius-lg">
                      <div class="d-flex flex-column">
                        <h6 class="mb-1 text-dark font-weight-bold text-sm"> <?php echo $data ['file'] ?> </h6>
                        <span class="text-xs"><?php echo $data['perihal'] ?></span>
                        <span class="text-xs"><?php echo $data['tanggal'] ?></span>
                      </div>
                      <div class="d-flex align-items-center text-sm">
                  
                        <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                      </div>
                    </li>
                      <?php }} ?>
                      <?php if ($no == 1) { ?>

                      <h6 class = "text-center"><br><br><br>BELUM ADA SURAT MASUK</h6>
                      <?php } ?>

                  </ul>
                </div>
              </div>
            </div>
          </div>


                       <!-- Bagian Detail Permohonan Surat -->
      <div class="row">
        <div class="col-md-7 mt-4">
          <div class="card">
            <div class="card-header pb-0 px-3">
              <h6 class="mb-0">Detail Permohonan Surat</h6>
            </div>
            <div class="card-body pt-4 p-3">
            <div style = "height:500px" class="card example-1 scrollbar-deep-purple bordered-deep-purple thin">
              <ul class="list-group">
                <?php include './_database/config.php';
                $no = 1;
                $query = mysqli_query($koneksi, 'SELECT * FROM suratdosen ORDER BY id_no DESC');
                while ($data = mysqli_fetch_array($query)) {
                  if ($data['nama_dsn'] == $_SESSION['user']) {
                    $no++
                ?>
                    <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                      <div class="d-flex flex-column">
                        <h6 class="mb-3 text-sm"> <?php echo $data['file'] ?> </h6>
                        <span class="mb-2 text-xs">Perihal : <span class="text-dark font-weight-bold ms-sm-2"><?php echo $data['perihal'] ?></span></span>
                        <span class="text-xs">Tanggal Diajukan : <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $data['tanggal'] ?></span></span>
                      </div>
                      <div class="ms-auto text-end">
                       <div>
                      <button type = "button" class = "btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus<?php echo$data['id_no']?>">Hapus</a>
                      </div>
                      <div>   
                        <button type = "button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_no'] ?>">Respon</button>
                      </div>
                      </div>
                      
                    </li>

                   


                <?php } ?>

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
                                 <a href="./pagesmahasiswa/<?php echo $data['file'] ?>" target="_blank">
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
                           <button type="submite" name="hapus" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_no'] ?>">Hapus</button>
                        
                       </div>

                       </form>

                     </div>
                     </div>
                     </div>

                  <!-- Modal Edit -->
                  <div class="modal fade" id="edit<?php echo $data['id_no'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                   <div class="modal-dialog modal-dialog-centered" role="document">
                     <div class="modal-content">

                       <!-- popup ajuan surat mahasiswa -->
                       <div class="modal-header">
                         <h5 class="modal-title" id="edit<?php echo $data['id_no'] ?>">Catatan/Edit</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>

                     
                       <div class="modal-body">
                         <form action="" method="post" enctype="multipart/form-data">
                           <div class="card-header pb-0 p-3">
                             <div class="row">
                               <div class="mb-3">
                               
                                 <!-- nama mahasiswa -->
                                 <label for="formFile" class="form-label">Catatan Kadep</label>
                                 <label name="catatan" class="form-control" aria-label="default input example"><?php echo $data['catatan'] ?></label>

                               
                                 <!-- Input ID untuk memberikan identitas surat -->
                                 <input type="hidden" name="id2" value="<?php echo $data['id_no'] ?>">

                                 <!-- Ubah File saat ditolak filenya -->
                                <?php if ($data['status_kadep'] == "1") { ?>
                                   <label for="formFile" class="form-label">Ubah File Untuk Kadep</label>
                                   <input type="file" name="uflk" id="edit<?php echo $data['id_no'] ?>" class="form-control" aria-label="file example" required>
                                   <input type="hidden" name="stats2" value="0">
                                 <?php }
                                      else { ?>
                                       <h5 class = "text-info allign-middle modal-title text-center"> Surat Belum Memerlukan Perubahan </h5> 
                                        <?php } ?> 
                               </div>
                             </div>
                           </div>
                       </div>


                       <div class="modal-footer">
                         <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>

                         <!-- Saat dosen menolak -->
                         <?php if ($data['status_kadep']  == "1") { ?>
                           <button type="submite" name="update2" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_no'] ?>">Upload</button>
                         <?php } ?>
                       </div>

                       </form>

                     </div>
                     </div>
                     </div>
                
               <?php } ?>

               <?php if ($no == 1) { ?>
              <h6 class = "text-center"><br><br><br><br><br><br><br><br><br>BELUM ADA YANG DIAJUKAN</h6>

              <?php } ?>


              </ul>
             </div>
            </div>
          </div>
        </div>

                        <!-- php update surat saat dosen menolak -->
                        <?php
                include "./_database/config.php";
                if (isset($_POST['update'])) {

                  $nama_file2 = basename($_FILES['ufl']['name']);
                  $id3 = $_POST['id2'];
                  $nol = $_POST['stats2'];

                  $url2 = $id3.'_'.$nama_file2;

                  if (move_uploaded_file($_FILES['ufl']['tmp_name'], $url2)) {

                    $query2 = mysqli_query($koneksi, "UPDATE suratdosen SET `file`='$url2' WHERE id_no = '$id3' ");
                    $query3 = mysqli_query($koneksi, "UPDATE suratdosen SET `status_surat`='$nol' WHERE id_no = '$id3' ");

                    if ($query2 && $query3) {
                      echo '<a href="./pmhnsurat.php"><script> alert ("Berhasil di ajukan")</script></a>';
                      ?>  <script> history.pushState({}, "", "")</script> <?php
                              } else {
                                echo '<a href="./pmhnsurat.php"><script> alert ("gagal di ajukan")</script></a>';
                              }
                            }
                          }

                                ?>

                <!-- php update surat saat kadep menolak -->
                <?php
                include "./_database/config.php";
                if (isset($_POST['update2'])) {

                  $nama_file3 = basename($_FILES['uflk']['name']);
                  $id4 = $_POST['id2'];
                  $nol = $_POST['stats2'];

                  $url3 = $id4.'_'.$nama_file3;

                  if (move_uploaded_file($_FILES['uflk']['tmp_name'], $url3)) {

                    $query4 = mysqli_query($koneksi, "UPDATE suratdosen SET `file`='$url3' WHERE id_no = '$id4' ");
                    $query5 = mysqli_query($koneksi, "UPDATE suratdosen SET `status_kadep`='$nol' WHERE id_no = '$id4' ");

                    if ($query4 && $query5) {
                      echo '<a href="./pmhnsurat.php"><script> alert ("Berhasil di ajukan")</script></a>';
                ?> <script> history.pushState({}, "", "") </script> <?php
                              } else {
                                echo '<a href="./pmhnsurat.php"><script> alert ("gagal di ajukan")</script></a>';
                              }
                            }
                          }

                                ?>

                <!-- php hapus file -->
                <?php
                include "./_database/config.php";
                if (isset($_POST['hapus'])) {

                  $nama_file3 = basename($_FILES['flhps']['name']);
                  $id6 = $_POST['id3'];

                 
                 $query6 = mysqli_query($koneksi, "DELETE FROM suratdosen  WHERE id_no = '$id6' ");

                    if ($query6) {
                      echo '<a href="./pmhnsurat.php"><script> alert ("Berhasil Menghapus")</script></a>';
                ?> <script> history.pushState({}, "", "") </script> <?php
                              } else {
                                echo '<a href="./pmhnsurat.php"><script> alert ("gagal di ajukan")</script></a>';
                              }
                            }
                          

                                ?>
<!-- Bagian Status Surat -->
<div class="col-md-5 mt-4">
              <div class="card h-100 mb-4">
              
                <div class="card-header pb-4 px-4">
                  <div class="row">
                    <div class="col-md-6">
                      <h6 class="mb-0">Status Surat</h6>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end align-items-center">
                      <i class="far fa-calendar-alt me-2"></i>
                      <small><?php  echo date('d F o')?></small>
                    </div>
                  </div>
                </div>
                <ul class="list-group">
                  <?php
                  include "./_database/config.php";
                            
                  $query = mysqli_query($koneksi, 'SELECT * FROM suratdosen ORDER BY id_no DESC ');
                  $no = 0;
                  $no2 = $no++;
                  while ($data = mysqli_fetch_array($query)){

                    if ($data['nama_dsn'] == $_SESSION['user']) {
                      $no++
                    ?>
                      <li class="list-group-item border-0 d-flex justify-content-between px-4 mb-3 ">
                      <div class="d-flex flex-column">
                        <h6 class="mb-1 text-dark text-sm"><?php echo $data['perihal'] ?></h6>
                          <span class="text-xs"><?php echo $data['tanggal'] ?></span>
                      </div>
                      <!-- status surat dosen-->
                      <?php if ($data['status_admin'] == 0) {?>
                          <div class="d-flex align-items-center text-sm font-weight-bold">
                            <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_admin'] ?>">Sedang Di Proses</span>
                          </div>
                        <?php } 
                        else if ($data['status_admin'] == 1) {?>
                          <div class="d-flex align-items-center text-sm font-weight-bold">
                            <span class="badge badge-sm bg-gradient-danger" value="<?php echo $data['status_admin'] ?>">Ditolak</span>
                          </div>
                        <?php }
                        else if ($data['status_admin'] == 2) {?>
                          <div class="d-flex align-items-center text-sm font-weight-bold">
                            <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['status_admin'] ?>">Disetujui</span>
                          </div>
                        <?php } }}?>
                      </li>
                      <?php if ($no == 1) { ?>
              <h6 class = "text-center"><br><br><br><br><br><br><br><br><br>BELUM ADA SURAT YANG DIAJUKAN</h6>

              <?php } ?>
                  </ul>
              </div>
            </div>
          </div>
          
        </div>
      </main>
      
      </div>
      <!--   Core JS Files   -->
      <script src="/assets/js/core/popper.min.js"></script>
      <script src="/assets/js/core/bootstrap.min.js"></script>
      <script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>
      <script src="/assets/js/plugins/smooth-scrollbar.min.js"></script>
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
      <script src="/assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
      <!-- JS sweetaler notif login berhasil-->
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <?php if(@$_SESSION['alert']) : ?>
            <script>
                Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Berhasil Login',
                })
            </script>
        <?php unset($_SESSION['alert']); ?>
        <?php endif; ?>
    </body>

    </html>