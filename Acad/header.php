<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php $basedir = 'http://'.$_SERVER['SERVER_NAME'].'/Daily/Acad/assets/' ; ?>
<link rel="shortcut icon" href="<?php echo $basedir;?>images/favicon.png">
<meta name="author" content="">
<meta name="description" content="">
<meta name="keywords" content="">
<title>Acad Coaching Center</title>


<!--Bootstrap Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?php echo $basedir;?>css/bootstrap.min.css">
<!-- Custom Scrollbar Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir;?>css/jquery.mCustomScrollbar.css">

<!-- font awesome css -->
<link rel="stylesheet" href="<?php echo $basedir;?>css/font-awesome.min.css">
<!-- Hover + Animation css -->
<link rel="stylesheet" href="<?php echo $basedir;?>css/animate.css">
<link rel="stylesheet" href="<?php echo $basedir;?>css/hover.css">
<!-- common css -->
<link rel="stylesheet" href="<?php echo $basedir;?>css/common.css">
<!-- Template css -->
<link rel="stylesheet" href="<?php echo $basedir;?>css/style.css">
<!-- font family -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">


</head>

<body>

<nav class="navbar navbar-expand-lg red-bg navbar-dark sticky-top py-md-0">
  <a class="navbar-brand white-clr" href="index.php">
  <img src="<?php echo $basedir;?>images/logo.png" class="img-fluid mh65" alt="" title="" />  
  </a>
  <button class="navbar-toggler base-btn red-btn py5 px10" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav mx-auto">
    <li class="nav-item">
    <a class="nav-link white-clr p15" href="index.php">Home</a>
    </li>
    <!-- Shop Dropdown -->
    <li class="nav-item dropdown simple-dropdown onhover">    
    <a href="javascript:" class="nav-link white-clr p15" id="navbardrop" data-toggle="dropdown"> 
    Subjects <i class="fa fa-angle-down"></i>
    </a>
    <div class="dropdown-menu left-arrow mt0 z-index1 py10 animated flipInY fooli" aria-labelledby="dropdownMenu1">
    <a class="dropdown-item" href="javascript:"><span class="hvr-forward">Physics</span></a>
    <a class="dropdown-item" href="javascript:"><span class="hvr-forward">Chemistry</span></a>
    <a class="dropdown-item" href="javascript:"><span class="hvr-forward">Maths</span></a>    
    </div>
    </li>
    <!-- Category Dropdown -->
    <li class="nav-item dropdown simple-dropdown onhover">    
    <a href="javascript:" class="nav-link white-clr p15" id="navbardrop" data-toggle="dropdown"> 
    Centers <i class="fa fa-angle-down"></i>
    </a>
    <div class="dropdown-menu left-arrow mt0 z-index1 py10 animated flipInY" aria-labelledby="dropdownMenu1">
    <a class="dropdown-item" href="javascript:"><span class="hvr-forward">Admission</span></a>
    <a class="dropdown-item" href="javascript:"><span class="hvr-forward">Center Login</span></a>
    <a class="dropdown-item" href="javascript:"><span class="hvr-forward">Others</span></a> 
    </div>
    </li>
    <li class="nav-item">
    <a class="nav-link white-clr p15" href="#">Pricing</a>
    </li>
    <li class="nav-item">
    <a class="nav-link white-clr p15" href="#">About Us</a>
    </li>
    <li class="nav-item">
    <a class="nav-link white-clr p15" href="#">Contact Us</a>
    </li>
    </ul>
    
    <ul class="nav justify-content-md-end">
    <li class="nav-item white-clr mr15">
    <a class="base-btn blue-btn hvr-grow t-decoration-none white-clr f-14 w600" href="login.php">  
    Sign in</a>   
    </li>
    <li class="nav-item white-clr">
    <a class="base-btn green-btn hvr-grow t-decoration-none white-clr f-14 w600" href="register.php">
    Start 5-Day Free Trial</a>   
    </li>
    
    </ul>
  </div>
</nav>
















