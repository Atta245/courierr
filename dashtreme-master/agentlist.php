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
              <h5 class="card-title">Parcel Information</h5>
			    <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col" class="col-1">#</th>
                    <th scope="col">Agents</th>
                    <th scope="col">Email</th>
                      <!-- <th scope="col">City/State/Zip</th>
                      <th scope="col">Country</th> -->
                    <th scope="col">Branch</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <!-- <td>sample</td>
                    <td>sample</td> -->
                    <td>sample</td>
                    <td>sample</td>
                    <td>sample,sample,sample</td>
                    <td class="text-center">
                      <i class="ri-edit-2-line text-primary h4"></i>
                      <i class="ri-delete-bin-line text-danger h4 ml-2"></i>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- <div class=" h6 text-right pt-3">
                Total : 200.00
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-outline-secondary mb-2">Add item</button>
              </div> -->
            </div>

          </div>
            </div>
              <!-- <div class="text-center">
                <button type="submit" class="btn btn-dark">save</button>
                <button type="submit" class="btn btn-outline-secondary">cancel</button>
            </div> -->

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