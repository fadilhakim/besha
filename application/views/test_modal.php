<div class="container ">
	<div style="margin-bottom:50px" class="clearfix"></div>
      <span style="margin-bottom:50px"></span>
      <div class="col-md-4 pull-right">
		<span id="temp_modal"></span>
        <button type="button" class="btn btn-primary" onClick="show_modal()" > Test Modal </button>
        <script>
		
			function show_modal()
			{
				$.ajax({
					
					type:"POST",
					url:"<?=base_url("test/load_modal")?>",
					data:"modal_body=this is my body, dont complain",
					success: function(dt)
					{
						$("#temp_modal").html(dt);
					}
					
				})	
			}
		
		</script>
      </div>
	<div style="margin-bottom:50px" class="clearfix"></div>
</div>