<div class="wrapper-breadcrumbs clearfix">
    <div class="spacer30"></div><!--spacer-->
    <div class="container">
        <div class="breadcrumbs-main clearfix">
            <h2>Jasa</h2>
            <ul>
                <li><a href="#">Service Spareparts</a><span class="separator">  </span></li>
            </ul>
        </div>
    </div>
    <div class="spacer15"></div><!--spacer-->
</div>

<div class="wrapper-main brandshop clearfix">
        	<div class="spacer15"></div><!--spacer-->
        	<div class="container">
            	<div class="inner-block"><!------Main Inner-------->
                	<div class="row">
                        <div class="col-md-9 col-sm-8">
                        	<div class="main-contant xs-spacer20 clearfix">
                            	<div class="contant-wrapper">
                                    <div class="contact-details" style="padding-left: 0px;">
                                        <div class="row">
                                            <form action="<?php echo base_url('sparepart/contact_post'); ?>" method="post">
                                                <div class="col-sm-12 contact-form">
                                                    <div class="col-sm-4">
                                                        <label for="name">Pilih Jasa<span>*</span></label>
                                                        <select name="jasa" id="jasa" class="form-control">
                                                            <option>Kalibrasi</option>
                                                            <option>Re-Training</option>
                                                            <option>Re-Install</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="email">Pilih Manufacturers<span>*</span></label>
                                                        <select name="manufacturer" id="jasa" class="form-control">
                                                            <?php foreach ($manufacturer as $m) { ?>
                                                                <option><?php echo $m->manu_title ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <label for="email">Pilih Kota<span>*</span></label>
                                                        <select name="manufacturer" id="jasa" class="form-control">
                                                            <?php foreach ($kota as $k) { ?>
                                                                <option><?php echo $k->lokasi_nama ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label for="msg">Noted</label>
                                                        <textarea id="msg" name="note" class="form-control" rows="3"></textarea>
                                                    </div>
                                                    <div class="col-sm-6">
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
                       <?php $this->load->view('sparepart/sidebar_sparepart'); ?>
                    </div>
                </div>
            </div>
            <div class="spacer30"></div>
</div>