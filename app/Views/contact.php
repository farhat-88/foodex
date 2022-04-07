<?php echo $this->include('/layout/head') ?>

<section class="ftco-section ftco-no-pb ftco-no-pt">
<div class="container">
    <div class="row bg-light">
      <div class="py-5 wrap-about pb-md-5" style="width:100%;">
        <div class="heading-section-bold mb-4 mt-md-5" style="text-align:center">
          <div class="ml-md-0">
            <h2 class="mb-4">DON’T SEE US IN YOUR CITY YET?</h2>
          </div>
        </div>
        <div class="pb-md-5" style="text-align:center">
          <p>Sign up for early access and be the first to be notified when we arrive close to you!.</p>
        </div>
        <div class="col-md-8">
          <?php echo isset($message) ? $message : '' ?>
          <?php echo form_open('/contact') ?>
          <div class="form-group">
            <?php echo form_label('Mail to'); ?>
            <?php $mailTo = set_value('mailTo') == true ? set_value('mailTo') : '' ;?>
            <?php echo form_input('mailTo',$mailTo,['class'=>'form-control mailTo']); ?>
            <small class="text-danger error_mailTo"><?php echo isset($validation) ? $validation->getError('mailTo') : '' ?></small>
          </div>
          <div class="form-group">
            <?php echo form_label('Subject'); ?>
            <?php $subject = set_value('subject') == true ? set_value('subject') : '' ;?>
            <?php echo form_input('subject',$subject,['class'=>'form-control subject']); ?>
            <small class="text-danger error_subject"><?php echo isset($validation) ? $validation->getError('subject') : '' ?></small>
          </div>
          <div class="form-group">
            <?php echo form_label('Message'); ?>
            <?php $message = set_value('message') == true ? set_value('message') : '' ;?>
            <?php echo form_input('message',$message,['class'=>'form-control message']); ?>
            <small class="text-danger error_message"><?php echo isset($validation) ? $validation->getError('message') : '' ?></small>
          </div>
          <?php echo form_submit('send','Send',['class'=>'btn btn-primary']); ?>
        </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php echo $this->include('/layout/footer') ?>




















