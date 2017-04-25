<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">  
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-title">Spareparts Category</h4>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Add Category Sparepart</h4>
                                <form class="form-horizontal group-border-dashed" enctype="multipart/form-data" action="<?php echo base_url('admin/add/category_sparepart'); ?>"  method="post">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Category Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="sparepart_category_name" required placeholder="Category Name" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group text-right m-b-0">
                                        <button id="sa-success-slider" class="btn btn-primary waves-effect waves-light" type="submit";>
                                            Add Category
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Add Category Sparepart in Manufacturer</h4>
                                <form class="form-horizontal group-border-dashed" enctype="multipart/form-data" action="<?php echo base_url('admin/add/category_to_manu'); ?>"  method="post">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Category Sparepart</label>
                                        <div class="col-sm-9">
                                            <select required class="form-control" name="cat_id">
                                                <option value="">---</option>
                                                <?php foreach ($category as $c) { ?>
                                                    <option value="<?php echo $c->sparepart_category_id; ?>"><?php echo $c->category_title; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Insert Into Manufacturers</label>
                                        <div class="col-sm-9">
                                            <select required class="form-control" name="manu_id">
                                                <option value="">---</option>
                                                <?php foreach ($manufacturer as $m) { ?>
                                                    <option value="<?php echo $m->manu_id; ?>"><?php echo $m->manu_title; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group text-right m-b-0">
                                        <button id="sa-success-slider" class="btn btn-primary waves-effect waves-light" type="submit";>
                                            Insert
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <?php if ($message != '') {?>
                            <div class="alert alert-danger fade in alert-dismissable">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                                <strong>Danger!</strong> <?php echo $message; ?>
                            </div>
                            <?php } else {}  ?>
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">List Category Sparepart</h4>

                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; foreach ($category as $c) { ?>
                                        <tr>
                                            <th scope="row"><?php echo $i; $i++;?></th>
                                            <td><?php echo $c->category_title; ?></td>
                                            <td>
                                                <a href="<?php echo base_url('admin/delete/sparepart_category/'.$c->category_slug); ?>" id="" class="delete-category btn btn-danger btn-bordred waves-effect w-md waves-light m-b-5">Delete</a>
                                            </td>
                                        </tr>

                                        <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-8">
                             <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">List Category In Manufacturer</h4>
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <?php $i=1; $j=1; foreach ($manufacturer as $m) { ?>
                                    <div class="panel panel-default bx-shadow-none">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; $i++;?>" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                                    <?php echo $m->manu_title; ?>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse<?php echo $j; $j++;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body">
                                                  <?php foreach ($m->subs as $key) { ?>
                                                    <?php
                                                      $id = $key->sparepart_category_id;
                                                        $this->db->where('sparepart_category_id',$id);
                                                        $r = $this->db->get('sparepart_category');
                                                        if($r->num_rows()>0)
                                                        {
                                                            foreach ($r -> result_array() as $row) {
                                                            $data1[] = $row;
                                                            }
                                                        }
                                                        foreach($data1 as $name)?>
                                                    <li style="min-height:45px;">
                                                        <a href="<?php echo base_url('spareparts/category/').$m->manu_id.'/'.$name['category_slug'].'/'.'1'; ?>"><em style="font-style:italic; font-size:15.5px; display:inline-block;"><?php echo $name['category_title']?></em></a>
                                                        <a style="display:inline-block; float:right;" href="<?php echo base_url('admin/delete/category_to_manu/'.$key->sparepart_category_id.'/'.$m->manu_id); ?>" id="" class="delete-category btn btn-danger btn-bordred waves-effect w-md waves-light m-b-5">Delete</a>

                                                    </li>
                                                  <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
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