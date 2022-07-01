<?php
	include "page_heading.php";
?>
<form method="get" action="page_search.php">
<table border=1 cellpadding=10>
<tr>
		<th>Search For Account
		<input type="text" name="t1">
<tr>
		<th colspan=2 align=center>
		<input type="submit" value="Search"	name="btn">
</table>
</form>
		
<?php
			include "dbconnect.php";
			if(isset($_GET['btn']))
			{
				$value=$_GET["t1"];
				$s="select * from account where cust_id='$value'";
				$rs=mysqli_query($con,$s);
				$c=mysqli_num_rows($rs);
				if($c!=0)
				{
					echo "<table border=1 cellpadding=10>";
					echo "<tr><th>Customer ID <th>Name<th>DOB<th>Account Number<th>Pic<th>Action";
					while($r=mysqli_fetch_array($rs))
					{
						echo "<tr>";
						echo "<td>".$r[0];
						echo "<td>".$r[1];
						echo "<td>".$r[4];
						echo "<td>".$r[7];
						echo "<td><img src=$r[14] width=40 height=40>";
						echo "<td><a href='page_show.php?cust_id=$r[0]'><img src='show.png' width=30 height=30></a><br>";
					}	
					echo "</table>";
				}
				else
				{
					$s="select * from account where nfirst like '%$value%'";
					$rs=mysqli_query($con,$s);
					$c=mysqli_num_rows($rs);
					if($c==0)
						echo "<script>alert('RECORD NOT FOUND')</script>";
					else
					{
						echo "<table border=1 cellpadding=10>";
						echo "<tr><th>Customer ID <th>Name<th>Last name<th>DOB<th>Account Number<th>Pic<th>Action";
						while($r=mysqli_fetch_array($rs))
						{
						echo "<tr>";
						echo "<td>".$r[0];
						echo "<td>".$r[1];
						echo "<td>".$r[2];
						
						echo "<td>".$r[4];
						echo "<td>".$r[7];
						echo "<td><img src=$r[14] width=40 height=40>";
						echo "<td><a href='page_show.php?cust_id=$r[0]'><img src='show.png' width=30 height=30></a><br>";
						}	
						echo "</table>";
					}
				}
			}		
?>				
												
						
		
		