<?php  $this->load->view('templates/meta-admin'); ?>
    <body>

        <div class="text-center logo-alt-box">
            <a href="<?php echo base_url('home'); ?>" class="logo">Besha Analitika</a>
            <h5 class="text-muted m-t-0">Welcome Admin</h5>
        </div>

        <div class="wrapper-page">

        	<div class="m-t-30 card-box">
                <div class="text-center">
                    <h4 class="text-uppercase font-bold m-b-0">Sign In as : Admin Besha</h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal m-t-10" method="post"  action="<?php echo base_url('login/aksi_login'); ?>">

						<div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" name="username" type="text" required="" placeholder="Username">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" name="password" type="password" required="" placeholder="Password">
                            </div>
                        </div>

						<div class="form-group text-center m-t-30">
                            <div class="col-xs-12">
                                <input class="btn btn-primary btn-bordred btn-block waves-effect waves-light text-uppercase" type="submit" value="Log In">
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