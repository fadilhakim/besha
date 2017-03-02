<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<?php foreach ($event->result() as $row) {
    
      $event_id=$row->news_id;
      $event_name=$row->news_title;
      $event_image=$row->news_image;
      $event_desc=$row->news_desc;
}

?>
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">  
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-title">Event</h4>
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Add Event</h4>
                                <form class="form-horizontal group-border-dashed" enctype="multipart/form-data" action="<?php echo base_url('admin/edit/event_f'); ?>"  method="post">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Event Title</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" value="<?php echo $event_id; ?>" name="event_id" required placeholder="Event Title" type="hidden">
                                            <input class="form-control" value="<?php echo $event_name; ?>" name="event_name" required placeholder="Event Title" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Event image</label>
                                        <div class="col-sm-9">
                                            <?php if($event_image != '') {?>
                                                <img src="<?php echo base_url('assets/image/events/').$event_image; ?>" class="img-responsive">
                                            <?php } else {?>
                                                <img src="<?php echo base_url('assets/image/no-image.png')?>" class="img-responsive">
                                            <?php } ?>
                                            <input class="" value="<?php echo $event_image; ?>" name="event_image_old" required="" type="hidden">
                                            <br>
                                            <p>Change Image <input class="" name="event_image"  type="file"></p>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Event Description</label>
                                        <div class="col-sm-9">
                                            <textarea id="editor3"  class="form-control" name="event_desc" required="" placeholder="Description"><?php echo $event_desc; ?></textarea> 
                                        </div>
                                    </div>
                                     <script type="text/javascript">
                                            CKEDITOR.replace( 'editor3' );
                                            CKEDITOR.add            
                                    </script>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit";>
                                            Add Event
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