<?php  
session_start();
include('connection.php');
include('Header2.php');
if(isset($_POST['btnSave'])) 
{
	$txtCustomerName=$_POST['txtCustomerName'];
	$txtPhone=$_POST['txtPhone'];
	$txtEmail=$_POST['txtEmail'];
	$txtPassword=$_POST['txtPassword'];
	$txtAddress=$_POST['txtAddress'];


	

	$checkEmail="SELECT * FROM customer
				 WHERE Email='$txtEmail' ";
	$ret=mysqli_query($connection,$checkEmail);
	$count=mysqli_num_rows($ret);

	if($count > 0) 
	{
		echo "<script>window.alert('Email Address $txtEmail Already Exist.')</script>";
		echo "<script>window.location='Customer_Entry.php'</script>";
	}
	else
	{
		$Insertcustomer="INSERT INTO customer
					  (CustomerName,Email,Password,Phone,Address)
					  VALUES
					  ('$txtCustomerName','$txtEmail','$txtPassword','$txtPhone','$txtAddress')";
		$result=mysqli_query($connection,$Insertcustomer);

		if($result) //True
		{
			echo "<script>window.alert('Customer Account Successfully Created!')</script>";
			echo "<script>window.location='Customer_Home.php'</script>";
		}
		else
		{
			echo "<p>Something went wrong in customer Entry" . mysqli_error($connection) . "</p>";
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Customer Entry</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


</head>
<body>

<script>
	$(document).ready( function (){
		$('#tableid').DataTable();
	} );
</script>

<form action="Customer_Entry.php" method="post" enctype="multipart/form-data">
<fieldset>
<legend align="Center">Enter Customer Information:</legend>
<table align="Center" cellpadding="5px">
<tr>
	<td>CustomerName :</td>
	<td>
		<input type="text" name="txtCustomerName" placeholder="E.g Willaim Smith" required />
	</td>
	
</tr>
<tr>
	<td>Phone :</td>
	<td>
		<input type="text" name="txtPhone" placeholder="+95---------" required />
	</td>
</tr>
<tr>
	<td>Email :</td>
	<td>
		<input type="email" name="txtEmail" placeholder="example@domain.com" required />
	</td>
</tr>
<tr>
	<td>Password :</td>
	<td>
		<input type="password" name="txtPassword" placeholder="XXXXXXXXXXXXXXX" required />
	</td>
</tr>
<tr>
	<td>Address :</td>
	<td colspan="3">
		<textarea name="txtAddress"></textarea>
	</td>
</tr>

<tr>
	<td></td>
	<td>
		<input type="submit" name="btnSave" value="Save" />
		<input type="reset" value="Cancel" />
	</td>
	
</tr>
</table>

<hr/>
<div class="container">
<h3 class="   my-4 d-flex justify-content-center fs-2 fw-bold badge bg-secondary bg-gradiant shadow text-wrap "> Customers</h3>
<table id="tableid" class="table table-bordered shadow">
<thead>
    <tr>
        <th>#</th>
        <th>CustomerID</th>
        <th>CustomerName</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
<?php
$query="SELECT * FROM customer";
$ret=mysqli_query($connection,$query);
$count=mysqli_num_rows($ret);

for ($i=0;$i<$count;$i++) 
{ 
    $arr=mysqli_fetch_array($ret);

    $CustomerID=$arr['CustomerID'];
    $CustomerName=$arr['CustomerName'];

    echo "<tr>";
        echo "<td>" . ($i + 1) . "</td>";
        echo "<td>" . $CustomerID . "</td>";
        echo "<td>" . $CustomerName . "</td>";
        echo "<td>" . $arr['Email'] . "</td>";
        echo "<td>" . $arr['Phone'] . "</td>";
        echo "<td>" . $arr['Address'] . "</td>";
        echo "<td>

                 <a href='Customer_Update.php?CustomerID=$CustomerID' class='btn btn-primary'>Edit</a>
                 <a href='Customer_Delete.php?CustomerID=$CustomerID'class='btn btn-danger'>Delete</a>
              </td>";
    echo "</tr>";
}
?>
</tbody>
</table>
</div>
</fieldset>
</form>
</body>
</html>
<?php include('Footer.php'); ?>