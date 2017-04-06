<?php
foreach($product_cat->result() as $row){
  
  $product_title=$row->product_title;
  $product_descrption=$row->product_descrption;
  $product_specification=$row->product_specification;

  $product_brand=$row->manu_id;
  $product_code=$row->product_code;
  $product_availability=$row->product_availability;
  $product_category=$row->product_category;

  $product_image_1=$row->product_image_1;
  $product_image_2=$row->product_image_2;
  $product_image_3=$row->product_image_3;
  $product_image_4=$row->product_image_4;
}

foreach ($manufacturer as $manu) {
                  
}

?>


<div id="container">
    <div class="container">
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<?php echo base_url('home'); ?>" itemprop="url"><span itemprop="title"><i class="fa fa-home"></i></span></a></li>
        <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<?php echo base_url('product'); ?>" itemprop="url"><span itemprop="title">Product</span></a></li>
        <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="#" itemprop="url"><span itemprop="title"><?php echo $manu->manu_title ?></span></a></li>
        <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="#" itemprop="url"><span itemprop="title"><?php echo $product_title; ?></span></a></li>
      </ul>
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
          <div itemscope itemtype="http://schema.org/Product">
           
            <?=$this->session->flashdata('message');?>
            <div class="row product-info">
              <div class="col-sm-6">
                <div class="image">
                  <img class="img-responsive" itemprop="image" id="zoom_01" src="<?php echo base_url('assets/image/product').'/'.$product_image_1; ?>" title="<?php echo $product_title; ?>" alt="<?php echo base_url('assets/image/product').'/'.$product_image_1; ?>" /> 
                </div>
                <div class="center-block text-center"><span class="zoom-gallery"><i class="fa fa-search"></i> Click image for Gallery</span></div>
                <div class="image-additional" id="gallery_01">
                  <?php if($product_image_1 != '') {?>
                    <a class="thumbnail" href="#" data-zoom-image="assets/image/product/<?php echo $product_image_1; ?>" data-image="assets/image/product/<?php echo $product_image_1; ?>" title="<?php echo $product_title; ?>"> <img src="<?php echo base_url('assets/image/product').'/'.$product_image_1; ?>" title="<?php echo $product_title; ?>" alt = "<?php echo $product_title; ?>"/></a> 
                  <?php } else {?>

                  <?php } ?>

                  <?php if($product_image_2 != '') {?>
                    <a class="thumbnail" href="#" data-zoom-image="assets/image/product/<?php echo $product_image_2; ?>" data-image="assets/image/product/<?php echo $product_image_2; ?>" title="<?php echo $product_title; ?>"><img src="<?php echo base_url('assets/image/product').'/'.$product_image_2; ?>" title="<?php echo $product_title; ?>" alt="<?php echo $product_title; ?>" /></a> 
                  <?php } else {?>

                  <?php } ?>

                  <?php if($product_image_3 != '') {?>
                    <a class="thumbnail" href="#" data-zoom-image="assets/image/product/<?php echo $product_image_3; ?>" data-image="assets/image/product/<?php echo $product_image_3; ?>" title="<?php echo $product_title; ?>"><img src="<?php echo base_url('assets/image/product').'/'.$product_image_3; ?>" title="<?php echo $product_title; ?>" alt="<?php echo $product_title; ?>" /></a> 
                  <?php } else { ?>

                  <?php } ?>

                  <?php if($product_image_4 != '') {?>
                    <a class="thumbnail" href="#" data-zoom-image="assets/image/product/<?php echo $product_image_4; ?>" data-image="assets/image/product/<?php echo $product_image_4; ?>" title="<?php echo $product_title; ?>"><img src="<?php echo base_url('assets/image/product').'/'.$product_image_4; ?>" title="<?php echo $product_title; ?>" alt="<?php echo $product_title; ?>" /></a> 
                  <?php } else { ?>

                  <?php } ?>
                </div>
              </div>
              <div class="col-sm-6">
                <ul class="list-unstyled description">
                  <li><b>Brand:</b> <a href="#"><span itemprop="brand"><?php echo $manu->manu_title ?></span></a></li>
                  <li><b>Product Code:</b> <span itemprop="mpn"><?php echo $product_code; ?></span></li>
                  <li><b>Availability:</b> <span class="instock"><?php echo $product_availability; ?></span></li>
                </ul>
                <ul class="price-box">
                  <p>Manufacturer :</p>
                 
                  <img class="img-responsive" itemprop="image" id="zoom_01" src="<?php echo base_url('assets/image/manufacturer').'/'.$manu->manu_image; ?>" title="<?php echo $product_title; ?>" alt="<?php echo $product_title; ?>"/>
                </ul>
                <hr>
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style"> <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_google_plusone" g:plusone:size="medium"></a> <a class="addthis_button_pinterest_pinit" pi:pinit:layout="horizontal" pi:pinit:url="http://www.addthis.com/features/pinterest" pi:pinit:media="../../../../www.addthis.com/cms-content/images/features/pinterest-lg.png"></a> <a class="addthis_counter addthis_pill_style"></a> </div>
                <script type="text/javascript" src="../../../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-514863386b357649"></script>
                <!-- AddThis Button END -->
              </div>
            </div>
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
              <li><a href="#tab-specification" data-toggle="tab">Specification</a></li>
            </ul>
            <div class="tab-content">
              <div itemprop="description" id="tab-description" class="tab-pane active">
                <div>
                  <?php echo $product_descrption; ?>
                </div>
              </div>
              <div id="tab-specification" class="tab-pane">
                <div>
                  <?php echo $product_specification; ?>
                </div>
              </div>
            </div>
            <h3 class="subtitle">Related Products</h3>
            <div class="owl-carousel related_pro">
              <?php foreach ($related as $rpr) { ?>
              <div class="product-thumb">
                <div class="image"><a href="<?php  echo base_url('product/'.$rpr->manu_id.'/'.$rpr->category_url.'/'.$rpr->product_slug); ?>"><img src="<?php echo base_url('assets/image/product/'.$rpr->product_image_1); ?>" alt="<?php echo $rpr->product_title; ?>" title="<?php echo $rpr->product_title; ?>" class="img-responsive" /></a></div>
                <div class="caption">
                  <h4><a href="<?php  echo base_url('product/'.$rpr->manu_id.'/'.$rpr->category_url.'/'.$rpr->product_slug); ?>" style="font-size:15px; font-weight:bold; color:#FAB609; line-height:23px; margin-bottom:10px;"><?php echo $rpr->product_title; ?></a></h4>
                </div>
                <div class="button-group">
                  <a class="btn-primary" style="background-color:#0A098B;" href="<?php  echo base_url('product/'.$rpr->manu_id.'/'.$rpr->category_url.'/'.$rpr->product_slug); ?>"><span>Detail Product</span></a>
                </div>
              </div>
              <?php } ?>

            </div>
          </div>
        </div>
        <!--Middle Part End -->
        <!--Right Part Start -->
        <!-- <aside id="column-right" class="col-sm-3 hidden-xs">
          <div class="list-group">
            <h3 class="subtitle">Custom Content</h3>
            <p>This is a CMS block edited from admin. You can insert any content (HTML, Text, Images) Here. </p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
          </div>
        </aside> -->
        <!--Right Part End -->
      </div>
    </div>
</div>