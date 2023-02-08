<?php  
session_start();
include('connection.php');
include('Header2.php');
if(isset($_GET['CustomerID'])) 
{
	$CustomerID=$_GET['CustomerID'];
	$query="SELECT * FROM customer WHERE CustomerID='$CustomerID' ";
	$ret=mysqli_query($connection,$query);
	$row=mysqli_fetch_array($ret);
}

if(isset($_POST['btnUpdate'])) 
{
	$txtCustomerID=$_POST['txtCustomerID'];
	$txtCustomerName=$_POST['txtCustomerName'];
	$txtEmail=$_POST['txtEmail'];
	$txtPhone=$_POST['txtPhone'];
	$txtPassword=$_POST['txtPassword'];
	$txtAddress=$_POST['txtAddress'];

	$Update="UPDATE customer
			 SET 
			 CustomerName='$txtCustomerName',
			 Email='$txtEmail',
			 Password='$txtPassword',
			 Phone='$txtPhone',
			 Address='$txtAddress'
			 WHERE CustomerID='$txtCustomerID'
			";
	$ret=mysqli_query($connection,$Update);

	if($ret) 
	{
		echo "<script>window.alert('Customer Account Updated!')</script>";
		echo "<script>window.location='Customer_Entry.php'</script>";
	}
	else
	{
		echo "<p>Something went wrong in Customer Update " . mysqli_error($connection) . "</p>";
	}

}

?>
<!DOCTYPE html>
<html>
<head>
<title>Customer Update</title>
</head>
<body>
<form action="Customer_Update.php" method="post">
<fieldset>
<legend align="Center">Enter Customer Update Infomation</legend>
<table align="Center">
<tr>
	<td>Customer Name :</td>
	<td>
		<input type="text" name="txtCustomerName" value="<?php echo $row['CustomerName'] ?>" required />
	</td>
</tr>

<tr>
	<td>Email :</td>
	<td>
		<input type="email" name="txtEmail" value="<?php echo $row['Email'] ?>" required />
	</td>
</tr>
<tr>
	<td>Password :</td>
	<td>
		<input type="password" name="txtPassword" value="<?php echo $row['Password'] ?>" required />
	</td>
</tr>
<tr>
	<td>Phone :</td>
	<td>
		<input type="text" name="txtPhone" value="<?php echo $row['Phone'] ?>" required />
	</td>
</tr>
<tr>
	<td>Address :</td>
	<td>
		<textarea name="txtAddress"><?php echo $row['Address'] ?></textarea>
	</td>
</tr>
<tr>
	<td></td>
	<td>
		<input type="hidden" name="txtCustomerID" value="<?php echo $row['CustomerID'] ?>"  />
		<input type="submit" name="btnUpdate" value="Update" />
		<input type="reset" value="Cancel" />
	</td>
</tr>
</table>

</fieldset>
</form>
</body>
</html>
<?php include('Footer.php'); 
 ?>
