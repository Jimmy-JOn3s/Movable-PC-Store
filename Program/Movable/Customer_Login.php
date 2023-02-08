<?php 
session_start();
include('connection.php');
include('Header2.php');
if (isset($_SESSION['LoginCount'])) {
if($_SESSION['LoginCount']>=3){
	echo "<script>alert('Please wait 10 minutes to Log In again');</script>";
	echo "<script>window.location='Login_Timer.php';</script>";
	}
}
if(isset($_POST['btnLogin'])) 
{
    $txtEmail=$_POST['txtEmail'];
    $txtPassword=$_POST['txtPassword'];


    $check="SELECT * FROM customer
            WHERE Email='$txtEmail'
            AND Password='$txtPassword'";
    $ret=mysqli_query($connection,$check);
    $count=mysqli_num_rows($ret);
    $row=mysqli_fetch_array($ret);

    if($count < 1) 
    {
        echo "<script>window.alert('UserName or Password Incorrect!')</script>";
        echo "<script>window.location='Customer_Login.php'</script>";
    }
    else
    {
        $_SESSION['CustomerID']=$row['CustomerID'];
        $_SESSION['CustomerName']=$row['CustomerName'];
         $_SESSION['Address']=$row['Address'];
         $_SESSION['Phone']=$row['Phone'];
        

        

        echo "<script>window.alert('Login Success!')</script>";
        echo "<script>window.location='Product_Display.php'</script>";
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
  <form action="Customer_Login.php" method="post">
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
<?php 
include('Footer.php');
 ?>


