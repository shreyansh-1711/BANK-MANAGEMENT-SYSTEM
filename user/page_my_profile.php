<?php

	include "dbconnect.php";
	include "page_heading.php"; 
	

	$s="select * from account where uname='$uid'";
	$rs=mysqli_query($con,$s);
	//while($r=mysqli_fetch_array($rs))
	//{
	
	echo "<table border=1 cellpadding=10>";
	echo "<tr>";
	echo "<th colspan=2 align=center><img src=$r[14]; width=100 height=100>";
	echo "<tr><th>Customer Id <th>".$r[0];
	echo "<tr><th>First Name <th>".$r[1];
	echo "<tr><th>Last Name <th>".$r[2];
	echo "<tr><th>Gender <th>".$r[3];
	echo "<tr><th>DOB <th>".$r[4];
	echo "<tr><th>Aadhar <th>".$r[5];
	echo "<tr><th>Email <th>".$r[6];
	echo "<tr><th>Phone <th>".$r[7];
	echo "<tr><th>Address<th>".$r[8];

	echo "</table>";
	
?>