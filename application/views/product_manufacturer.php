

<div id="container">
    <div class="container">
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li><a href="<?php  echo base_url('home') ?>"><i class="fa fa-home"></i></a></li>
        <li><a href="<?php  echo base_url('product') ?>">Products</a></li>
        <li></li>
        
      </ul>
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Left Part Start -->
        <aside id="column-left" class="col-sm-3 hidden-xs">
          <h3 class="subtitle">Categories</h3>
          <div class="box-category">
            <ul id="cat_accordion">
               <?php foreach ($category as $c) { ?>
                <li><a href="<?php  echo base_url('product/'.$c->category_url); ?>"><?php echo $c->category_title ?></a></li>
               <?php } ?>
            </ul>
          </div>

          <h3 class="subtitle">Manufacturer</h3>
          <div class="box-category">
            <ul id="cat_accordion">
              <?php foreach ($manu as $m) { ?>
                <li><a href="<?php echo base_url('product/manufacturer/'.$m->manu_id); ?>"><?php echo $m->manu_title ?></a></li>
               <?php } ?>
            </ul>
          </div>
        </aside>
        <!--Left Part End -->
        <!--Middle Part Start-->


        <div id="content" class="col-sm-9">
          <h1 class="title">Manufacturer : <?php foreach($manuname as $manu){ echo $manu->manu_title;  } ?></h1>
          <div class="product-filter">
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <div class="btn-group">
                  <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button>
                  <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="Grid"><i class="fa fa-th"></i></button>
                </div>
              </div>
              <div class="col-sm-2 text-right">
                <label class="control-label" for="input-sort">Sort By:</label>
              </div>
              <div class="col-md-3 col-sm-2 text-right">
                <select id="input-sort" class="form-control col-sm-3">
                  <option value="" selected="selected">Default</option>
                  <option value="">Name (A - Z)</option>
                  <option value="">Name (Z - A)</option>
                  <option value="">Price (Low &gt; High)</option>
                  <option value="">Price (High &gt; Low)</option>
                  <option value="">Rating (Highest)</option>
                  <option value="">Rating (Lowest)</option>
                  <option value="">Model (A - Z)</option>
                  <option value="">Model (Z - A)</option>
                </select>
              </div>
              <div class="col-sm-1 text-right">
                <label class="control-label" for="input-limit">Show:</label>
              </div>
              <div class="col-sm-2 text-right">
                <select id="input-limit" class="form-control">
                  <option value="" selected="selected">20</option>
                  <option value="">25</option>
                  <option value="">50</option>
                  <option value="">75</option>
                  <option value="">100</option>
                </select>
              </div>
            </div>
          </div>
          <br />
          <div class="row products-category">
           <?php if(!empty($product->result())) {?>
           <?php foreach($product->result() as $row){
              $product_title=$row->product_title;
              $product_descrption=$row->product_descrption;
              $product_specification=$row->product_specification;
              $product_preview=$row->product_text_preview;

              $product_brand=$row->manu_id;
              $product_code=$row->product_code;
              $product_availability=$row->product_availability;
              $product_category=$row->product_category;
               $product_slug=$row->product_slug;
               $category_url=$row->category_url;

              $product_image_1=$row->product_image_1;
              $product_image_2=$row->product_image_2;
              $product_image_3=$row->product_image_3;
              $product_image_4=$row->product_image_4;
       
            ?>
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image"><a href="<?php  echo base_url('product/'.$product_brand.'/'.$category_url.'/'.$product_slug); ?>"><img src="<?php echo base_url('assets/image/product').'/'.$product_image_1; ?>" alt="<?php echo $product_title; ?>" title="<?php echo $product_title; ?>" class="img-responsive" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="<?php  echo base_url('product/'.$product_brand.'/'.$category_url.'/'.$product_slug); ?>"><?php echo $product_title; ?></a></h4>
                    <p class="description"><?php echo $product_preview; ?></p>
                  </div>
                  <div class="button-group">
                    <a class="btn-primary" style="background-color:#0A098B;" href="<?php  echo base_url('product/'.$product_brand.'/'.$category_url.'/'.$product_slug); ?>"><span>See Product</span></button></a>
                  </div>
                </div>
              </div>
            </div>
            <?php } } else {?>
               <h2>Sorry Product Not Found in This Manufacturer</h2>
            <?php }  ?>

          </div>
          <div class="row">
            <div class="col-sm-6 text-left">
              <ul class="pagination">
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">&gt;</a></li>
                <li><a href="#">&gt;|</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!--Middle Part End -->
      </div>
    </div>
  </div>