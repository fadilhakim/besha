        <div class="wrapper-breadcrumbs clearfix">
         <div class="spacer30"></div><!--spacer-->
       		<div class="container">
             	<div class="breadcrumbs-main clearfix">
                	<h2>Contact</h2>
                    <ul>
                  		<li><a href="#">Home</a><span class="separator">/ </span></li>
                  		<li><strong>Contact</strong></li>
                	</ul>
             	</div>
          </div>
     	  </div>

        <div class="wrapper-main brandshop clearfix">
        	<div class="spacer30"></div><!--spacer-->
        	<div class="container">
            	<div class="inner-block"><!------Main Inner-------->
                	<div class="row">
                    	<div class="contact-main"><!-- Start Contact -->
                        	<div class="contact-map"><!-- Map -->
                            	<div class="map-overlay" onClick="style.pointerEvents='none'"></div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d126931.3024528414!2d106.856087!3d-6.183827!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x737637132d4b1143!2sPT+Besha+Analitika!5e0!3m2!1sen!2sid!4v1479029723632" height="450" frameborder="0" style="border:0; width:100%; " allowfullscreen></iframe>
                            </div><!-- End Map -->
                            <div class="contact-details clearfix"><!-- Start Form -->
                            	<form action="<?php echo base_url('sparepart/contact_post'); ?>" method="post">
                                <div class="col-sm-9 contact-form">
                                	<div class="col-sm-4">
                                    	<label for="name">Name<span>*</span></label>
                                        <input type="text" name="name" id="name" class="form-control"/>
                                    </div>
                                    <div class="col-sm-4">
                                    	<label for="email">Email Address<span>*</span></label>
                                        <input type="email" name="email" id="email" class="form-control"/>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="email">Phone Number<span>*</span></label>
                                        <input type="text" name="hp" id="email" class="form-control"/>
                                    </div>
                                    <div class="col-sm-12">
                                    	<label for="title">Subject<span>*</span></label>
                                        <input type="text" name="subject" id="title" class="form-control"/>
                                    </div>
                                    <div class="col-sm-12">
                                    	<label for="msg">Your Message<span>*</span></label>
                                    	<textarea id="msg" name="message" class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                    	<input class="submit" value="Submit" type="submit">
                                    </div>
                                    <div class="col-sm-12">
                                        <?php echo $this->session->flashdata('msg'); ?>
                                    </div>
                                </div>
                                </form>
                                <div class="col-sm-3 contact-info">
                                	<address>
                                    	<ul>
                                        	<li class="add"><i class="fa fa-home"></i><p> PT Besha Analitika <br>
                                              Jl. Boulevard Barat, <br>
                                              Komplek Gading Bukit Indah, Blok N, No.23 , <br>
                                              Kelapa Gading, Jakarta Utara, <br>
                                              Indonesia, 14240 <br></p>
                                            </li>
                                            <li class="mail"><i class="fa fa-envelope"></i><p>service@besha-analitika.co.id</p></li>
                                            <li><i class="fa fa-phone"></i><p>+000 0000 00</p></li>
                                        </ul>
                                    </address>
                                </div>
                            </div><!-- End Form -->
                        </div><!-- End Contact -->
                    </div>
                </div>
            </div>
            <div class="spacer30"></div><!--spacer-->
        </div>