<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Login to Your Account</h1><br>
				  <form method="post" action="<?php echo base_url('login-action'); ?>" >
					<input type="text" name="email" placeholder="email">
					<input type="password" name="password" placeholder="password">
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				  </form>
					
				  <div class="login-help">
					<a href="<?php echo base_url('sparepart/signup'); ?>">Register</a> 
				  </div>
				</div>
			</div>
		  </div>