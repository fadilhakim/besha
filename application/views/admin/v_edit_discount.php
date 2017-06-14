<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<?php foreach ($discount->result() as $row) {
    
      $discount_id=$row->discount_id;
      $discount_name=$row->discount_name;
      $discount_price=$row->discount_price;
      $discount_desc=$row->discount_desc;
      $discount_code=$row->discount_code;
      $start_date=$row->start_date;
      $expired_date=$row->expired_date;

}

?>
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">  
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-title">Vouchers</h4>
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Add Voucher</h4>
                                <form class="form-horizontal group-border-dashed" enctype="multipart/form-data" action="<?php echo base_url('admin/edit/discount_f'); ?>"  method="post">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Voucher Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="discount_id" value="<?php echo $discount_id; ?>" type="hidden">
                                            <input class="form-control" name="discount_name" value="<?php echo $discount_name; ?>" required placeholder="Discount Name" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Voucher Code</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="discount_code" value="<?php echo $discount_code; ?>" required placeholder="Discount Code" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Voucher Expired</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" value="<?php echo $start_date; ?>" name="start_date" required placeholder="Start Date" type="text">
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" value="<?php echo $expired_date; ?>" name="expired_date" required placeholder="Expired Date" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Discount %</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="discount_price" value="<?php echo $discount_price; ?>" required placeholder="Discount Price" type="number">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Voucher Description</label>
                                        <div class="col-sm-9">
                                            <textarea id="editor3"  class="form-control" name="discount_desc" required="" placeholder="Discount Description"><?php echo $discount_desc; ?></textarea> 
                                        </div>
                                    </div>
                                    <?php echo $this->session->flashdata('error_product'); ?>
                                    <script type="text/javascript">
                                            CKEDITOR.replace( 'editor3' );
                                            CKEDITOR.add            
                                    </script>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit";>
                                            Add Voucher
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
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