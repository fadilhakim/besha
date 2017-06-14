<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<?php foreach ($order as $row) {
    
      $id_order=$row->id_order;

}

?>
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">  
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-title">Member <?php echo $company_name; ?> </h4>
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Edit Membership</h4>
                                <form class="form-horizontal group-border-dashed" enctype="multipart/form-data" action="<?php echo base_url('admin/edit/member_f'); ?>"  method="post">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Company Name :</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" value="<?php echo $user_id; ?>" name="user_id" required placeholder="user_id" type="hidden">
                                            <input class="form-control" value="<?php echo $company_name; ?>" name="company_name" required placeholder="company_name" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Status Membership :</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="act_status">
                                                <?php if ($act_status == '0') {?>
                                                    <option selected="selected" value="<?php echo $act_status; ?>">Unactive</option>
                                                <?php } else { ?>
                                                    <option selected="selected" value="<?php echo $act_status; ?>">Active</option>
                                                <?php } ?>
                                                <option value="0">Unactive</option>
                                                <option value="1">Active</option>
                                            </select>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Discount % :</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" value="<?php echo $discount_price; ?>" name="discount_price" required placeholder="Discount Price" type="number">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Contact Person :</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" value="<?php echo $contact_person; ?>" name="contact_person" required placeholder="contact person" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">No Telephone :</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" value="<?php echo $no_tlp; ?>" name="no_tlp" required placeholder="No Telephone" type="number">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">No Fax :</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" value="<?php echo $no_fax; ?>" name="no_fax" required placeholder="No Fax" type="number">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">No Handphone :</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" value="<?php echo $no_hp; ?>" name="no_hp" required placeholder="No hp" type="number">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Email :</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" value="<?php echo $email; ?>" name="email" required placeholder="No hp" type="email">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">NPWP No :</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" value="<?php echo $npwp_no; ?>" name="npwp_no" required placeholder="Npwp No" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">NPWP Address :</label>
                                        <div class="col-sm-9">
                                            <textarea  class="form-control" name="npwp_address" required="" placeholder="NPWP Address"><?php echo $npwp_address; ?></textarea> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Billing Address :</label>
                                        <div class="col-sm-9">
                                            <textarea  class="form-control" name="billing_address" required="" placeholder="Billing Address"><?php echo $billing_address; ?></textarea> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Shipping Address :</label>
                                        <div class="col-sm-9">
                                            <textarea  class="form-control" name="shipping_address" required="" placeholder="Shipping Address"><?php echo $shipping_address; ?></textarea> 
                                        </div>
                                    </div>

                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit";>
                                            Save
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
                <?php echo date("Y");?> © Besha Analitika | Go To : <a href="<?php echo base_url('home'); ?>" target="_blank" class="text-muted">www.besha-analitika.co.id</a>
            </footer>
        </div> <!-- container -->
    </div> <!-- content -->



</div>