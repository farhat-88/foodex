<?php echo $this->include('/layout/head') ?>
<?php if($this->session->isDonorLoggedIn) { ?>
  <p class="text-right container"> <a href="<?php echo base_url('/donate/donate_meal'); ?>" class="btn btn-primary">Add more meals</a> </p>
<?php } ?>
<table class="table table-striped" style="overflow:hidden"> 
  
  <thead>
    <tr>
      <th scope="col">Meal Name</th>
      <th scope="col">Meal Type</th>
      <th scope="col">Servings</th>
      <th scope="col">Pickup Address</th>
      <th scope="col">Prepared Date</th>
      <th scope="col">Prepared Time</th>
      <th scope="col">Best Before</th>
      <th scope="col">Food Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
   
    <?php echo isset($message) ? $message : '' ?>
  
    <?php if($mealsList) ?>
    <?php foreach ($mealsList as $mealList){ ?>
    <tr>
      <td><?php echo $mealList->item_name ?></td>
      <td><?php echo $mealList->food_type ?></td>
      <td><?php echo $mealList->servings ?></td>
      <td><?php echo $mealList->pickup_address ?></td>
      <td><?php echo $mealList->prepared_date ?></td>
      <td><?php echo $mealList->prepared_time ?></td>
      <td><?php echo $mealList->food_expiry_expected ?></td>
      <td><?php if($mealList->food_status == 0) echo "Available"; else if ($mealList->food_status == 1) echo "Booked"; else echo "Delivered" ?></td>
      <td>
        <?php if($this->session->isDonorLoggedIn && $mealList->food_status == 0){?>
          <a href ="<?php echo base_url('/receive/update/'. $mealList->item_id) ?>" ><i class="fas fa-edit"></i></a>
          <a href="<?php echo base_url('/receive/'.$mealList->item_id) ?>" ><i class="fas fa-trash-alt"></i></a>
        <?php } 
          elseif($this->session->isDonorLoggedIn && $mealList->food_status == 1){ ?>
            <a href="<?php echo base_url('/confirmation/status/'.$mealList->item_id); ?>" class="btn btn-primary btn-sm">Edit Status</a>
          <?php } ?>
          <?php if($this->session->isSeekerLoggedIn && $mealList->food_status == 0){?>
            <a href="<?php echo base_url('/receive/book-meal/'.$mealList->item_id); ?>" class="btn btn-primary btn-sm">Book Meal</a>
          <?php } ?>
         
        
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
 
  <div class="mb-4 d-flex justify-content-center align-items-center">
    <?php $pager->links(); ?></div>



<?php echo $this->include('/layout/footer') ?>