<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">  
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-title">Manufacturer</h4>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Add Manufacturer</h4>
                                <form class="form-horizontal group-border-dashed" enctype="multipart/form-data" action="<?php echo base_url('admin/add/manufacturer'); ?>"  method="post">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Manufacturer Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="manu_name" required placeholder="Manufacturer Title" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Manufacturer Link</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="manu_link" required="" placeholder="Manufacturer Link" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Manufacturer Logo</label>
                                        <div class="col-sm-9">
                                            <input class="" name="manu_image" required="" type="file">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Manufacturer Description</label>
                                        <div class="col-sm-9">
                                            <textarea id="editor"  class="form-control" name="manu_desc" required="" placeholder="Description"></textarea>
                                            <script>
                                            CKEDITOR.replace( 'editor' );
                                            </script>
                                         </div>
                                    </div>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit";>
                                            Add Manufacturer
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-10">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Manufacturer List</h4>

                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Manufacturer Name</th>
                                            <th>Manufacturer Link</th>
                                            <th>Manufacuturer Logo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; foreach ($manu as $m) { ?>
                                        <tr>
                                            <th scope="row"><?php echo $i; $i++;?></th>
                                            <td><?php echo $m->manu_title; ?></td>
                                            <td><?php echo $m->manu_link; ?></td>
                                            <td><img src="<?php echo base_url('assets/image/manufacturer').'/'.$m->manu_image;; ?>" class="img-responsive"></td>
                                            <td>
                                                <a href="<?php echo base_url('admin/edit/manufacturer/'.$m->manu_id); ?>" class="btn btn-warning btn-bordred waves-effect w-md waves-light m-b-5">Edit</a>
                                                <a href="<?php echo base_url('admin/delete/manufacturer/'.$m->manu_id.'/'.$m->manu_image); ?>" class="delete-manu btn btn-danger btn-bordred waves-effect w-md waves-light m-b-5">Delete</a>
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