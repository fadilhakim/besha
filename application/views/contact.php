<div id="container">
    <div class="container">
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li><a href="index-2.html"><i class="fa fa-home"></i></a></li>
        <li><a href="contact-us.html">Contact Us</a></li>
      </ul>
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
          <h1 class="title">Contact Us</h1>
          
          <div class="row">
            <div class="col-sm-12">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d126931.3024528414!2d106.856087!3d-6.183827!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x737637132d4b1143!2sPT+Besha+Analitika!5e0!3m2!1sen!2sid!4v1479029723632" height="450" frameborder="0" style="border:0; width:100%; " allowfullscreen></iframe>
            </div>
          </div>
          <br><br>
          <h3 class="subtitle">Our Location</h3>
          <div class="row">
            <div class="col-sm-4">
              <div class="contact-info">
                <div class="contact-info-icon"><i class="fa fa-map-marker"></i></div>
                <div class="contact-detail">
                  <h4>Address</h4>
                  <address>
                  PT Besha Analitika <br>
                  Jl. Boulevard Barat, <br>
                  Komplek Gading Bukit Indah, Blok N, No.23 , <br>
                  Kelapa Gading, Jakarta Utara, <br>
                  Indonesia, 14240 <br>
                  </address>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="contact-info">
                <div class="contact-info-icon"><i class="fa fa-phone"></i></div>
                <div class="contact-detail">
                  <h4>Telephone</h4>
                  Call: (+62 21) 4585 6666<br>
                  Fax: (+62 21) 4585 7600</div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="contact-info">
                <div class="contact-info-icon"><i class="fa fa-envelope"></i></div>
                <div class="contact-detail">
                  <h4>Email</h4>
                  info@besha-analitika.com
                </div>
              </div>
            </div>
          </div>
          <!-- <form class="form-horizontal"> -->
          <?php $attributes = array("class" => "form-horizontal", "name" => "contact");
            echo form_open("contact", $attributes);?>
            <fieldset>
              <h3 class="subtitle">Send us an Email</h3>
              <div class="form-group required">
                <label class="col-md-2 col-sm-3 control-label" for="input-name">Your Name</label>
                <div class="col-md-10 col-sm-9">
                  <input type="text" name="name" value="<?php echo set_value('name'); ?>" id="input-name" placeholder="Your Name" class="form-control" />
                  <span class="text-danger"><?php echo form_error('name'); ?></span>
                </div>
              </div>
              <div class="form-group required">
                <label class="col-md-2 col-sm-3 control-label" for="input-email">E-Mail Address</label>
                <div class="col-md-10 col-sm-9">
                  <input type="email" name="email" value="<?php echo set_value('email'); ?>" id="input-email" placeholder="E-Mail Address" class="form-control" />
                   <span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>
              </div>
              <div class="form-group required">
                <label class="col-md-2 col-sm-3 control-label" for="input-email">Subject</label>
                <div class="col-md-10 col-sm-9">
                  <input type="text" name="subject" value="<?php echo set_value('subject'); ?>" id="input-email" placeholder="Subject" class="form-control" />
                    <span class="text-danger"><?php echo form_error('subject'); ?></span>
                </div>
              </div>

              <div class="form-group required">
                <label class="col-md-2 col-sm-3 control-label" for="input-enquiry">Enquiry</label>
                <div class="col-md-10 col-sm-9">
                  <textarea name="message" rows="10" id="input-enquiry" placeholder="Write your message" class="form-control"><?php echo set_value('message'); ?></textarea>
                  <span class="text-danger"><?php echo form_error('message'); ?></span>
                </div>
              </div>
            </fieldset>
            <div class="buttons">
              <div class="pull-right">
                <input class="btn btn-primary" type="submit" value="Submit" />
              </div>
            </div>
          <!-- </form> -->
          <?php echo form_close();?>
          <?php echo $this->session->flashdata('msg'); ?>
        </div>
        <!--Middle Part End -->
      </div>
    </div>
  </div>