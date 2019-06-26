<!DOCTYPE html>
<html lang="EN">
<head>
	<title>index</title>
	  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=" something description..">
    <meta name="keywords" content="something keywords">
    <meta name=”author” content=" @ 2017& The Mall Group. all rights reserved">
    <link rel="icon" type="image/png" href="../image/logo.png" sizes="16x16">

      <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="../bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap/dist/css/style.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap/dist/css/fontawesome.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

      <!--Script !-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="../bootstrap/dist/js/jquery.min.js"></script>
  <script type="text/javascript" src="../bootstrap/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../bootstrap/dist/js/font-awesome.js"></script>
</head>
<body>
	<div class="container">
    <!-- Conditio if Simulate a smartphone / tablet Navtop !-->
    <?php 
    if ($_GET["page"] =="" or $_GET["page"] =="home" or $_GET["page"] =="my_merchant" or $_GET["page"] =="btn_backToHome") 
    {
      include("header_1.html");
      ?>
      <!--header !-->
     <!--  <div class="mobile"> -->
        <!-- Top Navigation Menu -->
   <!--      <div class="topnav">
          <div class="row">
            <div class="col"> -->
            <!--logo Navigation!-->
           <!--  <a class="<?php active('btn_backToHome'); ?>" href="index.php?page=btn_backToHome">
              <img id="logo" class="img-responsive col-2 col-md-auto col-lg-12" width="auto" height="auto" align="left" src="/EMSPHERE/img/logo.png">
            </a> -->
            <!--Change   language !-->
        <!--     <div class="row" style="margin-top:20px; text-align: right">
              <a href="../TH/source/index.php?page=home"  class="col-6 col-md-8 col-lg-9 col-xl-10 <?php active('btn_backToHome'); ?>">
                <span class="">TH</span>
              </a>
              <a href="#EN">
                <span class="rounded-circle">EN</span>
              </a>
            </div> -->
            <!--Toggle Menu icon-->
       <!--      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars col-lg-12 col-xl-12"></i>
				    </a>
          </div>
        </div>
        Drop Down Menu !
        <div id="myLinks" class=" col- col-md-12 col-lg-12 col-xl-12">
          <a class="<?php active('home'); ?>" href="index.php?page=home">Home</a>
          <a href="#Projects" style="color: #D7B275">Projects</a>
          <a class="<?php active('EmSphere'); ?>" href="index.php?page=EmSphere">EmSphere 
            <img class="img-fluid col-5 col-md-auto col-lg-6" src="../img/dicut/dicut/logo_mobile@2x.png" alt="emsphere">
          </a>
          <a href="#BankokMall">Bankok&nbsp;Mall 
            <img class="img-fluid  col-5 col-md-auto col-lg-6" src="../img/dicut/dicut/logo_mall@2x.png" alt="Bankok Mall">
          </a>
          <a class="<?php active('my_merchant'); ?>" href="index.php?page=my_merchant">MY&nbsp;MERCHANT</a>
          <a href="#FAQs">FAQs</a> -->
          <!--Button Login !-->
         <!--  <div align="center">
            <a class="<?php active('form_register'); ?>" href="index.php?page=form_register">
              <button type="submit" name="" value="" class="btn btn-outline-dark col-6 col-md-auto col-lg-8">เข้าสู่ระบบ</button>
            </a>
          </div>
        </div>
        </div> -->
        <!--Condition if Navbar !-->
      <?php }
      else if ($_GET["page"] =="EmSphere" or $_GET["page"] =="bannerEmSphere") 
        { ?>
          <div class="mobile">
            <!-- Top Navigation Menu -->
            <div class="topnav">
              <div class="row">
                <div class="col">
                  <!--icon back left !-->
                  <i class="fas fa-chevron-left col-1" style="float: left; margin-top: 70px;"></i>
                  <!--Change   language!-->
                  <div class="row" style="margin-top:50px; text-align: right">
                    <a href="../TH/source/index.php?page=home" class="col-7 col-sm-8 col-md-9 col-lg-10 col-xl-10 <?php active('btn_backToHome'); ?>">
                      <span class="">TH</span>
                    </a>
                    <a href="#EN">
                      <span class="rounded-circle">EN</span>
                    </a>
                  </div>
                  <!--Toggle Menu! icon-->
                  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                  </a>
                </div>
              </div>
              <!--Drop Down Menu!-->
              <div id="myLinks" class="col-md-12 col-lg-12 col-xl-12">
                <a class="<?php active('home'); ?>" href="index.php?page=home">Home</a>
                <a href="#Projects" style="color: #D7B275">Projects</a>
                <a class="<?php active('EmSphere');?>" href="index.php?page=EmSphere">EmSphere 
                  <img class="img-fluid col-5 col-md-auto col-lg-6" src="../img/dicut/dicut/logo_mobile@2x.png" alt="emsphere">
                </a>
                <a href="#BankokMall">Bankok&nbsp;Mall 
                  <img class="img-fluid  col-5 col-md-auto col-lg-6" src="../img/dicut/dicut/logo_mall@2x.png" alt="Bankok Mall">
                </a>
                <a class="<?php active('my_merchant'); ?>" href="index.php?page=my_merchant">MY&nbsp;MERCHANT</a>
                <a href="#FAQs">FAQs</a>
                <div align="center">
                  <button type="submit" name="" value="" class="btn btn-outline-dark col-6 col-md-auto col-lg-8">เข้าสู่ระบบ</button>
                </div>
              </div>
              <!--content!--> 
            </div>
            <!--Condition if Form!-->
          <?php }
          else if ($_GET["page"] =="btn_registerEmsphere" or $_GET["page"] =="registerForm" or $_GET["page"] =="productForm" or $_GET["page"] =="confirmForm" or $_GET["page"] =="completeForm" 
            or $_GET["page"] =="btn_continueRegist" or $_GET["page"] =="btn_continue_product" 
          or $_GET["page"] =="btn_back_product" or $_GET["page"] =="btn_continue_confirm" 
          or $_GET["page"] =="btn_back_confirm") { ?>
            <div class="mobile">
              <!-- Top Navigation Menu -->
              <div class="topnav">
                <div class="row">
                  <div class="col">
                    <!--icon left!-->
                    <i class="fas fa-chevron-left col-1" style="float: left; margin-top: 70px;"></i>
                    <a class="<?php active('EmSphere'); ?>" href="index.php?page=EmSphere">
                      <img id="emsphere" class="img-responsive col-5 col-md-auto col-lg-8" width="auto" height="auto" align="left" style="margin-top: 60px;" src="../img/dicut/dicut/logo_mobile@2x.png">
                    </a>
                    <!--Change   language!-->
                    <div class="row" style="margin-top:20px; text-align: right">
                      <a href="../TH/source/index.php?page=home" class="col-auto col-md-8 col-lg-9 <?php active('btn_backToHome'); ?>">
                        <span class="">TH</span>
                      </a>
                      <a href="#EN">
                        <span class="rounded-circle">EN</span>
                      </a>
                    </div>
                    <!--Toggle Menu-->
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                      <i class="fa fa-bars"></i>
                    </a>
                  </div>
                </div>
              </a>
              <div id="myLinks" class="col-md-12 col-lg-12 col-xl-12">
                <a class="<?php active('home'); ?>" href="index.php?page=home">Home</a>
                <a href="#Projects" style="color: #D7B275">Projects</a>
                <a class="<?php active('EmSphere'); ?>" href="index.php?page=EmSphere">EmSphere 
                  <img class="img-fluid col-5 col-md-auto col-lg-4" src="../img/dicut/dicut/logo_mobile@2x.png" alt="emsphere">
                </a>
                <a href="#BankokMall">Bankok&nbsp;Mall
                  <img class="img-fluid  col-5 col-md-auto col-lg-4" src="../img/dicut/dicut/logo_mall@2x.png" alt="Bankok Mall">
                </a>
                <a class="<?php active('my_merchant'); ?>" href="index.php?page=my_merchant">MY&nbsp;MERCHANT</a>
                <a href="#FAQs">FAQs</a>
              </div>
              <!--toggle menu!-->
              </div>
            <?php }
            else {

            } ?>
