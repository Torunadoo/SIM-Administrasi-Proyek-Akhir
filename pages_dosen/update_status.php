<?php
include "../_database/config.php";
session_start();
if($_SESSION['user']=='' || $_SESSION['status'] != 2)
{
      header("location:../index.php");
  }
 $id=$_GET['nrp'];
  $query = mysqli_query($koneksi, "UPDATE bimbingan_pa SET `status_bimbingan`= 1 WHERE nrp = '$id' ");
  if ($query) { 
    header("location:filepa.php?nrp=$id"); ?>
    <script>history.pushState({}, "", "")</script><?php
  } else { 
    header('location:./dosen.php'); ?>
    <script>history.pushState({}, "", "")</script><?php
  }
?>