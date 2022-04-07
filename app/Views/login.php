<!DOCTYPE html>
<html lang="en">
  <head>
    <title>FoodEx - Feed the Need</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <?php echo link_tag('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap'); ?>
    <?php echo link_tag('https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap'); ?>
    <?php echo link_tag('https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap'); ?>
    <?php echo link_tag('https://use.fontawesome.com/releases/v5.8.1/css/all.css'); ?>
    <?php echo link_tag('https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css'); ?>
  
<!-- Start: Login Page -->
  <?php echo link_tag('assets/images/icons/favicon.ico') ?>
    <?php echo link_tag('assets/vendor/bootstrap/css/bootstrap.min.css') ?>
    <?php echo link_tag('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>
    <?php echo link_tag('assets/vendor/vendor/animate/animate.css') ?>
    <?php echo link_tag('assets/vendor/css-hamburgers/hamburgers.min.css') ?>
    <?php echo link_tag('assets/vendor/animsition/css/animsition.min.css') ?>
    <?php echo link_tag('assets/vendor/select2/select2.min.css') ?>
    <?php echo link_tag('assets/vendor/daterangepicker/daterangepicker.css') ?>
    <?php echo link_tag('assets/css/util.css') ?>
    <?php echo link_tag('assets/css/main.css') ?>
    <!-- End: Login Page -->

    <?php echo link_tag('assets/css/open-iconic-bootstrap.min.css'); ?>
    <?php echo link_tag('assets/css/animate.css'); ?>
    <?php echo link_tag('assets/css/owl.carousel.min.css');; ?>
    <?php echo link_tag('assets/css/owl.theme.default.min.css') ?>
    <?php echo link_tag('assets/css/magnific-popup.css'); ?>
    <?php echo link_tag('assets/css/aos.css'); ?>
    <?php echo link_tag('assets/css/ionicons.min.css'); ?>
    <?php echo link_tag('assets/css/bootstrap-datepicker.css'); ?>
    <?php echo link_tag('assets/css/jquery.timepicker.css'); ?>
    <?php echo link_tag('assets/css/flaticon.css'); ?>
    <?php echo link_tag('assets/css/icomoon.css'); ?> 
    <?php echo link_tag('assets/css/style.css'); ?>
    
  </head>
  <body class="goto-here">
    <img src="<?php echo base_url('assets/images/foodex-logo.jpg'); ?>" alt="<?php echo base_url('assets/images/logo.png'); ?>" style="height:100px; width:100px">
    <a class="navbar-brand" href="<?php echo base_url(); ?>">FoodEx</a>
    <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100">
       
           <?php echo form_open('/login',['class' => 'login100-form p-l-55 p-r-55 p-t-178']) ?>
            <span class="login100-form-title">Sign In</span>
            <div class="text-success text-center mb-4"><?php echo isset($message) ? $message : '' ?></div>
            <div class="wrap-input100 m-b-16">
              <?php echo form_input('email','',['class'=>'input100','placeholder'=>'Email Address']); ?>
              <small class="text-danger error_email"><?php echo isset($validation) ? $validation->getError('email') : '' ?></small>
            </div>
            <div class="wrap-input100">
              <?php echo form_input('password','',['class'=>'input100','placeholder'=>'Password'],'password'); ?>  
              <small class="text-danger error_password"><?php echo isset($validation) ? $validation->getError('password') : '' ?></small>
            </div>
            <div class="container-login100-form-btn">
              <?php echo form_submit('signin','Sign in',['class'=>'login100-form-btn']); ?>
            </div>
            <div class="flex-col-c p-t-40 p-b-40">
              <span class="txt1 p-b-9">Don’t have an account?</span>
              <a href="<?php echo base_url('/register_to_receive'); ?>" class="txt3">Register To Receive a Meal</a>
              <span>Or</span>
              <a href="<?php echo base_url('/register_to_donate'); ?>" class="txt3">Register To Donate a Meal</a>
            </div>
          </form>
        </div>
      </div>
    </div>

    <?php echo script_tag('https://code.jquery.com/jquery-3.5.1.slim.min.js') ?>
    <?php echo script_tag('https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js') ?>
    <?php echo script_tag('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js') ?>

    <!-- Start: Loginpage -->
    <?php echo script_tag('assets/vendor/jquery/jquery-3.2.1.min.js') ?>
    <?php echo script_tag('assets/vendor/animsition/js/animsition.min.js') ?>
    <?php echo script_tag('assets/vendor/bootstrap/js/popper.js') ?>
    <?php echo script_tag('assets/vendor/bootstrap/js/bootstrap.min.js') ?>
    <?php echo script_tag('assets/vendor/select2/select2.min.js') ?>
    <?php echo script_tag('assets/vendor/daterangepicker/moment.min.js') ?>
    <?php echo script_tag('assets/vendor/daterangepicker/daterangepicker.js') ?>
    <?php echo script_tag('vendor/countdowntime/countdowntime.js') ?>
    <!-- End: Loginpage -->

    <?php echo script_tag('assets/js/jquery.min.js') ?>
    <?php echo script_tag('assets/js/jquery-migrate-3.0.1.min.js') ?>
    <?php echo script_tag('assets/js/popper.min.js') ?>
    <?php echo script_tag('assets/js/bootstrap.min.js') ?>
    <?php echo script_tag('assets/js/jquery.easing.1.3.js') ?>
    <?php echo script_tag('assets/js/jquery.waypoints.min.js') ?>
    <?php echo script_tag('assets/js/jquery.stellar.min.js') ?>
    <?php echo script_tag('assets/js/owl.carousel.min.js') ?>
    <?php echo script_tag('assets/js/jquery.magnific-popup.min.js') ?>
    <?php echo script_tag('assets/js/aos.js') ?>
    <?php echo script_tag('assets/js/jquery.animateNumber.min.js') ?>
    <?php echo script_tag('assets/js/bootstrap-datepicker.js') ?>
    <?php echo script_tag('assets/js/scrollax.min.js') ?>
    <?php echo script_tag('https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false') ?>
    <?php echo script_tag('assets/js/google-map.js') ?>
    <?php echo script_tag('assets/js/main.js') ?>

  </body>
</html>