<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">  
            <div class="row">
                <div class="col-lg-8">
                    <h4 class="page-title">Pilih Menu :</h4>
                    <div class="row">
                        <?php
                            if($this->session->userdata('role_id')==1){ ?>
                        <div class="col-lg-4">
                            <a href="<?php echo base_url('admin/users_admin'); ?>">
                            <div class="card-box widget-user">
                                <div class="text-center">
                                    <h5>
                                        Admin Users
                                    </h5>
                                </div>
                            </div>
                            </a>
                        </div>

                        <div class="col-lg-4">
                            <a href="<?php echo base_url('admin/members'); ?>">
                            <div class="card-box widget-user">
                                <div class="text-center">
                                    <h5>
                                        Members
                                    </h5>
                                </div>
                            </div>
                            </a>
                        </div>
                        <?php } ?>

                        <div class="col-lg-4">
                            <a href="<?php echo base_url('admin/slider'); ?>">
                            <div class="card-box widget-user">
                                <div class="text-center">
                                    <h5>
                                        Sliders
                                    </h5>
                                </div>
                            </div>
                            </a>
                        </div>
                  
                    
                        <div class="col-lg-4">
                            <a href="<?php echo base_url('admin/product'); ?>">
                            <div class="card-box widget-user">
                                <div class="text-center">
                                    <h5>
                                        Products
                                    </h5>
                                </div>
                            </div>
                            </a>
                        </div>

                        <div class="col-lg-4">
                            <a href="<?php echo base_url('admin/sparepart'); ?>">
                            <div class="card-box widget-user">
                                <div class="text-center">
                                    <h5>
                                        Spareparts
                                    </h5>
                                </div>
                            </div>
                            </a>
                        </div>
                    
                    
                        <div class="col-lg-4">
                            <a href="<?php echo base_url('admin/event'); ?>">
                            <div class="card-box widget-user">
                                <div class="text-center">
                                    <h5>
                                        Event
                                    </h5>
                                </div>
                            </div>
                            </a>
                        </div>
                    

                    
                        <div class="col-lg-4">
                            <a href="<?php echo base_url('admin/news'); ?>">
                            <div class="card-box widget-user">
                                <div class="text-center">
                                    <h5>
                                        News
                                    </h5>
                                </div>
                            </div>
                            </a>
                        </div>
                    

                    
                        <div class="col-lg-4">
                            <a href="<?php echo base_url('admin/client'); ?>">
                            <div class="card-box widget-user">
                                <div class="text-center">
                                    <h5>
                                        Clients
                                    </h5>
                                </div>
                            </div>
                            </a>
                        </div>
                    

                    
                        <div class="col-lg-4">
                            <a href="<?php echo base_url('admin/susbscriber'); ?>">
                            <div class="card-box widget-user">
                                <div class="text-center">
                                    <h5>
                                        Susbscribers
                                    </h5>
                                </div>
                            </div>
                            </a>
                        </div>
                    

                    
                        <div class="col-lg-4">
                            <a href="<?php echo base_url('admin/manufacturer'); ?>">
                            <div class="card-box widget-user">
                                <div class="text-center">
                                    <h5>
                                        Manufacturers
                                    </h5>
                                </div>
                            </div>
                            </a>
                        </div>

                        <div class="col-lg-4">
                            <a href="<?php echo base_url('admin/discount'); ?>">
                            <div class="card-box widget-user">
                                <div class="text-center">
                                    <h5>
                                        Voucher Discount
                                    </h5>
                                </div>
                            </div>
                            </a>
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
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


    
        
        
