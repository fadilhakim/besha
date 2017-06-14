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
                        <a href="<?php echo base_url('admin/order_history'); ?>" class="btn btn-success btn-bordred waves-effect w-md waves-light m-b-5">Order History</a>
                    </h4>
                    <div class="row">
                        <div class="col-lg-12" style="overflow:scroll;">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Product List</h4>
								<?=$this->session->flashdata("message");?>
                                <table id="datatable-buttons"" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Sparepart Title</th>
                                            <th>Sparepart Code</th>
                                            <th>Sparepart Display</th>
                                            <th>Stock</th>
                                            <th>Sparepart Category</th>
                                            <th>Sparepart Manufacturer</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php 
                                        $i = 1;
                                        foreach ($sparepart as $p) { ?>
                                        
                                        <tr>
                                            <td><?php echo $i; $i++;?></td>
                                            <td><?php echo $p->sparepart_name; ?></td>
                                            <td><?php echo $p->sparepart_code; ?></td>
                                            <td>
                                                <?php if ($p->sparepart_image != ''){ ?>
                                                    <img src="<?php echo base_url('assets/sp/images/products/').$p->sparepart_image; ?>" width='120' class="img-responsive ss">
                                                <?php } else if ($p->sparepart_image_2 != '' ) { ?>
                                                     <img src="<?php echo base_url('assets/sp/images/products/').$p->sparepart_image_2; ?>" width='120' class="img-responsive dd">  
                                                <?php } else if($p->sparepart_image_3 != '') { ?>
                                                    <img src="<?php echo base_url('assets/sp/images/products/').$p->sparepart_image_3; ?>" width='120' class="img-responsive cc">
                                                   <?php } else if($p->sparepart_image_4 != '') { ?>
                                                    <img src="<?php echo base_url('assets/sp/images/products/').$p->sparepart_image_4; ?>" width='120' class="img-responsive ee">   
                                                <?php }else {?>
                                                    <img src="<?php echo base_url('assets/sp/images/no-image.png'); ?>" width='120' class="img-responsive">
                                                <?php } ?>
                                                
                                            </td>
                                            <td>
                                              <?php echo $p->stock; ?>  
                                            </td>
                                            <td><?php echo $p->sparepart_category; ?></td>
                                            <td>
                                            <?php
                                                $manu_id = $p->manu_id;
                                                $this->db->where('manu_id',$manu_id);
                                                $r = $this->db->get('manufacturer_tbl');
                                                    if($r->num_rows()>0)
                                                {
                                                    foreach ($r -> result_array() as $rows) {
                                                    $data1[] = $rows;
                                                    }
                                                }
                                                foreach($data1 as $manuma){}

                                            ?>
                                            <?php echo $manuma['manu_title'];; ?>
                                            </td>
                                            <td>
                                                <a href="<?php  echo base_url('admin/edit_sparepart/'.$p->sparepart_id.'/'.$p->sparepart_code); ?>" class="btn btn-warning btn-bordred waves-effect w-md waves-light m-b-5">Edit / Detail</a>
                                                 <?php
                                                    $cek_rol = $this->session->userdata('role_id');

                                                    if($cek_rol == 1 ){ ?>
                                                <a href="<?php echo base_url('admin/delete/sparepart/'.$p->sparepart_id.'/'.$p->sparepart_code); ?>" id="" class="delete-manu btn btn-danger btn-bordred waves-effect w-md waves-light m-b-5">Delete</a>

                                                <?php } ?>
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
                <?php echo date("Y");?> © Besha Analitika | Go To : <a href="<?php echo base_url('home'); ?>" target="_blank" class="text-muted">www.besha-analitika.co.id</a>
            </footer>
        </div> <!-- container -->
    </div> <!-- content -->

</div>
        <!-- Plugin JS -->
        