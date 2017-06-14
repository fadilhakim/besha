<script>
	function city_province(id_province)
	{
		$.ajax({
			type:"POST",
			url:"<?=base_url("ajax/list_city_province")?>",
			data:"id_province="+id_province,
			success: function(data)
			{
				$("#id_city").html(data);
			}
		})
		
	}
	
	function dt_city(id_city)
	{
		$.ajax({
			type:"POST",
			url:"<?=base_url("ajax/dt_city");?>",
			data:"id_city="+id_city,
			dataType:"JSON",
			success: function(data)
			{
				
				$("#kode_pos").val(data.postal_code);	
			}
		
		});
	}
</script>

 
   <div class="form-group">
       <label> Contact Person </label>
       <input type="text" name="contact_person" id="contact_person" class="form-control" value="<?=$this->session->userdata("contact_person");?>" >
   </div>
 
 
   <div class="form-group">
   	   <label> No. Hp </label>
       <input type="text" name="no_hp" id="no_hp" class="form-control">
   </div>

 <span class="clearfix"></span>
 
 
    <div class="form-group">
      <label> Province </label>
      <select class="form-control" id="id_province" name="id_province">	
          <?php foreach($province as $row){?>
          <option value="<?=$row["province_id"]?>"><?=$row["province"]?></option>
          <?php } ?>
      </select>
    </div>
    
    <div class="form-group">
      <label> City </label>
      <select id="id_city" name="id_city" class="form-control">
      <option value="">- Select -</option>
      </select>
    </div>
    <div class="form-group">
      <label> Kecamatan </label>
      <input type="text" name="kecamatan" id="kecamatan" class="form-control">
    </div>
    <div class="form-group">
      <label> Kode Pos </label>
      <input type="text" name="kode_pos" id="kode_pos" class="form-control">
    </div>
	
    <div class="form-group">
        <label> Shipping Address </label>	
        <textarea name="shipping_address" id="shipping_address" class="form-control"></textarea>
    
    </div>
    <div class="form-group">
        <label> Billing Address </label>
        <textarea name="billing_address" id="billing_address" class="form-control"></textarea>
    </div>
    
<span class="clearfix"></span>
<!-- <div class="checkbox">
    <label>
      <input type="checkbox" name="save_address_book"> Save this Adress
    </label>
    </div> -->
<!-- </form> -->
<script>
	
	$(document).ready(function(e) {
		
			var id_province = $("#id_province").val();
			var id_city = $("#id_city").val();
			var origin = 152; // default
			var destination = $("#id_city").val();
			var weight = $("#total_weight").val();
			var courier = $("#kurir").val();
			
			city_province(id_province);	
			dt_city(id_city);
			//detail_cost(origin,destination,weight,courier);
			
		
		$("#id_province").change(function(){
		
			var id_province = $(this).val();
			var id_city = $("#id_city").val();
			
			var origin = 152; // default
			var destination = $("#id_city").val();
			var weight = $("#total_weight").val();
			var courier = $(this).val();
			
			
			
			city_province(id_province);	
			dt_city(id_city);
			//detail_cost(origin,destination,weight,courier);
		});
		
		$("#id_city").change(function(){
			
			var id_city = $(this).val();
			var origin = 152; // default
			var destination = $("#id_city").val();
			var weight = $("#total_weight").val();
			var courier = $(this).val();
			
			dt_city(id_city);
			//detail_cost(origin,destination,weight,courier);
		});
		
		
	});


</script>