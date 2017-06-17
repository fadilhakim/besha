<?php
	$modal_id 	   = !empty($modal_id) ? $modal_id : "MyModal";
	$modal_animate = !empty($modal_animate) ? $modal_animate : "fade";
	$modal_heading = !empty($modal_heading) ? $modal_heading : "Modal Title";
	$modal_body    = !empty($modal_body) ? $modal_body : "Modal Body";
	$modal_submit  = !empty($modal_submit) ? $modal_submit : "Submit";
	$modal_submit_url = !empty($modal_submit_url) ? $modal_submit_url : base_url("ajax/modal_submit_default");
	$modal_redirect = !empty($modal_redirect) ? $modal_redirect : base_url();
	$modal_datatype = !empty($modal_datatype) ? $modal_datatype : "html";

?>
<script>

	function submit_ajax()
	{
		$.ajax({
			
			type:"POST",
			url:"<?=$modal_submit_url?>",
			data:$("#<?=$modal_id?> form").serialize(),
			dataType:"<?=$modal_datatype?>",
			success: function(dt)
			{
					
				$("#result_temp").html(dt);
			
			}
			
		});
	}


</script>
<div id="<?=$modal_id?>" class="modal <?=$modal_animate?>" tabindex="-1" role="dialog" aria-labelledby="<?=$modal_id?>Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        	<form>
              <input type="hidden" name="normal" value="looks normal">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">
                  
                  
                  <?=$modal_heading?>
                </h4>
              </div>
              <div class="modal-body">
              	  <span id="result_temp"></span>
                  <?=$modal_body?>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-custom waves-effect waves-light" onClick="submit_ajax()">
                      <?=$modal_submit?>
                  </button>
              </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<script>
	
	$("#<?=$modal_id?>").modal({
		"show":true,	
	});

</script>