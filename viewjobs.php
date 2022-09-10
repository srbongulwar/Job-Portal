<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"><!DOCTYPE html>
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
              <h3>All Jobs</h3>
              <?php
                      $sql3="select jobs.jobid,jobs.name,categories.name as 'name',jobs.description,jobs.date,jobs.salary,jobs.skill,jobs.timing,jobs.location
                      from jobs
                      INNER JOIN categories on categories.catid=jobs.catid
                      ORDER by jobs.jobid DESC
                      
                      ";
                      $rs= mysqli_query($conn,$sql3);
                      while ($jobdata=mysqli_fetch_array($rs)) 
                      {

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
            <a href="single.php?jobid=<?=$jobdata['jobid']?>" class="btn btn-primary">More Details</a>
  </div>


                  </div>
              </div>
              </div>

          </div>

              <div class="clearfix"></div>
          </div>
      </div>


      <?php
  }
  ?>

  

<?php include('footer.php'); ?>


</body>
</html>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>