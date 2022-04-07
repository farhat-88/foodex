<?php echo $this->include('/layout/head'); ?>
<section class="ftco-section ftco-no-pb ftco-no-pt">
  <div class="container">
    <div class="row bg-light">
      <div class="py-5 wrap-about pb-md-5 ftco-animate" style="width:100%;">
        <div class="heading-section-bold mb-4 mt-md-5" style="text-align:center">
          <div class="ml-md-0">
            <h2 class="mb-4">Register to Join the Movement</h2>
          </div>
        </div>
        <div class="pb-md-5" style="text-align:center">
          <p>Become a part of our People-Powered Movement to End Hunger.</p>
        </div>
        <div class="col-md-8">
          <?php echo isset($message) ? $message : '' ?>
          <?php echo form_open('/register_to_donate') ?>
          <div class="form-group">
            <?php echo form_label('First Name'); ?>
            <?php $d_fname = set_value('d_fname') == true ? set_value('d_fname') : '' ;?>
            <?php echo form_input('d_fname',$d_fname,['class'=>'form-control fname']); ?>
            <small class="text-danger error_fname"><?php echo isset($validation) ? $validation->getError('d_fname') : '' ?></small>
          </div>
          <div class="form-group">
            <?php echo form_label('Last Name'); ?>
            <?php $d_lname = set_value('d_lname') == true ? set_value('d_lname') : '' ;?>
            <?php echo form_input('d_lname',$d_lname,['class'=>'form-control lname']); ?>
            <small class="text-danger error_lname"><?php echo isset($validation) ? $validation->getError('d_lname') : '' ?></small>
          </div>
          <div class="form-group">
            <?php echo form_label('Contact Number'); ?>
            <?php $d_contact_num = set_value('d_contact_num') == true ? set_value('d_contact_num') : '' ;?>
            <?php echo form_input('d_contact_num',$d_contact_num,['class'=>'form-control contact_num']); ?>
            <small class="text-danger error_contact_num"><?php echo isset($validation) ? $validation->getError('d_contact_num') : '' ?></small>
          </div>
          <div class="form-group">
            <?php echo form_label('Address'); ?>
            <?php $d_address = set_value('d_address') == true ? set_value('d_address') : '' ;?>
            <?php echo form_input('d_address',$d_address,['class'=>'form-control address']); ?>
            <small class="text-danger error_address"><?php echo isset($validation) ? $validation->getError('d_address') : '' ?></small>
          </div>
          <div class="form-group">
            <?php echo form_label('Email Address'); ?>
            <?php $d_email = set_value('d_email') == true ? set_value('d_email') : '' ;?>
            <?php echo form_input('d_email',$d_email,['class'=>'form-control email'],'email'); ?>
            <small class="text-danger error_email"><?php echo isset($validation) ? $validation->getError('d_email') : '' ?></small>
          </div>
          <div class="form-group">
            <?php echo form_label('Password'); ?>
            <?php echo form_input('d_password','',['class'=>'form-control password'],'password'); ?>
            <small class="text-danger error_password"><?php echo isset($validation) ? $validation->getError('d_password') : '' ?></small>
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