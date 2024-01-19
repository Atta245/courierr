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
       <div class="card-title">New Parcel</div>
       <hr>
       <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Sender Information <br> Name</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Recipient Information <br> Name</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Address</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Address</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Contact#</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Contact#</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputState">Pickup Branch</label>
          <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>...</option>
          </select>
        <!-- </div>
          <button type="submit" class="btn btn-primary">Save</button>
        </div> -->

<!-- table start -->

        <div class="row mt-3">
        
        <div class="col-lg-12 ">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Parcel Information</h5>
			    <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <!-- <th scope="col">#</th> -->
                    <th scope="col">Weight</th>
                    <th scope="col">Height</th>
                    <th scope="col">Length</th>
                    <th scope="col">Width</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <!-- <th scope="row">1</th> -->
                    <td><input type="text" class="form-control" ></td>
                    <td><input type="text" class="form-control" ></td>
                    <td><input type="text" class="form-control" ></td>
                    <td><input type="text" class="form-control" ></td>
                    <td><input type="text" class="form-control" ></td>
                    <td><i class="ri-close-line h3 text-danger"></i></td>
                  </tr>
                </tbody>
              </table>
              <div class=" h6 text-right pt-3">
                Total : 200.00
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-outline-secondary">Add item</button>
              </div>
            </div>

          </div>
            </div>
              <div class="text-center">
                <button type="submit" class="btn btn-dark">save</button>
                <button type="submit" class="btn btn-outline-secondary">cancel</button>
            </div>

        </div>
      </div><!------ table End ----->

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