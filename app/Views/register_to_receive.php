<?php echo $this->include('/layout/head'); ?>
<section class="ftco-section ftco-no-pb ftco-no-pt">
  <div class="container">
    <div class="row bg-light">
      <div class="py-5 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section-bold mb-4 mt-md-5" style="text-align:center">
          <div class="ml-md-0">
            <h2 class="mb-4">Register To Receive Meals</h2>
          </div>
        </div>
        <div class="pb-md-5" style="text-align:center">
          <p>The goal here is to help anyone in the Karachi area who are looking for extra food resources to get through the COVID-19 crisis. Please do not hesitate to register. Your information will be strictly confidential.</p>
        </div>
        <div class="col-md-8">
          <?php echo isset($message) ? $message : '' ?>
          <?php echo form_open('/register_to_receive') ?>
          <div class="form-group">
            <?php echo form_label('First Name'); ?>
            <?php $s_fname = set_value('s_fname') == true ? set_value('s_fname') : '' ;?>
            <?php echo form_input('s_fname',$s_fname,['class'=>'form-control fname']); ?>
            <small class="text-danger error_fname"><?php echo isset($validation) ? $validation->getError('s_fname') : '' ?></small>
          </div>
          <div class="form-group">
            <?php echo form_label('Last Name'); ?>
            <?php $s_lname = set_value('s_lname') == true ? set_value('s_lname') : '' ;?>
            <?php echo form_input('s_lname',$s_lname,['class'=>'form-control lname']); ?>
            <small class="text-danger error_lname"><?php echo isset($validation) ? $validation->getError('s_lname') : '' ?></small>
          </div>
          <div class="form-group">
            <?php echo form_label('Contact Number'); ?>
            <?php $s_contact_num = set_value('s_contact_num') == true ? set_value('s_contact_num') : '' ;?>
            <?php echo form_input('s_contact_num',$s_contact_num,['class'=>'form-control contact_num']); ?>
            <small class="text-danger error_contact_num"><?php echo isset($validation) ? $validation->getError('s_contact_num') : '' ?></small>
          </div>
          <div class="form-group">
            <?php echo form_label('Address'); ?>
            <?php $s_address = set_value('s_address') == true ? set_value('s_address') : '' ;?>
            <?php echo form_input('s_address',$s_address,['class'=>'form-control address']); ?>
            <small class="text-danger error_address"><?php echo isset($validation) ? $validation->getError('s_address') : '' ?></small>
          </div>
          <div class="form-group">
            <?php echo form_label('Email Address'); ?>
            <?php $s_email = set_value('s_email') == true ? set_value('s_email') : '' ;?>
            <?php echo form_input('s_email',$s_email,['class'=>'form-control email'],'email'); ?>
            <small class="text-danger error_email"><?php echo isset($validation) ? $validation->getError('s_email') : '' ?></small>
          </div>
          <div class="form-group">
            <?php echo form_label('Password'); ?>
            <?php echo form_input('s_password','',['class'=>'form-control password'],'password'); ?>
            <small class="text-danger error_password"><?php echo isset($validation) ? $validation->getError('s_password') : '' ?></small>
          </div>
          <div class="form-group">
            <?php echo form_label('Confirm Password'); ?>
            <?php echo form_input('confirm_password','',['class'=>'form-control confirm_password'],'password'); ?>
            <small class="text-danger error_confirm_password"><?php echo isset($validation) ? $validation->getError('confirm_password') : '' ?></small>
          </div>
          <?php echo form_submit('register','Register',['class'=>'btn btn-primary']); ?>
        </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php echo $this->include('/layout/footer'); ?>