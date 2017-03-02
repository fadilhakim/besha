<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">  
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-title">Discount</h4>
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Add Discount</h4>
                                <form class="form-horizontal group-border-dashed" enctype="multipart/form-data" action="<?php echo base_url('admin/add/discount'); ?>"  method="post">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Voucher Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="discount_name" required placeholder="Discount Name" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Voucher Code</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="discount_code" required placeholder="Discount Code" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Voucher Expired</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" name="start_date" required placeholder="Start Date" type="text">
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" name="expired_date" required placeholder="Expired Date" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Discount Price</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="discount_price" required placeholder="Discount Price" type="number">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Voucher Description</label>
                                        <div class="col-sm-9">
                                            <textarea id="editor3"  class="form-control" name="discount_desc" required="" placeholder="Discount Description"></textarea> 
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
                    <div class="col-lg-10">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Voucher List</h4>

                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Voucher Name</th>
                                            <th>Voucher Code</th>
                                            <th>Discount Price</th>
                                            <th>Voucher Description</th>
                                            <th>Start Date</th>
                                            <th>Expired Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1; foreach ($discount as $d) { ?>
                                        <tr>
                                            <th scope="row"><?php echo $i; $i++;?></th>
                                            <td><?php echo $d->discount_name; ?></td>
                                            <td><?php echo $d->discount_code; ?></td>
                                            <td><?php echo $d->discount_price; ?> %</td>
                                            <td><?php echo $d->discount_desc; ?> </td>
                                            <td><?php echo $d->start_date; ?> </td>
                                            <td><?php echo $d->expired_date; ?> </td>
                                            <td>
                                                <?php 

                                                    $status = $d->status; 
                                                    if($status == 1){
                                                        echo "Active";
                                                    }else
                                                    {
                                                        echo "Expired";
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url('admin/edit/discount/'.$d->discount_id); ?>" class="btn btn-warning btn-bordred waves-effect w-md waves-light m-b-5">Edit</a>
                                                <a href="<?php echo base_url('admin/delete/discount/'.$d->discount_id); ?>" id="" class="delete-event btn btn-danger btn-bordred waves-effect w-md waves-light m-b-5">Delete</a>
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