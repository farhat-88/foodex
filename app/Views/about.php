<?php echo $this->include('/layout/head') ?>
    <div class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('<?php echo base_url('assets/images/about-banner.jpg');?>');  opacity:0.9">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
            <div class="col-md-12 ftco-animate text-center">
              <h1 class="mb-0 bread">About us</h1>
              <h2 class="subheading mb-4">Our Vision Is A Place Without The Need For Food Banks.</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section bg-primary">
      <div class="container">
        <div class="row ">
          <div class="col-sm-12 col-sm-offset-1 text-center text-white pt-2">
            <h2 class="mb-4 ">Our Mission</h2>
            <p class="text-big text-white mb-5">
              Our mission is to make quality food affordable to all, while stopping perfectly good and<br> delicious meals from being wasted. We do that based on our 3 core values:
            </p>
          </div>
        </div>
        <div class="row ftco-services" >
          <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="media-body card" style="padding: 15% 10%;">
                <h3 class="heading">Help</h3>
                <p>… everyone to have access to quality, convenient meals</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="media-body card" style="padding: 12% 10%;">
                <h3 class="heading">Save</h3>
                <p>…our planet by reducing food waste, one of the main causes of climate change.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 text-center  align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="media-body card" style="padding: 15% 10%;">
                <h3 class="heading">Eat</h3>
                <p>…delicious meals for a great price and a great cause!.</p>
              </div>
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
		            <h2 class="mb-4">A movement bigger than us</h2>
	            </div>
	          </div>
	          <div class="pb-md-4">
	          	<p> Food waste is disrespectful on so many levels: to the hungry, to the people that spend their time cooking, to our natural resources... yet is a practice that is generally accepted and this is what makes fighting it so challenging.<br><br>
							After developing our concept in collaboration with Harvard T.H Chan School of Public Health, Food for All was born in Oct 2016 with the help of more than 650 incredible people all over the US that backed us in our Kickstarter campaign. With that, a major collective statement against food waste was made, which was featured by over 85 media channels in 8 different countries!<br><br></p>
							<p>Since the beginning we understood that in order to curb food waste we would need much more than a smart and innovative solution; we would need a whole movement that supports our cause. We are excited about what we have mobilized so far, and what moves us everyday is making sure that all of our supporters - restaurants, institutions and users - are recognized and empowered by providing them the right tools against food waste.</p>
              <?php if($this->session->isDonorLoggedIn) { ?>
										<p><a href="<?php echo base_url('/donate/donate_meal'); ?>" class="btn btn-primary">Donate now</a></p>
									<?php } 
									 	else{  ?>
										 	<p><a href="<?php echo base_url('/receive'); ?>" class="btn btn-primary">Receive now</a></p>
										<?php } ?>
						</div>
          </div>
          	<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url('<?php echo base_url('assets/images/aboutus.jpg'); ?>');background-size: 550px;margin-bottom:7%">
					</div>
				</div>
			</div>
		</section>
    
    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Wall of Fame</h2>
            <p>	Thank you for all our Kickstarter backers that made FoodEx a reality.</p>
          </div>
        </div>
        <div class="col-sm-12 col-sm-offset-1 text-center">
          <div class="names-on-wall text-center">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-2">
                <ul>
                  <li>Telepizza</li>
                  <li>Pizza Pie</li>
                  <li>Hanifia</li>
                  <li>BBQ Tonight</li>
                  <li>Hot Crispy Bites</li>
                  <li>Eats & Treat Fast Food</li>
                  <li>Naheed Foods</li>
                  <li>Soup Corner</li>
                  <li>Farhana Kitchen</li>
                  <li>Al tawakal Foods</li>
                  <li>Bites For Delight</li>
                  <li>Food Spot</li>
                  <li>Matka Biryani</li>
                  <li>Agha Ilas Juice</li>
                  <li>BBC Broast</li>
                </ul>
              </div>
              <div class="col-xs-12 col-sm-4 col-lg-2">
                <ul>
                  <li>Anmol Nan Shop</li>
                  <li>Uzmas Kitchene</li>
                  <li>Arabian Pizza</li>
                  <li>Welcome Restaurants</li>
                  <li>Silver Buns</li>
                  <li>Scoops Icecream</li>
                  <li>Mazhar Burger Points</li>
                  <li>Khaba Kitchen</li>
                  <li>Quarashi Burns</li>
                  <li>Arbians Grills</li>
                  <li>Fresh and Frozen Food</li>
                  <li>Clifton Grill</li>
                  <li>City Juice Bar</li>
                  <li>Karachi Foods</li>
                  <li>Food Chain Pizza</li>
                </ul>
              </div>
              <div class="col-xs-12 col-sm-4 col-lg-2">
                <ul>
                    <li>Food Mood Eleven</li>
                    <li>Pizza Mania</li>
                    <li>BM Karachi Resturant</li>
                    <li>Turkeye Pizza</li>
                    <li>Super In Style Cafe</li>
                    <li>Kitchen</li>
                    <li>Zara's Kitchen</li>
                    <li>The HotDog Station</li>
                    <li>Mamas GRill</li>
                    <li>Nanos Kitchen</li>
                    <li>Arabic King Shawarma</li>
                    <li>Second Cup Cooffee</li>
                  </ul>
              </div>
              <div class="col-xs-12 col-sm-4 col-lg-2">
                <ul>
                  <li>Burger Truck</li>
                  <li>Lahori Shah Farid Shawarma</li>
                  <li>A One Biryani</li>
                  <li>Makna Food</li>
                  <li>Arabic Studio</li>
                  <li>ZA Kitchen</li>
                  <li>Mitho Gol Gappey</li>
                  <li>Itefaq Nan Shop</li>
                  <li>Cafe Bar BQ</li>
                  <li>Shawafel</li>
                  <li>Tanduri Shawarma</li>
                  <li>Multani Dabba</li>
                  <li>Nashta Point</li>
                  <li>Hafiz Daal Chawal</li>
                  <li>Pizza Delight</li>
                </ul>
              </div>
              <div class="col-xs-12 col-sm-4 col-lg-2">
                <ul>
                    <li>Ghazi Student Biryani</li>
                    <li>Zaiqa Resturant</li>
                    <li>Thali Spot</li>
                    <li>BBQ Tonight</li>
                    <li>Hot Spicy Shawarma</li>
                    <li>Peshawari Icecream</li>
                    <li>Off Street</li>
                    <li>Juice BAr & Burger SHop</li>
                    <li>Farhana Kitchen</li>
                    <li>Al tawakal Foods</li>
                    <li>Bites For Delight</li>
                    <li>Food Spot</li>
                    <li>Pasha Fast Food</li>
                  </ul>
              </div>
              <div class="col-xs-12 col-sm-4 col-lg-2">
                  <ul>
                    <li>Pizza Hut</li>
                    <li>Pizza Pie</li>
                    <li>Hanifia</li>
                    <li>BBQ Tonight</li>
                    <li>Hot Crispy Bites</li>
                    <li>Eats & Treat Fast Food</li>
                    <li>Naheed Foods</li>
                    <li>Favourite Food Cornerr</li>
                    <li>Farhana Kitchen</li>
                    <li>Mr Code Town</li>
                    <li>Bites For Delight</li>
                    <li>ice-cream Spot</li>
                    <li>Matka Biryani</li>
                    <li>Four Star Resturant</li>
                    <li>Qari Juice Shop</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php echo $this->include('/layout/footer') ?>
