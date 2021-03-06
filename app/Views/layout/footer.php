<footer class="ftco-footer ftco-section">
<div class="container">
  <div class="row">
    <div class="mouse">
      <a href="#" class="mouse-icon">
        <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
      </a>
    </div>
  </div>
  <div class="row mb-5">
    <div class="col-md">
      <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2">FoodEx</h2>
        <p>Feed The Need</p>
        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
          <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
        </ul>
      </div>
    </div>
    <div class="col-md">
      <div class="ftco-footer-widget mb-4 ml-md-5">
        <h2 class="ftco-heading-2">Menu</h2>
        <ul class="list-unstyled">
          <li><a href="<?php echo base_url('home'); ?>" class="py-2 d-block">Home</a></li>
          <li><a href="<?php echo base_url('about'); ?>" class="py-2 d-block">About</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-4">
        <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2">Help</h2>
        <div class="d-flex">
          <ul class="list-unstyled">
            <li><a href="<?php echo base_url('faqs'); ?>" class="py-2 d-block">FAQs</a></li>
            <li><a href="<?php echo base_url('contact'); ?>" class="py-2 d-block">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md">
      <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2">Have a Questions?</h2>
        <div class="block-23 mb-3">
          <ul>
            <li><span class="icon icon-map-marker"></span><span class="text">166 G/5, Block 3, PECHS, Karachi, Sindh 75400, Pakistan.</span></li>
            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+92 21 34557174</span></a></li>
            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@consulnet.net</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 text-center">

      <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This project is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">CodeGirls</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
    </div>
  </div>
</div>
</footer>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<?php echo $this->include('/layout/scripts') ?>
<?php /* echo $this->renderSection('scripts') */ ?> 
</body>
</html>
