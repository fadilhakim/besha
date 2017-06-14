<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<?php foreach ($slider->result() as $row) {
    $slider_id=$row->slider_id;
    $slider_title=$row->slider_title;
    $slider_link=$row->slider_link;
    $slider_image=$row->silder_image;
} ?>
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">  
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-title">Edit Slider</h4>
                    <div class="row">
                        <div class="col-lg-7">
                 
                            
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30"><?php echo $slider_title; ?></h4>
                                <form class="form-horizontal group-border-dashed" enctype="multipart/form-data" action="<?php echo base_url('admin/edit/slider_f'); ?>"  method="post">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Title Slider</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" value="<?php echo $slider_id; ?>" name="slider_id" type="hidden">
                                            <input class="form-control" value="<?php echo $slider_title; ?>" name="slider_title" required placeholder="Change Title " type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Slider Link</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" value="<?php echo $slider_link; ?>" name="slider_link" required="" placeholder="Slider Link" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Old Image</label>
                                        <div class="col-sm-9">
                                            <img src="<?php echo base_url('assets/image/slider/').$slider_image; ?>" class="img-responsive">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Select New Image</label>
                                        <div class="col-sm-9">
                                        <input class="form-control" value="<?php echo $slider_image; ?>" name="silder_image_old" type="hidden">
                                            <input class="" name="silder_image_new" type="file">
                                        </div>
                                    </div>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit";>
                                            Add Slider
                                        </button>
                                    </div>
                                </form>
                            </div>

                    
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <footer class="footer">
                <?php echo date("Y");?> © Besha Analitika | Go To : <a href="<?php echo base_url('home'); ?>" target="_blank" class="text-muted">www.besha-analitika.co.id</a>
            </footer>
        </div> <!-- container -->
    </div> <!-- content -->



</div>