<footer id="footer">
    <div class="fpart-first" style="background:#222222; color:#fff;">
      <div class="container">
        <div class="row">
        <style type="text/css">
          #footer h5 {
            color: #fff;
          }
        </style>
          <div class="contact col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <h5>Contact Details</h5>
            <ul>
              <li class="address"><i class="fa fa-map-marker"></i>Jl. Boulevard Barat
                Kompleks Perkantoran Gading Bukit Indah Blok N No.23
                Kelapa Gading, Jakarta Utara,
                Indonesia, 14240
              </li>
              <li class="mobile"><i class="fa fa-phone"></i>+62-21-4585-6666</li>
              <li class="email"><i class="fa fa-envelope"></i>Send email via our <a href="<?php echo base_url('contact'); ?>">Contact Us</a>
            </ul>
          </div>
          <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <h5>Information</h5>
            <ul>
              <li><a href="<?php echo base_url('about'); ?>">About Us</a></li>
              <li><a href="#">Delivery Information</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms &amp; Conditions</a></li>
            </ul>
          </div>
          <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <h5>Customer Service</h5>
            <ul>
              <li><a href="<?php echo base_url('contact'); ?>">Contact Us</a></li>
              <li><a href="#">Returns</a></li>
              <li><a href="#">Site Map</a></li>
            </ul>
          </div>
          <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <h5>Extras</h5>
            <ul>
              <li><a href="<?php echo base_url('manufacturer'); ?>">Manufacturer</a></li>
              <li><a href="<?php echo base_url('event'); ?>">Event</a></li>
              <li><a href="<?php echo base_url('career'); ?>">Careers</a></li>
            </ul>
          </div>
          <div class="column col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <h5>Newsletter</h5>
            <div class="form-group">
            <label class="control-label" for="subscribe">Subscribe to receive latest news and updates.</label>
            <?php echo form_open('contact/input_subs'); ?>
            <a  href="#" data-toggle="modal" data-target="#option">
              <span class="btn btn-primary col-lg-6">Subscribe</span>
            </a>
            <!-- <input id="signup" type="email" required="" placeholder="Email address" name="subs_email" class="form-control">
            </div>
            <div class="row">
              <div class="container-fluid">
              <input type="submit" value="Subscribe" class="btn btn-primary col-lg-6">
              </div>
              <div class="container-fluid">
              
              </div>
            </div> -->
            
            <?php echo form_close(); ?>
            <!-- SubscribeO Option -->
            <div id="option" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="color:#999;">Silahkan Masukan Email Anda</h4>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                              <form style="color:#999;">
                                <input type="text" placeholder="Masukan Email Anda" class="form-control" >
                                <p >Pilih Manufacturers :</p>
                                <?php
                                    $r = $this->db->get('manufacturer_tbl');
                                        if($r->num_rows()>0)
                                    {
                                        foreach ($r -> result_array() as $rows) {
                                        $data1[] = $rows;
                                        }
                                    }
                                    foreach($data1 as $manuma){ ?>
                                <input type="checkbox" value="<?php $manuma['manu_title'] ?>"> <?php echo $manuma['manu_title'] ?><br>
                                <?php } ?>
                                <br>
                                <input type="text" placeholder="Masukan Email Anda" style="background-color:#F8A60C; color:#fff;" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Submit">
                              </form>
                            </div>
                        </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                </div>
            </div>
            <!-- -->
          </div>
        </div>
      </div>
    </div>
    <div style="background-color:#222222; color:#fff;" class="fpart-second">
      <div class="container">
        <div id="powered" class="clearfix">
          <div class="powered_text pull-left flip">
            <p>Besha-Analitika © <?php echo date("Y");?> </a></p>
          </div>
          <div class="social pull-right flip"> 
            <a href="#" target="_blank"> 
              <img data-toggle="tooltip" src="<?php echo base_url('assets/image/socialicons/facebook.png') ?>" alt="Facebook" title="Facebook">
            </a> 
            <a href="#" target="_blank"> 
              <img data-toggle="tooltip" src="<?php echo base_url('assets/image/socialicons/twitter.png') ?>" alt="Twitter" title="Twitter"> 
            </a> 
            <a href="#" target="_blank"> 
              <img data-toggle="tooltip" src="<?php echo base_url('assets/image/socialicons/google_plus.png') ?>" alt="Google+" title="Google+"> 
            </a>
            <a href="#" target="_blank"> 
              <img data-toggle="tooltip" src="<?php echo base_url('assets/image/socialicons/pinterest.png') ?>" alt="Pinterest" title="Pinterest"> 
            </a> 
            <a href="#" target="_blank"> 
              <img data-toggle="tooltip" src="<?php echo base_url('assets/image/socialicons/rss.png') ?>" alt="RSS" title="RSS"> 
            </a> 
          </div>
        </div>
        <div class="bottom-row">
        </div>
      </div>
    </div>
    <div id="back-top"><a data-toggle="tooltip" title="Back to Top" href="javascript:void(0)" class="backtotop"><i class="fa fa-chevron-up"></i></a></div>
  </footer>
  <!--Footer End-->
</div>
<!-- JS Part Start-->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.1.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.easing-1.3.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.dcjqaccordion.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
<!-- JS Part End-->
<!--Start of Tawk.to Script-->
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
<!--End of Tawk.to Script-->

</body>
</html>