<div class="wrapper-breadcrumbs clearfix">
    <div class="spacer30"></div><!--spacer-->
    <div class="container">
        <div class="breadcrumbs-main clearfix">
           <h2>
                <?php if($this->uri->segment(2) != 'category') { echo "All Manufacturers"; } 
                     else if(empty($spareparts)) {
                        $manu_name = $this->uri->segment(3);
                        $this->db->where('manu_id',$manu_name );
                        $r = $this->db->get('manufacturer_tbl');
                        if($r->num_rows()>0)
                        {
                            foreach ($r -> result_array() as $row) {
                            $data1[] = $row;
                            }
                        }
                        foreach($data1 as $topik)
                        echo $topik['manu_title']; 
                    } 

                    else if(!empty($spareparts)){
                    foreach ($spareparts as $key) 
                        $manu_name = $key->manu_id;
                        $this->db->where('manu_id',$manu_name );
                        $r = $this->db->get('manufacturer_tbl');
                        if($r->num_rows()>0)
                        {
                            foreach ($r -> result_array() as $row) {
                            $data1[] = $row;
                            }
                        }
                        foreach($data1 as $topik)
                        echo $topik['manu_title']; 
              
                    }
                else { 
                    echo $this->uri->segment(4); 
                } ?>
            </h2>
            <ul>
                <li><a href="#">Spareparts</a><span class="separator"> : </span></li>
                <li><a href="#">
                    <?php if($this->uri->segment(2) == 'category')    {echo $this->uri->segment(4);}
                        else {
                            echo "All Manufacturers";
                        }
                    ?>
                </a></li>
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
                                    <div class="view-options clearfix"><!-- Start Grid Bar -->
                                        <div class="pull-left">
                                            <!-- VIEW -->
                                            <div class="view  pull-left">
                                                <span>View as:</span>
                                                <?php if($this->uri->segment(2) != 'category') { ?>
                                                    <a href="<?php echo base_url('sparepart/all/1') ?>" class="view-grid"><i class="fa fa-th"></i><span>Grid</span></a>
                                                    <a href="<?php echo base_url('spareparts/all/1') ?>" class="view-list active"><i class="fa fa-list"></i><span>List</span></a>
                                                <?php } else {?>
                                                <a href="<?php echo base_url('sparepart/category/').$this->uri->segment(3).'/'.$this->uri->segment(4).'/'.'1' ?>" class="view-grid"><i class="fa fa-th"></i><span>Grid</span></a>
                                                <a href="<?php echo base_url('spareparts/category/').$this->uri->segment(3).'/'.$this->uri->segment(4).'/'.'1' ?>" class="view-list active"><i class="fa fa-list"></i><span>List</span></a>
                                                <?php } ?>
                                            </div>
                                            <!-- END VIEW --> 
                                        </div>
                                        <div class="pull-right">
                                            <!-- SHOW PAGE -->
                                            <div class="show-page filter-select pull-left">
                                                <!-- <label for="show-page">
                                                    Show:
                                                </label>
                                                <select id="basic" class="selectpicker form-control">
                                                    <option>12</option>
                                                    <option value="1">16</option>
                                                    <option value="2">20</option>
                                                </select> -->
                                            </div>
                                            <!-- END SHOW PAGE -->
                                            <!-- PAGING -->
                                           <!--  <ul class="paging-p  _1 pull-left">
                                                <li class="current"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li class="last"><a href="#"></a></li>
                                            </ul> -->
                                            <!-- END PAGING -->
                                        </div>
                                    </div><!-- End Grid Bar -->
                                    <div class="products-grid clearfix"><!-- Start Product List -->
                                        <div class="row">
                                            <div class="item-block clearfix">
                                              <div class="grid-control clearfix">
                                                    <?php if(!empty($spareparts)) {?>
                                                    <?php foreach ($spareparts as $sp) { ?>
                                                    <div class="product-item">
                                                        <ul class="products-row">
                                                            <li class="image-block">
                                                                <a href="<?php echo base_url('spareparts/detail/').$sp->sparepart_slug.'/'.$sp->sparepart_id; ?>">
                                                                <span>
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
                                                                </span>
                                                                </a>
                                                                <a class="add-to-cart" href="<?php echo base_url('spareparts/detail/').$sp->sparepart_slug.'/'.$sp->sparepart_id; ?>">See Product</a>
                                                            </li>
                                                            <li class="products-details">
                                                                <a href="#">
                                                                    <?php echo $sp->sparepart_name; ?>
                                                                </a>
                                                                <a class="catalog-code" href="#">Catalog code : <?php echo $sp->sparepart_code ?></a>
                                                                <span >
                                                                    <?php 
                                                                        $price =  $sp->sparepart_price;
                                                                        $discount = $this->session->userdata('discount_price');
                                                                        $total_discount = $price * $discount / 100;
                                                                        $total_price = $price - $total_discount;
                                                                        if(!empty($this->session->userdata('user_id'))) { 
                                                                        
                                                                        ?>
                                                                            Rp. <?php echo $total_price; ?>
                                                                            
                                                                        <?php  }else{?>
                                                                            Rp.<?php echo $sp->sparepart_price; ?>
                                                                        <?php }
                                                                    ?>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                <?php } } else {
                                                    echo "<p style='text-align:center; margin:40px;'>Sorry Spareparts Not Found in this category</p>";
                                                } ?>
                                            
                                                </div>
                                                <div class="spacer30"></div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="toolbar clearfix">
                                                            <div class="pager"><!--pagination -->
                                                                <ul class="pagination pull-left">
                                                                     <?php if($this->uri->segment(2) == 'category'){}else{echo $links;} ?>
                                                                </ul>
                                                            </div><!-- End pagination -->
                                                        </div>
                                                    </div>
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