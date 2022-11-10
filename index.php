<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .cc-img {
            margin: 0 auto;
        }
    </style>
</head>
<body>

<!-- As a heading -->
<nav class="navbar navbar-light bg-warning">
  <span class="navbar-brand mb-0 h1">Registration Page</span>
</nav>

<!-- container -->
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-xs-12 col-md-4 offset-md-4">
            <!-- require file to proccess the information -->
            <?php  require "process/forms.php" ?>
            <form  method="POST" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-block">

                            <!--Name -->
                            <div class="card mb-3">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group pl-4">
                                            <label>Enter Your Name</label>
                                            <div class="input-group">
                                                <input type="text" name="nameuser" class="form-control" placeholder="Your Name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Birthdate -->
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group pl-4">
                                            <label>Enter Your Birthdate</label>
                                            <div class="input-group">
                                                <input type="date" name="birthdate" class="form-control" placeholder="Your Birthdate" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group pl-4">
                                            <label>Enter Your Complete Address</label>
                                            <div class="input-group">
                                                <input type="text" name="address" class="form-control" placeholder="Your Address" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group pl-4">
                                            <label>Choose A Profile Picture</label>
                                            <div class="input-group">
                                                <input type="file" name="profpic" class="form-control" placeholder="Your Name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group pl-4">
                                        <label>CARD NUMBER</label>
                                        <div class="input-group">
                                            <input type="tel" name="cardnumber" class="form-control" placeholder="Valid Card Num.. 16" />
                                            <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-7 col-md-7">
                                    <div class="form-group pl-2">
                                        <label><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                        <input type="tel" name="expiration" class="form-control" placeholder="MM / YY" />
                                    </div>
                                </div>
                                <div class="col-xs-5 col-md-5 float-xs-right">
                                    <div class="form-group">
                                        <label>CV CODE</label>
                                        <input type="tel" name="cvcode" class="form-control" placeholder="CVC .. 3" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group pl-4">
                                        <label>CARD OWNER</label>
                                        <input type="text" name="cardowner" class="form-control" placeholder="Card Owner Names" />
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="card-footer pl-5">
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-warning btn-lg btn-block" name="upload">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



    <!-- scrip file connection -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>