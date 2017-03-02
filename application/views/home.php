<div id="container">
    <div class="container">
      <div class="row">
        <div id="content" class="col-sm-12">
          <!-- Slideshow Start-->
          <div class="slideshow single-slider owl-carousel">
           <?php foreach ($slider as $s) { ?>
               <div class="item"> 
                 <a href="<?php echo $s->slider_link; ?>">
                    <img class="img-responsive"src="<?php echo sprintf("assets/image/slider/%s", $s->silder_image) ?> " alt="<?php echo $s->slider_title ?>" />
                 </a> 
               </div>
           <?php } ?>
          </div>
          <!-- Slideshow End-->
          <!-- Featured Product Start-->
          <h3 class="subtitle">Our Products</h3>
          <div class="owl-carousel product_carousel">
            <?php foreach ($featured as $f) { ?>
            <div class="product-thumb clearfix">
              <div class="image"><a href="<?php  echo base_url('product/'.$f->manu_id.'/'.$f->category_url.'/'.$f->product_slug); ?>"><img src="<?php echo sprintf("assets/image/product/%s", $f->product_image_1) ?>" alt="<?php echo $f->product_title?>" title="<?php echo $f->product_title?>" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="<?php  echo base_url('product/'.$f->manu_id.'/'.$f->category_url.'/'.$f->product_slug); ?>" class="code-f"><?php echo $f->product_title?></a></h4>
              </div>
              <div class="button-group">
                <a href="<?php  echo base_url('product/'.$f->manu_id.'/'.$f->category_url.'/'.$f->product_slug); ?>" class="btn-primary" style="background-color:#0A098B;" ><span>See Product</span></a>
              </div>
            </div>
            <?php } ?>
          </div>
          <h3 class="subtitle">Our Client</h3>
          <div id="carousel" class="owl-carousel nxt">
            <?php foreach ($clients as $c) { ?>
            <div class="item text-center">            
              <div class="col-lg-12 thumb">
                  <a class="thumbnail" href="#">
                      <img class="img-responsive" src="<?php echo sprintf("assets/image/clients/%s", $c->client_image) ?> " alt="<?php echo $c->client_name ?>">
                  </a>
              </div>
            </div>
            <?php } ?>
          </div>
          <!-- Brand Logo Carousel End -->
        </div>
        <!--Middle Part End-->
      </div>
    </div>
</div>
 