<div class="wrapper-breadcrumbs clearfix">
    <div class="spacer30"></div><!--spacer-->
    <div class="container">
        <div class="breadcrumbs-main clearfix">
            <h2>Chose Our Sparepart Manufacturers</h2>
        </div>
    </div>
    <div class="spacer15"></div><!--spacer-->
</div>

<div class="wrapper-main brandshop clearfix">
          <div class="spacer15"></div><!--spacer-->
          <div class="container">
              <div class="inner-block"><!------Main Inner-------->
                  <div class="row">
                        <div class="col-md-9 col-sm-8">
                          <div class="main-contant clearfix">
                              <div class="contant-wrapper">
                                    <div class="products-grid clearfix"><!-- Start Product List -->
                                        <div class="row">
                                            <div class="item-block clearfix">
                                              <div class="grid-control clearfix">
                                                    <?php foreach ($manufacturer as $m) { ?>
                                                    <div class="product-item">
                                                        <ul class="products-row">
                                                            <li class="image-block">
                                                                <a href="<?php echo base_url('spareparts/manufacturer/').$m->manu_id; ?>"><span><img src="<?php echo base_url('assets/image/manufacturer/').$m->manu_image ?>" alt=""/></span></a>
                                                                <a value="add to cart" class="add-to-cart" href="<?php echo base_url('spareparts/manufacturer/'.$m->manu_id); ?>"><?php echo $m->manu_title; ?></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <?php } ?>
                                                    
                                                </div>
                                                <div class="spacer30"></div>
                                            </div>
                                        </div>
                                    </div><!-- End Product List -->
                              </div>
                            </div>
                        </div>
                        <?php $this->load->view('sparepart/sidebar_sparepart'); ?>
                    </div>
                </div>
          </div>
          <div class="spacer30"></div><!--spacer-->
</div>