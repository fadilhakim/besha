<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">  
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-title">Admin Users</h4>
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Add Admin</h4>
                                <form class="form-horizontal group-border-dashed" enctype="multipart/form-data" action="<?php echo base_url('admin/add/users'); ?>"  method="post">
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">User Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="username" required placeholder="User Name" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Sure Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="surename" required placeholder="Sure name" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Role</label>
                                        <div class="col-sm-9">
                    
                                            <?php 
                                                foreach ($users as $us)
                                                $r = $this->db->get('roles_tbl');
                                                if($r->num_rows()>0)
                                                {
                                                    foreach ($r -> result_array() as $row) {
                                                    $data1[] = $row;
                                                    }
                                                }
                                                foreach($data1 as $roles) {?>
                                                    <input type="radio" name="role_name" value="<?php echo $roles['role_id']; ?>"> &nbsp;&nbsp;<?php echo $roles['role_name']; ?><br>
                                            <?php } ?>  

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Email</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="email" required placeholder="User email (Please input valid email to be confirm)" type="text">
                                        </div>
                                    </div>

                                    <script type="text/javascript">
                                            CKEDITOR.replace( 'editor3' );
                                            CKEDITOR.add            
                                    </script>
                                    <div class="form-group text-right m-b-0">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <?php echo $this->session->flashdata('msg'); ?>
                                            </div>
                                            <div class="col-xs-6">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit";>
                                                    Add User
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-10">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Admin users List</h4>

                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Username Admin</th>
                                            <th>Surename</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1; foreach ($users as $us) { ?>
                                        <tr>
                                            <th scope="row"><?php echo $i; $i++;?></th>
                                            <td><?php echo $us->username; ?></td>
                                            <td><?php echo $us->surename; ?></td>
                                            <td><?php echo $us->email; ?></td>
                                            <td>
                                                <?php 

                                                    $role_id = $us->role_id;
                                                    $this->db->where('role_id',$role_id);
                                                    $r = $this->db->get('roles_tbl');
                                                    if($r->num_rows()>0)
                                                    {
                                                        foreach ($r -> result_array() as $row) {
                                                        $data1[] = $row;
                                                        }
                                                    }
                                                    foreach($data1 as $roles){} echo $roles['role_name']; 
                                                ?>

                                            </td>
                                            <td>
                                                <?php if ($us->status == 1) {
                                                    echo "<span style='color:green;'>Active</span>";
                                                }else { echo "<span style='color:red;'>Unactive</span>";} ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url('admin/edit/admin/'.$us->admin_id); ?>" class="btn btn-warning btn-bordred waves-effect w-md waves-light m-b-5">Edit</a>
                                                <?php if($us->role_id == 1) { ?>    
                                                    &nbsp;
                                                <?php } else { ?>
                                                    <a href="<?php echo base_url('admin/delete/users/'.$us->admin_id); ?>" id="" class="delete-event btn btn-danger btn-bordred waves-effect w-md waves-light m-b-5">Delete</a>
                                                <?php } ?>
                                                
                                            </td>
                                        </tr>

                                        <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <footer class="footer">
                <?php echo date("Y");?> © Besha Analitika | Go To : <a href="<?php echo base_url('home'); ?>" target="_blank" class="text-muted">www.besha-analitika.co.id</a>
            </footer>
        </div> <!-- container -->
    </div> <!-- content -->



</div>