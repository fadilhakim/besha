       <div class="wrapper-breadcrumbs clearfix">
            <div class="spacer30"></div><!--spacer-->
            <div class="container">
                <div class="breadcrumbs-main clearfix">
                    <h2>
                        <?php if(!empty($spareparts)) {?>
                        <?php

                            foreach ($spareparts as $baris)
                            $manu_id = $baris->manu_id;
                            $this->db->where('manu_id',$manu_id);
                            $r = $this->db->get('manufacturer_tbl');
                            if($r->num_rows()>0)
                            {
                                foreach ($r -> result_array() as $rows) {
                                $data1[] = $rows;
                                }
                            }
                            foreach($data1 as $dt)
                                echo $dt['manu_title'];
                            
                        ?>
                        <?php } else {
                            $id=$this->uri->segment(3);
                            $this->db->where('manu_id',$id);
                            $r = $this->db->get('manufacturer_tbl');
                            if($r->num_rows()>0)
                            {
                                foreach ($r -> result_array() as $rows) {
                                $data1[] = $rows;
                                }
                            }
                            foreach($data1 as $dt)
                                echo $dt['manu_title'];
                        } ?>
                    </h2>
                    <ul>
                        <li><a href="#">Spareparts</a></li>
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
                                        <img src="images/banner/img-1.png" alt=""/>
                                    </div>
                                    <div class="view-options clearfix"><!-- Start Grid Bar -->
                                        <div class="pull-left">
                                            <!-- VIEW -->
                                            <div class="view  pull-left">
                                                <span>View as:</span>
                                                <a href="<?php echo base_url('sparepart/manufacturer/').$dt['manu_id']; ?>" class="view-grid"><i class="fa fa-th"></i><span>Grid</span></a>
                                                <a href="<?php echo base_url('spareparts/manufacturer/').$dt['manu_id']; ?>" class="view-list active"><i class="fa fa-list"></i><span>List</span></a>
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

                                        <?php if(!empty($spareparts)) {?>
                                        <?php foreach ($spareparts as $row) { ?>
                                            <div class="item clearfix"><!-- Start Item -->
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 img-review">
                                                    <a href="<?php echo base_url('spareparts/detail/').$row->sparepart_slug.'/'.$row->sparepart_id; ?>">
                                                   <?php if ($row->sparepart_image != ''){ ?>
                                                        <img src="<?php echo base_url('assets/sp/images/products/').$row->sparepart_image ?>" alt=""/>
                                                    <?php } else if ($row->sparepart_image_2 != '' ) { ?>
                                                        <img src="<?php echo base_url('assets/sp/images/products/').$row->sparepart_image_2 ?>" alt=""/>
                                                    <?php } else if ($row->sparepart_image_3 != '' ) { ?>
                                                        <img src="<?php echo base_url('assets/sp/images/products/').$row->sparepart_image_3 ?>" alt=""/>
                                                    <?php } else if ($row->sparepart_image_4 != '' ) { ?>
                                                        <img src="<?php echo base_url('assets/sp/images/products/').$row->sparepart_image_4 ?>" alt=""/>
                                                    <?php }else {?>
                                                        <img src="<?php echo base_url('assets/sp/images/no-image.png'); ?>" class="img-responsive">
                                                    <?php } ?>    
                                                    </a>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 p-contant">
                                                    <h4 class="p-title"><?php echo $row->sparepart_name; ?></h4>
                                                    <div class="price">
                                                         <?php 
                                                            $price =  $row->sparepart_price;
                                                            $discount = $this->session->userdata('discount_price');
                                                            $total_discount = $price * $discount / 100;
                                                            $total_price = $price - $total_discount;
                                                            $user = $this->session->userdata('user_id');
                                                            if(!empty($user)) { 
                                                            
                                                            ?>
                                                                Rp. <?php echo number_format($total_price); ?>
                                                                
                                                            <?php  }else{?>
                                                                Rp.<?php echo  number_format($row->sparepart_price); ?>
                                                            <?php }
                                                        ?>
                                                    </div>
                                                    <p><?php echo substr($row->sparepart_desc,0 , 250); ?></p>
                                                    <a class="catalog-code" href="#">Catalog code : <?php echo $row->sparepart_code ?></a>
                                                    <div class="pro-action">
                                                        <div class="a-to-c">
                                                            <a href="<?php echo base_url('spareparts/detail/').$row->sparepart_slug.'/'.$row->sparepart_id; ?>">See Detail</a>
                                                            <span style="float:right; color:#999;">Stock : 
                                                            <?php
                                                                if ($row->stock == 0) {
                                                                    echo "Indent";
                                                                } else {
                                                                    echo $row->stock;
                                                                } 
                                                            ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- End Item -->
                                        <?php } } else {
                                            echo "<p style='text-align:center; margin:40px;'>Sorry Spareparts Not Found in this category</p>";
                                        } ?>
                                            
                                        </div>
                                        <div class="spacer30"></div><!--spacer-->
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="toolbar clearfix">
                                                    <div class="pager"><!--pagination -->
                                                        <ul class="pagination pull-left">
                                                           <?php echo $links; ?>
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