<?php

include "../_database/config.php";
if(isset($_POST['request'])){

    $request = $_POST['request'];
    $dosbing =$_SESSION['user'];
    $query = "SELECT * FROM pendaftar_eval WHERE (semester='$request' AND pembimbing='$dosbing') OR (semester='$request' AND pembimbing_2='$dosbing')";
    $result = mysqli_query($koneksi,$query);
    $count = mysqli_num_rows($result);

?>

<table class="table">
    <?php
    
    if(count){
    ?>
    <thead>
                    <tr>
                      <th>No</th>
                      <th class = "text-center">Nama</th>
                      <th class="text-center">NRP</th>
                      <th class="text-center">Semester</th>
                      <th class="text-center">Judul Proyek Akhir</th>
                      <th class="text-center">Jenis Bimbingan</th>
                      <th class="text-center">Tanggal Pengajuan</th>
                      <th class="text-center">Status Pendaftaran</th>
                    </tr>
                <?php  
    }else{
        echo "Tidak Ada Data";
    }
    ?>
    </thead>
    <tbody>
        <?php
        include "../_database/config.php";
        while($row = mysqli_fetch_assoc($result)){
            if(isset($row['status_validasi'])){
                $status=$row['status_validasi'];

                if($status==0){
                  $tampil='Belum Tervalidasi';
                } elseif ($status==1) {
                  $tampil='Tervalidasi';
                }
              }
        ?>
                    <tr>
                      <th class = "text-center"><?php echo $no++ ?></th>
                      <th class = "text-center"><?php echo $row['nama']?></th>
                      <th class = "text-center"><?php echo $row['nrp']?></th>
                      <th class = "text-center"><?php echo $row['semester']?></th>
                      <th class = "text-center"><?php echo $row['judul_pa']?></th>
                      <th class = "text-center"><?php echo $row['jenis_eval']?></th>
                      <th class = "text-center"><?php echo $row['tanggal']?></th>
                      <th class = "text-center"><?php echo $tampil?></th>
                    </tr>
       <?php }
        ?>
    </tbody>
</table>
<?php
}?>