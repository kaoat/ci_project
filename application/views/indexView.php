<!DOCTYPE html>
<html lang="en">

<head>
    <title>ขายของ</title>
    <?php $this->load->view('layout/header-css'); ?>
</head>

<body class="main-layout">
    <?php $this->load->view('layout/navbar'); ?>
    <!-- end header -->
    <div class="clothes_main section">
        <div class=" mx-5 mt-2">
            <div id="main_slider" class=" section carousel slide banner-main rounded " data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#main_slider" data-slide-to="0" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <!-- Go to shop -->
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row marginii">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="carousel-caption">
                                        <h1>Welcome to <strong>KAAI KONG</strong></h1>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                                        <a class="btn btn-lg btn-primary ml-2" href="<?php echo base_url("Shop/index");?>"><i class="fas fa-search"></i><span class=""> Shop! </span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                    <i class='fa fa-angle-left'></i>
                </a>
                <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                    <i class='fa fa-angle-right'></i>
                </a>
            </div>
        </div>
    </div>

    <div class="Address layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="titlepage">
                        <div class="main">
                            <h1 class="address_text text-dark">Contact</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="address_2">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="site_info">
                            <span class="info_icon"><img src="<?php echo base_url('assets/'); ?>images/map-icon.png"></span>
                            <span class="text-dark" style="margin-top: 10px;">泰日工業大学 <br>Thai-Nichi Institute of Technology</span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="site_info">
                            <span class="info_icon">
                                <h4><i class="fas fa-address-card text-primary"></i></h4>
                            </span>
                            <span class="text-light" style="margin-top: 15px;">
                                <h1>
                                    <a href="https://www.tni.ac.th/home/"><i class="fas fa-university text-primary"></i></a>
                                    <a href="#"><i class="fab fa-facebook-square text-primary"></i></a>
                                </h1>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="site_info">
                            <span class="info_icon">
                                <h4><i class="fas fa-user-friends text-primary"></i></h4>
                            </span>
                            <span class="text-dark" style="margin-top: 21px;">TNI Student</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu_main">
            <div class="menu_text">
                <ul>
                    <li> <a href="#" class="text-dark">Home</a> </li>
                    <li> <a href="#" class="text-dark">Shop</a></li>
                    <li> <a href="#" class="text-dark">About</a></li>
                    <li> <a href="#" class="text-dark">Category</a></li>
                    <li> <a href="#" class="text-dark">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <!-- footer -->
    <div id="plant" class="footer layout_padding">
        <div class="container">
            <p>This Website As part of the subjects ITE-416, ITE-417 <a href="https://www.tni.ac.th/home/"> Thai-Nichi Institute of Technology.</a></p>
        </div>
    </div>
    <?php $this->load->view("layout/mainnavJS"); ?>
</body>

</html>