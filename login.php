<?php
include_once("connect.php");
session_start();

if(isset($_POST['btnsignin'])){
    $uname = $_POST['txtUserName'];
    $pwd = md5($_POST['txtPassword']);
    $sql = "SELECT * FROM customer WHERE UserName = '$uname' and Password = '$pwd' ";
    $re = pg_connect($conn,$sql);
    if(pg_fetch_row($re) > 0 ){
        $_SESSION['txtUserName']= $uname;
        $_SESSION['txtPassword']= $pwd;
        $_SESSION['timeout']=time();
        header ("Location: index.php");
    }else{
        echo "Wrong username or password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="plugins/animate/animate.min.css">
  <link rel="stylesheet" href="plugins/fontawesome/all.css">
  <link rel="stylesheet" href="plugins/webfonts/font.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <link rel="icon" type="image/x-icon" href="./images/logo.png">


  <link rel="stylesheet" href="plugins/uikit/uikit.min.css" />
  <link rel="stylesheet" href="css/sign.css">

  <title>CH store</title>

</head>

<body>


 
  <div class="content">
    <section class="signin ">
        <div class="container">
            <div class="signin-left">
                <div class="sign-title">
                    <h1>Sign in</h1>
                </div>
            </div>
            <div class="signin-right " id="">
                <form action="" method="POST">
                    <div class="username form-control1 ">
                        <input type="text" name="txtUserName"  id="username" placeholder="User Name" require>
                    </div>
                    <div class="password form-control1">
                        <input type="password" name="txtPassword" id="password" placeholder="Password" require>
                    </div>
                 
                    <div class="recaptcha form-control1">This site is protected by reCAPTCHA and the Google <a href="">Privacy Policy</a> and <a href="">Terms of Service</a> apply.</div>
                    <div class="submit">
                      <input class="btn" type="submit" name="btnsignin" id="dangnhap" value="Signin">
                    <div class="forgetpassword">
                            <p id="quenmk">OR<a href="?page=signup">Sign up</a></p>
                      </div>
                       
                    </div>
                    
                </form>
            </div>
            <div class="signin-right " id="b-sign">
                <form action="">
                    <div class="username form-control1 ">
                       <h2>Ph???c h???i m???t kh???u</h2>
                    </div>
                    <div class="password form-control1">
                        <input type="password" id="password" placeholder="Password">
                    </div>
                 
                    <div class="recaptcha form-control1">This site is protected by reCAPTCHA and the Google <a href="">Privacy Policy</a> and <a href="">Terms of Service</a> apply.</div>
                    <div class="submit">
                      <input class="btn" type="submit" value="G???i">
                      <div class="forgetpassword">
                            <a href="" id="huy">H???y</a>
                      </div>
                       
                    </div>
                    
                </form>
            </div>
        </div>
    </section>    
    

  </div>
 
  <script async defer crossorigin="anonymous" src="plugins/sdk.js"></script>
  <script src="plugins/jquery-3.4.1/jquery-3.4.1.min.js"></script>
  <script src="plugins/bootstrap/popper.min.js"></script>
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <script src="plugins/owl.carousel/owl.carousel.min.js"></script>
  <script src="js/home.js"></script>
  <script src="js/script.js"></script>
  <script src="plugins/uikit/uikit.min.js"></script>
  <script src="plugins/uikit/uikit-icons.min.js"></script>
</body>

</html>