<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<?php foreach ($news->result() as $row) {
    
      $news_id=$row->news_id;
      $news_name=$row->news_title;
      $news_image=$row->news_image;
      $news_thumbnail=$row->news_thumbnail;
      $news_desc=$row->news_desc;
}

?>
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">  
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-title">news</h4>
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Add news</h4>
                                <form class="form-horizontal group-border-dashed" enctype="multipart/form-data" action="<?php echo base_url('admin/edit/news_f'); ?>"  method="post">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">news Title</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" value="<?php echo $news_id; ?>" name="news_id" required placeholder="news Title" type="hidden">
                                            <input class="form-control" value="<?php echo $news_name; ?>" name="news_name" required placeholder="news Title" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">News Thumbnail</label>
                                        <div class="col-sm-9">
                                            <?php if($news_thumbnail != '') {?>
                                                <img src="<?php echo base_url('assets/image/news/').$news_thumbnail; ?>" class="img-responsive">
                                            <?php } else {?>
                                                <img src="<?php echo base_url('assets/image/no-image.png')?>" class="img-responsive">
                                            <?php } ?>
                                            <input class="" value="<?php echo $news_thumbnail; ?>" name="news_thumb_old" required="" type="hidden">
                                            <br>
                                            <p>Change Image Thumbnail <input class="" name="news_thumb"  type="file"></p>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">News image</label>
                                        <div class="col-sm-9">
                                            <?php if($news_image != '') {?>
                                                <img src="<?php echo base_url('assets/image/news/').$news_image; ?>" class="img-responsive">
                                            <?php } else {?>
                                                <img src="<?php echo base_url('assets/image/no-image.png')?>" class="img-responsive">
                                            <?php } ?>
                                            <input class="" value="<?php echo $news_image; ?>" name="news_image_old" required="" type="hidden">
                                            <br>
                                            <p>Change Image <input class="" name="news_image"  type="file"></p>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">news Description</label>
                                        <div class="col-sm-9">
                                            <textarea id="editor3"  class="form-control" name="news_desc" required="" placeholder="Description"><?php echo $news_desc; ?></textarea> 
                                        </div>
                                    </div>
                                     <script type="text/javascript">
                                            CKEDITOR.replace( 'editor3' );
                                            CKEDITOR.add            
                                    </script>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit";>
                                            Edit news
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