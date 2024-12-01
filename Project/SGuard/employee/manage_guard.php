<!-- Header Section -->
<?php include_once('header.php'); ?>
<div id="wrappeer">
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Guard
                        </div>
                        <div class="panel-body">  
						
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Mobile_no</th>
                                            <th>gender</th>
                                            <th>Address</th>
                                            <th>Id_proof </th>
                                            <th>Any Disability</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($manage_guard as $data) { ?>
                                            <tr>
                                                <td><?php echo $data->id; ?></td>
                                                <td><?php echo $data->name; ?></td>
                                                <td><?php echo $data->email; ?></td>
                                                <td><?php echo $data->username; ?></td>
                                                <td>
                                                    <a href="" class="btn btn-primary">Edit</a>
                                                    <a href="delete?del_guard=<?php echo $data->id?>" class="btn btn-danger mx-2">Delete</a>
                                                </td>
                                            </tr>
                                        <?php } ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
						<!--Panel Body End-->
					</div>
                    <!-- End  Hover Rows  -->
                </div>
              <!--col-md-12 end-->
			  
			  <div class="col-md-12">
                    <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Guard
                        </div>
                        <div class="panel-body">  
						
                            <div class="table-responsive">
								<h1>Dummy Data</h1>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
											<th>Username</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php foreach($manage_guard as $data) {?>
                                        <tr>
                                            <td><?php echo $data->id; ?></td>
											<td><?php echo $data->name; ?></td>
											<td><?php echo $data->email; ?></td>
											<td><?php echo $data->username; ?></td>
                                            <td>
												<a href="" class="btn btn-primary">Edit</a>
												<a href="" class="btn btn-danger mx-2">Delete</a>
											</td>
                                        </tr>
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
						<!--Panel Body End-->
					</div>
                    <!-- End  Hover Rows  -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Section -->
<?php include_once('footer.php'); ?>