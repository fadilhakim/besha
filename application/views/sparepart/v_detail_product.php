 <?php foreach ($sparepart as $row)?>
<div class="wrapper-breadcrumbs clearfix">
    <div class="spacer30"></div><!--spacer-->
    <div class="container">
        <div class="breadcrumbs-main clearfix">
            <h2><?php echo $row->sparepart_name; ?></h2>
            <ul>
                <li><a href="#">Category sparepart</a><span class="separator">:</span></li>
                <li>
                     <?php 
                        $spc = $row->sparepart_category;
                        $this->db->where('category_slug',$spc);
                        $r = $this->db->get('sparepart_category');
                        if($r->num_rows()>0)
                        {
                            foreach ($r -> result_array() as $rowspc) {
                            $datasparepart[] = $rowspc;
                            }
                        }
                        foreach($datasparepart as $dts)?>
                
                    <?php echo $dts['category_title'] ; ?>

                </li>
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
                                                    <div class="swiper-container gallery-top top-img">
                                                        <div class="swiper-wrapper">
                                                            <?php if(!empty($row->sparepart_image)){?>
                                                                <div data-swiper-autoplay="5000" class="swiper-slide"><img  src="<?php echo base_url('assets/sp/images/products/').$row->sparepart_image; ?>" alt="" /></div>
                                                            <?php } ?>
                                                            <?php if(!empty($row->sparepart_image_2)){?>
                                                                <div data-swiper-autoplay="5000" class="swiper-slide"><img  src="<?php echo base_url('assets/sp/images/products/').$row->sparepart_image_2; ?>" alt="" /></div>
                                                            <?php } ?>
                                                            <?php if(!empty($row->sparepart_image_3)){?>
                                                                <div data-swiper-autoplay="5000" class="swiper-slide"><img  src="<?php echo base_url('assets/sp/images/products/').$row->sparepart_image_3; ?>" alt="" /></div>
                                                            <?php } ?>
                                                            <?php if(!empty($row->sparepart_image_4)){?>
                                                                <div data-swiper-autoplay="5000" class="swiper-slide"><img  src="<?php echo base_url('assets/sp/images/products/').$row->sparepart_image_4; ?>" alt="" /></div>
                                                            <?php } ?>
                                                        </div>
                                         
                                                        <div class="swiper-button-next s-nav fa fa-angle-right"></div>
                                                        <div class="swiper-button-prev s-nav fa fa-angle-left"></div>
                                                    </div>
                                                    <div style="overflow:hidden;" class="product-thumbs clearfix gallery-thumbs">
                                                        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                                        <?php if(!empty($row->sparepart_image)){?>
                                                            <div data-swiper-autoplay="5000" data-index="1" class="swiper-slide thumb-item"><img src="<?php echo base_url('assets/sp/images/products/').$row->sparepart_image; ?>" alt="" /></div>
                                                        <?php } ?>
                                                        <?php if(!empty($row->sparepart_image_2)){?>
                                                            <div data-swiper-autoplay="5000" data-index="2" class="swiper-slide thumb-item"><img src="<?php echo base_url('assets/sp/images/products/').$row->sparepart_image_2; ?>" alt="" /></div>
                                                        <?php } ?>

                                                        <?php if(!empty($row->sparepart_image_3)){?>
                                                            <div data-swiper-autoplay="5000" data-index="3" class="swiper-slide thumb-item"><img src="<?php echo base_url('assets/sp/images/products/').$row->sparepart_image_3; ?>" alt="" /></div>
                                                        <?php } ?>
                                                        <?php if(!empty($row->sparepart_image_4)){?>
                                                            <div data-swiper-autoplay="5000" data-index="4" class="swiper-slide thumb-item"><img src="<?php echo base_url('assets/sp/images/products/').$row->sparepart_image_4; ?>" alt="" /></div>
                                                        <?php } ?>
                                                        </div>
                    
                                                    </div>
                                                    <style type="text/css">
                                                    .gallery-top {
                                                        height: 80%;
                                                        width: 100%;
                                                    }
                                                    .gallery-top img { 
                                                        display: block;
                                                        margin: auto;
                                                    }
                                                    .gallery-thumbs {
                                                        height: 20%;
                                                        box-sizing: border-box;
                                                        padding: 10px 0;
                                                    }
                                                    .gallery-thumbs .swiper-slide {
                                                        width: 25%;
                                                        height: 100%;
                
                                                    }
                                                    .gallery-thumbs .swiper-slide-active {
                                                        opacity: 1;
                                                    }

                                                    .gallery-thumbs .swiper-wrapper {

                                                    margin-left: -37%; //according to the number of slides

                                                    }
                                                    </style>

                                                </div>
                                            </div><!-- End Product Images -->
                                            <div class="product-info">
                                               <!--  <h4><?php echo $row->sparepart_name; ?></h4> -->
                                                <div class="price-box">
                                                    <?php 
                                                        $price =  $row->sparepart_price;
                                                        $discount = $this->session->userdata('discount_price');
                                                        $total_discount = $price * $discount / 100;
                                                        $total_price = $price - $total_discount;
                                                        if(!empty($this->session->userdata('user_id'))) { 
                                                        
                                                    ?>
                                                        <p class="new-price"><span style="font-size:26px;">Rp. <?php echo $total_price; ?> </span></p>
                                                        <p class="old-price"><span>Rp. <?php echo $row->sparepart_price; ?></span></p>
                                                        
                                                    <?php  }else{?>
                                                        <p class="new-price"><span style="font-size:26px;">Rp.<?php echo $row->sparepart_price; ?></span></p>
                                                    <?php } ?>
   
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
                                                    <p><?php echo $row->sparepart_text_preview; ?> </p>
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
                                                  <div class="col-lg-6">
                                                      <?php $this->load->library('cart');
                                                        if($this->cart->contents()){ 
                                                            foreach($this->cart->contents() as $items)
                                                            if($row->sparepart_name == $items['name']) { ?>
                                                                
                                                                <a href="<?php echo base_url('cart/show_cart'); ?>"  class="btn btn-success" style="margin-top:30px;">This sparepart <br> already in your cart!</a>    

                                                           <?php } 
                                                        }
                                                       ?>
                                                        
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
                                                            <?php if(!empty($this->session->userdata('user_id'))) { ?>
                                                                    <input type="hidden" name="sparepart_price" value="<?php echo $total_price ?>">
                                                            <?php }else { ?>
                                                                    <input type="hidden" name="sparepart_price" value="<?php echo $row->sparepart_price ?>">
                                                            <?php } ?> 
                                                            <input type="hidden" name="sparepart_code" value="<?php echo $row->sparepart_code ?>">
                                                            <input type="hidden" name="sparepart_name" value="<?php echo $row->sparepart_name ?>">
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
                                                                <span>Rp. <?php echo $related['sparepart_price']; ?></span>
                                                            </li>
                                                        </ul>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                            	</div>
                            </div>
                        </div>
                       <?php $this->load->view('sparepart/sidebar_sparepart'); ?>
                    </div>
                </div>
            </div>
            <div class="spacer30"></div>
</div>