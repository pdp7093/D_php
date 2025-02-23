<!--Header Sectoion-->
<?php include_once('header.php'); ?>
</div>
<div id="wrapper">
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Edit Guards
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="post"  enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Enter Full Name</label>
                                <input class="form-control" type="text" name="full_name" value="<?php echo $fetch->full_name; ?>">

                            </div>
                            <div class="form-group">
                                <label>Enter Email</label>
                                <input class="form-control" type="email" placeholder="Enter Email" name="email" value="<?php echo $fetch->g_email; ?>">

                            </div>
                            <div class="form-group">
                                <label>Enter Mobile Number</label>
                                <input class="form-control" type="text" placeholder="Enter Mobile Number"
                                    name="mobile_no" value="<?php echo $fetch->mobile_no; ?>">

                            </div>
                            <div class="form-group">
                            <?php
                                $gender=$fetch->gender;
                                ?>
                                <label>Gender</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" id="male" value="male"  <?php if($gender=="male"){echo "checked";}?>>Male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" id="female" value="female"  <?php if($gender=="female"){echo "checked";}?>>Female
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" id="other" value="other"  <?php if($gender=="other"){echo "checked";}?>>Other
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" rows="3" name="address" required><?php echo $fetch->address?></textarea>
                            </div>
                        
                            <div class="form-group">
                            <?php
                                $disability=$fetch->disability;
                                ?>
                                <label>Any Disability</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="disability" id="yes" value="yes" <?php if($disability=="yes"){echo "checked";}?>>yes
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="disability" id="no" value="no" <?php if($disability=="no"){echo "checked";}?>>no
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="profile">Profile Image</label>
                                <input type="file" name="profile" id="profile" accept="image/*" >
                            </div>
                            <button type="submit" class="btn btn-info" name="submit">Submit </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer Sectoion-->
    <?php include_once('footer.php'); ?>