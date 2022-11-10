<?php
session_start();
if ($_SESSION['user'] == '' || $_SESSION['status'] != 2) {
  header("location:../index.php");
}
?>

<?php
include "../_database/config.php";
// Backend Pendaftaran Evaluasi
if(isset($_POST['input']))
{
  $nama = $_POST['nama'];
  $nrp = $_POST['nrp'];
  $catatan = $_POST['catatan'];
  $dosbing = $_POST['dosbing'];
  $jenis_file = $_POST['jenis_file'];
  $keterangan = $_POST['keterangan'];
  $file = basename($_FILES['fl']['name']);
  $ukuran = $_FILES['fl']['size'];
  $tipe = strtolower(pathinfo($file, PATHINFO_EXTENSION));
  
  $max = 1024 * 5000;
  $ekstensi = "pdf";

// file
$url = $nrp.'_'.$file;

// ukuran dan tipe tidak sesuai
if ($ukuran > $max && $tipe !== $ekstensi)
{
?><script><?php $_SESSION["pdfuk"] = true;?></script> 
<script>history.pushState({}, "", "")</script><?php 
}
// ukuran tidak sesuai
else if ($ukuran > $max)
{
echo '<script> alert("Gagal mengajukan permohonan surat ! Ukuran file tidak boleh melebihi 20 mb")</script>' ;
}
// tipe tidak sesuai pdf
else if ($tipe != $ekstensi && $tipe != NULL)
{ 
?><script><?php $_SESSION['pdf'] = true?></script> 
<script>history.pushState({}, "", "")</script><?php
}  
// upload file
else if (move_uploaded_file($_FILES['fl']['tmp_name'], $url)) 
{
  // upload file dosen pemb dan koor
  if ($jenis_file == "Proposal Proyek Akhir" || $jenis_file == "Laporan Proyek Akhir") { 
    $query = mysqli_query($koneksi,"INSERT into proses_bimbingan values('', '$nama','$nrp','$dosbing','$catatan','$jenis_file','$keterangan', '$url', '$tipe', '$ukuran', sysdate())");
    if($query)
    // notif dan header sukses upload file
    {
      $nrp_id=$_GET['nrp'];
      ?><script><?php $_SESSION['sukses'] = true;?></script> 
      <?php header("location:update_status.php?nrp=$nrp_id"); 
    }
    // notif gagal input
    else
    {
    ?><script><?php $_SESSION['input'] = true;?></script> 
    <script>history.pushState({}, "", "")</script><?php
    }
  }
  
// gagal upload
else
{
    
  echo 'Gagal Upload';
}

} }
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
        <span class="ms-1 font-weight-bold">Dashboard Dosen Pembimbing</span>
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

    
                <!--Mahasiswa Bimbingan-->
                <li class="nav-item">
              <a class="nav-link" href="./bimbinganpa.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  </svg>
                </div>
                <span class="nav-link-text ms-1">Mahasiswa Bimbingan</span>
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
                <span class="nav-link-text ms-1">Kalender Proyek Akhir</span>
              </a>
            </li>

            <!-- File Proyek Akhir -->
            <li class="nav-item">
                <a class="nav-link  active" href="./daftar_bimbingan.php">
                  <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-up-fill" viewBox="0 0 16 16">
                      <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.354 9.854a.5.5 0 0 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 8.707V12.5a.5.5 0 0 1-1 0V8.707L6.354 9.854z"/>
                    </svg>
                  </div>
                  <span class="nav-link-text ms-1">File Proyek Akhir</span>
                </a>
              </li>

              <!-- Nilai Proyek Akhir -->
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
          

