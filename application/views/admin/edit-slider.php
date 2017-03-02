<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">  
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-title">Slider Home</h4>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Add Slider</h4>
                                <form class="form-horizontal group-border-dashed" enctype="multipart/form-data" action="<?php echo base_url('admin/add/slider'); ?>"  method="post">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Title Slider</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="slider_title" required placeholder="Slider Title" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Slider Link</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="slider_link" required="" placeholder="Slider Link" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Select Image</label>
                                        <div class="col-sm-9">
                                            <input class="" name="slider_image" required="" type="file">
                                        </div>
                                    </div>
                                    <div class="form-group text-right m-b-0">
                                        <button id="sa-success-slider" class="btn btn-primary waves-effect waves-light" type="submit";>
                                            Add Slider
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-10">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">List Image Slider</h4>

                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title Slider</th>
                                            <th>Slider Link</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; foreach ($slider as $s) { ?>
                                        <tr>
                                            <th scope="row"><?php echo $i; $i++;?></th>
                                            <td><?php echo $s->slider_title; ?></td>
                                            <td><?php echo $s->slider_link; ?></td>
                                            <td><img src="<?php echo base_url('assets/image/slider').'/'.$s->silder_image; ?>" class="img-responsive"></td>
                                            <td>
                                                <a href="<?php echo base_url('admin/edit/slider/'.$s->slider_id); ?>" class="btn btn-warning btn-bordred waves-effect w-md waves-light m-b-5">Edit</a>
                                                <a href="<?php echo base_url('admin/delete/slider/'.$s->slider_id.'/'.$s->silder_image); ?>" id="" class="delete-slider btn btn-danger btn-bordred waves-effect w-md waves-light m-b-5">Delete</a>
                                            </td>
                                        </tr>

                                        <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <footer class="footer">
                2016 © Besha Analitika | Go To : <a href="<?php echo base_url('home'); ?>" target="_blank" class="text-muted">www.besha-analitika.co.id</a>
            </footer>
        </div> <!-- container -->
    </div> <!-- content -->



</div>