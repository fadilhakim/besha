	<div class="wrapper-breadcrumbs clearfix">
        	<div class="spacer30"></div><!--spacer-->
       		<div class="container">
             	<div class="breadcrumbs-main clearfix">
                	<h2>All Manufacturers</h2>
                  	<ul>
                  		<li><a href="#">Spareparts</a><span class="separator">/ </span></li>
                        <li><a href="#">All Manufacturers</a></li>
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
                        	<div class="main-contant clearfix">
                            	<div class="contant-wrapper">
                                    <div class="image-category">
                                       
                                    </div>
                                    <div class="view-options clearfix"><!-- Start Grid Bar -->
                                        <div class="pull-left">
                                            <!-- VIEW -->
                                             <?php
                                                if(empty($keyword=$this->uri->segment(3))) {
                                                    $keyword    =   $this->input->post('keyword');
                                                }
                                                else {
                                                    $keyword=$this->uri->segment(3);
                                                }
                                            ?>
                                            <div class="view  pull-left">
                                                <span>View as:</span>
                                                <a href="<?php echo base_url('sparepart/search_grid/').$keyword ?>" class="view-grid"><i class="fa fa-th"></i><span>Grid</span></a>
                                                <a href="<?php echo base_url('sparepart/search/').$keyword?>" class="view-list active"><i class="fa fa-list"></i><span>List</span></a>
                                            </div>
                                            <!-- END VIEW -->	
                                        </div>
                                        <div class="pull-right">
                                            <!-- SHOW PAGE -->
                                            <!-- <div class="show-page filter-select pull-left">
                                                <label for="show-page">
                                                    Show:
                                                </label>
                                                <select id="basic" class="selectpicker form-control">
                                                    <option>12</option>
                                                    <option value="1">16</option>
                                                    <option value="2">20</option>
                                                </select>
                                            </div> -->
                                            <!-- END SHOW PAGE -->
                                            <!-- PAGING -->
                                            <!-- <ul class="paging-p  _1 pull-left">
                                                <li class="current"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li class="last"><a href="#"></a></li>
                                            </ul> -->
                                            <!-- END PAGING -->
                                        </div>
                                    </div><!-- End Grid Bar -->
                                    <div class="products-list clearfix"><!-- Start Product List -->
                                        <div class="list-control">
                                       
                                            <?php foreach ($results as $sp) { ?>
                                                <div class="item clearfix"><!-- Start Item -->
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 img-review">
                                                        <a href="<?php echo base_url('spareparts/detail/').$sp->sparepart_slug.'/'.$sp->sparepart_id; ?>">
                                                            <?php if ($sp->sparepart_image != ''){ ?>
                                                                <img src="<?php echo base_url('assets/sp/images/products/').$sp->sparepart_image ?>" alt=""/>
                                                            <?php } else if ($sp->sparepart_image_2 != '' ) { ?>
                                                                <img src="<?php echo base_url('assets/sp/images/products/').$sp->sparepart_image_2 ?>" alt=""/>
                                                            <?php } else if ($sp->sparepart_image_3 != '' ) { ?>
                                                                <img src="<?php echo base_url('assets/sp/images/products/').$sp->sparepart_image_3 ?>" alt=""/>
                                                            <?php } else if ($sp->sparepart_image_4 != '' ) { ?>
                                                                <img src="<?php echo base_url('assets/sp/images/products/').$sp->sparepart_image_4 ?>" alt=""/>
                                                            <?php }else {?>
                                                                <img src="<?php echo base_url('assets/sp/images/no-image.png'); ?>" class="img-responsive">
                                                            <?php } ?>    
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 p-contant">

                                                        <h4 class="p-title"><?php echo $sp->sparepart_name; ?></h4>
                                                        <div class="price">
                                                            <?php 
                                                                $price =  $sp->sparepart_price;
                                                                $discount = $this->session->userdata('discount_price');
                                                                $total_discount = $price * $discount / 100;
                                                                $total_price = $price - $total_discount;
                                                                $user_session_id = $this->session->userdata('user_id');
                                                                    if(!empty($user_session_id)) { 
                                                                
                                                                ?>
                                                                    Rp. <?php echo $total_price; ?>
                                                                    
                                                                <?php  }else{?>
                                                                    Rp.<?php echo $sp->sparepart_price; ?>
                                                                <?php }
                                                            ?>
                                                        </div>
                                                        <p><?php echo substr($sp->sparepart_desc,0 , 250); ?></p>
                                                        <a class="catalog-code" href="#">Catalog code : <?php echo $sp->sparepart_code ?></a>
                                                        <div class="pro-action">
                                                            <div class="a-to-c">
                                                                <a href="<?php echo base_url('spareparts/detail/').$sp->sparepart_slug.'/'.$sp->sparepart_id; ?>">See Detail</a>
                                                                <span style="float:right; color:#999;">Stock : 
                                                                <?php
                                                                    if ($sp->stock == 0) {
                                                                        echo "Indent";
                                                                    } else {
                                                                        echo $sp->stock;
                                                                    } 
                                                                ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- End Item -->
                                            <?php } ?>
                                            
                                        </div>
                                        <div class="spacer30"></div><!--spacer-->
                                        <div class="row">
                                        	<div class="col-sm-12">
                              					<div class="toolbar clearfix">
                                                    <div class="pager"><!--pagination -->
                                                        <ul class="pagination pull-left">
                                                            <?php /*echo $links;*/ ?>
                                                        </ul>
                                                    </div><!-- End pagination -->
                                                </div>
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