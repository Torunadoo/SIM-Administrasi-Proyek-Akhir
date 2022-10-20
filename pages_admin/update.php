<?php
include "../_database/config.php";
session_start();
if($_SESSION['user']=='' || $_SESSION['status'] != 2)
{
      header("location:../index.php");
  }
 $id=$_GET['nrp'];
  $query = mysqli_query($koneksi, "UPDATE pendaftareval SET `status_validasi`= 1 WHERE nrp = '$id' ");
  if ($query) { 
    header('location:mahasiswapa_min.php'); ?>
    <script>history.pushState({}, "", "")</script><?php
  } else { 
    header('location:./dosenkoor.php'); ?>
    <script>history.pushState({}, "", "")</script><?php
  }
?>