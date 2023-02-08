<?php  
session_start();
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>lighten</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader --> 
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="head_top">
               <div class="container">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                        <ul class="sociel_link">
                         <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                         <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                         <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
                     </ul>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                        <p>long established fact that a reader will be </p>
                    </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="Staff_Home.php"><img src="images/Gamelogo.png" alt="logo"/></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li class="active"> <a href="Customer_Home.php">Home</a> </li>
                              <li> <a href="StaffEntry.php">Register</a> </li>
                              <li> <a href="Product_Entry.php">Product Register</a> </li>
                              <li> <a href="Product_Display.php"> Products</a> </li>
                              <li class="mean-last"> <a href="StaffLogin">signup</a> </li>
                               
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
               <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                  
                  <li class="nav-item dropdown">
                     <a class="buy" class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Login</a>
                     <div class="dropdown-menu" aria-labelledby="dropdown-a">
                        <a  class="dropdown-item" href="Customer_Login.php">Customer</a>
                        <a  class="dropdown-item" href="StaffLogin.php">Staff</a>  
                     </div>
                  </li>
               </div>
            </div>
         </div>
         <!-- end header inner --> 
      </header>
      <!-- end header -->
      <section class="slider_section">
         <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">

            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="images/Room.jpg" alt="First slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>Tech <br> <strong class="black_bold">Geek </strong><br>
                           <strong class="yellow_bold">Products </strong></h1>
                        
                        <a  href="Product_Display.php">see more Products</a>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="images/gaming.jpg" alt="Second slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>Best <br> <strong class="black_bold">quality </strong><br>
                           <strong class="yellow_bold">Brands </strong></h1>
                        
                        <a  href="Product_Display.php">see more Products</a>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="third-slide" src="images/laptop.jpg" alt="Third slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>Gives  <br> <strong class="black_bold">Best services </strong><br>
                           <strong class="yellow_bold">for customers</strong></h1>
                       
                        <a  href="Product_Display.php">see more Products</a>
                     </div>
                  </div>
               </div>

            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class='fa fa-angle-right'></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class='fa fa-angle-left'></i>
            </a>
            
         </div>

      </section>
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

<h3 class="   my-4 d-flex justify-content-center fs-2 fw-bold badge bg-secondary bg-gradiant shadow text-wrap "> Products Instock</h3>
<table class="table table-bordered shadow">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Brand</th>
      <th scope="col">Category</th>
      <th scope="col">Items</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>SteelSeries</td>
      <td>Mouse</td>
      <td>Rival 5</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Razer </td>
      <td>Keyboard</td>
      <td>Huntsman Mini</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td> LogiTech</td>
      <td>Speaker</td>
      <td>U1-mini speakers</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td> Secret Lab</td>
      <td>Chair</td>
      <td>Titan Edition</td>
    </tr>
     <tr>
      <th scope="row">5</th>
      <td>Razor</td>
      <td>Mouse</td>
      <td>Cyberpunk 2077</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>SteelSeries</td>
      <td>HeadPhones</td>
      <td>Arctics Pro</td>
    </tr>
     <tr>
      <th scope="row">7</th>
      <td>SteelSeries</td>
      <td>HeadPhones</td>
      <td>Arctics 9 + GameDac </td>
    </tr>
     <tr>
      <th scope="row">8</th>
      <td>Hyper x</td>
      <td>HeadPhones</td>
      <td>Cloud II Pro</td>
    </tr>
  </tbody>
</table>
</div>

      
         
      <!-- map -->
      <div class="container-fluid padi">
         <div class="map">
            <img src="images/mapimg.jpg" alt="img"/>
         </div>
      </div>
      <!-- end map --> 
      <!--  footer --> 




      <footr>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 offset-md-3">
                     <ul class="sociel">
                         <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                         <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                         <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                     </ul>
                  </div>
            </div>
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>conatct us</h3>
                     <span>123 Second Street Fifth Avenue,<br>
                       Manhattan, New York<br>
                        +987 654 3210</span>
                  </div>
               </div>
                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>ADDITIONAL LINKS</h3>
                     <ul class="lik">
                         <li> <a href="#">About us</a></li>
                         <li> <a href="#">Terms and conditions</a></li>
                         <li> <a href="#">Privacy policy</a></li>
                         <li> <a href="#">News</a></li>
                          <li> <a href="#">Contact us</a></li>
                     </ul>
                  </div>
               </div>
                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>service</h3>
                      <ul class="lik">
                    <li> <a href="#"> Data recovery</a></li>
                         <li> <a href="#">Computer repair</a></li>
                         <li> <a href="#">Mobile service</a></li>
                         <li> <a href="#">Network solutions</a></li>
                          <li> <a href="#">Technical support</a></li>
                  </div>
               </div>
                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>About lighten</h3>
                     <span>Tincidunt elit magnis nulla facilisis. Dolor Sapien nunc amet ultrices, </span>
                  </div>
               </div>
            </div>
         </div>
            <div class="copyright">
               <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
            </div>
         
      </div>
      </footr>
      <!-- end footer -->
      <!-- Javascript files--> 
      <script src="js/jquery.min.js"></script> 
      <script src="js/popper.min.js"></script> 
      <script src="js/bootstrap.bundle.min.js"></script> 
      <script src="js/jquery-3.0.0.min.js"></script> 
      <script src="js/plugin.js"></script> 
      <!-- sidebar --> 
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
   </body>
</html>