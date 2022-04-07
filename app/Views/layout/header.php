<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
				<img src="<?php echo base_url('assets/images/foodex-logo.jpg'); ?>" alt="<?php echo base_url('assets/images/logo.png'); ?>" style="height:100px; width:100px">
	      <a class="navbar-brand" href="<?php echo base_url(); ?>">FoodEx</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
				</button>
				
				<?php  $this->session = session(); ?>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="<?php echo base_url('home'); ?>" class="nav-link">Home</a></li>
						<li class="nav-item"><a href="<?php echo base_url('about'); ?>" class="nav-link">About</a></li>
						<?php if($this->session->isDonorLoggedIn) {?>
							<li class="nav-item"><a href="<?php echo base_url('donate'); ?>" class="nav-link">Donate</a></li>
						<?php } 
        		 else { ?>
							<li class="nav-item"><a href="<?php echo base_url('receive'); ?>" class="nav-link">Receive</a></li>
						<?php } ?>
						<li class="nav-item"><a href="<?php echo base_url('contact'); ?>" class="nav-link">Contact</a></li>
						<li class="nav-item"><a href="<?php echo base_url('faqs'); ?>" class="nav-link">FAQs</a></li>
						<?php if($this->session->isDonorLoggedIn || $this->session->isSeekerLoggedIn) {?>
							<li class="nav-item"><a href="<?php echo base_url('logout'); ?>" class="nav-link">LogOut</a></li>
						<?php } ?>
	        </ul>
				</div>
				<div class="username"><a href="<?php echo base_url('/user_profile'); ?>"><h6>Welcome! <?php echo $this->session->userName ?></h6></a></div>
	    </div>
	  </nav>
    <!-- END nav -->