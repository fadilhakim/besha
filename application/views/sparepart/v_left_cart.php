<div class="tab-container left clearfix">
  <!-- Tab nav -->
  <ul class="nav nav-tabs" role="tablist">
      <li class="active"><a href="#shipping" data-toggle="tab">Shipping &amp; Taxes</a></li>
      <li><a href="#discount" data-toggle="tab">Discount Code</a></li>
  </ul>
  <div class="tab-content">
      <div class="tab-pane fade in active" id="shipping">
      <?php $this->load->view("sparepart/form_shipping_address")?>
          
      </div><!-- End .tab-pane -->
      <div class="tab-pane fade" id="discount">
          <p class="ship-desc">Enter your discount coupon here:</p>
          <hr>
          <div class="ship-row clearfix">
              <span class="ship-label col-3">Discount Code<i>*</i></span>
              <div class="col-3-2x"><input type="text" class="form-control" placeholder="coupon here"></div>
          </div>
          <div class="ship-row">
              <a href="#" class="btn btn-custom-5">Activate</a>
          </div>
      </div><!-- End .tab-pane --> 
  </div><!-- End .tab-content  -->
</div><!-- End .tab-container -->