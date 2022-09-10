
        
      <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->
   

    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      
      
        
        
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Categories</title>
</head>
<body>
    <?php include ('header2.php')?>

<?php include('db_config.php');?>
  <div class="container">
      <div class="single">
          <div class="box_1">
              
              <h1>Welcome to Job Portal</h1>
              <h1>Latest Jobs</h1>
                <?php 
                //session_start();
               //echo $_SESSION['name'];
       

            ?>
              
              <?php
                      $sql3="select jobs.jobid,jobs.name,categories.name as 'name',jobs.description,jobs.date,jobs.salary,jobs.skill,jobs.timing,jobs.location
                      from jobs
                      INNER JOIN categories on categories.catid=jobs.catid
                      ORDER by jobs.jobid DESC LIMIT 3
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

            <div class="box"> <img src="https://e-hiringjobportal.000webhostapp.com/images/jobs.jpg" alt="img" width="80" height="80">

              

             

          

            
                      <h4><?=$jobdata['name']?> </h4>
                      <small>(<?=$jobdata['name']?>)</small>
                      <p><?=$jobdata['description']?></p>
                      <p><?=$jobdata['skill']?></p>
                      <p><?=$jobdata['timing']?></p>
                      <p><?=$jobdata['location']?></p>
                      
                  </div>
              </div>
              </div>

          

              <div class="clearfix"></div>
          </div>
      </div>
      <?php
  }

  ?>
  <div class="col-sm-2">
            <a href="viewjobs.php" class="btn btn-primary">View All Jobs</a>
  </div>
</div>

  
<?php include('footer.php'); ?>


</body>
</html>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>