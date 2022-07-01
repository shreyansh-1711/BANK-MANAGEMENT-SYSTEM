<?php
	include "dbconnect.php";
	include "page_heading.php";
	
		
	
	
	if(isset($_GET['btn']))
	{
		$accno=$r[10];
		$pin=$_GET["t2"];
		$withdraw=$_GET["t3"];
		$date=$_GET["t4"];
			
		$s="select balance,pin from account where accno='$accno'";
		$rs=mysqli_query($con,$s);
		$cnt=mysqli_num_rows($rs);
		
		if($cnt!=0)
		{
			$r=mysqli_fetch_array($rs);
			$balance=$r[0];
			$atmpin=$r[1];
			if($atmpin==$pin)
			{
				if($balance>$withdraw)
				{
					$balance=$balance-$withdraw;
					$s="insert into trans(actno,withdraw,deposit,date) values('$accno','$withdraw','No Transection','$date')";
					mysqli_query($con,$s);
					$s="update account set balance='$balance' where accno=$accno";
					mysqli_query($con,$s);
					echo "<script>alert('amount Withdraw Successfully')</script>";	
								
				}
			else
				echo "<script>alert(' Donot Have Sufficient Balance')</script>";
			}
			else 
				echo "<script>alert('Pin Is Incorrect')</script>";
		}
		else
			echo "<script>alert(' Account number Is Incorret')</script>";
	}		
?>
<form method="get" action="page_withdraw.php">

	<table border=1 cellpadding=10>
	
		<tr>
			<th>Enter Your Pin
			<th><input type="password" name="t2">
		<tr>
			<th>Enter Amount
			<th><input type="text" name="t3">
		<tr>
			<th>Enter Date
			<th><input type="date" name="t4">
		<tr>
			<th colspan=2 align="center">
			<input type="submit" value="Withdraw Money" name="btn">
			
	</table>
</form>	