<?php echo $this->include('/layout/head'); ?>
<section class="ftco-section ftco-no-pb ftco-no-pt">
  <div class="container">
    <div class="row bg-light">
      <div class="py-5 wrap-about pb-md-5 ftco-animate" style="width:100%;">
        <div class="heading-section-bold mb-4 mt-md-5" style="text-align:center">
          <div class="ml-md-0">
            <h2 class="mb-4"  style="color:#f0ac58">Booking has been confirmed.</h2>
          </div>
        </div>
        <div class="pb-md-5">
          <h5>Hi <?php echo $this->session->userName ?></h5>
          <p>Your order is in queue for pickup. You must collect your order within one hour from your booking time or notify us if whatsoever. Otherwise your order will be cancelled.</p>
        </div>
        <p class="d-inline pr-3 "> <a href="<?php echo base_url('/confirmation/delivery/'.$item_id); ?>" class="btn btn-primary">Mark as delivered</a> </p>
        <p class="d-inline"> <a href="<?php echo base_url('/confirmation/cancel/'.$item_id); ?>" class="btn btn-primary">Mark as cancelled</a> </p>
      </div>

     

    </div>
  </div>
</section>

<?php echo $this->include('/layout/footer'); ?>