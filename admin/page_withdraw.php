<?php

	include "page_heading.php";
	include "dbconnect.php";
	
	if(isset($_GET['btn']))
	{
			$accno=$_GET["t1"];
			$pin=$_GET["t2"];
			$withdraw=$_GET["t3"];
			//$date=$_GET["t4"];
			$date=date('d/m/y');
		$s="select balance,pin from account where accno='$accno'";
		$rs=mysqli_query($con,$s);
		$cnt=mysqli_num_rows($rs);
		
		if($cnt!=0)
		{
			$r=mysqli_fetch_array($rs);
			$bal=$r[0];
			$apin=$r[1];
			if($apin==$pin)
			{
				if($bal>$withdraw)
							{	
							
								$s="insert into trans(actno,withdraw,deposit,date) values('$accno','$withdraw','No Transaction','$date')";
								mysqli_query($con,$s);
								$s="update account set balance='".$bal."'-$withdraw where accno=$accno";
								mysqli_query($con,$s);
								echo "<script>alert('amount Withdraw Successfully')</script>";	
							}
				else
					 echo "<script>alert('Not Suffiecient AMOUNT')</script>";	
			}
			else
				echo "<script>alert('Pin not correct')</script>";					
		}
		else
			echo "<script>alert('Account Number Is Incorrect')</script>";
	}	
?>		
<form method="get" action="page_withdraw.php">
	<table border=1 cellpadding=10>
		
		<tr>
			<td>Your Account Number is
			<td><input type="text" name="t1">
			
		<tr>
			<td>Enter Your Pin
			<td><input type="text" name="t2">
		<tr>
			<td>Enter Amount
			<td><input type="text" name="t3">
		
		<tr>
			<td>Enter Date
			<td><input type="date" name="t4" value="<?php echo $date ?>">
		
		<tr>
			<td colspan=2 align="center">
			<input type="submit" value="WITHDRAW" name='btn'>
	</table>
</form>			