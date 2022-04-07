<?php echo $this->include('/layout/head') ?>
    <section id="home-section" class="hero">
			<div class="home-slider owl-carousel">
				<div class="slider-item" style="background-image: url('<?php echo base_url('assets/images/slider1.png'); ?>'); opacity:0.9">
					<div class="overlay"></div>
					<div class="container">
						<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
							<div class="col-md-12 ftco-animate text-center">
								<h1 class="mb-2">Great food should be tasted, not wasted.</h1>
								<h2 class="subheading mb-4">Enjoy delicious meals from hundreds of restaurants and cafes, free of cost with the FoodEx app.</h2>
							</div>
						</div>
					</div>
				</div>

				<div class="slider-item" style="background-image: url('<?php echo base_url('assets/images/slider2.jpg'); ?>'); opacity:0.9">
					<div class="overlay"></div>
					<div class="container">
						<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
							<div class="col-sm-12 ftco-animate text-center">
								<h1 class="mb-2">Doing the right things should be simple, fun and affordable.</h1>
								<h2 class="subheading mb-4">Small steps brings great change</h2>
							</div>
						</div>
					</div>
				</div>
   		</div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row no-gutters ftco-services">
					<div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
						<div class="media block-6 services mb-md-0 mb-4">
							<div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
								<span class="flaticon-shipped"></span>
							</div>
							<div class="media-body">
								<h3 class="heading">Pay less</h3>
								<span>Meals are always at least half the original price</span>
							</div>
						</div>      
					</div>
					<div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
						<div class="media block-6 services mb-md-0 mb-4">
							<div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
								<span class="flaticon-diet"></span>
							</div>
							<div class="media-body">
								<h3 class="heading">Save More</h3>
								<span>Save food wastage by picking up free meals</span>
							</div>
						</div>    
					</div>
					<div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
						<div class="media block-6 services mb-md-0 mb-4">
							<div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
								<span class="flaticon-award"></span>
							</div>
							<div class="media-body">
								<h3 class="heading">Purpose Behind</h3>
								<span>Contributes to a greener planet with less food waste!</span>
							</div>
						</div>      
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex">
								<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url('<?php echo base_url('assets/images/category.jpg'); ?>')">
									<div class="text text-center">
									<?php if($this->session->isDonorLoggedIn) { ?>
										<p><a href="<?php echo base_url('/donate/donate_meal'); ?>" class="btn btn-primary">Donate now</a></p>
									<?php } 
									 	else{  ?>
										 	<p><a href="<?php echo base_url('/receive'); ?>" class="btn btn-primary">Receive now</a></p>
										<?php } ?>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url('<?php echo base_url('assets/images/category-1.png'); ?>')">
								</div>
								<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url('<?php echo base_url('assets/images/category-2.jpg'); ?>')">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url('<?php echo base_url('assets/images/category-3.png'); ?>')">
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url('<?php echo base_url('assets/images/category-4.jpg'); ?>')">
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="ftco-section img" style="background-image:url('<?php echo base_url('assets/images/home-impact.jpg'); ?>')">
    	<div class="container">
				<div class="row">
					<div class="col-12 col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
						<span class="subheading">With Your Help<br class="d-block">We Have Created A Lot Of</span>
						<p class="display-2 font-weight-bold text-uppercase text-dgray">Impact</p>
					</div>
					<div class="col-12 col-md-6">
						<div class="content" id="counter">
							<p class="m-0"><span class="fs-18 font-weight-bold text-uppercase">Total Meals Served</span></p>
							<h3 class="mb-4"><span class="counter-value" data-count="700">0</span></h3>
							<p class="m-0"><span class="fs-18 font-weight-bold">Rations</span></p>
							<h3 class="mb-4"><span class="counter-value" data-count="150">0</span></h3>
							<p class="m-0"><span class="fs-18 font-weight-bold">Daigs</span></p>
							<h3 class="mb-4"><span class="counter-value" data-count="50">0</span></h3>
							<p class="m-0"><span class="fs-18 font-weight-bold">Kgs Food Saved</span></p>
							<h3 class="mb-4"><span class="counter-value" data-count="60">0</span></h3>
						</div>
					</div>
				</div>
    	</div>
    </section>

		<section class="ftco-section ftco-no-pb ftco-no-pt">
    	<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 mt-4 img img-2 d-flex justify-content-center align-items-center" style="background-image: url('<?php echo base_url('assets/images/home-how-it-works.jpg'); ?>')"></div>
					<div class="col-md-6 mt-4 heading-section ftco-animate deal-of-the-day ftco-animate">
						<h2 class="mb-4">How it works:</h2>
						<h3>Choose...</h3>
						<span class="price">from restaurants and cafes that have extra meals close to you.</span>
						<h3>Reserve...</h3>
						<span class="price"> and get for free, directly through the app</span>
						<h3>Pick Up...</h3>
						<span class="price">your meal at the specified location.</span>
					</div>
        </div>  
			</div>
    </section>
    <hr>

		<section class="ftco-section ftco-partner">
			<div class="container">
				<div class="row">
					<div class="col-sm ftco-animate">
						<a href="#" class="partner"><img src="<?php echo base_url('assets/images/partner-1.png'); ?>" class="img-fluid" alt="Colorlib Template"></a>
					</div>
					<div class="col-sm ftco-animate">
						<a href="#" class="partner"><img src="<?php echo base_url('assets/images/partner-2.png'); ?>" class="img-fluid" alt="Colorlib Template"></a>
					</div>
					<div class="col-sm ftco-animate">
						<a href="#" class="partner"><img src="<?php echo base_url('assets/images/partner-3.png'); ?>" class="img-fluid" alt="Colorlib Template"></a>
					</div>
					<div class="col-sm ftco-animate">
						<a href="#" class="partner"><img src="<?php echo base_url('assets/images/partner-4.png'); ?>" class="img-fluid" alt="Colorlib Template"></a>
					</div>
					<div class="col-sm ftco-animate">
						<a href="#" class="partner"><img src="<?php echo base_url('assets/images/partner-5.png'); ?>" class="img-fluid" alt="Colorlib Template"></a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm ftco-animate">
						<a href="#" class="partner"><img src="<?php echo base_url('assets/images/partner-6.png'); ?>" class="img-fluid" alt="Colorlib Template"></a>
					</div>
					<div class="col-sm ftco-animate">
						<a href="#" class="partner"><img src="<?php echo base_url('assets/images/partner-7.png'); ?>" class="img-fluid" alt="Colorlib Template"></a>
					</div>
					<div class="col-sm ftco-animate">
						<a href="#" class="partner"><img src="<?php echo base_url('assets/images/partner-8.png'); ?>" class="img-fluid" alt="Colorlib Template"></a>
					</div>
					<div class="col-sm ftco-animate">
						<a href="#" class="partner"><img src="<?php echo base_url('assets/images/partner-9.png'); ?>" class="img-fluid" alt="Colorlib Template"></a>
					</div>
					<div class="col-sm ftco-animate">
						<a href="#" class="partner"><img src="<?php echo base_url('assets/images/partner-10.png'); ?>" class="img-fluid" alt="Colorlib Template"></a>
					</div>
				</div>
			</div>
  	</section>
<?php echo $this->include('/layout/footer') ?>