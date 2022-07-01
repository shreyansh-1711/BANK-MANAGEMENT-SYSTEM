<?php
	include "dbconnect.php";
	include "page_heading.php";
	
	$s="select accno from account where uname='$uid'";
	$rs=mysqli_query($con,$s);
	$r=mysqli_fetch_array($rs);
	$accno=$r[0];
	$s="select * from trans where actno='$accno'";
	$rs=mysqli_query($con,$s);		
	echo "<tr><td><table border=1 cellpadding=10>";
	echo "<tr><td>Account Number<td>Withdraw<td>Deposit<td>Date";
	while($r=mysqli_fetch_array($rs))
		{	
		echo "<tr>";	
		echo "<td>".$r[1];
		echo "<td>".$r[2];
		echo "<td>".$r[3];
		echo "<td>".$r[4];
		}		
		echo "</table>";
?>

?>