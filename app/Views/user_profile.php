<?php echo $this->include('/layout/head'); ?>

<section class="ftco-section ftco-no-pb ftco-no-pt">
  <div class="container">
    <div class="row bg-light">
      <div class="py-5 wrap-about pb-md-5 ftco-animate" style="width:100%;">
        <div class="heading-section-bold mb-4 mt-md-5" style="text-align:center">
          <div class="ml-md-0">
            <h2 class="mb-4">Update Profile</h2>
          </div>
        </div>
        <div class="col-md-8">
          <?php echo isset($message) ? $message : '' ?>

          <?php echo form_open('/user_profile') ?>
          <div class="form-group">
            <?php echo form_label('First Name'); ?>
            <?php $fname = set_value('fname') == true ? set_value('fname') : $f_name ;?>
            <?php echo form_input('fname',$fname,['class'=>'form-control fname']); ?>
            <small class="text-danger error_fname"><?php echo isset($validation) ? $validation->getError('fname') : '' ?></small>
          </div>
          <div class="form-group">
            <?php echo form_label('Last Name'); ?>
            <?php $lname = set_value('lname') == true ? set_value('lname') : $l_name ;?>
            <?php echo form_input('lname',$lname,['class'=>'form-control lname']); ?>
            <small class="text-danger error_lname"><?php echo isset($validation) ? $validation->getError('lname') : '' ?></small>
          </div>
          <div class="form-group">
            <?php echo form_label('Contact Number'); ?>
            <?php $contact_num = set_value('contact_num') == true ? set_value('contact_num') : $contact_number ;?>
            <?php echo form_input('contact_num',$contact_num,['class'=>'form-control contact_num']); ?>
            <small class="text-danger error_contact_num"><?php echo isset($validation) ? $validation->getError('contact_num') : '' ?></small>
          </div>
          <div class="form-group">
            <?php echo form_label('Address'); ?>
            <?php $address = set_value('address') == true ? set_value('address') : $postal_address ;?>
            <?php echo form_input('address',$address,['class'=>'form-control address']); ?>
            <small class="text-danger error_address"><?php echo isset($validation) ? $validation->getError('address') : '' ?></small>
          </div>
          <div class="form-group">
            <?php echo form_label('Email Address'); ?>
            <?php $email = set_value('email') == true ? set_value('email') : $email_address ;?>
            <?php echo form_input('email',$email,['class'=>'form-control email'],'email'); ?>
            <small class="text-danger error_email"><?php echo isset($validation) ? $validation->getError('email') : '' ?></small>
          </div>
          <?php echo form_submit('update','Update',['class'=>'btn btn-primary']); ?>
          <!-- <div class="text-right"><a href="/">Already have an account</a></div> -->
        </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php echo $this->include('/layout/footer'); ?>