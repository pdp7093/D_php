<?php
session_start();
if (isset($_SESSION['username'])) {
    header('location:Profile');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap_4.css">
    <link rel="stylesheet" href="css/font.css">
    <title>SignIn</title>
    <script type="text/javascript" src="js/validate.js"></script>

    <script type="text/javascript" src="js/bootstrap.js"></script>
    <style>
        .transbox {
            background-color: rgba(255, 255, 255, 0.4);
            -webkit-backdrop-filter: blur(5px);
            backdrop-filter: blur(100px);
            padding: 50px;
            margin: 50px;
            font-weight: bold;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border: 2px solid;
            border-radius: 1rem;
        }
    </style>
</head>

<body>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-12 col-lg-6 col-xl-8">
                <div class="card transbox">
                    <div class="card-body p-5  ">
                        <h2 class="mb-5 text-center 	 text-primary">SGuard</h2>
                        <hr style="border-color:black;">
                        <h4 id="msg1" class="text-center" style="color:#FF0000; text-transform:capitalize"></h4>
                        <form action="" method="post" enctype="multipart/form-data" onsubmit="return register(this)">
                            <div class="form-outline mb-4 row">
                                <div class="col-md-6">
                                    <label for="firstname">Firstname</label>
                                    <input type="text" name="firstname" id="firstname" placeholder="Enter Firstname"
                                        class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="lastnamr">Lastname</label>
                                    <input type="text" name="lastname" id="lastname" class="form-control"
                                        placeholder="Enter Lastname">
                                </div>
                            </div>

                            <div class="form-outline mb-4">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Enter Email">
                            </div>
                            <div class="form-outline mb-4">
                                <label for="mobile">Mobile No. </label>
                                <input type="tel" name="mobile_no" id="mobile" class="form-control"
                                    placeholder="Enter mobile">
                            </div>
                            <div class="form-outline mb-4">
                                <label for="address">Address</label>
                                <small id="address" class="form-text text-muted">Enter Your Full Address with
                                    Pincode</small>
                                <textarea name="address" id="address" cols="30" rows="5"
                                    class="form-control"></textarea>
                            </div>

                            <div class="form-outline row mb-4">
                                <div class="form-group">
                                    <label class="control-label ">Gender <span style="color:red">*</span></label>
                                    <div class="col-sm-10">
                                        Male <input type="radio" name="gender" value="male"
                                            style="width: auto; height: auto;">
                                        Female <input type="radio" name="gender" value="female"
                                            style="width: auto; height: auto;">
                                    </div>
                                </div>
                            </div>

                            <div class="form-outline mb-4">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control"
                                    placeholder="Enter username">
                            </div>
                            <div class="form-outline mb-5">
                                <label for="passsword">Password </label>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Enter Password">
                            </div>

                            <div class="form-outline mb-5">
                                <label for="image">Profile Photo </label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>

                            <div class="form-outline mb-4">
                                <input type="submit" value="Submit" name="submit" class="btn btn-block btn-primary">
                                <a href="index" class="float-right mt-4">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>