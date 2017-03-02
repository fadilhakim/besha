<div id="container">
        <div class="container">
        <!-- Breadcrumb Start-->
          <ul class="breadcrumb">
            <li><a href="<?php echo base_url('home'); ?>"><i class="fa fa-home"></i></a></li>
            <li><a href="about-us.html">Our Clients</a></li>
          </ul>
          <!-- Breadcrumb End-->
        <div class="row">
            <div id="content" class="col-lg-12">
                <h1 class="title">Our Clients</h1>
                <div class="row">
                    <?php foreach ($client as $c) { ?>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#">
                                <img class="img-responsive" src="<?php echo sprintf("assets/image/clients/%s", $c->client_image) ?> " alt="<?php echo $c->client_name ?>">
                            </a>
                        </div>
                <?php } ?>
                </div>
            </div> 
        </div>
    </div>
    <hr>
</div>
