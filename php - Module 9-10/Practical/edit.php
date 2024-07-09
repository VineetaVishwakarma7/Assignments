<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/Bank.png" width="50px">
                </a>
            </div>

            <div class="right-div">
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    
                </div>

            </div>
        </div>
    </section>

</form>
    <div class="panel panel-default">
                        <div class="panel-heading">
                            ADD BOOK
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                <form action="" method="post">
                                       
                                       
                                <div class="form-group">
                                           <label>USERNAME:</label>
                                           <input type="text" name="UNM" value="<?php echo $fetch->UNM?>" class="form-control" placeholder="enter your username">
                                       </div>
                                       

                                       <div class="form-group">
                                           <label>NAME:</label>
                                           <input type="text" name="name" value="<?php echo $fetch->name;?>"class="form-control" placeholder="enter your name">
                                       </div>
                                       <div class="form-group">
                                           <label>EMAIL:</label>
                                           <input type="text" name="email"value="<?php echo $fetch->email;?>" class="form-control" placeholder="enter your email">
                                       </div>


                                       <div class="form-group">
                                           <label>ADDRESS:</label>
                                           <input type="text" name="address" value="<?php echo $fetch->address;?>" class="form-control" placeholder="enter your address">
                                       </div>

                                       <div class="form-group">
                                           <label>PHONE</label>
                                           <input type="number" name="phone" value="<?php echo $fetch->phone;?>" class="form-control" placeholder="enter phone">
                                       </div>


                                       
                                       
                                       <div class="form-group">
                                           <label>ACCOUNT NO:</label>
                                           <input type="text" name="accountno" value="<?php echo $fetch->accountno;?>" class="form-control" placeholder="enter your account number">
                                       </div>
                                       
                                       
                                       <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                                      
                                   </form>

                                </div>
                               
                            </div>
                        </div>
                    </div>

                    </div>
        </div>
    </section>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
  
</body>
</html>