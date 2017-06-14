<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<?php foreach ($manu->result() as $row) {
    $manu_id=$row->manu_id;
    $manu_title=$row->manu_title;
    $manu_desc=$row->manu_desc;
    $manu_image=$row->manu_image;
    $manu_link=$row->manu_link;
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
                                <h4 class="header-title m-t-0 m-b-30"><?php echo $manu_title; ?></h4>
                                <form class="form-horizontal group-border-dashed" enctype="multipart/form-data" action="<?php echo base_url('admin/edit/manu_f'); ?>"  method="post">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Manufacturer Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" value="<?php echo $manu_id; ?>" name="manu_id" type="hidden">
                                            <input class="form-control" value="<?php echo $manu_title; ?>" name="manu_title" required placeholder="Change Title " type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Manufacturer Link</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" value="<?php echo $manu_link; ?>" name="manu_link" required="" placeholder="Slider Link" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Old Image</label>
                                        <div class="col-sm-9">
                                            <img src="<?php echo base_url('assets/image/manufacturer/').$manu_image; ?>" class="img-responsive">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Select New Image</label>
                                        <div class="col-sm-9">
                                        <input class="form-control" value="<?php echo $manu_image; ?>" name="manu_image_old" type="hidden">
                                            <input class="" name="manu_image_new" type="file">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Select New Image</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="manu_desc"><?php echo $manu_desc; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit";>
                                            Edit
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