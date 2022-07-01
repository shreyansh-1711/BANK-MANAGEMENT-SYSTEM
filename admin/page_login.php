<?php
	include "dbconnect.php";
	if(isset($_POST['btn']))
	{
		$uid=$_POST["t1"];
		$upass=$_POST["t2"];
		
		$s="select * from login where id='$uid' and pass='$upass'";
		$rs=mysqli_query($con,$s);
		$c=mysqli_num_rows($rs);
		if($c==0)
			echo "<script>alert('INVALID ID OR PASSWORD')</script>";
		else
			header("location:page_home.php");
	}

?>

<html>
	<head>
		<title>login page</title>
	</head>
	<body>
		<br>
		<br>
		<br>
		<br>
			
			<center>
			<form method="post" action="page_login.php">
			<table border=1 cellpadding=10>
				<tr>
					<td colspan=2 align=center>LOGIN HERE!!
				<tr>
					<td>ID
					<td><input type="text" name="t1">
				<tr>
					<td>PASSWORD
					<td><input type="password" name="t2">
				<tr>
					<td colspan=2 align="center"><input type="submit" value="login" name="btn">	
			</table>
			</form>
			</center>
	</body>	
</html>	