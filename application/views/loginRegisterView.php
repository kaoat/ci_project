<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e7d4730b9e.js" crossorigin="anonymous"></script>
    <style type = "text/css">
        body{font-family:"Kanit", sans-serif !important;}
        a { text-decoration: underline; }
    </style>
</head>

<body style="background-color:#DBE2FD;">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url("indexCon/index"); ?>">
            <i class="fas fa-shopping-basket">
            เว็บขายของ
            </i>
        </a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <span>เข้าสู่ระบบ</span>
           
        </div>
        
    </div>
</nav>
<div class="container mt-md-5">
    <div class="row mt-2" >
        <div class="col-md-6" style="background-color:white; ">
            <h1 class="my-3">Login</h1>
            <form action="<?php echo base_url("userCon/login"); ?>" method="post" name="loginform">
                <label for="auth">Email or Phone Number</label>                    
                <input class="form-control mb-2" type="text" name="auth" id="auth" placeholder="Email / Phone Number">
                <label for="p">password</label>   
                <input class="form-control" type="password" name="p" id="p">
                <input class="btn btn-success btn-block my-3" type="submit" value="Login">
            </form>
        </div>
        <div class="col-md-6" style="background-color:white;" >
            <h1 class="my-3">Register</h1>
            <form action="#" method="post" name="Registerform">
                <table class="table table-borderless">
                    <tr>
                        <td><b>Firstname</b> <label style="color:red">*</label></td>
                        <td><input class="form-control mb-3" type="text" name="firstname" placeholder="Enter Firstname"></td>
                        <td><input class="form-control mb-3" type="text" name="lastname" placeholder="Enter Lastname"></td>
                    </tr>
                    <tr>        
                        <td ><b>Email</b> <label style="color:red">*</label></td>
                        <td colspan="2"><input class="form-control mb-3" type="email" name="emailfield"  placeholder="Enter Email"></td>
                        
                    </tr>
                    <tr>
                        <td><b>Password</b> <label style="color:red"> * </label></td>
                        <td  colspan="2"><input class="form-control mb-3" type="password" id="passwordfield" name="passwordfield" placeholder="Enter Password"></td>
                        </tr>
                        <tr>
                            <td><b>Confirm Password</b> <label style="color:red"> * </label></td>
                            <td  colspan="2"><input class="form-control mb-3" type="password" name="confirmpasswordfield" placeholder="Enter Password Again"></td>
                            </tr>   
                        <tr>
                            <td><b>Address</b> (Optional)</td>
                            <td  colspan="2">
                                <textarea class="form-control mb-3" rows="3" name="address"></textarea>
                            </td>
                        </tr>

                </table>

                <input class="btn btn-success btn-block my-3" type="submit" value="Register">
            </form>
            
        </div>
            
           
       
    </div>
    

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>