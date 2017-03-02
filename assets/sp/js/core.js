$(document).ready(function() { 
		/*place jQuery actions here*/ 
		var link = "http://localhost/sparepart/"; // Url to your application (including index.php/)
		
		$(".product-item form").submit(function() {
			// Get the product ID and the quantity 
			var id = $(this).find('input[name=sparepart_id]').val();
			var price = $(this).find('input[name=sparepart_id]').val();
			var qty = $(this).find('input[name=quantity]').val();

			alert('ID:' + id + '\n\rQTY:' + qty);

			$.post(link + "cart/add_cart_item", { sparepart_id: id, quantity: qty, sparepart_price: price, ajax: '1' },
  				function(data){	
 		 			// Interact with returned data

 		 			if(data == true){
 		 			
    					$.get(link + "cart/show_cart", function(cart){ // Get the contents of the url cart/show_cart
  							$("#cart_content").html(cart); // Replace the information in the div #cart_content with the retrieved data
						}); 		 
 		 			}else{
 		 				alert("Product does not exist");
 		 			}

 			 });


		/*$(".empty").live("click", function(){
	    	$.get(link + "cart/empty_cart", function(){
	    		$.get(link + "cart/show_cart", function(cart){
	  				$("#cart_content").html(cart);
				});
			});
			
			return false;
	    });*/
});