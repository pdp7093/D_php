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
                            <div class="table-responsive ">
                                <!--Dummy Data For Testing-->
                                <h1 class=" text-center text-success ">Dummy Data</h1>

                                <hr>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Profile photo</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Mobile_no</th>
                                            <th>gender</th>
                                            <th>Address</th>
                                            <th>Any Disability</th>
                                            <th>Status</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($manage_guard as $data) { ?>
                                            <tr>
                                                <td><?php echo $data->gu_id; ?></td>
                                                <td><img src="../guards/<?php echo $data->g_email ?>/<?php echo $data->profile_image; ?>"
                                                        height="50rm"></td>
                                                <td><?php echo $data->full_name; ?></td>
                                                <td><?php echo $data->g_email; ?></td>
                                                <td><?php echo $data->mobile_no; ?></td>
                                                <td><?php echo $data->gender; ?></td>
                                                <td><?php echo $data->address; ?></td>
                                                <td><?php echo $data->disability; ?></td>
                                                <td>
                                                    <?php if ($data->status == "posted") 
                                                    {
                                                        echo "<p class='text-success'>" . strtoupper($data->status);
                                                    }
                                                  else if ($data->status == "available") 
                                                   {
                                                        echo "<p class='text-primary'>" . strtoupper($data->status);
                                                    }
                                                    else 
                                                    {
                                                        echo "<p class='text-danger'>" . strtoupper($data->status);
                                                    }

                                                    ?>
                                                </td>
                                                <td>
                                                    <a href="edit?edit_guard=<?php echo $data->gu_id ?>" class="btn btn-primary">Edit</a>
                                                    <a href="delete?del_guard=<?php echo $data->gu_id ?>"
                                                        class="btn btn-danger mx-2">Delete</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
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