<!-- profil-->
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
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard Dosen Pembimbing</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">File Proyek Akhir</li>
          </ol>
          <h5 class="font-weight-bolder mb-0">Unggah File Proyek Akhir</h5>
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
                  <h6 class="mb-0">Unduh File</h6>
                </div>
              </div>
            </div>

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">

                
              <?php
                            include "../_database/config.php";
                            $id=$_GET['nrp'];?>
                <form action="" method="post" enctype="multipart/form-data">
                  <div class="card-header pb-0 p-3">
                    <div class="row">
                      <div class="mb-3">
                        <div class="row">
                                <?php
                            include "../_database/config.php";
                            $user=$_SESSION['user'];
                            $id=$_GET['nrp'];
                            $query = mysqli_query($koneksi, "SELECT * FROM bimbingan_pa WHERE nrp='$id'");
                            while($row = mysqli_fetch_assoc($query)){
                            ?>

                            <div class="form-group col-md-6">
                              <label for="formFile" class="form-label">Nama Mahasiswa</label>
                              <input name="nama" class="form-control" type="hidden" aria-label="default input example"  value = "<?php echo $row['nama']?>" required>
                              <label name="nama" class="form-control" aria-label="default input example"><?php echo $row['nama']?></label>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="formFile" class="form-label">NRP Mahasiswa</label>
                              <input name="nrp" class="form-control" type="hidden" aria-label="default input example"  value = "<?php echo $row['nrp']?>" required>
                              <label name="nrp" class="form-control" aria-label="default input example"><?php echo $row['nrp']?></label>
                            </div>
                            <input name="dosbing" class="form-control" type="hidden" aria-label="default input example"  value = "<?php echo $user?>" required>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                              <label for="formFile" class="form-label">Keterangan</label>
                              <input name="keterangan" class="form-control" type="hidden" aria-label="default input example"  value = "<?php echo $row['keterangan']?>" required>
                              <label name="keterangan" class="form-control" aria-label="default input example"><?php echo $row['keterangan']?></label>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="formFile" class="form-label">Nama File</label>
                              <label name="nama_file" class="form-control" aria-label="default input example"><?php echo $row['file']?></label>
                            </div>
                        </div>
                        <!-- file surat -->
                        <label for="formFile" class="form-label">Lihat File</label>
                        <a href="../pages_mahasiswaa/" target="_blank">
                          <p class="modal-title" name="file_mbuh" id="edit">
                          <button type="button" class="btn btn-link">
                            <em></em>
                          </button>
                          </p>
                        </a>
                        <br>
                        <div class="row">
                          <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Unggah File</h6>
                          </div>
                        </div>
                  
                        <br>
                        <div class="row">
                            <div class="form-group col-md-6">
                              <label for="formFile" class="form-label">Catatan Dosen</label>
                              <input name="catatan" class="form-control" type="text" aria-label="default input example" placeholder="Ketik Catatan" >
                            </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label for="formFile" class="form-label">Jenis File</label>
                            <label name="jenis_file" class="form-control" aria-label="default input example"><?php echo $row['jenis_file']?></label>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="formFile" class="form-label">Keterangan</label>
                              <select name="keterangan" class="form-control" aria-placeholder="Pilih Jenis File"  name aria-label="Default input example" required>
                                <option selected>Pilih Keterangan</option>
                                <option value="Revisi 1">Revisi 1</option>
                                <option value="Revisi 2">Revisi 2</option>
                                <option value="Revisi 3">Revisi 3</option>
                                <option value="Revisi 4">Revisi 4</option>
                                <option value="Revisi 5">Revisi 5</option>
                                <option value="Final">Final</option>
                              </select>
                          </div>
                          
                        </div>
                        <div class="row">
                          <div class="mb-3">
                            <label id="label-file" for="formFile" class="form-label">Unggah File (Ekstensi File .PDF)</label>
                            <input type="file" id="file" name="fl" class="form-control" aria-label="file example">
                            <div class="invalid-feedback">Example invalid form file feedback</div>
                          </div>
                        </div>
                        <!-- Menginput id surat -->
                        

                      </div>
                    </div>
                  </div>
                  <!-- button upload close -->
              
                  <div class = "mx-4">
                    <button type="button" class="btn bg-gradient-secondary" onclick = "goBack()">Kembali</button>
                    <button type="submit" name="input" class="btn btn-primary">OK</button> 
                    <?php }?> 
                  </div>
              </form>
            </div>
          </div> 
        </div>
        <!-- and popup ajuan surat mahasiswa -->
        
      </div>
    </div>




  </main>
  <script>
function goBack() {
  window.history.back();
}
</script>

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
</body>

</html>