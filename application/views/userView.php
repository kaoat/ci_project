<!DOCTYPE html>
<html lang="en">

<head>
  <title>My Account</title>
  <?php $this->load->view('layout/header-css'); ?>
</head>

<body class="main-layout">
  <?php $this->load->view('layout/navbar'); ?>
  <?php $userID = $this->session->userdata('user_id');?>
  <!-- end header -->
  <div class="clothes_main section">
    <div class="container mb-3">
      <div class="row" style="background: white; border-radius: 10px; padding: 10px; margin-bottom: 10px;">
        <div class="col-md-3 col-sm-4 col-4 rounded-left" style="background: rgb(83,216,149); font-size: 150%; ">
          <ul class="Menuside">
            <li class="" style="color:white;">
              Config
            </li>
            <div class="dropdown-divider"></div>

            <li class="nav-item MAMenu">
              <a class="nav-link" href="<?php echo base_url('myAccount/index'); ?>"><i class="fas fa-user-circle"></i> Username</a> <!-- variable of username!!!-->

            </li>
            <li class="nav-item MAMenu" id="navbtm">
              <a class="nav-link" href="<?php echo base_url('myAccount/changePassword'); ?>"><i class="fas fa-key"></i> Change Password</a>
            </li>
            <li class="nav-item MAMenu">
              <a class="nav-link" href="<?php echo base_url("myAccount/History/$userID"); ?>"><i class="fas fa-history"></i> History</a>
            </li>
            <li class="nav-item MAMenu">
              <a class="nav-link" href="<?php echo base_url('myAccount/myCart'); ?>"><i class="fas fa-shopping-cart"></i> My Cart</a>
            </li>
            
          </ul>

        </div>
        <div class="col-md-9 col-sm-8 col-8 rounded-right" style="background: gray;">
          <?php $this->load->view($content); ?>

        </div>
      </div>
    </div>
  </div>

  <?php $this->load->view("layout/mainfooter"); ?>
  <?php $this->load->view("layout/mainJS"); ?>

</body>

</html>