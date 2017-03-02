<?php  $this->load->view('templates/meta-admin'); ?>
    <body>

        <div class="text-center logo-alt-box">
            <h5 class="text-muted m-t-0">Welcome Admin</h5>
            <p>Please active your account email by creating your new password</p>
        </div>

        <div class="wrapper-page">

        	<div class="m-t-30 card-box">
                <div class="panel-body">
                    <form class="form-horizontal m-t-10" method="post"  action="<?php echo base_url('login/verify/submit'); ?>">

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input type="hidden" name="username" value="<?php echo $this->uri->segment(4); ?>">
                                <input class="form-control" name="password" type="text" required="" placeholder="New Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" name="cpassword" type="text" required="" placeholder="Re-type Password">
                            </div>
                        </div>

						<div class="form-group text-center m-t-30">
                            <div class="col-xs-12">
                                <input class="btn btn-primary btn-bordred btn-block waves-effect waves-light text-uppercase" type="submit" value="Submit">
                            </div>
                        </div>

                        <div class="form-group text-center m-t-30">
                            <div class="col-xs-12">
                                <?php echo $this->session->flashdata('error'); ?>
                            </div>
                        </div>

					</form>

                </div>
            </div>
            <!-- end card-box -->

        </div>
        <!-- end wrapper page -->

	</body>

</html>