<?php include('header.php'); ?>

<div class="subscription">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8 offset-md-2 col-lg-10 offset-lg-1 text-center">
        <h1 class="theme-clr w700">Acad Learning Login</h1>        
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
          <h4 class="w600 white-clr text-center my15">Login Here</h4>

          <form action="" method="Post" enctype="" class="">
              <div class="input-container">
                <i class="fa fa-envelope icon"></i>
                <input class="input-field" type="email" placeholder="Email" name="email">
              </div>

              <div class="input-container">
                <i class="fa fa-unlock-alt icon"></i>
                <input class="input-field" type="password" placeholder="Password" name="psw">
              </div>
              
              <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input-field" type="password" placeholder="One Time Password" name="otp">
              </div>
          </form>

          <div class="d-flex justify-content-between mb15">
            <div>
              <div class="checkbox">
                <input id="checkbox1" type="checkbox">
                <label for="checkbox1" class="white-clr mb0">
                    Remember Me
                </label>
              </div>
            </div>
            <div>
              <a href="javascript:" class="white-clr p0 text-decoration-none" data-toggle="modal" data-target="#forgotpassModal">
              Forgot Password?</a>
            </div>
          </div>

          <div>
            <a href="javascript:" class="base-btn blue-btn white-clr w600 btn-block mb15 rounded-0">Login</a>
            <p class="white-clr text-center">Don't Have An Account...? 
              <a href="register.php" class="white-clr"><u>Register Here</u></a>
            </p>
          </div>

        </div>
      </div>
      <div class="col-12 col-md-6 d-flex align-items-stretch login-banner">
        <div class="text-center align-self-center">
          <h4 class="theme-clr w600">Welcome To ACAD Login Form</h4>
          <p class="mt15 grey">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
          </p>
          <img src="<?php echo $basedir;?>images/login-banner.png" class="img-fluid d-block mx-auto" />
        </div>
      </div>      
    </div>
  </div>
</div>





<?php include('footer.php'); ?>
