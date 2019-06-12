<?php include('header.php'); ?>

<div class="subscription">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8 offset-md-2 col-lg-10 offset-lg-1 text-center">
        <h1 class="theme-clr w700">Acad Learning Registration</h1>        
      </div>
    </div>
  </div>
</div>


<div class="formsection py-5">
  <div class="container">
    <div class="row row-radius">
      <div class="col-12 col-md-6 formbox">
        <div class="">
          <img src="<?php echo $basedir;?>images/logo.png" alt="" class="img-fluid d-block mx-auto mh65" />
          <h4 class="w600 white-clr text-center my15">Register Here</h4>

          <form action="" method="Post" enctype="" class="">
              <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input-field" type="text" placeholder="Full Name" name="name">
              </div>
              <div class="input-container">
                <i class="fa fa-envelope icon"></i>
                <input class="input-field" type="email" placeholder="Email" name="email">
              </div>

              <div class="input-container">
                <i class="fa fa-phone icon"></i>
                <input class="input-field" type="text" placeholder="Mobile" name="mobile">
              </div>

              <div class="input-container">
                <i class="fa fa-graduation-cap icon"></i>
                <select name="">
                  <option value="">Select Grad</option>
                  <option value="">9th</option>
                  <option value="">10th</option>                  
                </select>
              </div>

              <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input-field" type="password" placeholder="Password" name="psw">
              </div>

              <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input-field" type="password" placeholder="Re Enter Password" name="psw-re">
              </div>  

              <div>
                <a href="javascript:" class="base-btn blue-btn white-clr w600 btn-block mb15 rounded-0">Register</a>
                <p class="white-clr text-center">Aleady Have An Account...? 
                  <a href="login.php" class="white-clr"><u>Login Here</u></a>
                </p>
              </div>           
              
          </form>
        

          

        </div>
      </div>
      <div class="col-12 col-md-6 d-flex align-items-stretch login-banner">
        <div class="text-center align-self-center">
          <h4 class="theme-clr w600">Welcome To ACAD Registration Form</h4>
          <p class="mt15 grey">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
          </p>
          <img src="<?php echo $basedir;?>images/login-banner.png" class="img-fluid d-block mx-auto" />
        </div>
      </div>      
    </div>
  </div>
</div>





<?php include('footer.php'); ?>
