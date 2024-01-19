


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
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>

  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme2">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Dashtreme Admin</h5>
     </a>
    </div>

    <p class="mt-3 d-flex justify-content-center">
      <a class="h4" href="index.php">
        Dashboard
      </a>   
    </p>

    <p class="">
      <a class="pl-4 d-flex h5 rotbtn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        <i class="ri-building-4-line mr-2"></i>
        Branch <i class="ri-arrow-drop-left-line"></i>
      </a>   
    </p>
    <div class="collapse sidebar-menu" id="collapseExample">
      <a class=" pl-5" href="newbranch.php">
        <i class="ri-arrow-right-s-fill"></i>
        <!-- <i class="fa fa-circle"></i> -->
        Add New
      </a>
      <br>
      <a class=" pl-5" href="branchlist.php">
        <i class="ri-arrow-right-s-fill"></i>
        List
      </a>
    </div>

    <p class="">
      <a class="pl-4 d-flex h5 rotbtn" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
        <i class="ri-team-line mr-2"></i>
        Branch Agents <i class="ri-arrow-drop-left-line"></i>
      </a>   
    </p>
    <div class="collapse sidebar-menu" id="collapse2">
      <a class=" pl-5" href="newagent.php">
        <i class="ri-arrow-right-s-fill"></i>
        Add New
      </a>
      <br>
      <a class=" pl-5" href="agentlist.php">
        <i class="ri-arrow-right-s-fill"></i>
        List
      </a>
    </div>

    <p class="">
      <a class="pl-4 d-flex h5 rotbtn" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">
        <i class="ri-archive-line mr-2"></i>
        Parcels <i class="ri-arrow-drop-left-line"></i>
      </a>   
    </p>
    <div class="collapse sidebar-menu" id="collapse3">
      <a class=" pl-5" href="newcourier.php">
        <i class="ri-arrow-right-s-fill"></i>
        Add New
      </a>
      <br>
      <a class=" pl-5" href="courierlist.php">
        <i class="ri-arrow-right-s-fill"></i>
        List All
      </a>
      <br>
      <a class=" pl-5" href="">
        <i class="ri-arrow-right-s-fill"></i>
        Collected
      </a>
      <br>
      <a class=" pl-5" href="">
        <i class="ri-arrow-right-s-fill"></i>
        Shipped
      </a>
      <br>
      <a class=" pl-5" href="">
        <i class="ri-arrow-right-s-fill"></i>
        Out for Delivery
      </a>
    </div>

    <p class="">
      <a class="pl-4 d-flex h5" href="">
        <i class="ri-menu-search-line mr-2"></i>
        Track Parcel
      </a>   
    </p>
    <p class="">
      <a class="pl-4 d-flex h5 bar" href="login.php">
        <i class="ri-login-circle-line mr-2"></i>
        Login
      </a>   
    </p>
    <p class="">
      <a class="pl-4 d-flex h5 bar" href="register.php">
        <i class="ri-settings-3-line mr-2"></i>
        Registration
      </a>   
    </p>
   
   </div>
   <!--End sidebar-wrapper-->