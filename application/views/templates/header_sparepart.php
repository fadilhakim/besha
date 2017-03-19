<body class="light">

	<div id="wrapper" class="clearfix">
  
    	<div id="top-bar">
        	<?php $this->load->view('sparepart/v_login_popup'); ?>
            <div class="container clearfix">
            	<!--Social icons-->
            	<div class="top-social-icons">
                	<ul class="clearfix">
                    	<li><a class="i-facbook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="i-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="i-google" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a class="i-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="dropdown">
                            <a class="i-contact dropdown-toggle" data-toggle="dropdown" href="#">
                            	<i class="fa fa-phone"></i>
                            </a>
                            <div class="i-hover dropdown-menu">
                            	<span>111 1111 11</span>
                         	</div>
                        </li>
                        <li class="dropdown">
                        	<a class="i-email dropdown-toggle" data-toggle="dropdown" href="#">
                            	<i class="fa fa-user"></i>
                            </a>
                         	<div class="i-hover dropdown-menu">
                            	<span>beshaanalitika@sparepart.com</span>
                         	</div>
                        </li>
                    </ul>
                </div>
                <!--End social icon-->
                
                <!-- Top link -->
                <?php if(!$this->session->userdata('email')){ ?>
                <div class="top-links clearfix fright">
                	<ul>
                        <li class="dropdown">
                        	<a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                        </li>
                        <li class="dropdown">
                        	<a href="<?php echo base_url('sparepart/signup'); ?>">Sign up</a>
                        </li>
                    </ul>	
                </div>
                <?php } else {?>
                <div class="top-links clearfix fright">
                  <ul>
                      <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user"></i>My Account</a>
                      </li>
                      <li class="dropdown">
                        <a href="<?php echo base_url('sparepart/logout');  ?>">Logout</a>
                      </li>
                    </ul> 
                </div>
                <?php } ?>
                <!-- End top link -->
                	
            </div>
            
      </div>

      <header id="header">
            <div class="header-wrapper" style="height:100px;">
            	<div class="container clearfix">
                	<!-- logo -->
                	<div class="logo">
                    	<h1 class="clearfix">
                        	<a href="<?php echo base_url('home'); ?>">
                            	<img src="<?php echo base_url('assets/sp/images/logo-besha.png') ?>" alt="logo"/>
                            </a>
                        </h1>
                    </div>
                    <!--End logo -->
                    <div class="fright clearfix">
                        <div class="right-wrapper">
                        	<!--<div class="wb-block">
                            	<span>Welcome to EShop</span>
                            </div>-->
                        	<div class="search"><!--Search-->
                        		<a href="#"><i class="fa fa-search"></i></a>
                                <form action="<?php echo base_url('sparepart/search'); ?>" method="post" class="search-form">
                                    <input type="search" name="keyword" class="s" placeholder="Search sparepart here and press enter">
                                    <!-- <input type="submit" class="s" value="Enter"> -->
                                    <a href="#" class="search-close"><i class="fa fa-close"></i></a> 
                                </form>
                            </div><!--End Search-->
                            <div class="cart"><!--Start Cart-->
                            	<a href="#">
                                <i class="fa fa-shopping-cart dropdown-toggle" data-toggle="dropdown"></i>
                                <span class="cart-block pull-right">
                                    <span class="cart-num">
                                      <?php echo count($this->cart->contents()); ?>
                                    </span>
                                </span>
                                </a>
                                <div class="dropdown-menu">
                                   <?php if(!$this->cart->contents()){
                                    echo 'You don\'t have any items yet.';
                                  }
                                  else {?>
                                    <p><?php echo count($this->cart->contents()); ?> item(s) in your cart</p>
                                    <?php $i = 1; ?>
                                    <?php foreach($this->cart->contents() as $items): ?>
                                    <div class="product clearfix">
                                      <a href="<?=base_url("cart/remove_item/$items[rowid]")?>"><i class="fa fa-close"></i></a>
                                      <figure class="product-images">
                                          <a href="#">
                                              <img src="<?php echo base_url('assets/sp/images/products/').$items['image']; ?>" alt=""/>
                                            </a>
                                        </figure>
                                        <div class="product-detail">
                                          <h5 class="product-name">
                                              <a href="<?php echo base_url('cart/show_cart'); ?>"><?php echo substr($items['name'],0,35); ?></a>
                                            </h5>
                                            <div class="product-rate">
                                              <span>Rp. <?php echo number_format($items['price']); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                  <?php $i++; ?>
                                  <?php endforeach; ?>
                                  <?php } ?>  
                                    <div class="clearfix">
                                    	<ul class="pull-left action-info">
                                       		<!-- <li>
                                          		Shopping:
                                               	<span>$5.00</span>
                                          	</li>
                                         	<li> -->
                                            	Total Items:
                                            	<span><?php echo count($this->cart->contents()); ?></span>
                                         	</li>
                                         	<li>
                                            	Total Price:
                                            	<span>Rp <?php echo $this->cart->total(); ?></span>
                                         	</li>
                                      	</ul>
                                      	<ul class="pull-right action-btn">
                                        	<li><a href="<?php echo base_url('cart/show_cart'); ?>">See Cart</a></li>
                                         <!-- 	<li><a href="#">Checkout</a></li> -->
                                     	</ul>
                                	</div>
                                </div>
                            </div><!--End Cart-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="navigation"><!-- Start navigation -->
            	<div class="container">
            		<nav class="main-nav">
                    	<div class="reponsive-menu">
                        	<a id="responsive-btn" href="#"><!-- Responsive nav button -->
                            	<span class="responsive-btn-icon">
                           			<span class="responsive-btn-block"></span>
                                  	<span class="responsive-btn-block"></span>
                                	<span class="responsive-btn-block last"></span>
                              	</span>
                          		<span class="responsive-btn-text">Menu</span>
                        	</a><!--End responsive nav button -->
                       		<div id="responsive-menu-container">
                                        
                      	</div><!-- End responsive menu container -->
                  	</div>
                	<ul class="menu clearfix">
                		<li>
                     		<a href="<?php echo base_url('sparepart'); ?>">Spareparts</a>
                    </li>
                    <li><a href="<?php echo base_url('sparepart/jasa'); ?>">Jasa</a></li>
                    <li><a href="<?php echo base_url('sparepart/contact'); ?>">Contact</a></li>
                    
                  </ul>
                 	</nav>
                    <div class="offer"><a href="<?php echo base_url('cart/show_cart'); ?>">My Cart</a></div>
            	</div>
            </div><!-- End navigation -->
      </header>
