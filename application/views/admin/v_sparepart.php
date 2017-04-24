<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">  
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-title">
                        <a href="<?php echo base_url('admin/sparepart'); ?>" class="btn btn-success btn-bordred waves-effect w-md waves-light m-b-5">Add New Sparepart</a>
                        <a href="<?php echo base_url('admin/list_sparepart'); ?>" class="btn btn-success btn-bordred waves-effect w-md waves-light m-b-5">List Sparepart</a>
                        <a href="<?php echo base_url('admin/sparepart_category'); ?>" class="btn btn-success btn-bordred waves-effect w-md waves-light m-b-5">Category Sparepart</a>
                    </h4>
                    <div class="row">

                      <?php
                        $cek_rol = $this->session->userdata('role_id');

                        if($cek_rol != 1 ){ ?>
                        <div class="col-lg-12">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">You don't have access to add new Sparepart</h4>
                            </div>
                        </div>
                        <?php } else { ?>
                        <div class="col-lg-12">
                            <div class="card-box">
                                <form class="form-horizontal group-border-dashed" enctype="multipart/form-data" action="<?php echo base_url('admin/add/sparepart'); ?>" method="post">
                                    <div class="row">
                                        
                                        <h4 class="header-title m-t-0 m-b-30">Add New Sparepart</h4>
                                        <div class="col-lg-6">
                                        
                                        
                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Sparepart Name</label>
                                                <div class="col-sm-7">
                                                    <input class="form-control" name="sparepart_name" required="" placeholder="Type something" data-parsley-id="34" kl_virtual_keyboard_secure_input="on" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Sparepart Manufacturer</label>
                                                <div class="col-sm-7">
                                                    <select required class="form-control" name="manu_id">
                                                        <option value="">---</option>
                                                        <?php foreach ($manu as $m) { ?>
                                                            <option value="<?php echo $m->manu_id; ?>"><?php echo $m->manu_title; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Sparepart Category</label>
                                                <div class="col-sm-7">
                                                    <select required class="form-control" name="sparepart_category">
                                                        <option value="">---</option>
                                                        <?php foreach ($sp_category as $c) { ?>
                                                            <option value="<?php echo $c->category_slug; ?>"><?php echo $c->category_title; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Catalog Code</label>
                                                <div class="col-sm-7">
                                                    <input name="catalog_code" class="form-control" required="" placeholder="Type something" data-parsley-id="34" kl_virtual_keyboard_secure_input="on" type="text">
                                                </div>
                                            </div>

                                            
                                        </div>

                                        <div class="col-lg-6">

                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Sparepart Price</label>
                                                <div class="col-sm-7">
                                                 <?php
                                                    $cek_rol = $this->session->userdata('role_id');
                                                     if($cek_rol == 2 ){ ?>
                                                       <input class="form-control" name="sparepart_price" readonly="" style="background-color: #ccc !important;" placeholder="Sparepart Price" type="number">
                                                      <?php } else {?>
                                                        <input class="form-control" name="sparepart_price" required="" placeholder="Sparepart Price" data-parsley-id="34" kl_virtual_keyboard_secure_input="on" type="number">
                                                  <?php } ?>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Stock</label>
                                                 <div class="col-sm-7">
                                                    <?php
                                                    $cek_rol = $this->session->userdata('role_id');
                                                    if($cek_rol == 3 ){ ?>
                                                             <input class="form-control" name="sparepart_stock" readonly="" style="background-color: #ccc !important;" placeholder="Sparepart Stock" type="number">
                                                    <?php } else {?>
                                                             <input class="form-control" name="sparepart_stock" required="" placeholder="Sparepart Stock" data-parsley-id="34" kl_virtual_keyboard_secure_input="on" type="number">
                                                           
                                                    <?php } ?>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Weight</label>
                                                <div class="col-sm-7">
                                                    <input class="form-control" name="berat" required="" placeholder="In Kilogram" data-parsley-id="34" kl_virtual_keyboard_secure_input="on" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Size / Dimension</label>
                                                <div class="col-sm-7">
                                                    <input class="form-control" name="dimensi" required="" placeholder="In Milimeter" data-parsley-id="34" kl_virtual_keyboard_secure_input="on" type="text">
                                                </div>
                                            </div>

                                            
                                            <!-- <div class="alert alert-info">
                                              <strong>Warning!</strong> image size should be H : 250 W : 300 
                                            </div> -->
                                        </div>
                                      
                                    </div>  <hr style="border:1px solid #ccc;">
                                    <div class="row">
                                        <h5 class="header-title m-t-0 m-b-30" style="color:#9B9FA4; margin-left:10px;">Sparepart image</h5>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Select Image 1 (Thumbnail)</label>
                                                <div class="col-sm-7">
                                                    <input name="sparepart_image" size="20" class="" placeholder="Type something" type="file">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Select Image 2</label>
                                                <div class="col-sm-7">
                                                    <input name="sparepart_image_2" size="20" class="" placeholder="Type something" type="file">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Select Image 3</label>
                                                <div class="col-sm-7">
                                                    <input name="sparepart_image_3" size="20" class="" placeholder="Type something" type="file">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Select Image 4</label>
                                                <div class="col-sm-7">
                                                    <input name="sparepart_image_4" size="20" class="" placeholder="Type something" type="file">
                                                </div>
                                            </div>
                                        </div>
                                    </div> <hr style="border:1px solid #ccc;">
                                    <div class="row">
                                        <h5 class="header-title m-t-0 m-b-30" style="color:#9B9FA4; margin-left:10px;">Sparepart Description</h5>
                                        <div class="col-lg-12">
                                        
                                        
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Sparepart Text Preview</label>
                                            <div class="col-sm-9">
                                                <textarea name="sparepart_text_preview" id="textarea" class="form-control" maxlength="225" rows="2" placeholder="This textarea has a limit of 225 chars."></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Sparepart Description</label>
                                            <div class="col-sm-9">
                                                <textarea id="editor2" name="sparepart_desc" id="textarea" class="form-control" rows="2" placeholder=""></textarea>
                                            </div>
                                        </div>

                                        </div>
                                           <script type="text/javascript">
                                            CKEDITOR.replace( 'editor2' );
                                            CKEDITOR.add            
                                            </script>

                                            <script type="text/javascript">
                                            CKEDITOR.replace( 'editor3' );
                                            CKEDITOR.add            
                                            </script>
                                        
                                        <div class="form-group text-right m-b-0">
                                            <button type="submit" id="sa-success-product" class="btn btn-success waves-effect waves-light btn-sm m-b-5">
                                            <i class="zmdi zmdi-plus-circle m-r-5"></i>
                                            <span>Add Sparepart</span>
                                            </button>
                                        </div>

                                        <?php echo $this->session->flashdata('error_product'); ?>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php } ?>
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
        <!-- Plugin JS -->
        