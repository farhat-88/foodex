<?php echo $this->include('/layout/head'); ?>
<section class="ftco-section ftco-no-pb ftco-no-pt">
  <div class="container">
    <div class="row bg-light">
      <div class="py-5 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section-bold mb-4 mt-md-5" style="text-align:center">
          <div class="ml-md-0">
            <h2 class="mb-4">Thank you for helping, make prepared food more accessible to all.</h2>
          </div>
        </div>
        <div class="pb-md-5" style="text-align:center">
          <p>Food Donations will be passed to the most needy through the FoodEx app. Recipients will be able to collect meals from our partner restaurants and cafés, completely anonymously, with no stigma.</p>
        </div>
        <div class="col-md-8">
          <?php echo isset($message) ? $message : '' ?>
         
          <?php echo form_open('/donate/donate_meal') ?>
          <div class="form-group">
            <?php echo form_label('Item Name'); ?>
            <?php $item_name = set_value('item_name') == true ? set_value('item_name') : '' ;?>
            <?php echo form_input('item_name',$item_name,['class'=>'form-control item_name']); ?>
            <small class="text-danger error_item_name"><?php echo isset($validation) ? $validation->getError('item_name') : '' ?></small>
          </div>
          <div class="form-group">
            <?php echo form_label('Servings (No. of persons)'); ?>
            <?php $servings = set_value('servings') == true ? set_value('servings') : '' ;?>
            <?php echo form_input('servings',$servings,['class'=>'form-control servings']); ?>
            <small class="text-danger error_servings"><?php echo isset($validation) ? $validation->getError('servings') : '' ?></small>
          </div>
          <div class="form-group">
            <?php echo form_label('Pickup Address'); ?>
            <?php $pickup_address = set_value('pickup_address') == true ? set_value('pickup_address') : '' ;?>
            <?php echo form_input('pickup_address',$pickup_address,['class'=>'form-control pickup_address']); ?>
            <small class="text-danger error_pickup_address"><?php echo isset($validation) ? $validation->getError('pickup_address') : '' ?></small>
          </div>
          <div class="form-group">
            <?php echo form_label('Prepared date'); ?>
            <?php $prepared_date = set_value('prepared_date') == true ? set_value('prepared_date') : '' ;?>
            <input type="date" value="<?php echo $prepared_date ?>" class="form-control prepared_date" name="prepared_date" placeholder="Select Date">
            <small class="text-danger error_prepared_date"><?php echo isset($validation) ? $validation->getError('prepared_date') : '' ?></small>
          </div>
          <div class="form-group">
            <?php echo form_label('Prepared Time'); ?>
            <?php $prepared_time = set_value('prepared_time') == true ? set_value('prepared_time') : '' ;?>
            <input type="time" value="<?php echo $prepared_time ?>" class="form-control prepared_time" name="prepared_time" placeholder="Select Time">
            <small class="text-danger error_prepared_time"><?php echo isset($validation) ? $validation->getError('prepared_time') : '' ?></small>
          </div>
          <div class="form-group">
            <?php echo form_label('Best Before'); ?>
            <?php $food_expiry_expected = set_value('food_expiry_expected') == true ? set_value('food_expiry_expected') : '' ;?>
            <input type="date" value="<?php echo $food_expiry_expected ?>" class="form-control food_expiry_expected" name="food_expiry_expected" placeholder="Select Date">
            <small class="text-danger error_food_expiry_expected"><?php echo isset($validation) ? $validation->getError('food_expiry_expected') : '' ?></small>
          </div>
          <div class="form-group">
            <?php echo form_label('Food Type'); ?>
            <?php $food_type = set_value('food_type') == true ? set_value('food_type') : '' ;?>
            <?php if(!empty($foodTypesList)){ ?>
              <?php foreach ($foodTypesList as $key => $foodType){ ?>
              <?php $options[$foodType->type_id] = $foodType->food_type; ?>
              <?php } ?>
            <?php } ?>
            <?php echo form_dropdown('food_type',$options,$food_type,['class'=>'form-control type_id']); ?>
            <small class="text-danger error_type_id"><?php echo isset($validation) ? $validation->getError('type_id') : '' ?></small>
          </div>          
          <?php echo form_submit('donate','Donate',['class'=>'btn btn-primary']); ?>
        </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php echo $this->include('/layout/footer'); ?>
