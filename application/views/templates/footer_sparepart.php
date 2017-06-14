<div class="wrapper-footer clearfix">
            	<div class="container">
                	<div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 es-link">
                        	<h4>Information</h4>
                        	<ul class="clearfix">
                            	<li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 fa-block">
                        	<h4>About us</h4>
                            <p>PT Besha Analitika is a privately held laboratory instrument company based in Jakarta, Indonesia. Since our inception in the year 1999, we are engaged in importing, trading and supplying of scientific laboratory equipment which are known for their high accuracy, precision, durability and high end technology from trusted manufacturer.</p>
                            <ul>
                            	<li class="add"><i class="fa fa-home"></i> <p>Jl. Boulevard Barat Kompleks Perkantoran Gading Bukit Indah Blok N No.23 Kelapa Gading, Jakarta Utara, Indonesia, 14240</p></li>
                                <li class="mail"><i class="fa fa-envelope"></i><p> info@besha-analitika.co.id</p></li>
                                <li class="phone"><i class="fa fa-phone"></i><p>+62-21-4585-6666</p></li>
                            </ul>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 fa-block">
                          <h4>Our Office</h4>
                             <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d126931.3024528414!2d106.856087!3d-6.183827!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x737637132d4b1143!2sPT+Besha+Analitika!5e0!3m2!1sen!2sid!4v1479029723632" height="400" frameborder="0" style="border:0; width:100%; " allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="spacer15"></div><!-- Spacer -->
                    <div class="newsletter-main">
                        <div class="row">
                            <div class=" col-sm-4 sl-block">
                                <h4>Follow us</h4>
                                <div class="social-links">
                                    <a href="#"><img src="<?php echo base_url('assets/sp/images/i-1.png') ?>" alt=""/></a>
                                    <a href="#"><img src="<?php echo base_url('assets/sp/images/i-2.png') ?>" alt=""/></a>
                                    <a href="#"><img src="<?php echo base_url('assets/sp/images/i-3.png') ?>" alt=""/></a>
                                    <a href="#"><img src="<?php echo base_url('assets/sp/images/i-4.png') ?>" alt=""/></a>
                                    <a href="#"><img src="<?php echo base_url('assets/sp/images/i-5.png') ?>" alt=""/></a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="newsletter">
                                    <label>Newsletter</label>
                                    <?php echo form_open('contact/input_subs'); ?>
                                    <input type="text" required placeholder="Your Email address" name="subs_email">
                                    <input type="submit" value="SUBSCRIBE">
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper-copy">
                    <div class="container">
                        <div class="copy">
                        	<div class="row">
                                <div class="col-sm-8">
                                    <p>© <?php echo date("Y");?> Besha-Analitika. All Rights Reserved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
        </div>
   
    </div>


    <script src="<?php echo base_url('assets/sp/js/owl.carousel.js') ?>" type="text/javascript">
    </script>
    <script src="<?php echo base_url('assets/sp/js/plugins.js') ?>" type="text/javascript">
    </script>
    
	<script src="<?php echo base_url('assets/sp/js/main.js') ?>" type="text/javascript"></script>
    
	<script src="<?php echo base_url('assets/sp/js/core.js') ?>" type="text/javascript"></script>
    
    <?php if (isset($page_section) == 'detail') { ?>
    <script src="<?php echo base_url('assets/sp/js/swiper.js') ?>" type="text/javascript">
    </script>
    <script>

    var galleryTop = new Swiper('.gallery-top', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        pagination: '.swiper-pagination',
        paginationClickable: '.swiper-pagination',
        spaceBetween: 10,
        zoom : true,
        zoomMax : 3,
        /*loop : true,
        loopedSlides : 4,*/
        slidesPerView: 1,
        autoplay : 5000,


    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
         slidesPerView: 1,
         spaceBetween: 10,
        centeredSlides: true,
        slidesPerView: 'auto',
        touchRatio: 0.2,
        slideToClickedSlide: true,
        /*loop : true,
        loopedSlides : 4,*/
        autoplay : 5000,

    });
    galleryTop.params.control = galleryThumbs;
    galleryThumbs.params.control = galleryTop;
    
    </script>
    <?php } ?>


    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/582e7f4fa9a0346a52132ee7/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <script type="text/javascript">
        

    </script>
 
</body>

</html>
