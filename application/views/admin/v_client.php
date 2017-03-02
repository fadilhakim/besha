<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">  
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-title">Clients</h4>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Add Client</h4>
                                <form class="form-horizontal group-border-dashed" enctype="multipart/form-data" action="<?php echo base_url('admin/add/client'); ?>"  method="post">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Client Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="client_name" required placeholder="Slider Title" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Select Image</label>
                                        <div class="col-sm-9">
                                            <input class="" name="client_image" required="" type="file">
                                        </div>
                                    </div>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit";>
                                            <i class="zmdi zmdi-plus-circle m-r-5"></i>
                                            <span>Add Client</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-10">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">List Clients</h4>

                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Client Name</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($clients as $c) { ?>
                                        <tr>
                                            <th scope="row"><?php echo $c->client_id; ?></th>
                                            <td><?php echo $c->client_name; ?></td>
                                             <td><img src="<?php echo base_url('assets/image/clients').'/'.$c->client_image;; ?>" class="img-responsive"></td>
                                            <td>
                                                <button type="button" class="btn btn-warning btn-bordred waves-effect w-md waves-light m-b-5">Edit</button>
                                                <a href="<?php echo base_url('admin/delete/client/'.$c->client_id.'/'.$c->client_image); ?>" id="" class="delete-client btn btn-danger btn-bordred waves-effect w-md waves-light m-b-5">Delete</a>

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