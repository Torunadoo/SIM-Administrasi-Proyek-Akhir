<?php 
session_start();
include('_database/config.php');
 
$user = $_POST['user']; //Username masuk
$pass = $_POST['pass']; //Password masuk
$antiinject = stripos($user, "or"); //Menghilangkan kemampuan operator or untuk berada dalam form
$antiinject2 = strpos($user, "|");  //Menghilangkan kemampuan operator or untuk berada dalam form
$tambah = mysqli_query($koneksi, "SELECT * FROM masuk WHERE user='$user' and pass='$pass'"); //Menyeleksi query dari tabel masuk

$cek = mysqli_num_rows($tambah);

if ($ntiinject != false || $antiinject2 != false || $user == NULL || $pass == NULL)
{    $_SESSION['alert'] = true;
    header("location:index.php");  }

if($cek > 0){
 
	$data = mysqli_fetch_assoc($tambah);{
    

   if($data['status'] == '1')
    {
        session_start();
        $data = mysqli_fetch_array($tambah);
        $_SESSION['user'] ="Tata Usaha";
        $_SESSION['NIP'] ="0000";
        $_SESSION['status'] = $data['status'];
        $_SESSION['alert'] = true;
        header("location:./pagesadmin/billingadmin.php");
    }
    elseif($data['status'] == '6')
    {
        session_start();
        $data = mysqli_fetch_array($tambah);
        $_SESSION['user'] = "Admin";
        $_SESSION['NIP'] = "0000";
        $_SESSION['status'] = $data['status'];
        $_SESSION['alert'] = true;
        header("location:pagesadmin/adminsuper.php");
    }
    elseif ($data['status'] == '2') //ketika login maka user akan membawa status
    {
        session_start();
        $tambah2 = mysqli_query($koneksi, "SELECT * FROM data_dosenb WHERE id_npp ='$user' "); //mencari tau apakah username yang masuk ada di dalam database
        $data2 = mysqli_fetch_assoc($tambah2);{
            $_SESSION['user'] =$data2['nama_anggota']; //Membuat data nama menjadi session
            $_SESSION['NIP'] = $data2['id_npp']; //Membuat data nomor civitas its menjadi session
            $_SESSION['status'] = $data['status']; //Membuat data status menjadi session
            $_SESSION['status2'] = $data['status2']; //Membuat data status tambahan menjadi session
            $_SESSION['status3'] = $data['status3']; //Membuat data status tambahan menjadi session
            $_SESSION['alert'] = true;}  //memberikan notifikasi berhasil masuk
        header("location:./pages_dosen/dosen.php"); //jika user adalah dosen maka akan masuk dashboard dosen
    }
    elseif ($data['status'] == '3') //ketika login maka user akan membawa status
    {
        session_start();
        $tambah2 = mysqli_query($koneksi, "SELECT * FROM data_mhs WHERE nrp_mhs='$user' "); //mencari tau apakah username yang masuk ada di dalam database
        $data2 = mysqli_fetch_assoc($tambah2);{
            $_SESSION['user'] =$data2['nama_mhs']; //Membuat data nama menjadi session
            $_SESSION['NIP'] =$data2['nrp_mhs']; //Membuat data nomor civitas its menjadi session
            $_SESSION['status'] = $data['status']; //Membuat data status menjadi session
            $_SESSION['status2'] = $data['status2']; //Membuat data status tambahan menjadi session
            $_SESSION['angkatan'] = $data2['angkatan']; //Membuat data angkatan menjadi session
            $_SESSION['alert'] = true;}  //memberikan notifikasi berhasil masuk
        header("location:./pages_mahasiswa/mahasiswa.php"); //jika user adalah mahasiswa maka akan masuk dashboard mahasiswa
    }
    elseif ($data['status'] == '4') //ketika login maka user akan membawa status
    {
        session_start();
        $tambah2 = mysqli_query($koneksi, "SELECT * FROM data_tendik WHERE nip_tdk = '$user' "); //mencari tau apakah username yang masuk ada di dalam database
        $data2 = mysqli_fetch_assoc($tambah2);{ 
            $_SESSION['user'] =$data2['nama_tdk']; //Membuat data nama menjadi session
            $_SESSION['NIP'] =$data2['nip_tdk']; //Membuat data nomor civitas its menjadi session
          $_SESSION['status2'] = $data['status2']; //Membuat data status tambahan menjadi session
            $_SESSION['status'] = $data['status']; //Membuat data status menjadi session
            $_SESSION['alert'] = true; //memberikan notifikasi berhasil masuk
        }
        header("location:./pages/pagestendik/tendik.php"); //jika user adalah tendik maka akan masuk dashboard tendik
    }
    elseif ($data['status'] == '5')
    {
        session_start();
        $tambah2 = mysqli_query($koneksi, "SELECT * FROM data_dosenb WHERE nama_anggota = 'Imam Arifin, S.T, MT' ");
        $data2 = mysqli_fetch_assoc($tambah2);{
            $_SESSION['user']   = $data2['nama_anggota'];
            $_SESSION['NIP']    = $data2['id_npp'];
            $_SESSION['status'] = $data['status'];
            $_SESSION['alert'] = true;
        header("location:./pages_dosen/kadep.php");
        }
    
}
    elseif ($data['status'] == '7')
    {
        session_start();
        $row = mysqli_fetch_array($tambah);
        $_SESSION['user'] = $row['user'];
        header("location:AdminInventaris.php");
    }
    else
    {
        
        header("location:index.php");
    }

    }
    
}
 else{
    $_SESSION['alert'] = true;
     header("location:index.php");
 }


?>