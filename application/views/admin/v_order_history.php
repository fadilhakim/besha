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
                                            <th>Order ID</th>
                                            <th>Company</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Date Order</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php 
                                        $i = 1;
                                        foreach ($order as $o) { ?>
                                        
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $o->id_order; ?></td>
                                            <td>LEFT JOIN COMPANY FROM MEMBER</td>
                                            <td>LEFT JOIN PHONE FROM MEMBER</td>
                                            <td>LEFT JOIN EMAIL FROM MEMBER</td>
                                            <td><?php echo $o->create_date; ?></td>
                                            <td><?php echo $o->status; ?></td>
                                            <td>
                                                <a href="<?php  echo base_url('admin/edit_order/'.$o->id_order); ?>" class="btn btn-warning btn-bordred waves-effect w-md waves-light m-b-5">Edit / Detail</a>
                                                 <?php
                                                    $cek_rol = $this->session->userdata('role_id');

                                                    if($cek_rol == 1 ){ ?>
                                                <a href="<?php echo base_url('admin/delete/order/'); ?>" id="" class="delete-manu btn btn-danger btn-bordred waves-effect w-md waves-light m-b-5">Delete</a>

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
        