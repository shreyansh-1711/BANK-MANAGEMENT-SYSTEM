<?php

	include "dbconnect.php";
	include "page_heading.php";
	
	
?>

<center>
<br><br>
<form method="get" action="page_balance.php">
		Enter The Pin
		<input type="text" name="t1">
		<input type="submit" name="btn" value="check balance">
</form>

<?php
	$pin=$r[11];
	$balance=$r[16];
	if(isset($_GET['btn']))
	{
		$t1=$_GET['t1'];
		
		if($pin==$t1)
			{
				echo "Your Account Balance Is ".$balance;
			}
		else
			echo "<script>alert('Pin Is Incorrect')</script>";	
	}
?>
	