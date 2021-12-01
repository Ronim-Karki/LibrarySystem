<?php
 include "connection.php";
 ?>
 <?php
 $SN = $_GET['SN'];

	 $sql = mysqli_query($db,"DELETE FROM `announce` WHERE S.N = '$SN' ");
	

 header("location:adminlogged.php");

 
?>