<?php
//--------------------------Condition switch case --------------//
    switch ($_GET["page"])
    {
    	case "home":
    		include("home.html");
        break;
    	case "EmSphere":
     		include("register_emsphase.html");
        break;
      case "my_merchant":
        include("my_merchant.html");
        break;
      case "btn_registerEmsphere":
        include("form_register.html");
        break;
      case "registerForm":
        include("form_register.html");
        break;
      case "productForm":
        include("product.html");
        break;
      case "confirmForm":
        include("confirm.html");
        break;
      case "completeForm":
        include("complete.html");
        break;
      case "bannerEmSphere":
        include("register_emsphase.html");
        break;
      case "btn_backToHome":
        include("home.html");
        break;
      case "btn_continueRegist":
        include("product.html");
        break;
      case "btn_continue_product":
        include("confirm.html");
        break;
      case "btn_back_product":
        include("form_register.html");
        break;
      case "btn_continue_confirm":
        include("complete.html");
        break;
      case "btn_back_confirm":
        include("product.html");
        break;
    }
?>    
<!--Script Drop down Menu!-->
<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>

<!--Script active link !-->
<?php
function active($current_page)
{
  $page = $_GET['page'];
  if(isset($page) && $page == $current_page)
  {
    echo 'active';
  }
}
?>
</body>
</html>