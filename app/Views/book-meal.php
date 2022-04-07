<?php echo $this->include('/layout/head'); ?>
<section class="ftco-section ftco-no-pb ftco-no-pt">
  <div class="container">
    <div class="row bg-light">
      <div class="py-5 wrap-about pb-md-5 ftco-animate" style="width:100%;">
        <div class="heading-section-bold mb-4 mt-md-5" style="text-align:center">
          <div class="ml-md-0">
            <h2 class="mb-4"  style="color:#f0ac58">Your meal has been booked</h2>
          </div>
        </div>
        <div class="pb-md-5">
          <h5>Hi <?php echo $this->session->userName ?></h5>
          <p> We hope you enjoy your meal! Once you have a chance, we would love to hear your FoodEx experience to keep us constantly improving..</p>
        </div>
        <p class="d-flex justify-content-center align-items-center"> <a href="#" class="btn btn-primary">Write A Review</a> </p>
      </div>

      <div class="wrap-about pb-md-5 ftco-animate" style="width:100%;">
        <div class="heading-section-bold mb-4 mt-md-5">
          <div class="ml-md-0">
            <h5 class="mb-4" style="color:#f0ac58">Seeker Details</h5>
          </div>
        </div>
        <div>
          <?php 
             if($this->session->isSeekerLoggedIn)
             {?>
             <p><span style="color:#f0ac58">First Name:&emsp;&emsp;&emsp;&emsp;</span><?php echo $this->session->userInfo->s_fname ?></p>
              <p><span style="color:#f0ac58">Last Name:&emsp;&emsp;&emsp;&emsp;</span> <?php echo $this->session->userInfo->s_lname ?></p>
              <p><span style="color:#f0ac58">Contact Number:&emsp;</span> <?php echo $this->session->userInfo->s_contact_num ?></p>
              <p><span style="color:#f0ac58">Address:&emsp;&emsp;&emsp;&emsp;&emsp;</span> <?php echo $this->session->userInfo->s_address ?></p>
              <p><span style="color:#f0ac58">Email:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</span> <?php echo $this->session->userInfo->s_email ?></p>
             <?php } ?>
        </div>
      </div>
      <div class="wrap-about pb-md-5 ftco-animate" style="width:100%;">
        <div class="heading-section-bold mb-4 mt-md-5">
          <div class="ml-md-0">
            <h5 class="mb-4" style="color:#f0ac58">Meal Details</h5>
          </div>
        </div>
        <div>
             <p><span style="color:#f0ac58">Item Name:&emsp;&emsp;&emsp;&emsp;&emsp;</span><?php echo $mealsList->item_name ?></p>
              <p><span style="color:#f0ac58">Food Type:&emsp;&emsp;&emsp;&emsp;&emsp;</span><?php echo $foodTypesList->food_type ?></p>
              <p><span style="color:#f0ac58">Servings:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</span><?php echo $mealsList->servings ?></p>
              <p><span style="color:#f0ac58">Pickup Address:&emsp;&emsp;&emsp;</span><?php echo $mealsList->pickup_address ?></p>
              <p><span style="color:#f0ac58">Prepared Date:&emsp;&emsp;&emsp;</span><?php echo $mealsList->prepared_date ?></p>
              <p><span style="color:#f0ac58">Prepared Time:&emsp;&emsp;&emsp;</span><?php echo $mealsList->prepared_time ?></p>
              <p><span style="color:#f0ac58">Best Before:&emsp;&emsp;&emsp;&emsp;&nbsp;</span><?php echo $mealsList->food_expiry_expected ?></p>
              <p><span style="color:#f0ac58">Food Status:&emsp;&emsp;&emsp;&emsp;</span><?php echo "Waiting to be pickedup" ?></p>
        </div>
        <p> <a href="<?php echo base_url('/confirmation/'.$mealsList->item_id); ?>" class="btn btn-primary">Confirm</a> </p>
      </div>

    </div>
  </div>
</section>

<?php echo $this->include('/layout/footer'); ?>