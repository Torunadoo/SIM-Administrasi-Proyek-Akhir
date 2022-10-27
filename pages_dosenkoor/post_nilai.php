<?php
include "../_database/config.php";
session_start();
if($_SESSION['user']=='')
{
      header("location:../index.php");
  }
 $id=$_GET['nrp'];
  $query = mysqli_query($koneksi, "UPDATE nilai_sidang, nilai_seminar SET `tampil_nilai`= 1 WHERE nrp = '$id' ");
  if ($query) { 
    header('location:nilaiakhir.php'); ?>
    <script>history.pushState({}, "", "")</script><?php
  } else { 
    header('location:./dosenkoor.php'); ?>
    <script>history.pushState({}, "", "")</script><?php
  }
?>