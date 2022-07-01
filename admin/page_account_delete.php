<?php
	include "dbconnect.php";
	$id=$_GET["cust_id"];
	$s="delete from account where cust_id=$id";
	mysqli_query($con,$s);
	header("location:page_display_all.php");
?>	