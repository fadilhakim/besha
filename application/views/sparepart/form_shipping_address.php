

 
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