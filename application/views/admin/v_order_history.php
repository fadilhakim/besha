<?php
	/*
		id_order
		id_user
		grand_total
		status
		create_date
		last_update
		ip_address
		user_agent
	
	*/

?>
<script>
	function delete_order(id_order)
	{		
		$.ajax({
			type:"POST",
			data:"id_order="+id_order,
			url:"<?=base_url("order/modal_delete_order")?>",
			success: function(dt)
			{
				
				$("#modal_temp").html(dt);
			}
		});
	}

</script>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">  
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-title"> Order</h4>
                    
                    <div class="row">
                    	<div class="col-lg-10">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">List Order</h4>
								<span id="modal_temp"></span>
                                <table class="table table-bordered table-striped" id="datatable-keytable">
                                    <thead>
                                        <th> ID Order </th>
                                        <th> Name </th>
                                        <th> Grand Total </th>
                                        <th> Status </th>
                                        <th> Create Date </th>
                                        <th> Action </th>
                                    </thead>
                                    
                                    <tbody>
                                       <?php
										foreach($list_order as $row){
											
											$user = $this->model_user->get_user_detail($row["id_user"]);
									   ?>
                                       <tr>
                                        <td>#<?=$row["id_order"]?>  </td>
                                        <td><?=$user["contact_person"]?>  </td>
                                        <td>Rp. <?=number_format($row["grand_total"])?> </td>
                                        <td><?=$row["status"]?>  </td>
                                        <td><?=$row["create_date"]?>  </td>
                                        <td>
                                        	<div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              Setting <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                              <li><a href="<?=base_url("admin/order_detail/$row[id_order]")?>" target="_blank">Detail Order</a></li>
                                           		
                                      
                                             
                                              <li><a href="#" onClick="delete_order('<?=$row["id_order"]?>')" > Delete Order </a></li>
                                            </ul>
                                          </div>
                                         </td>
                                       </tr>
                                       <?php
										}
									   ?>
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <?php $this->load->view("admin/footer");?>
        </div> <!-- container -->
    </div> <!-- content -->
</div>


