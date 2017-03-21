 <?php foreach ($sparepart as $row)?>
<div class="wrapper-breadcrumbs clearfix">
    <div class="spacer30"></div><!--spacer-->
    <div class="container">
        <div class="breadcrumbs-main clearfix">
            <h2><?php echo $row->sparepart_name; ?></h2>
            <ul>
                <li><a href="#">Spareparts</a><span class="separator">/ </span></li>
                <li>
                     <?php 
                        $spc = $row->sparepart_category;
                        $this->db->where('category_id',$spc);
                        $r = $this->db->get('sparepart_category');
                        if($r->num_rows()>0)
                        {
                            foreach ($r -> result_array() as $rowspc) {
                            $datasparepart[] = $rowspc;
                            }
                        }
                        foreach($datasparepart as $dts)?>
                <strong>
                    <?php echo $dts['category_title'] ; ?>

                </strong></li>
            </ul>
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
                            <div class="main-contant xs-spacer20 clearfix">
                                <div class="contant-wrapper">
                                    <div class="details-view"><!-- Start Product Details -->
                                        <div class="clearfix">
                                            <div class="product-img"><!-- Product Images -->
                                                <div id="info-img">
                                                    <!-- <span class="pro offer">30% off</span> -->
                                                    <div class="swiper-container top-img">
                                                        <div class="swiper-wrapper"><!-- Images Slider -->
                                                            <div class="swiper-slide"><img data-zoom-image="<?php echo base_url('assets/sp/images/products/').$row->sparepart_image; ?>" src="<?php echo base_url('assets/sp/images/products/').$row->sparepart_image; ?>" alt="" /></div>
                                                        </div>
                                                        <!-- Add Arrows -->
                                                        <div class="swiper-button-next s-nav fa fa-angle-right"></div>
                                                        <div class="swiper-button-prev s-nav fa fa-angle-left"></div>
                                                    </div>
                                                    <div class="product-thumbs clearfix"><!-- Thumb Images -->
                                                        <div data-index="0" class="thumb-item active"><img src="<?php echo base_url('assets/images/Lin-Tech-Vapour-Pressure.png ') ?>" alt="" /></div>
                                                        <div data-index="1" class="thumb-item"><img src="<?php echo base_url('assets/images/Lin-Tech-Vapour-Pressure.png ') ?>" alt="" /></div>
                                                        <div data-index="2" class="thumb-item"><img src="<?php echo base_url('assets/images/Lin-Tech-Vapour-Pressure.png ') ?>" alt="" /></div>
                                                        <div data-index="3" class="thumb-item"><img src="<?php echo base_url('assets/images/Lin-Tech-Vapour-Pressure.png ') ?>" alt="" /></div>
                                                    </div>
                                                </div>
                                            </div><!-- End Product Images -->
                                            <div class="product-info">
                                               <!--  <h4><?php echo $row->sparepart_name; ?></h4> -->
                                                <div class="price-box">
                                                    <p class="new-price"><span style="font-size:26px;">Rp. <?php echo  number_format($row->sparepart_price); ?></span></p>
                                                   <!--  <p class="old-price"><span>Rp. 340.00</span></p> -->
                                                </div>
                                                <span class="product_stock">Stock :  
                                                <?php
                                                    if ($row->stock == 0) {
                                                        echo "Indent";
                                                    } else {
                                                        echo $row->stock;
                                                    } 
                                                ?>
                                                </span>
                                                <div class="short-description">
                                                    <?php $row->sparepart_desc ?>
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <?php 
                                                        $manu_id = $row->manu_id;
                                                        $this->db->where('manu_id',$manu_id);
                                                        $r = $this->db->get('manufacturer_tbl');
                                                        if($r->num_rows()>0)
                                                        {
                                                            foreach ($r -> result_array() as $rows) {
                                                            $data1[] = $rows;
                                                            }
                                                        }
                                                        foreach($data1 as $manu)?>
                                                    <img src="<?php echo base_url('assets/image/manufacturer/').$manu['manu_image'] ?>">
                                                  </div>
                                                </div>
                                                <div class="row product-item">
                                                    <?php echo form_open('cart/add_cart_item'); ?>
                                                    <div class="col-sm-4 xs-spacer20">
                                                        <div class="qty_wrap">
                                                            <label for="prod_qty">Qty:</label><input type="number" min="1" name="quantity" id="prod_qty" class="spinc" value="1" />
                                                        </div>
                                                    </div>
                                                    <div class="cart-btn col-sm-4 col-xs-6">
                                                            <input type="hidden" name="sparepart_id" value="<?php echo $row->sparepart_id ?>">
                                                            <input type="hidden" name="sparepart_price" value="<?php echo $row->sparepart_price ?>">
                                                            <input type="hidden" name="sparepart_code" value="<?php echo $row->sparepart_code ?>">
                                                            <input type="hidden" name="sparepart_name" value="<?php echo $row->sparepart_slug ?>">
                                                            <input type="hidden" name="sparepart_image" value="<?php echo $row->sparepart_image ?>">
                                                            <input type="hidden" name="sparepart_manufacturer" value="<?php echo $manu['manu_title'] ?>">
                                                            <input type="submit" class="btn" value="Add To List">
                                                        <?php echo form_close(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Product Details -->
                                    <div class="spacer30"></div><!--spacer-->
                                    <div class="tab-panel clearfix"><!-- Tab -->
                                        <!-- Tabs Nav -->
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
                                            <!-- <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Comments</a></li>
                                            <li role="presentation"><a href="#tags" aria-controls="tags" role="tab" data-toggle="tab">Tags</a></li> -->
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div id="description" class="tab-pane active fade in" role="tabpanel">
                                                <div>
                                                    <?php echo $row->sparepart_desc; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="spacer30"></div><!--spacer-->
                                    <div class="upsell clearfix">
                                        <h4 class="heading">Related Products</h4>
                                        <div class="owl-carousel upsell-products">
                                            <?php 
                                                $sparepart_category = $row->sparepart_category;
                                                $this->db->where('sparepart_category',$sparepart_category);
                                                $this->db->order_by('rand()');
                                                $this->db->limit(12);
                                                $rs = $this->db->get('sparepart_tbl');
                                                if($rs->num_rows()>0)
                                                {
                                                    foreach ($rs -> result_array() as $rowd) {
                                                    $data2[] = $rowd;
                                                    }
                                                }
                                                foreach($data2 as $related ) {?>
                                            <div class="product-item">
                                                        <ul class="products-row">
                                                            <li class="image-block">
                                                                <a href="#"><span><img src="<?php echo base_url('assets/sp/images/products/').$related['sparepart_image'] ?>" alt=""/></span></a>
                                                                <a class="add-to-cart" href="<?php echo base_url('spareparts/detail/').$related['sparepart_slug'].'/'.$related['sparepart_id']; ?>">See Product</a>
                                                            </li>
                                                            <li class="products-details">
                                                                <a href="#">
                                                                    <?php echo $related['sparepart_name']; ?>
                                                                </a>
                                                                <span>Rp. <?php echo  number_format($related['sparepart_price']); ?></span>
                                                            </li>
                                                        </ul>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div class="col-md-3 col-sm-4">
                          <div class="side-bar clearfix"><!--Side Bar-->
                                <div class="aside categories"><!--Side Categories-->
                                   <h4 class="heading">Manufacturers</h4>
                                     <ul class="categories-main">
                                        <li>
                                            <a role="button"  href="<?php echo base_url('spareparts/all'); ?>">All Manufacturers</a>
                                        </li>
                                        <?php foreach ($manufacturer as $m) { ?>
                                        <li>
                                            <a role="button" data-toggle="collapse" href="<?php echo base_url('product/manufacturer/'.$m->manu_id); ?>" aria-expanded="false" aria-controls="link1"><?php echo $m->manu_title; ?><i class="pull-right fa fa-plus"></i></a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div><!--End Side Categories-->
                            </div><!--End Side Bar-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer30"></div>
</div>