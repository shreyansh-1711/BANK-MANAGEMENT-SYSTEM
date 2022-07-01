
<?php
	include "dbconnect.php";
	include "page_heading.php";
	$id=$_GET['cust_id'];
	$s="select * from account where cust_id=$id";
	$rs=mysqli_query($con,$s);
	echo "<table border=1 cellpadding=10>";
	echo "<tr><th colspan=3 algin=center>Pic<tr><th>Name<th>Last Name<th>Gender<tr><th>DOB<th>ADDRESS<th>Phone<tr><th>Email<th>Account No<th>User ID";
	
	while($r=mysqli_fetch_array($rs))
	{
		echo "<tr>";
		//echo "<tr><td colspan=3 align=center ><img src=$r[14] width=40  height=40>";
		echo "<tr><th>".$r[1];
		echo "<th>".$r[2];
		echo "<th>".$r[3];
		echo "<tr><th>".$r[4];
		echo "<th>".$r[8];
		echo "<th>".$r[7];
		echo "<tr><th>".$r[6];
		echo "<th>".$r[10];
		echo "<th>".$r[12];
	}
?>	
		
		
		
	