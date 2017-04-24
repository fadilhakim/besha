<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<?php foreach ($product_cat->result() as $row) {
    
      $product_id=$row->product_id;
      $product_title=$row->product_title;
      $product_desc=$row->product_descrption;
      $product_specification=$row->product_specification;
      $product_text=$row->product_text_preview;

      $product_brand=$row->manu_id;
      $product_code=$row->product_code;
      $product_availability=$row->product_availability;
      $product_category=$row->product_category;
      $featured=$row->featured;

      $product_image_1=$row->product_image_1;
      $product_image_2=$row->product_image_2;
      $product_image_3=$row->product_image_3;
      $product_image_4=$row->product_image_4;
}

?>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">  
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-title">Edit Product</h4>
                    <div class="row">
                        <div class="col-lg-12">
                 
                            
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Product Name : <?php echo $product_title; ?></h4>
                                <?=$this->session->flashdata("message")?>
                                <form class="form-horizontal group-border-dashed" enctype="multipart/form-data" action="<?php echo base_url('admin/edit/product_f'); ?>"  method="post">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Product Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" value="<?php echo $product_id; ?>" name="product_id" type="hidden">
                                            <?php
                                                $cek_rol = $this->session->userdata('role_id');

                                                if($cek_rol != 1 ){ ?>
                                                <input class="form-control" style="background-color: #ccc !important" value="<?php echo $product_title; ?>" name="product_title" readonly="" placeholder="Change Product Title " type="text">
                                                <?php } else { ?>
                                                <input class="form-control" value="<?php echo $product_title; ?>" name="product_title" required placeholder="Change Title " type="text">

                                                <?php } ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Product Brand</label>
                                        <div class="col-sm-9">
                                            
                                                <?php
                                                    $cek_rol = $this->session->userdata('role_id');

                                                    if($cek_rol != 1 ){ ?>
                                                        <?php foreach ($manufacturer as $ma) { ?>
                                                         <input class="form-control" style="background-color: #ccc !important" value="<?php echo $ma->manu_title; ?>" name="manu_id" readonly="" placeholder="Change Product Brand " type="text">
                                                        <?php } ?> 
                                                    <?php } else { ?>
                                                        <select class="form-control" name="manu_id">
                                                        <?php foreach ($manufacturer as $ma) { ?> 
                                                            <option selected="selected"   value="<?php echo $ma->manu_id; ?>"><?php echo $ma->manu_title; ?></option>
                                                        <?php } ?>

                                                        <?php foreach ($manu as $m) { ?>
                                                            <option value="<?php echo $m->manu_id; ?>"><?php echo $m->manu_title; ?></option>
                                                        <?php } ?> 
                                                         </select>
                                                <?php } ?>

                                           
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Product Category</label>
                                        <div class="col-sm-9">
                                              <?php
                                                    $cek_rol = $this->session->userdata('role_id');

                                                    if($cek_rol != 1 ){ ?>
                                                        
                                                        <input class="form-control" style="background-color: #ccc !important" value="<?php echo $product_category; ?>" name="product_category" readonly="" placeholder="Change Product Category" type="text">
                                                    <?php } else { ?>
                                                    <select class="form-control" name="product_category">
                                                        <option selected="selected" value="<?php echo $product_category; ?>"><?php echo $product_category; ?></option>
                                                        <?php foreach ($category as $c) { ?> 
                                                            <option value="<?php echo $c->category_title; ?>"><?php echo $c->category_title; ?></option>
                                                        <?php } ?>
                                                    </select>

                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Product Code</label>
                                        <div class="col-sm-9">
                                            <?php
                                                $cek_rol = $this->session->userdata('role_id');

                                                if($cek_rol != 1 ){ ?>
                                                 <input class="form-control" style="background-color: #ccc !important" value="<?php echo $product_code; ?>" name="product_code" readonly="" placeholder="Change Product Code " type="text">
                                                <?php } else { ?>
                                                <input class="form-control" value="<?php echo $product_code; ?>" name="product_code" required placeholder="Change Product Code " type="text">
                                                <?php } ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Product Availability</label>
                                        <div class="col-sm-9">

                                              <?php
                                                $cek_rol = $this->session->userdata('role_id');
                                                if($cek_rol == 3 ){ ?>
                                                  <input class="form-control" value="<?php echo $product_availability; ?>" name="product_availability" readonly="" style="background-color: #ccc !important;" placeholder="Product Stock">
                                                <?php } else {?>
                                                          <select class="form-control" name="product_availability" required>
                                                             <option selected="selected" value="<?php echo $product_availability; ?>"><?php echo $product_availability; ?></option>
                                                            <?php foreach ($stock as $s) { ?>
                                                                <option value="<?php echo $s->status_title; ?>"><?php echo $s->status_title; ?></option>
                                                            <?php } ?>
                                                </select>
                                                       
                                                <?php } ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Featured Product</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="featured">
                                                <?php if ($featured == '0') {?>
                                                    <option selected="selected" value="<?php echo $featured; ?>">No</option>
                                                <?php } else { ?>
                                                    <option selected="selected" value="<?php echo $featured; ?>">Yes</option>
                                                <?php } ?>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Image Group</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <div class="col-sm-3">
                                                        <label class="control-label" style="text-align:center; display:block;">Product Thumbnail</label><br>

                                                        <?php if($product_image_1 != '') {?>
                                                            <img src="<?php echo base_url('assets/image/product/').$product_image_1; ?>" class="img-responsive">
                                                        <?php } else {?>
                                                            <img src="<?php echo base_url('assets/image/no-image.png')?>" class="img-responsive">
                                                        <?php } ?>

                                                        <label class="col-sm-12 control-label" style="text-align:center;">Select New Image</label>
                                                        <div class="col-sm-12">
                                                        <br>
                                                        <input class="form-control" value="<?php echo $product_image_1; ?>" name="product_image_old_1" type="hidden">
                                                            <input class="" name="product_image_new_1" type="file">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <label class="control-label" style="text-align:center; display:block;">Product Image 2</label><br>
                                                        <?php if($product_image_2 != '') {?>
                                                            <img src="<?php echo base_url('assets/image/product/').$product_image_2; ?>" class="img-responsive">
                                                        <?php } else {?>
                                                            <img src="<?php echo base_url('assets/image/no-image.png')?>" class="img-responsive">
                                                        <?php } ?>
                                                        <label class="col-sm-12 control-label" style="text-align:center;">Select New Image</label>
                                                        <div class="col-sm-12">
                                                        <br>
                                                        <input class="form-control" value="<?php echo $product_image_2; ?>" name="product_image_old_2" type="hidden">
                                                            <input class="" name="product_image_new_2" type="file">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <label class="control-label" style="text-align:center; display:block;">Product Image 3</label><br>
                                                        <?php if($product_image_3 != '') {?>
                                                            <img src="<?php echo base_url('assets/image/product/').$product_image_3; ?>" class="img-responsive">
                                                        <?php } else {?>
                                                            <img src="<?php echo base_url('assets/image/no-image.png')?>" class="img-responsive">
                                                        <?php } ?>
                                                        <label class="col-sm-12 control-label" style="text-align:center;">Select New Image</label>
                                                        <div class="col-sm-12">
                                                        <br>
                                                        <input class="form-control" value="<?php echo $product_image_3; ?>" name="product_image_old_3" type="hidden">
                                                            <input class="" name="product_image_new_3" type="file">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <label class="control-label" style="text-align:center; display:block;">Product Image 4</label><br>
                                                        <?php if($product_image_4 != '') {?>
                                                            <img src="<?php echo base_url('assets/image/product/').$product_image_4; ?>" class="img-responsive">
                                                        <?php } else {?>
                                                            <img src="<?php echo base_url('assets/image/no-image.png')?>" class="img-responsive">
                                                        <?php } ?>
                                                        <label class="col-sm-12 control-label" style="text-align:center;">Select New Image</label>
                                                        <div class="col-sm-12">
                                                        <br>
                                                        <input class="form-control" value="<?php echo $product_image_4; ?>" name="product_image_old_4" type="hidden">
                                                            <input class="" name="product_image_new_4" type="file">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Product Text Preview</label>
                                        <div class="col-sm-9">
                                                <?php
                                                $cek_rol = $this->session->userdata('role_id');
                                                if($cek_rol == 2 ){ ?>
                                                    <textarea class="form-control" readonly="" style="background-color: #ccc !important" name="product_text"><?php echo $product_text; ?></textarea>
                                                <?php } else {?>
                                                    <textarea class="form-control" name="product_text"><?php echo $product_text; ?></textarea>
                                                <?php } ?>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Product Description</label>
                                        <div class="col-sm-9">
                                         <?php
                                            $cek_rol = $this->session->userdata('role_id');
                                            if($cek_rol == 2 ){ ?>
                                            <textarea id="editor2" class="form-control" readonly=""  style="background-color: #ccc !important" name="product_desc"><?php echo $product_desc; ?></textarea>
                                            <?php } else { ?>
                                            <textarea id="editor2" class="form-control" name="product_desc"><?php echo $product_desc; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Product Specification</label>
                                        <div class="col-sm-9">
                                            <textarea id="editor3" class="form-control" name="product_specification"><?php echo $product_specification; ?></textarea>
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
                                        <button class="sa-success-product-edit btn btn-primary waves-effect waves-light" type="submit";>
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
                2016 © Besha Analitika | Go To : <a href="<?php echo base_url('home'); ?>" target="_blank" class="text-muted">www.besha-analitika.co.id</a>
            </footer>
        </div> <!-- container -->
    </div> <!-- content -->



</div>