<?php 
 include("connection.php");

session_start();
if(isset($_SESSION['s_email'])==null){
    // header("location:login.php");
}
else{ 

 include("sidebar.php");
 include("navbar.php");


?>

   <!--End sidebar-wrapper-->
  

<!--Start topbar header-->

<!--End topbar header-->
<div class="clearfix"></div>
	
  <div class="content-wrapper">
  <div class="container-fluid">

<div class="row mt-3">
  <div class="col-lg-12">
     <div class="card">
       <div class="card-body">
       <div class="card-title">New Branch</div>
       <hr>
       <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Street/Building</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">city</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">State</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Zip Code/ Postal Code</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Country</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Contact#</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="">
          </div>
        </div>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
     </div>
     </div>
  </div>

  
</div><!--End Row-->

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<?php
    include("footer.php");
  ?>
	<!--End footer-->
	
	<!--start color switcher-->

  <!--end color switcher-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
	
</body>
</html>
<?php
}
?>