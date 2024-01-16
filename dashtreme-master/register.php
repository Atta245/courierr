<?php
include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme2">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

	<div class="card card-authentication1 mx-auto my-4">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="assets/images/logo-icon.png" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Sign Up</div>


		    <form class="user" method="post">
			  <div class="form-group">

        <!-- <input type="text" name="fname"  class="sr-only"
        id="exampleFirstName" placeholder="First Name"> -->
			  <label for="exampleInputName" class="sr-only">Name</label>
			   <div class="position-relative has-icon-right">
				  <input  name="fname" type="text" id="exampleInputName" class="form-control input-shadow" placeholder="Enter Your Name">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">

        <!-- <input type="email" name="email"  class="sr-only"
        id="exampleInputEmail" placeholder="Email"> -->
			  <label for="exampleInputEmailId" class="sr-only"  >Email ID</label>
			   <div class="position-relative has-icon-right">
				  <input name="email" type="text" id="exampleInputEmailId" class="form-control input-shadow" placeholder="Enter Your Email ID">
				  <div class="form-control-position">
					  <i class="icon-envelope-open"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">

        <!-- <input type="password" name="pass"  class="sr-only"
        id="exampleInputPassword" placeholder="Password"> -->
			   <label for="exampleInputPassword" class="sr-only"  >Password</label>
			   <div class="position-relative has-icon-right">
				  <input name="pass" type="text" id="exampleInputPassword" class="form-control input-shadow" placeholder="Choose Password">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			  
			   <div class="form-group">
			     <div class="icheck-material-white">
                   <input type="checkbox" id="user-checkbox" checked="" />
                   <label for="user-checkbox">I Agree With Terms & Conditions</label>
			     </div>
			    </div>

          <input type="submit"  name="submit" value="Register Account"  class="btn btn-light btn-block waves-effect waves-light">
          <!-- <a class="btn btn-light btn-block waves-effect waves-light" href="" name="signup">Sign Up</a> -->
			  
			 <!-- <button type="button" class="btn btn-light btn-block waves-effect waves-light">Sign Up</button> -->
			  <div class="text-center mt-3">Sign Up With</div>
			  
			 <div class="form-row mt-4">
			  <div class="form-group mb-0 col-6">
			   <button type="button" class="btn btn-light btn-block"><i class="fa fa-facebook-square"></i> Facebook</button>
			 </div>
			 <div class="form-group mb-0 col-6 text-right">
			  <button type="button" class="btn btn-light btn-block"><i class="fa fa-twitter-square"></i> Twitter</button>
			 </div>
			</div>
			
			 </form>
		   </div>
		  </div>
		  <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">Already have an account? <a href="login.php"> Sign In here</a></p>
		  </div>
	     </div>



       <?php
       if(isset($_POST["submit"])){
       $name = $_POST["fname"];
       $email = $_POST["email"];
       $pass = $_POST["pass"];

       $query=mysqli_query($conn ,"INSERT INTO `signup`(`s_name`, `s_email`, `s_pass`) VALUES ('$name','$email','$pass')");

       if($query==1){
        echo "<script>alert('data insert') </script>";
        echo "<script>window.location.href='login.php'</script>";

       }
       else{
        echo "<script>alert(' data not insert') </script>";

       }


       }

       ?>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--start color switcher-->

  <!--end color switcher-->
	
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  
</body>
</html>
