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
                            Guard Hiring Request
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Customer Name</th>
                                            <th>Number of Guards</th>
                                            <th>For Where</th>
                                            <th>remark</th>
                                            <th>request status</th>
                                            <th>address</th>                                            
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(isset($hiring)){
                                            $i=0;foreach($hiring as $hr){ 
                                        ?>
                                        
                                            <tr>                    
                                            <td><?php echo ++$i?></td>
                                            <td><?php echo $hr->cust_id?></td>
                                            <td><?php echo $hr->number_of_guard?></td>                                           
                                            <td><?php echo $hr->for_where?></td>
                                            <td><?php echo $hr->remarks?></td>
                                            <?php if ($hr->request_status == 'pending') { ?>
                                                        <td class="text-primary text-uppercase"><?php echo $hr->request_status; ?></td><?php } ?>
                                             <?php if ($hr->request_status == 'approve') { ?>
                                                        <td class="text-success text-uppercase"><?php echo $hr->request_status; ?></td><?php } ?>
                                                    <?php if ($hr->request_status == 'reject') { ?>
                                                        <td class="text-danger text-uppercase"><?php echo $hr->request_status; ?></td><?php } ?>                                                            
                                            <td><?php echo $hr->address?></td>
                                            <td>
                                                <?php if(!($hr->request_status=='approve'))
                                                { ?>
												<a href="Guard Posting?request_id=<?php echo $hr->req_id?>" class="btn btn-primary">Edit</a> <?php } ?>
												<a href="delete?request=<?php echo $hr->req_id ?>" class="btn btn-danger mx-2">Delete</a>
											</td>
                                        </tr>
                                        <?php }}
                                        else{ ?>
                                            <tr>
                                               <td colspan="8"><h3 class="text-center text-secondary"> No Data Found</h3></td>
                                            </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End  Hover Rows  -->
                </div>
              
            </div>
        </div>
    </div>
</div>
<!-- Footer Section -->
<?php include_once('footer.php'); ?>