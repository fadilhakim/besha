<?php foreach($news as $row)?>

 <!-- Page Content -->
<div id="container">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?php echo base_url('home'); ?>"><i class="fa fa-home"></i></a></li>
            <li><a href="#">news</a></li>
        </ul>
        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <!-- <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1> -->
                
                <!-- First Blog Post -->
                    <h2>
                        <a href="#"><?php echo $row->news_title; ?></a>
                    </h2>
                    <p class="lead">
                        by <a href="index.php">Admin</a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $row->createdate; ?></p>
                    <hr>
                    <img class="img-responsive" src="<?php echo base_url('assets/image/news/').$row->news_image; ?>" alt="">
                    <hr>
                    <p><?php echo $row->news_desc; ?></p>

                    <hr>
                <!-- Pager -->
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>
    </div>
</div>
    <!-- /.container -->