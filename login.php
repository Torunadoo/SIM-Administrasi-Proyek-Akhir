<?php 
session_start();
include('_database/config.php');
 
$user = $_POST['user']; //Username masuk
$pass = $_POST['pass']; //Password masuk
$antiinject = stripos($user, "or"); //Menghilangkan kemampuan operator or untuk berada dalam form
$antiinject2 = strpos($user, "|");  //Menghilangkan kemampuan operator or untuk berada dalam form
$tambah = mysqli_query($koneksi, "SELECT * FROM masuk WHERE user='$user' and pass='$pass'"); //Menyeleksi query dari tabel masuk

$cek = mysqli_num_rows($tambah);

if ($antiinject != false || $antiinject2 != false || $user == NULL || $pass == NULL)
{    $_SESSION['alert'] = true;
    header("location:index.php");  }

if($cek > 0){
 
	$data = mysqli_fetch_assoc($tambah);{
    

   if($data['status'] == '3'){   
        session_start();
        $tambah2 = mysqli_query($koneksi, "SELECT * FROM data_mhs WHERE nrp_mhs='$user' "); //mencari tau apakah username yang masuk ada di dalam database
        $data2 = mysqli_fetch_assoc($tambah2);{
            $_SESSION['user'] =$data2['nama_mhs']; //Membuat data nama menjadi session
            $_SESSION['NIP'] =$data2['nrp_mhs']; //Membuat data nomor civitas its menjadi session
            $_SESSION['status'] = $data['status']; //Membuat data status menjadi session
            $_SESSION['angkatan'] = $data2['angkatan']; //Membuat data angkatan menjadi session
            $_SESSION['alert'] = true;}  //memberikan notifikasi berhasil masuk
        header("location:./pages_mahasiswa/mahasiswa.php"); //jika user adalah mahasiswa maka akan masuk dashboard mahasiswa
   }
   else if($data['status'] == '10'){
        session_start();
            $data2 = mysqli_fetch_array($tambah);
            $_SESSION['user'] = "dosenkoor";
            $_SESSION['NIP'] = "dosenkoor";
            $_SESSION['status'] = $data2['status'];
            $_SESSION['alert'] = true; //memberikan notifikasi berhasil masuk
        header("location:./pages_dosenkoor/dosenkoor.php"); //jika user adalah dosen maka akan masuk dashboard dosen
}
   else if($data['status'] == '2'){
        session_start();
        $tambah2 = mysqli_query($koneksi, "SELECT * FROM data_dosenb WHERE id_npp ='$user' "); //mencari tau apakah username yang masuk ada di dalam database
        $data2 = mysqli_fetch_assoc($tambah2);{
            $_SESSION['user'] =$data2['nama_anggota']; //Membuat data nama menjadi session
            $_SESSION['NIP'] = $data2['id_npp']; //Membuat data nomor civitas its menjadi session
            $_SESSION['status'] = $data['status']; //Membuat data status menjadi session
            $_SESSION['alert'] = true;}  //memberikan notifikasi berhasil masuk
        header("location:./pages_dosen/dosen.php"); //jika user adalah dosen maka akan masuk dashboard dosen
   }
   else if($data['status'] == '99'){
        session_start();
        $data2 = mysqli_fetch_array($tambah);
        $_SESSION['user'] = "admin";
        $_SESSION['NIP'] = "admin";
        $_SESSION['status'] = $data2['status'];
        $_SESSION['alert'] = true;
        header("location:pages_admin/admin.php");
   }
   else{
        echo  'bakso';
   }
}}
?>