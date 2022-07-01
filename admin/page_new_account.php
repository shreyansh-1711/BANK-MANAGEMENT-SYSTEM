<?php
	include "page_heading.php";
	include "dbconnect.php";
	$s="select cust_id from account order by cust_id desc";
	$rs=mysqli_query($con,$s);
	$cust_id=0;
		while($r=mysqli_fetch_array($rs))
		{
			$cust_id=$r[0];
			break;
		}
	if($cust_id==0)
			$cust_id=1001;
	else
			$cust_id=$r[0]+1;
		
	$s="select accno from account order by accno desc";
	$rs=mysqli_query($con,$s);
	$accno=0;
		while($r=mysqli_fetch_array($rs))
		{
			$accno=$r[0];
			break;
		}
	if($accno==0)
			$accno=1111000011;
	else
			$accno=$r[0]+1;	
	
	if(isset($_POST['btn']))
	{
		$nfirst=$_POST["t2"];
		$nlast=$_POST["t3"];
		$gender=$_POST["t4"];
		$dob=$_POST["t5"];
		$aadhar=$_POST["t6"];
		$email=$_POST["t7"];
		$phone=$_POST["t8"];
		$address=$_POST["t9"];
		$branch=$_POST["t10"];
		$pin=$_POST["t12"];
		$uname=$_POST["t13"];
		$pwd=$_POST["t14"];
		
		$source=$_FILES["fp"]["tmp_name"];
		$dest=$_FILES["fp"]["name"];

		$source1=$_FILES["fp1"]["tmp_name"];
		$dest1=$_FILES["fp1"]["name"];
		
		if(move_uploaded_file($source,$dest) && move_uploaded_file($source1,$dest1))
		{
				$s="insert into account(cust_id,nfirst,nlast,gender,dob,aadhar,email,phone,address,branch,accno,pin,uname,pwd,pic,sig,balance) values ('$cust_id','$nfirst','$nlast','$gender','$dob','$aadhar','$email','$phone','$address','$branch','$accno','$pin','$uname','$pwd','$dest','$dest1','4000')";
				mysqli_query($con,$s);
		}
header("location:page_new_account.php");	
	}	
?>
<center>
<form method="POST" enctype="multipart/form-data" action="page_new_account.php">
<table border=1 cellpadding=10>
	<tr>
		<th>Your Customer Id
		<th><input type="text" name="t1" value="<?php echo $cust_id ?>" disabled>
	<tr>
		<th>Enter First Name
		<th><input type="text" name="t2">
	<tr>
		<th>Enter Last Name
		<th><input type="text" name="t3">
	<tr>
		<th>Enter The Gender
		<th><input type="radio" name="t4" value="male">MALE
		    <input type="radio" name="t4" value="female">FEMALE
	<tr>
		<th>Enter Date Of Birth
		<th><input type="date" name="t5">
	<tr>
		<th>Enter Aadhar Number
		<th><input type="text" name="t6">
	<tr>
		<th>Enter Email
		<th><input type="text" name="t7">
	<tr>
		<th>Enter Phone Number
		<th><input type="text" name="t8">
	<tr>
		<th>Enter Address
		<th><input type="text" name="t9">
	<tr>
		<th>Enter the Branch
		<th><select name="t10">
			<option>Udaipur
			<option>Jaipur
			<option>Jodhpur
			<option>Ajmer
			<option>Kota
			<option>Bikaner
			<option>Alwar
			</select>
	<tr>
		<th>Your Account Number
		<th><input type="text" name="t11" value="<?php echo $accno ?>" disabled>
		
	<tr>
		<th>Enter Your Pin
		<th><input type="text" name="t12">
		
	<tr>
		<th>Enter User NAme
		<th><input type="text" name="t13">
	<tr>
		<th>Enter Password
		<th><input type="text" name="t14">
	<tr>
		<th>Upload Your Pic
		<th><input type="file" name="fp">
	<tr>
		<th>Upload Your Signature
		<th><input type="file" name="fp1">
	<tr>
		<th colspan=2 align=center>
		<input type="submit" value="CREATE ACCOUNT" name='btn'>
</table>
</form>	
</html>	
		
		
					
			
		
		
		
		