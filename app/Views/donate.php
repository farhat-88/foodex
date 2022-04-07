<?php echo $this->include('/layout/head') ?>
<div class="home-slider owl-carousel">
  <div class="slider-item" style="background-image: url('<?php echo base_url('assets/images/donate-banner.jpg');?>');  opacity:0.9">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
        <div class="col-md-12 ftco-animate text-center">
          <h1 class="mb-0 bread">Donate</h1>
          <h2 class="subheading mb-4">We Can't Do It Without You</h2>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="ftco-section ftco-no-pb ftco-no-pt">
  <div class="container">
    <div class="row">
      <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url('assets/images/donate3.jpg');?>);"></div>
      <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section-bold mb-4 mt-md-5">
          <div class="ml-md-0">
            <h2 class="mb-4">Prepared hot meals can help</h2>
          </div>
        </div>
        <div class="pb-md-5">
          <p>The COVID-19 outbreak is presenting unique challenges that are affecting all of us. We want to make it easy for anyone in need of some extra love at this time to get access to prepared meals, completely anonymously and stigma-free.</p>
          <p class="d-flex justify-content-center align-items-center"> <a href="<?php echo base_url('/donate/donate_meal'); ?>" class="btn btn-primary">Donate a Meal</a> </p>
          <p class="d-flex justify-content-center align-items-center"> <a href="<?php echo base_url('/receive/'); ?>" class="btn btn-primary">Receive a Meal</a> </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section-bold mb-4 mt-md-5">
          <div class="ml-md-0">
            <h2 class="mb-4">How it Works</h2>
          </div>
        </div>
        <div class="pb-md-5">
          <p>1. Amazing donors contribute with any amount of food they can offer. FoodEx will NOT collect any fees.</p>
          <p>2. People who need extra meals Register to Receive Donations.</p>
          <p>3. Recipients use the FoodEx app to get fresh surplus meals from local restaurants and cafes.</p>
          <span style="font-weight:bold">***CURRENTLY IN KARACHI ONLY***</span>
        </div>
      </div>
      <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url('assets/images/how-it-works2.jpg');?>);"></div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pb ftco-no-pt">
  <div class="container">
    <div class="row" style="text-align:center">
      <div class="py-5 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section-bold mb-4 mt-md-5">
          <div class="ml-md-0">
            <h2 class="mb-4">About FoodEx</h2>
          </div>
        </div>
        <div class="pb-md-5">
          <p>FoodEx is a marketplace for surplus food, designed to make sure delicious meals are tasted, not wasted. Restaurants post surplus meals on our app at the cost of 0Rs for pickup during designated times, often an hour before close. As 40% of the food produced in the country is wasted, our mission is to further the zero-food waste movement by rewarding businesses and people that take care of our planet.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php echo $this->include('/layout/footer') ?>
