<?php
	/*
		id_order
		id_user
		grand_total
		status
		create_date
		last_update
		ip_address
		user_agent
	
	*/

?>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">  
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-title"> <span class="pull-left"> <strong>#<?=$detail_order["id_order"]?></strong></span>
      
      <span class="pull-right"><h3 class="label label-primary"> status : <?=$detail_order["status"]?></h3></span></h4>
                    <span class="clearfix"><br></span>
                    <div class="row">
                    	<div class="col-lg-12">
                            <div class="card-box">
                               <?=$this->session->flashdata("message");?>
      
                                <div class="table-responsive">
                                  <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <td class="text-center">Image</td>
                                        <td class="text-left">Product Name</td>
                                        <td class="text-left">Product Code</td>
                                        <td class="text-left">Quantity</td>
                                        <td class="text-right">Unit Price</td>
                                        <td class="text-right">Sub Total</td>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php
									  $this->load->helper("check_data");
									  
                                      foreach($detail_list_order as $row)
                                      {
                                          
                                          $product = $this->model_sparepart->get_sparepart_detail($row["sparepart_id"]);
                                          $url_product = base_url("product/$product[sparepart_id]/$product[sparepart_category]/$product[sparepart_slug]");
										  
										  $img_sparepart = check_image_sparepart($product["sparepart_id"]);
                                      ?>
                                      <tr>
                                      
                                        <td class="text-center"><a href="<?=$url_product?>" target="_blank"><img height="100" width="80"  src="<?=$img_sparepart?>" alt="<?=$product["sparepart_name"]?>" title="<?=$product["sparepart_name"]?>" class="img-thumbnail" /></a>
                                       
                                        </td>
                                        <td class="text-left"><a href="<?=$url_product?>" target="_blank"> <?=$product["sparepart_name"]?> </a><br />
                                         </td>
                                        <td class="text-left"><?=$product["sparepart_code"]?></td>
                                        <td class="text-left"><div class="input-group btn-block quantity">
                                           <?=$row["qty"]?></div>
                                        <td class="text-right">Rp. <?=number_format($product["sparepart_price"])?></td>
                                        <td class="text-right">Rp. <?=number_format($row["sub_total"])?></td>
                                      </tr>
                                      <?php
                                      }
                                      ?>
                                    </tbody>
                                  </table>
                                </div>
                       
                             
                              <div class="row">
                                <div class="col-sm-6">
                                  
                                </div>
                        
                                <div class="col-sm-6">
                                  <table class="table table-bordered">
                                    <tr>
                                      <td class="text-right"><strong>Sub-Total:</strong></td>
                                      <td class="text-right"><h4>Rp. <?=number_format($detail_order["subtotal"])?> </h4></td>
                                    </tr>
                                   
                                    <tr>
                                      <td class="text-right"><strong>TAX (<?=TAX_TEXT?>):</strong></td>
                                      <td class="text-right"><h4>Rp. <?=number_format(TAX * $detail_order["subtotal"])?></h4></td>
                                    </tr>
                                    <tr>
                                      <td class="text-right"><strong>Grand Total:</strong> <br>( jumlah pembayaran )</td>
                                      <td class="text-right"><h4 class="text-success">Rp. <?=number_format($detail_order["grand_total"])?></h4></td>
                                    </tr>
                                  </table>
                                </div>
                             
                              </div>
                            
                                
                              <div class="buttons">
                                                               
                                     <div class="pull-right"><a href="<?=base_url("admin/order_history")?>" class="btn btn-primary"> Back to Order </a></div>
                                 
                              </div>
                             
                              <span class="clearfix"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <?php $this->load->view("admin/footer");?>
        </div> <!-- container -->
    </div> <!-- content -->
</div>

<!--Middle Part Start-->
    
<script>



</script>
<!--Middle Part End -->