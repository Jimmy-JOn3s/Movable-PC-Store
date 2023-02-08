<?php  
session_start();
include('connection.php');
include('Header.php');
if(isset($_POST['btnLogin'])) 
{
   $txtEmail=$_POST['txtEmail'];
   $txtPassword=$_POST['txtPassword'];


   $check="SELECT * FROM staff 
         WHERE Email='$txtEmail'
         AND Password='$txtPassword'";
   $ret=mysqli_query($connection,$check);
   $count=mysqli_num_rows($ret);
   $row=mysqli_fetch_array($ret);

   if($count < 1) 
   {
      echo "<script>window.alert('UserName or Password Incorrect!')</script>";
      echo "<script>window.location='Staff_Login.php'</script>";
   }
   else
   {
      $_SESSION['StaffID']=$row['StaffID'];
      $_SESSION['StaffName']=$row['StaffName'];
      $_SESSION['Role']=$row['Role'];

      echo "<script>window.alert('Login Success!')</script>";
      echo "<script>window.location='Staff_Home.php'</script>";   
   }
}

?>
<!DOCTYPE html>
<html>

<div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Login</h2>
                    </div>
                </div>
            </div>
        </div>
<body>
  <form action="StaffLogin.php" method="post">
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <form class="main_form">
                        <div class="row">
                            
                            <div class=" col-md-12">
                                <input class="form-control" type="email" name="txtEmail" placeholder="example@email.com" required />
                            </div>
                            <div class="col-md-12">
                                <input class="textarea" type="password" name="txtPassword" placeholder="XXXXXXXXXXXXXX" required />
                            </div>
                            <div class=" col-md-12">
                                <input class="send" type="submit" name="btnLogin" value="Login" />
                                <input class="send" type="reset" value="Cancel" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php include('Footer.php'); ?>