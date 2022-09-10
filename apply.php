<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apply</title>
</head>
<body>
    <?php include('header2.php') ?>
    <?php include ('db_config.php')?>

<div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="login-content">
                    <form action="" method="post" enctype="multipart/form-date">
                        <div class="section-title">
                            <h3>Apply</h3>
                        </div>
                        <div class="textbox_wrap">
                            <div class="input_group">
                                <span class="input_group_addon"><i class="fa fa-user"></i></span>

                                <input type="file" required="required" name="file" value="" class="form-control" placeholder="File"><br>
                                
                            </div>
                        </div><br><br>


                        <div class="login_btn">
                            <input type="submit" name="apply" value=Apply>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

    <?php
    

if(isset($_POST["apply"]))
 {   
      $jobid=$_SESSION['jobid'];
      $userid=$_SESSION['userid'];
      $file=$_FILES['file']['name'];
      $tmp=$_FILES['file']['tmp_name'];

        move_uploaded_file($tmp,"profile/".$file);

        $date=('d/m/y');
   if(mysqli_query($conn,"INSERT INTO `application`( `userid`, `jobid`, `cv`, `date`) VALUES ('$userid','$jobid','$file',''$date)"))
   {
    echo "<script>alert('Apply Successfully')</script>";
    echo"Location.replace('index.php')";
                
   }
   else
   {
    echo "<script>alert('your application not submitted')</script>";
   }
                    
                        
       
}
?>
<?php include('footer.php') ?>