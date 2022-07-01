<?php
	include "dbconnect.php";
	include "page_heading.php";
	
		
	
	
	if(isset($_GET['btn']))
	{
		$accno=$r[10];
		$raccno=$_GET["t2"];
		$amount=$_GET["t3"];
		$date=$_GET["t4"];
		
		$s="insert balance from account where accno='$accno'";
		$rs=mysqli_query($con,$s);
		$cnt=mysqli_num_rows($rs);
		
		if($cnt!=0)
		{
			$r=mysqli_fetch_array($rs);
			$rbalance=$r[0];
			
			$s="select balance from account where accno='$raccno'";
			$rs=mysqli_query($con,$s);
					
			$cnt=mysqli_num_rows($rs);
					
			if($cnt!=0)
			{
			$r=mysqli_fetch_array($rs);
			$rbalance=$r[0];
							
				if($balance>=$amount)
				{
					$rbalance=$rbalance+$amount;
					$s="update account set balance='$rbalance' where accno='$raccno'";
					mysqli_query($con,$s);
					$balance=$balance+$amount;
					$s="update account set balance='$balance' where accno='$accno'";
					mysqli_query($con,$s);
					$s="insert into trans(actno,withdraw,deposit,date) values('$accno','$amount','No Transection','$date')";
					mysqli_query($con,$s);
					$s="insert into trans(actno,withdraw,deposit,date) values('$raccno','No Transection','$amount','$date')";
					mysqli_query($con,$s);
				
					echo "<script>alert('Amount Transfered Successfully')</script>";	
				}	
				else
					echo "<script>alert('Insufficient Amount')</script>";	
		}	
		else	
			echo "<script>alert('Recievers Account Number Is Incorrect')</script>";
				}
	else
		echo "<script>alert('Account Number Is Incorrect')</script>";
	
}
?>				
<form method="get" action="page_transfer.php">

	<table border=1 cellpadding=10>
	<tr>
		<th>Enter Reciever Account Number
		<th><input type="text" name="t2">
	
	<tr>
		<th>Enter Amount
		<th><input type="text" name="t3">
		
	<tr>
		<th>Enter Date
		<th><input type="date" name="t4">
		
	<tr>
		<th colspan=2 align='center'>
		<input type="submit" value="Transfer Money" name="btn">
		
	</table>

</form>	