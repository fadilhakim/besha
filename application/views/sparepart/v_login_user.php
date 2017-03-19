<div class="wrapper-breadcrumbs clearfix">
    <div class="spacer30"></div><!--spacer-->
    <div class="container">
        <div class="breadcrumbs-main clearfix">
            <h2>Congratulation, You can login with your new account</h2>
        </div>
    </div>
    <div class="spacer15"></div><!--spacer-->
</div>

<div class="wrapper-main brandshop clearfix">
            <style type="text/css">
                input[type="text"] {
                    height: 44px;
                    font-size: 16px;
                    width: 100%;
                    margin-bottom: 10px;
                    -webkit-appearance: none;
                    background: #fff;
                    border: 1px solid #d9d9d9;
                    border-top: 1px solid #c0c0c0;
                    border-radius: 2px;
                    padding: 0 8px;
                    box-sizing: border-box;
                    -moz-box-sizing: border-box;
                }
            </style>
        	<div class="spacer15"></div><!--spacer-->
        	<div class="container">
            	<div class="inner-block"><!------Main Inner-------->
                	<div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                        	<div class="main-contant xs-spacer20 clearfix">
                            	<div class="contant-wrapper">
                                    <div class="contact-details" style="padding-left: 0px;">
                                        <div class="row">
                                            <form action="<?php echo base_url('login-action'); ?>" method="post">
                                                <div class="col-lg-12 contact-form">

                                                    <div class="col-sm-12">
                                                        <label for="name">Email<span>*</span></label>
                                                       <input type="text" name="email" placeholder="email">
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <label for="email">Password<span>*</span></label>
                                                        <input type="password" name="password" placeholder="password">
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <input class="submit" value="Submit" type="submit">
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <?php echo $this->session->flashdata('msg'); ?>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                            	</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer30"></div>
</div>