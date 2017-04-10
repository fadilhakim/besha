<!-- ============================================================== -->

<!-- Start right Content here -->

<!-- ============================================================== -->

<?php 

foreach ($sparepart as $row) ?>

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

                                <h4 class="header-title m-t-0 m-b-30">Product Name : <?php echo $row->sparepart_name; ?></h4>
								<?=$this->session->flashdata("message");?>
                                <form class="form-horizontal group-border-dashed" enctype="multipart/form-data" action="<?php echo base_url('admin/edit/sparepart_f'); ?>"  method="post">

                                    <div class="form-group">

                                        <label class="col-sm-3 control-label" style="text-align:left;">Product Name</label>

                                        <div class="col-sm-9">

                                            <input class="form-control" value="<?php echo $row->sparepart_id; ?>" name="sparepart_id" type="hidden">
                                            
                                             <input class="form-control" value="<?php echo $row->sparepart_code; ?>" name="sparepart_code" type="hidden">

                                            <input class="form-control" value="<?php echo $row->sparepart_name; ?>" name="sparepart_name" required placeholder="Change Title " type="text">

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <label class="col-sm-3 control-label" style="text-align:left;">Product Brand</label>

                                        <div class="col-sm-9">

                                            <select class="form-control" name="manu_id">

                                            <?php

                                                $manu_id = $row->manu_id;

                                                $this->db->where('manu_id',$manu_id);

                                                $r = $this->db->get('manufacturer_tbl');

                                                    if($r->num_rows()>0)

                                                {

                                                    foreach ($r -> result_array() as $rows) {

                                                    $data1[] = $rows;

                                                    }

                                                }

                                                foreach($data1 as $manuma)?>

                                            

                                                <option selected="selected" value="<?php echo $manuma['manu_id']; ?>"><?php echo $manuma['manu_title']; ?></option>

                                                <?php foreach ($manu as $value) { ?>

                                                    <option value="<?php echo $value->manu_id; ?>"><?php echo $value->manu_title; ?></option>

                                                <?php } ?>

                                            </select>

                                        </div>

                                    </div>





                                    <div class="form-group">

                                        <label class="col-sm-3 control-label" style="text-align:left;">Sparepart Category</label>

                                        <div class="col-sm-9">

                                            <select class="form-control" name="sparepart_category">

                                                <option selected="selected" value="<?php echo $row->sparepart_category; ?>"><?php echo $row->sparepart_category; ?></option>

                                                <?php foreach ($category as $c) { ?> 

                                                    <option value="<?php echo $c->category_slug; ?>"><?php echo $c->category_title; ?></option>

                                                <?php } ?>

                                            </select>

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <label class="col-sm-3 control-label" style="text-align:left;">Sparepart Code</label>

                                        <div class="col-sm-9">

                                            <input class="form-control" value="<?php echo $row->sparepart_code; ?>" name="catalog_code" required placeholder="Change Product Code " type="text">

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <label class="col-sm-3 control-label" style="text-align:left;">Sparepart Price</label>

                                        <div class="col-sm-9">

                                            <input class="form-control" value="<?php echo $row->sparepart_price; ?>" name="sparepart_price" required placeholder="Change Product Code " type="text">

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <label class="col-sm-3 control-label" style="text-align:left;">Stock</label>

                                        <div class="col-sm-9">

                                            <input class="form-control" value="<?php echo $row->stock; ?>" name="stock" required type="number">

                                        </div>

                                    </div>



                                     <div class="form-group">

                                        <label class="col-sm-3 control-label" style="text-align:left;">Weight</label>

                                        <div class="col-sm-9">

                                            <input class="form-control" value="<?php echo $row->berat; ?>" name="berat" required placeholder="In Kilogram" data-parsley-id="34" kl_virtual_keyboard_secure_input="on" type="text">

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <label class="col-sm-3 control-label" style="text-align:left;">Size / Dimension</label>

                                        <div class="col-sm-9">

                                            <input class="form-control" name="dimensi" value="<?php echo $row->dimensi; ?>" required placeholder="In Milimeter" data-parsley-id="34" kl_virtual_keyboard_secure_input="on" type="text">

                                        </div>

                                    </div>





                                    <div class="form-group">

                                        <label class="col-sm-3 control-label" style="text-align:left;">Image Group</label>

                                        <div class="col-sm-9">

                                            <div class="row">

                                                <div class="col-lg-12">



                                                    <div class="col-sm-3">

                                                        <label class="control-label" style="text-align:center; display:block;">Sparepart Thumbnail</label><br>



                                                        <?php if($row->sparepart_image != '') {?>

                                                            <img src="<?php echo base_url('assets/sp/images/products/').$row->sparepart_image; ?>" class="img-responsive">

                                                        <?php } else {?>

                                                            <img src="<?php echo base_url('assets/sp/images/no-image.png')?>" class="img-responsive">

                                                        <?php } ?>



                                                        <label class="col-sm-12 control-label" style="text-align:center;">Select New Image</label>

                                                        <div class="col-sm-12">

                                                        <br>

                                                        <input class="form-control" value="<?php echo $row->sparepart_image; ?>" name="sparepart_image_old_1" type="hidden">

                                                        <input class="" name="sparepart_image_new_1" type="file">

                                                        </div>

                                                    </div>



                                                    <div class="col-sm-3">

                                                        <label class="control-label" style="text-align:center; display:block;">Sparepart Image 2</label><br>

                                                        <?php if($row->sparepart_image_2 != '') {?>

                                                            <img src="<?php echo base_url('assets/sp/images/products/').$row->sparepart_image_2; ?>" class="img-responsive">

                                                        <?php } else {?>

                                                            <img src="<?php echo base_url('assets/sp/images/no-image.png')?>" class="img-responsive">

                                                        <?php } ?>

                                                        <label class="col-sm-12 control-label" style="text-align:center;">Select New Image</label>

                                                        <div class="col-sm-12">

                                                        <br>

                                                        <input class="form-control" value="<?php echo $row->sparepart_image_2; ?>" name="sparepart_image_old_2" type="hidden">

                                                            <input class="" name="sparepart_image_new_2" type="file">

                                                        </div>

                                                    </div>



                                                    <div class="col-sm-3">

                                                        <label class="control-label" style="text-align:center; display:block;">Sparepart Image 3</label><br>

                                                        <?php if($row->sparepart_image_3 != '') {?>

                                                            <img src="<?php echo base_url('assets/sp/images/products/').$row->sparepart_image_3; ?>" class="img-responsive">

                                                        <?php } else {?>

                                                            <img src="<?php echo base_url('assets/sp/images/no-image.png')?>" class="img-responsive">

                                                        <?php } ?>

                                                        <label class="col-sm-12 control-label" style="text-align:center;">Select New Image</label>

                                                        <div class="col-sm-12">

                                                        <br>

                                                        <input class="form-control" value="<?php echo $row->sparepart_image_3; ?>" name="sparepart_image_old_3" type="hidden">

                                                            <input class="" name="sparepart_image_new_3" type="file">

                                                        </div>

                                                    </div>



                                                    <div class="col-sm-3">

                                                        <label class="control-label" style="text-align:center; display:block;">Sparepart Image 4</label><br>

                                                        <?php if($row->sparepart_image_4 != '') {?>

                                                            <img src="<?php echo base_url('assets/sp/images/products/').$row->sparepart_image_4; ?>" class="img-responsive">

                                                        <?php } else {?>

                                                            <img src="<?php echo base_url('assets/sp/images/no-image.png')?>" class="img-responsive">

                                                        <?php } ?>

                                                        <label class="col-sm-12 control-label" style="text-align:center;">Select New Image</label>

                                                        <div class="col-sm-12">

                                                        <br>

                                                        <input class="form-control" value="<?php echo $row->sparepart_image_4; ?>" name="sparepart_image_old_4" type="hidden">

                                                            <input class="" name="sparepart_image_new_4" type="file">

                                                        </div>

                                                    </div>



                                                </div>

                                            </div>

                                        </div>

                                        

                                    </div>



                                    <div class="form-group">

                                        <label class="col-sm-3 control-label" style="text-align:left;">Sparepart Text Preview</label>

                                        <div class="col-sm-9">

                                            <textarea class="form-control" name="sparepart_text_preview"><?php echo $row->sparepart_text_preview; ?></textarea>

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <label class="col-sm-3 control-label" style="text-align:left;">Sparepart Description</label>

                                        <div class="col-sm-9">

                                            <textarea id="editor2" class="form-control" name="sparepart_desc"><?php echo $row->sparepart_desc; ?></textarea>

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

                                        <a class="sa-success-product-edit btn btn-danger waves-effect waves-light" href="<?php echo base_url('admin/list_sparepart'); ?>">

                                            Cancel / Back to List Sparepart

                                        </a>

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