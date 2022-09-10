<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Jobs</title>
    
  
</head>
<body>

<?php include('header2.php');?>
<?php include('db_config.php');?>
  <div class="container">
      <div class="single">
          <div class="box_2">
              <h3>Job</h3>
              <?php
                     $jobid=$_GET['jobid'];
                      $sql3="select jobs.jobid,jobs.name,categories.name as 'name',jobs.description,jobs.date,jobs.salary,jobs.skill,jobs.timing,jobs.location
                      from jobs
                      INNER JOIN categories on categories.catid=jobs.catid
                      where jobs.jobid='$jobid'
                      
                      ";
                      $rs= mysqli_query($conn,$sql3);
                      $jobdata=mysqli_fetch_array($rs);
                      $_SESSION['jobid']=$jobid;
                        ?>


              <div class="col-md-4 icon-service">
                  <div class="icon">
                      <i class="fa fa-calender"></i>
                  </div>
                  <div class="icon-box-body">
                    
                    <div class="col-md-3 col-sm-6">

            <div class="box"> <img src="https://e-hiringjobportal.000webhostapp.com/images/jobs.jpg" alt="img" width="68" height="68">

              

          
                      <h4><?=$jobdata['name']?> </h4>
                      <small>Categories:(<?=$jobdata['name']?>)</small>
                      <p>Desc:<?=$jobdata['description']?></p>
                      <p>Skill:<?=$jobdata['skill']?></p>
                      <p>Timing:<?=$jobdata['timing']?></p>
                      <p>Location:<?=$jobdata['location']?></p>
                      
                      <div class="col-sm-2">
                        <?php
                        
                         
                            echo'<a href="apply.php" class="btn btn-primary">Apply Now</a>';
                          




                        ?>
            
  </div>


                  </div>
              </div>
              </div>

          </div>

              <div class="clearfix"></div>
          </div>
      </div>


      

  

<?php include('footer.php'); ?>


</body>
</html>