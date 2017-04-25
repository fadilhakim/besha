  <?php
  	$this->load->view('templates/meta_sparepart');
		$this->load->view('templates/header_sparepart');
  ?>
  
  <div class="wrapper-breadcrumbs clearfix">
  	<div class="spacer30"></div><!--spacer-->
    <div class="container">
    	<div class="breadcrumbs-main clearfix">
    	 <h1 class=" text-center">Success </h1>
        </div>
    </div>
    <div class="spacer30"></div><!--spacer-->
    <div class="container">
        <div class="breadcrumbs-main clearfix">
           
          <p class="text-center lead alert-success"> <h4> Informasi harga (Penawaran) sudah dikirim ke email anda. <br>

            Jika ada pertanyaan perihal ini silahkan dapat menghubungi kami. <br>
            
            Terimakasih. </h4></p>
             <div class="spacer15"></div><!--spacer-->
          <div class="buttons text-center"> <a class="btn btn-primary btn-lg" href="<?php echo base_url('sparepart'); ?>"> Back to Home </a> </div>
          	<div class="spacer15"></div><!--spacer-->
        </div>
      </div>
    <div class="spacer15"></div><!--spacer-->
</div>

  <?php
   $this->load->view('templates/footer_sparepart');
   //$this->load->view('templates/footer-2');
  ?>