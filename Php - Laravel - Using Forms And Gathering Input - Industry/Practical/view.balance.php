<?php
if(isset($_SESSION['user_ID'])){

}
else
{
	echo "fail";   
	// echo "<script>
	// window.location='viewbalance';
	// </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />

     <link href="assets/css/style2.css" rel="stylesheet" /> 

    <title>Document</title>
</head>
<body>
<div id="account-area">
        <div class="container">
            <div class="row">
                
                
                <div class="col-lg-4 mb-1">
                    <div class="balance status">
                        <h1 class="text-center">Balance</h1>
                        <p class="text-center">userid:<?php echo $fetch->user_ID;?></p>
                        <P class="text-center">balance<?php echo $fetch->balance;?></P>
                        <p class="text-center">name:<?PHP echo $fetch->name;?></p>

                        <!-- <h2>$ <span id="current-balance">1240</span></h2> -->
                    </div>
                  
                  </div>
                  
                 
            </div>
        </div>       
    </div>
 <script src="assets/js/custom2.js"></script>
</body>
</html>