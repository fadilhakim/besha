        <div class="wrapper-breadcrumbs clearfix">
         <div class="spacer30"></div><!--spacer-->
       		<div class="container">
             	<div class="breadcrumbs-main clearfix">
                	<h2>Signup</h2>
                    <ul>
                  		<li><a href="#">Home</a><span class="separator">/ </span></li>
                  		<li><strong>Sign up</strong></li>
                	</ul>
             	</div>
          </div>
     	  </div>
     	<!--XXXXXXXXXX-- End Wrapper-breadcrumbs --XXXXXXXXXX-->
        <!--XXXXXXXXXX-- Start Wrapper Main XXXXXXXXXX-->
        <div class="wrapper-main brandshop clearfix">
        <form action="<?php echo base_url('sparepart/signup_post'); ?>" method="post">
        	<div class="spacer30"></div><!--spacer-->
            <div class="container">
                <div class="inner-block"><!------Main Inner-------->
                    <div class="row">
                        <div class="contact-main"><!-- Start Contact -->
                            <div class="contact-details clearfix"><!-- Start Form -->
                                <form action="<?php echo base_url('sparepart/signup_post'); ?>" method="post">
                                    <div class="col-sm-6 col-sm-offset-3 contact-form">
                                    <label><h4>Data Login</h4></label>
                                    <div class="col-sm-12">
                                        <label for="email">Email Address (company)<span>*</span></label>
                                        <input type="email" name="email" required id="email" class="form-control"/>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="title">Password<span>*</span></label>
                                        <input type="password" name="password" required id="title" class="form-control"/>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="title">Password Confirmation<span>*</span></label>
                                        <input type="password" name="cpassword" required id="title" class="form-control"/>
                                    </div>
                                    </div>
                            
                            </div><!-- End Form -->
                        </div><!-- End Contact -->
                    </div>
                </div>
            </div>

            <div class="spacer30"></div><!--spacer-->
        	<div class="container">
            	<div class="inner-block"><!------Main Inner-------->
                	<div class="row">
                    	<div class="contact-main"><!-- Start Contact -->
                            <div class="contact-details clearfix"><!-- Start Form -->
                            	
                                    <div class="col-sm-6 col-sm-offset-3 contact-form">
                                    <label><h4>Company / User Information</h4></label>
                                	<div class="col-sm-12">
                                    	<label for="name">Company Name</label>
                                        <input type="text" name="company_name" id="name" class="form-control"/>
                                    </div>
                                   
                                    <div class="col-sm-6">
                                        <label for="name">No. Telephone<span>*</span></label>
                                        <input type="number" name="no_tlp" required="" id="name" class="form-control"/>
                                    </div>
                                    <div class="col-sm-6">
                                    	<label for="title">No. Fax</label>
                                        <input type="number" name="no_fax"  id="title" class="form-control"/>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="title">No. Handphone<span>*</span></label>
                                        <input type="number" name="no_hp" id="title" class="form-control"/>
                                    </div>

                                     <div class="col-sm-6">
                                        <label for="name">No. NPWP<span>*</span></label>
                                        <input type="number" name="npwp_no" id="name" class="form-control"/>
                                    </div>

                                    <div class="col-sm-12">
                                    	<label for="msg">NPWP Address<span>*</span></label>
                                    	<textarea id="msg" name="npwp_address" class="form-control" rows="3"></textarea>
                                    </div>

                                    <div class="col-sm-12">
                                        <label for="msg">Billing Address<span>*</span></label>
                                        <textarea id="msg" name="billing_address" class="form-control" rows="3"></textarea>
                                    </div>

                                    <div class="col-sm-12">
                                        <label for="msg">Shipping Address<span>*</span></label>
                                        <textarea id="msg" name="shipping_address" class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6"><?php echo $this->session->flashdata('msg'); ?>
                                    	<input type="submit" class="submit" value="Submit">
                                    </div>
                                    <div class="col-sm-6">
                                        <?php echo $this->session->flashdata('msg'); ?>
                                    </div>
                                    </div>
                                </form>
                            </div><!-- End Form -->
                        </div><!-- End Contact -->
                    </div>
                </div>
            </div>
            <div class="spacer30"></div><!--spacer-->
        </form>
        </div>