<div id="container">
    <div class="container">
      <div class="row">
        <div id="content" class="col-sm-12">
          <!-- Slideshow Start-->
          <div class="slideshow single-slider owl-carousel">
           <?php foreach ($slider as $s) { ?>
               <div class="item"> 
                 <a href="<?php echo $s->slider_link; ?>">
                    <img class="img-responsive"src="<?php echo sprintf("assets/image/slider/%s", $s->silder_image) ?> " alt="<?php echo $s->slider_title ?>" />
                 </a> 
               </div>
           <?php } ?>
          </div>
          <!-- Slideshow End-->
          <!-- Featured Product Start-->
          <h3 class="subtitle">Our Products</h3>
          <div class="owl-carousel product_carousel">
            <?php foreach ($featured as $f) { ?>
            <div class="product-thumb clearfix">
              <div class="image"><a href="<?php  echo base_url('product/'.$f->manu_id.'/'.$f->category_url.'/'.$f->product_slug); ?>"><img src="<?php echo sprintf("assets/image/product/%s", $f->product_image_1) ?>" alt="<?php echo $f->product_title?>" title="<?php echo $f->product_title?>" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="<?php  echo base_url('product/'.$f->manu_id.'/'.$f->category_url.'/'.$f->product_slug); ?>" class="code-f"><?php echo $f->product_title?></a></h4>
              </div>
              <div class="button-group">
                <a href="<?php  echo base_url('product/'.$f->manu_id.'/'.$f->category_url.'/'.$f->product_slug); ?>" class="btn btn-primary" ><span>See Product</span></a>
              </div>
            </div>
            <?php } ?>
          </div>
            
          <div class="row">
            <div class="col-lg-9">
              <h3 class="subtitle">News HighLights</h3>
              <div class="row">
              <style type="text/css">.hight p {padding:0 15px; font-size: 13px; letter-spacing: 0.5px; line-height: 17px;}</style>
              <?php foreach ($news as $nh) {?>
                <article class="col-md-4 hight">
                  <figure class="col-lg-12">
                    <a href=""><img class="img img-responsive article-img" src="<?php echo base_url('assets/image/news/').$nh->news_thumbnail; ?>"></a>
                  </figure>
                      <div class="article-intro col-lg-12" style="padding-top: 10px;">
                        <strong><h1 style="font-size:20px;" class="code-f"><?php echo $nh->news_title; ?></h1></strong>
                      </div>
                      <?php echo substr($nh->news_desc ,0,140)."..." ?>
                      <a style="padding: 15px 0px; display:block; text-transform:uppercase; font-weight:700;" href="<?php echo base_url('news/detail/').$nh->news_id; ?>">Read More <i class="fa fa-arrow-right"></i></a>
                </article>
              <?php } ?>
              </div>
            </div>
            <div class="col-lg-3">
              <h3 class="subtitle">News List</h3>
              <ul class="media-list main-list">
                  <?php foreach ($newslist as $nl) { ?>
                  <li class="media">
                    <div class="media-body">
                      <h4 class="media-heading code-f"><a href="<?php echo base_url('news/detail/').$nl->news_id; ?>"><?php echo $nl->news_title; ?></a></h4>
                      <p class="by-author"><?php echo date ("D, M d",strtotime($nl->createdate)); ?></p>
                    </div>
                  </li>  
                  <?php } ?>
                  <li class="media">
                    <a href="<?php echo base_url('event'); ?>" class="btn btn-primary col-lg-6">More  &nbsp; <i class="fa fa-arrow-right"></i></a>
                  </li>
              </ul>
            </div>
          </div>

          <div class="row" style="background-color:#EEEEEE; padding:0 15px 15px 15px;">
            <h3 class="subtitle" style="padding-top:20px;">Featured Events</h3>
            <div class="col-lg-7">
              <style type="text/css">
                .month {
                    font-family: 'kenzo' !important;
                    font-weight: bold;
                    font-style: normal;
                    float: left;
                    color: #000;
                    font-size: 25px !important;
                    letter-spacing: 1px;
                  }
                  .date {
                      font-family: 'kenzo' !important;
                      font-weight: normal;
                      font-style: normal;
                      color: #000;
                      font-size: 167px !important;
                      line-height: 77%;
                      letter-spacing: 2px;
                  }
              </style>
              <div class="row">
              <?php foreach ($eventhigh as $eh) { ?>
                <article class="col-md-12">
                  <figure class="col-lg-12">
                    <span class="month"><?php echo date ("M",strtotime($nl->createdate)); ?></span>
                    <span class="date"><?php echo date ("d",strtotime($eh->createdate)); ?></span>
                  </figure>
                      <div class="article-intro col-lg-12" style="padding-top: 10px;">
                        <strong><h1 style="font-size:20px;" class="code-f"><?php echo $eh->news_title; ?></h1></strong>
                      </div>
                      <div style="padding:0 15px;"><?php echo substr($eh->news_desc ,0,350) ?></div>
                      <a href="<?php echo base_url('event/detail/').$eh->news_id; ?>" style="margin-left:15px;" class="btn btn-primary col-lg-3">Read More  &nbsp; <i class="fa fa-arrow-right"></i></a>
                </article>
                <?php } ?>
              </div>
            </div>
            <style type="text/css">
              .event-list a {
                display: block;
                color: #000;
              } 
            </style>
            <div class="col-lg-5">
              <ul class="media-list event-list main-list">
                  <style type="text/css">
                    .date-month{
                      font-family: 'kenzo' !important;
                      font-style: normal;
                      font-size: 28px;
                      line-height: 30px;
                      text-align: center;
                      color: #FE8301;
                    }

                    .date-day {
                      font-family: 'kenzo' !important;
                      font-style: normal;
                      font-weight: bold;
                      font-size: 45px;
                      line-height: 30px;
                      text-align: center;
                      color: #FE8301;
                    }
                  </style>
                  <?php foreach ($event as $n) {?>
                  <li class="media">
                    <a class="pull-left" href="<?php echo base_url('event/detail/').$n->news_id; ?>">
                      <div class="date-month">
                        <?php echo date ("M",strtotime($n->createdate)); ?>
                      </div>
                      <div class="date-day">
                        <?php echo date ("d",strtotime($n->createdate)); ?>
                      </div>
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading code-f"><a href="<?php echo base_url('event/detail/').$n->news_id; ?>"><?php echo $n->news_title; ?></a></h4>
                      <p class="by-author" style="margin:0px;"><?php echo date ("D/m/d",strtotime($n->createdate)); ?></p>
                      <?php echo substr($n->news_desc ,0,80) ?>..(<a style="display:inline-block; color:#004384;" href="<?php echo base_url('event/detail/').$n->news_id; ?>">read more</a>)
                    </div>
                    
                  </li>
                  <?php } ?>
              </ul>
            </div>
          </div>
          <!-- Brand Logo Carousel End -->
        </div>
        <!--Middle Part End-->
      </div>
    </div>
</div>
 