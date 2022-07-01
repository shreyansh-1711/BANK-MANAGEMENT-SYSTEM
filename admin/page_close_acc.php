<?php

include "dbconnect.php";
include "page_heading.php";

$uid=$_GET['cust_id'];
$s="delete from account where cust_id=$uid";
mysqli_query($con,$s);
header("location:page_close_acc.php");

?>