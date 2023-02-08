<?php  
session_start();
include('connection.php');
include('Header.php');
if(isset($_POST['btnSave'])) 
{
	$txtStaffName=$_POST['txtStaffName'];
	$cboRole=$_POST['cboRole'];
	$txtPhone=$_POST['txtPhone'];
	$txtEmail=$_POST['txtEmail'];
	$txtPassword=$_POST['txtPassword'];
	$txtAddress=$_POST['txtAddress'];
	$cboRole=$_POST['cboRole'];

	

	$checkEmail="SELECT * FROM Staff 
				 WHERE Email='$txtEmail' ";
	$ret=mysqli_query($connection,$checkEmail);
	$count=mysqli_num_rows($ret);
	if($count > 0) 
	{
		echo "<script>window.alert('Email Address $txtEmail Already Exist.')</script>";
		echo "<script>window.location='Staff_Entry.php'</script>";
	}
	else
	{
		$InsertStaff="INSERT INTO Staff
					  (StaffName,Email,Password,Phone,Address,Role)
					  VALUES
					  ('$txtStaffName','$txtEmail','$txtPassword','$txtPhone','$txtAddress','$cboRole')";
		$result=mysqli_query($connection,$InsertStaff);

		if($result) //True
		{
			echo "<script>window.alert('Staff Account Successfully Created!')</script>";
			echo "<script>window.location='StaffEntry.php'</script>";
		}
		else
		{
			echo "<p>Something went wrong in Staff Entry" . mysqli_error($connection) . "</p>";
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<title>Staff Entry</title>



</head>
<body>

<script>
	$(document).ready( function (){
		$('#tableid').DataTable();
	} );
</script>

<form action="StaffEntry.php" method="post" enctype="multipart/form-data">
<fieldset>
<legend align="Center">Enter Staff Information:</legend>
<table align="Center"  cellpadding="5px">
<tr>
	<td>StaffName :</td>
	<td>
		<input type="text" name="txtStaffName" placeholder="E.g Willaim Smith" required />
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
	<td>Role :</td>
	<td>
		<select name="cboRole">
		<option>--Choose Role--</option>
		<option>Storage Staff</option>
		<option>Services</option>
		<option>Manager</option>
		<option></option>
		</select>
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

<div class="container my-3 ">
   <h3 class="   my-4 d-flex justify-content-center fs-2 fw-bold badge bg-secondary bg-gradiant shadow text-wrap "> Staffs</h3>
      <table class="table table-bordered shadow ">
 <thead>
    <tr>
        <th>#</th>
        <th>StaffID</th>
        <th>StaffName</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Role</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
<?php
$query="SELECT * FROM Staff";
$ret=mysqli_query($connection,$query);
$count=mysqli_num_rows($ret);

for ($i=0;$i<$count;$i++) 
{ 
    $arr=mysqli_fetch_array($ret);

    $StaffID=$arr['StaffID'];
    $StaffName=$arr['StaffName'];

    echo "<tr>";
        echo "<td>" . ($i + 1) . "</td>";
        echo "<td>" . $StaffID . "</td>";
        echo "<td>" . $StaffName . "</td>";
        echo "<td>" . $arr['Email'] . "</td>";
        echo "<td>" . $arr['Phone'] . "</td>";
        echo "<td>" . $arr['Address'] . "</td>";
        echo "<td>" . $arr['Role'] . "</td>";
        echo "<td>
                 <a href='Staff_Update.php?StaffID=$StaffID' class='btn btn-primary'>Edit</a>
                 <a href='Staff_Delete.php?StaffID=$StaffID' class='btn btn-danger'>Delete</a>
              </td>";
    echo "</tr>";
}
?>
</tbody>
</table>
</div>

      
         
      <!-- map -->
      <div class="container-fluid padi">
         <div class="map">
            <img src="images/mapimg.jpg" alt="img"/>
         </div>
      </div>


</fieldset>
</form>
</body>
</html>
<?php 
include('Footer.php');
 ?>