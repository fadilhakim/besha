<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
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
                                <form class="form-horizontal group-border-dashed" enctype="multipart/form-data" action="<?php echo base_url('admin/add/event'); ?>"  method="post">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Event Title</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="event_name" required placeholder="Event Title" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Event image</label>
                                        <div class="col-sm-9">
                                            <input class="" name="event_image" required="" type="file">
                                        </div>
                                    </div>
                                         
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Event Date</label>
                                        <div class="col-sm-9">
                                             <input class="form-control" name="start_date" required placeholder="Event Date" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Featured Event ?</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="event_status">
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Event Description</label>
                                        <div class="col-sm-9">
                                            <textarea id="editor3"  class="form-control" name="event_desc" required="" placeholder="Description"></textarea> 
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
                    <div class="row">
                    <div class="col-lg-10">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Event List</h4>

                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Event Title</th>
                                            <th width="15%">Event Date</th>
                                            <th>Event Image</th>
                                            <th>Event Desc</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1; foreach ($event as $e) { ?>
                                        <tr>
                                            <th scope="row"><?php echo $i; $i++;?></th>
                                            <td><?php echo $e->news_title; ?></td>
                                            <td><?php echo $e->createdate; ?></td>
                                            <td><img src="<?php echo base_url('assets/image/events').'/'.$e->news_image;; ?>" class="img-responsive"></td>
                                            <td><?php echo $e->news_desc; ?></td>
                                            <td>
                                                <a href="<?php echo base_url('admin/edit/event/'.$e->news_id); ?>" class="btn btn-warning btn-bordred waves-effect w-md waves-light m-b-5">Edit</a>
                                                <a href="<?php echo base_url('admin/delete/event/'.$e->news_id.'/'.$e->news_image); ?>" id="" class="delete-event btn btn-danger btn-bordred waves-effect w-md waves-light m-b-5">Delete</a>
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