<?php
	include "dbconnect.php";
	include "page_heading.php";
	
	$s="select * from trans";
	$rs=mysqli_query($con,$s);
	echo "<table border=1 cellpadding=10>";
	echo "<tr><td colspan=2 align=center >TRANSECTION HISTORY";	
	echo "<tr><td><table border=1 cellpadding=10>";
	echo "<tr><td>Account Number<td>Withdraw<td>Date";
	while($r=mysqli_fetch_array($rs))
		{	
		echo "<tr>";	
		echo "<td>".$r[1];
		echo "<td>".$r[2];
		//echo "<td>".$r[3];
		echo "<td>".$r[4];
		}		
		echo "</table>";
		$s="select * from trans";
		$rs=mysqli_query($con,$s);
		echo "<td><table border=1 cellpadding=10>";
	echo "<tr><td>Account Number<td>deposit<td>Date";
	while($r=mysqli_fetch_array($rs))
		{	
		echo "<tr>";	
		echo "<td>".$r[1];
		//echo "<td>".$r[2];
		echo "<td>".$r[3];
		echo "<td>".$r[4];
		}		
		
?>