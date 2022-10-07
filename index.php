<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>SIM Administrasi Proyek Akhir</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="./assets/images/favicon.png">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="login.php" method="post">
				<span class="login100-form-title " class="text-center">
					Selamat Datang !<br> Silahkan masukan username dan password
				</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="user">
						
						<span class="focus-input100"></span>
						<span class="label-input100">User Name</span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						

						<!-- <div>
							<a href="#" class="txt1">
								Lupa Password ?
							</a>
						</div> -->
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					<div class="text-center">
  						<a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Daftar Akun</a>
					</div>

				</form>	
				<div style="width: calc(100% - 560px)" class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
					<img src="assets/images/dteologo.png" >
					<p class="text-center">SIM ADMINISTRASI PROYEK AKHIR<br>
					DEPARTEMEN TEKNIK ELEKTRO OTOMASI <br> INSTITUT TEKNOLOGI SEPULUH NOPEMBER SURABAYA
					</p>
				</div>
				</div>
			</div>
		</div>
	</div>


		<!-- Modal untuk daftar akun -->
					
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Daftar Akun</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	

      <div class="modal-body mx-3">
	
	  <?php
include './_database/config.php';
if(isset($_POST['input']))
{
	if ($_POST['pass2'] !== $_POST['pass'])
	{ echo '<script> alert ("Perulangan password salah")</script>';}

	else {
  $user = $_POST['nm'];
  $pass = $_POST['pass'];
  $status = $_POST['pos'];

  $query = mysqli_query($koneksi,"insert into masuk values('$user','$pass','$status', '')");

    if($query)
    {
      echo '<script> alert ("Berhasil menambahkan akun")</script>';
    }
    else
    {
      echo '<script> alert ("Akun sudah terdaftar")</script>';
    }}

}
	?>	
<form action="" method="post" enctype="multipart/form-data">
        <div class="md-form mb-5">
		  <label data-error="wrong" data-success="right" for="orangeForm-name">Masukkan NRP atau NPP</label>
          <input name = "nm" type="text" id="orangeForm-name" class="form-control validate">
       
        </div>

		<div class="md-form mb-4">
		<label data-error="wrong" data-success="right" for="orangeForm-pass">Masukkan Password</label>  
		<input name = "pass" type="password" id="orangeForm-pass" class="form-control validate">
        </div>

		<div class="md-form mb-4">
		<label data-error="wrong" data-success="right" for="orangeForm-pass">Ulangi Password</label>  
		<input name = "pass2" type="password" id="orangeForm-pass" class="form-control validate">
        </div>

        <div class="md-form mb-5">
		<label data-error="wrong" data-success="right" for="orangeForm-email">Silahkan Pilih Status anda</label>
		<div><input name = "pos" type = "radio" value = "2"> Dosen</div>
		<div><input name = "pos" type = "radio" value = "3"> Mahasiswa</div>
		<div><input name = "pos" type = "radio" value = "4"> Tendik</div>

        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submite" name="input" class="btn bg-gradient-primary" data-bs-toggle = "modal" data-bs-target = "#modalRegisterForm">Daftar</button>
      </div>
	  </form>
    </div>
  </div>





					
				

		
	
	

	
	
<!--===============================================================================================-->
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>
<!--===============================================================================================-->
	<!-- JS sweetaler notif login berhasil-->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['alert']) : ?>
        <script>
            Swal.fire({
            icon: 'error',
            title: 'Gagal',
            text: 'Username / Password Salah',
			showConfirmButton: false,
            timer: 2000
            })
        </script>
    <?php unset($_SESSION['alert']); ?>
    <?php endif; ?>

</body>
</html>