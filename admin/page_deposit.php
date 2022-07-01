<?php
	include "dbconnect.php";
	include "page_heading.php";
	
	if(isset($_GET['btn']))
	{
		$accno=$_GET["t1"];
		$deposit=$_GET["t2"];
		$date=$_GET["t3"];
		
		$s="select balance from account where accno='$accno'";
		$rs=mysqli_query($con,$s);
		$cnt=mysqli_num_rows($rs);
		
		if($cnt!=0)
		{
			$r=mysqli_fetch_array($rs);
			$balance=$r[0];
			$s="insert into trans(actno,withdraw,deposit,date)values('$accno','No Transection','$deposit','$date')";
			mysqli_query($con,$s);
			$s="update account set balance='".$balance."'+$deposit where accno=$accno";
			mysqli_query($con,$s);
			echo "<script>alert('Amount Deposit Successfully')</script>";
		}
		else
			echo "<script>alert('Account Number Is Incorrect')</script>";
		
	}	
		 
		
?>

<form method="get" action="page_deposit.php">

	<table border=1 Cellpadding=10>

		<tr>
			<td>Enter Your Account Number
			<td><input type="text" name="t1">
		
		<tr>
			<td>Enter Amount
			<td><input type="text" name="t2">
		
		<tr>
			<td>Enter Date
			<td><input type="date" name="t3">
		
		<tr>	
			<td colspan=2 align="center"><input type="submit" value="Deposit Money" name="btn">	
			
	</table>

</form>