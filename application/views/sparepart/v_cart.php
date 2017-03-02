<?php if(!$this->cart->contents()){ ?>
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
                                        <?php foreach($this->cart->contents() as $items): ?>
                                        <?php echo form_hidden('rowid[]', $items['rowid']); ?>
                                            <tr>
                                                <td class="product-name-col">
                                                    <figure>
                                                        <a href="#"><img src="<?php echo base_url('assets/sp/images/products/').$items['image']; ?>" alt=""></a>
                                                    </figure>
                                                    <h2 class="product-name">
                                                        <a href="#"><?php echo $items['name']; ?></a>
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
                                        <div class="col-md-8">
                                            <div class="tab-container left clearfix">
                                                <!-- Tab nav -->
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li class="active"><a href="#shipping" data-toggle="tab">Shipping &amp; Taxes</a></li>
                                                    <li><a href="#discount" data-toggle="tab">Discount Code</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="shipping">
                                                        <form action="#" class="clearfix">
                                                            <p class="ship-desc">Enter your destination to get a shipping estimate</p>
                                                            <div class="ship-row clearfix">
                                                                <span class="ship-label col-3">City<i>*</i></span>
                                                                <div class="normal-selectbox">
                                                                    <select id="country" name="country" class="selectpicker">
                                                                        <option value="">Please select</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Germany">Germany</option>
                                                                        <option value="Korea">Korea</option>
                                                                    </select>
                                                                </div><!-- End .normal-selectbox-->    
                                                            </div>
                                                            <div class="ship-row clearfix">
                                                                <span class="ship-label col-3">Region/State<i>*</i></span>
                                                                <div class="normal-selectbox">
                                                                    <select id="region" name="region" class="selectpicker">
                                                                        <option value="">Please select</option>
                                                                        <option value="Texas">Texas</option>
                                                                        <option value="California">California</option>
                                                                    </select>
                                                                </div><!-- End .normal-selectbox-->    
                                                            </div>
                                                            <div class="ship-row clearfix">
                                                                <span class="ship-label col-3">Post Codes<i>*</i></span>
                                                                <div class="col-3 ship-post"><input type="text" class="form-control text-center" value="12315"></div>
                                                                <div class="col-3 text-right"><a href="#" class="btn btn-custom-6 btn-block">Get Quotes</a></div>
                                                            </div>
                                                        </form>
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
                                                        <td>Rp.000.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="total-table-title">Shipping:</td>
                                                        <td>Rp. 000.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="total-table-title">TAX (0%):</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td>Total:</td>
                                                        <td><?php echo $this->cart->total(); ?></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <div class="md-margin"></div><!-- space -->
                                            <div class="text-right">
                                                <button onclick="myFunction()" class="btn btn-custom btn-lger min-width-sm">Print Checkout</button>
                                            </div>
                                            <script>
                                                function myFunction() {
                                                    window.print();
                                                }
                                            </script>
                                            <div class="text-right">
                                                <a href="#" class="btn btn-custom btn-lger min-width-sm">Checkout</a>
                                            </div>
                                        </div><!-- End .col-md-4 -->
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


