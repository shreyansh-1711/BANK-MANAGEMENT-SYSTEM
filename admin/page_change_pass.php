<?php
	include "dbconnect.php";
	include "page_heading.php";
	
	if(isset($_POST['btn']))
	{
		$actno=$_POST["t1"];
		$opass=$_POST["t2"];
		$npass=$_POST["t3"];
		$cpass=$_POST["t4"];
		
		$s="select pwd from account where accno='$actno'";
		$rs=mysqli_query($con,$s);
		$cnt=mysqli_num_rows($rs);
		
		if($cnt!=0)
				{	
					$r=mysqli_fetch_array($rs);
					$userpass=$r[0];
					if($userpass==$opass)
						{
							if($npass==$cpass)
								{
									$s="update account set pwd='$npass' where accno='$actno'";
									mysqli_query($con,$s);
									echo "<script>alert('Password changed Successfully')</script>";	
								}
							else
							    echo "<script>alert('new password and confirm password are different')</script>";	
						}
					else 
						echo "<script>alert('old Password Is Incorrect')</script>";	
													
				}
			else
				echo "<script>alert('Account Number Is Incorrect')</script>";
	
		}
		
			
?>

<form method="post"  action="page_change_pass.php">
<table border=1 cellpadding=10>

<tr>
	<th>Enter Your Account Number
	<th><input type="text" name="t1">
<tr>
	<th>Enter Your Old password
	<th><input type="text" name="t2">
<tr>
	<th>Enter Your New password
	<th><input type="text" name="t3">
<tr>
	<th>Confirm Your password
	<th><input type="text" name="t4">
	
	<tr>	
			<td colspan=2 align="center"><input type="submit" value="Change Password" name="btn">	
			
	</table>

</form>