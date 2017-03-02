<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">  
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-title">
                        <a href="<?php echo base_url('admin/product'); ?>" class="btn btn-success btn-bordred waves-effect w-md waves-light m-b-5">Add New Product</a>
                        <a href="<?php echo base_url('admin/product-list'); ?>" class="btn btn-success btn-bordred waves-effect w-md waves-light m-b-5">List Product</a>
                    </h4>
                    <div class="row">
                        <div class="col-lg-12" style="overflow:scroll;">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Product List</h4>

                                <table id="datatable-keytable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Product Title</th>
                                            <th>Product Display</th>
                                            <th>Product Category</th>
                                            <th>Featured Product</th>
                                            <th>Product Brand</th>
                                            <th>Product Detail</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php 
                                        $i = 1;
                                        foreach ($product as $p) { ?>
                                        
                                        <tr>
                                            <td><?php echo $i; $i++;?></td>
                                            <td><?php echo $p->product_title; ?></td>
                                            <td><img src="<?php echo base_url('assets/image/product/').$p->product_image_1; ?>" class="img-responsive"></td>
                                            <td><?php echo $p->product_category; ?></td>
                                            <td><?php
                                                $featured = $p->featured;
                                                if ($featured == '1') {
                                                    echo "Yes";
                                                }
                                                else {
                                                    echo "No";
                                                }
                                                ?>
                                            </td>
                                            <td><?php
                                                $manu_title_p = $p->manu_id;

                                                foreach ($manu as $m) {
                                                        $manu_title_m = $m->manu_id;
                                                        if($manu_title_p == $manu_title_m){ 
                                                            echo $m->manu_title;
                                                        }
                                                    }
                                                ?>

                                            </td>
                                            <td>
                                                <a href="" class="btn btn-info waves-effect w-xs waves-light m-b-5"> <i class="fa fa-newspaper-o m-r-5"></i> <span></span> </a>
                                            </td>
                                            <td>
                                                <a href="<?php  echo base_url('admin/edit_product/'.$p->manu_id.'/'.$p->category_url.'/'.$p->product_slug); ?>" class="btn btn-warning btn-bordred waves-effect w-md waves-light m-b-5">Edit</a>
                                                <a href="<?php echo base_url('admin/delete/product/'.$p->product_id); ?>" id="" class="delete-manu btn btn-danger btn-bordred waves-effect w-md waves-light m-b-5">Delete</a>
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
        <!-- Plugin JS -->
        