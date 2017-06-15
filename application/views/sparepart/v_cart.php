<?php


$user_id_sess 	 = $this->session->userdata("user_id");
$email_user_sess = $this->session->userdata("member_email");



$cart_total = $this->cart->total();
$sub_total = $cart_total * TAX;
$grand_total = $cart_total + $sub_total ;

$arrr = array("grand_total"=>$grand_total);
$this->session->set_userdata($arrr);

$grand_total_session = $this->session->userdata("grand_total");

if(!$this->cart->contents()){ ?>
<div class="wrapper-breadcrumbs clearfix">
    <div class="spacer30"></div><!--spacer-->
    <div class="container">
        <div class="breadcrumbs-main clearfix">
            <h2>You don't have any item yet</h2>
            <br>
            <a href="<?php echo base_url('sparepart'); ?>" class="btn btn-custom btn-lger min-width-lg">Continue Shopping</a>
        </div>
      </div>
    <div class="spacer15"></div><!--spacer-->
</div>
<?php } else { ?>
<div class="wrapper-breadcrumbs clearfix">
    <div class="spacer30"></div><!--spacer-->
    <div class="container">
    	<div class="clearfix">
        	<?php
				//echo "aaaaa";
            	//echo $cookie_msg = !empty($this->session->flashdata("error")) ? $this->session->flashdata("error") : "";
				//print_r($_SESSION);
				echo $this->session->flashdata("message");
				//print_r($this->session->all_flashdata());
			?>
        </div>
        <div class="breadcrumbs-main clearfix">
            <h2>Checkout</h2>
        </div>

    </div>
    <div class="spacer15"></div><!--spacer-->
</div>

<div class="wrapper-main brandshop clearfix">
            <div class="spacer15"></div><!--spacer-->
            <div class="container">
                <div class="inner-block"><!------Main Inner-------->
                    <div class="row">
                        <div class="cart-main"><!-- Shopping Cart -->
                            <div class="col-md-12">
                                <div class="cart-control clearfix">
                                    <form method="post" action="<?php echo base_url('cart/update_cart'); ?>">
                                    <table class="table cart-table">
                                        <thead>
                                            <tr>
                                                <th class="table-title">Product Name</th>
                                                <th class="table-title">Product Code</th>
                                                <th class="table-title">Unit Price</th>
                                                <th class="table-title">Quantity</th>
                                                <th class="table-title">SubTotal</th>
                                                <th><span class="close-button disabled"></span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 1; ?>
                                        <?php

										foreach($this->cart->contents() as $items):

						$detail_sparepart = $this->model_sparepart->getproductfromIdandCode($items['id'],$items['code'])->row();

										?>
                                        <?php echo form_hidden('rowid[]', $items['rowid']); ?>
                                            <tr>
                                                <td class="product-name-col">
                                                    <figure>
                                                        <a href="#"><img src="<?=check_image_sparepart($items['id'])?>" alt=""></a>
                                                    </figure>
                                                    <h2 class="product-name">
                                                        <a href="#"><?php echo $detail_sparepart->sparepart_name; ?></a>
                                                    </h2>
                                                    <ul>
                                                        <li>Manufacturer: <?php echo $items['manu']; ?></li>
                                                    </ul>
                                                </td>
                                                <td class="product-code"><?php echo $items['code']; ?></td>
                                                <td class="product-price-col"><span class="product-price-special">Rp <?php echo $this->cart->format_number($items['price']); ?></span>
                                                <input type="hidden" class="price" value="<?php echo $items['price']; ?>">
                                                </td>
                                                <td>
                                                    <div class="custom-quantity-input">
                                                        <?php echo form_input(array('name' => 'qty[]', 'value' => $items['qty'])); ?>
                                                    </div>
                                                </td>
                                                <td class="product-total-col">
                                                    <span class="product-price-special">Rp <?php echo $this->cart->format_number($items['subtotal']); ?></span>
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url('cart/remove_item/').$items['rowid']; ?>" class="close-button">
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                            <?php endforeach; ?>
                                        </tbody>

                                    </table>

                                    <div class="row">
                                        <div class="col-lg-12">
                                        <input style="float:right;background-color: #FE8301; color: #fff;" type="submit" class="submit" value="update cart">
                                        </div>
                                    </div>

                                    <?php echo form_close(); ?>
                                    <div class="spacer15"></div>
                                    <div class="row">
                                    <form action="<?=base_url("order/insert_order")?>" method="post" > 
                                        <div class="col-md-8">
                                            <div class="tab-container left clearfix">
                                                <!-- Tab nav -->
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li class="active"><a href="#shipping" data-toggle="tab">Shipping &amp; Taxes</a></li>
                                                    <li><a href="#discount" data-toggle="tab">Discount Code</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="shipping">
                                                    <?php $this->load->view("sparepart/form_shipping_address")?>
                                                        
                                                    </div><!-- End .tab-pane -->
                                                    <div class="tab-pane fade" id="discount">
                                                        <p class="ship-desc">Enter your discount coupon here:</p>
                                                        <hr>
                                                        <div class="ship-row clearfix">
                                                            <span class="ship-label col-3">Discount Code<i>*</i></span>
                                                            <div class="col-3-2x"><input type="text" class="form-control" placeholder="coupon here"></div>
                                                        </div>
                                                        <div class="ship-row">
                                                            <a href="#" class="btn btn-custom-5">Activate</a>
                                                        </div>
                                                    </div><!-- End .tab-pane -->
                                                </div><!-- End .tab-content -->
                                            </div><!-- End .tab-container -->
                                            <div class="md-margin"></div><!-- space -->
                                            <a href="<?php echo base_url('spareparts/all'); ?>" class="btn btn-custom btn-lger min-width-lg">Continue Shopping</a>
                                        </div><!-- End .col-md-8 -->
                                        <div class="col-md-4">
                                            <table class="table total-table">
                                                <tbody>
                                                 
                                                    <tr>
                                                        <td class="total-table-title">Subtotal:</td>
                                                        <td>Rp. <?=number_format((float)$cart_total, 2, '.', ',');?></td>
                                                    </tr>
                                                    <!-- <tr>
                                                        <td class="total-table-title">Shipping:</td>
                                                        <td>Rp. 0</td>
                                                    </tr> -->
                                                    <tr>
                                                        <td class="total-table-title">TAX (10%):</td>
                                                        <td>Rp. <?=number_format((float)$sub_total, 2, '.', ',');?></td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td>Total:</td>
                                                        <td>Rp. <?=number_format((float)$grand_total_session, 2, '.', ',');?></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <?php
												$email_sess = $this->session->userdata("email");
												$strbtnlogin = "data-toggle='modal' data-target='#login-modal' ";

											?>
                                            <div class="md-margin"></div><!-- space -->
                                            <div class="text-right">
                                            	<?php if(!empty($email_sess)){ ?>
                                                <a href="<?=base_url("cart/print_invoice")?>" target="_blank"><button onclick="" class="btn btn-custom btn-lger min-width-sm" type="button">Print Checkout</button></a>
                                                <?php }else{   ?>
                                                	<a href="#" data-toggle="modal" data-target="#login-modal" class="btn btn-custom btn-lger min-width-sm"> Print Checkout</a>
                                                <?php } ?>
                                            </div>

                                            <div class="text-right">
                                            <?php if(!empty($email_sess)) { ?>
                                                <button class="btn btn-success min-width-sm">Checkout</button>
                                            <?php } else {  ?>
                                            <a href="#" data-toggle="modal" data-target="#login-modal" class="btn btn-custom min-width-sm">Checkout</a>
                                            <?php
											}
											?>
                                            </div>
                                        </div><!-- End .col-md-4 -->
                                        
                                    </form>
                                    </div><!-- End .row -->
                                </div>
                            </div>
                        </div><!-- End Shopping Cart -->
                    </div>
                </div>
            </div>
            <div class="spacer30"></div><!--spacer-->
</div>
<?php  } ?>
