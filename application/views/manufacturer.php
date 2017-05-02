<div id="container">
        <div class="container">
        <!-- Breadcrumb Start-->
          <ul class="breadcrumb">
            <li><a href="<?php echo base_url('home'); ?>"><i class="fa fa-home"></i></a></li>
            <li><a href="about-us.html">manufacturer</a></li>
          </ul>
          <!-- Breadcrumb End-->
        <div class="row">
            <div id="content" class="col-lg-12">
                <h1 class="title">Our Manufacturer</h1>
                <div class="row">
                    <?php foreach ($manu as $m) { ?>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="<?php echo $m->manu_link; ?>">
                                <img class="img-responsive" src="<?php echo sprintf("assets/image/manufacturer/%s", $m->manu_image) ?> " alt="<?php echo $m->manu_title ?>">
                            </a>
                        </div>
                <?php } ?>
                </div>
            </div> 
        </div>
    </div>
    <hr>
</div>
