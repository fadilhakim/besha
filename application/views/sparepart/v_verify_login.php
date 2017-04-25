<br>
<br>
<br>
<br>
<div class="container">
    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Login with you new account or back to <a href="<?php echo base_url('sparepart') ?>" style="color:#FD8201">HOME</a></h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="post" action="<?php echo base_url('login_action_verify'); ?>">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="E-mail" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="">
			    		</div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login" style="background:#0A098B; border-color:#0A098B">
			    	</fieldset>

				    	<div class="form-group text-center m-t-30">
				    	<br>
	                        <div class="col-xs-12">
	                            <?php echo $this->session->flashdata('error'); ?>
	                        </div>
	                    </div>
			      	</form>


			    </div>
			</div>
		</div>
	</div>
</div>