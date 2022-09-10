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


<?php include('db_config.php') ?>
   

  <div class="container">
  	<div class="row">
  		<div class="col-lg-4">
  			 <div class="login-content">
  			 	<form action="job.php" method="post">
  			 		<div class="section-title">
  			 			
  			 		</div><br><br>
  			 		

  			 		
  			 		
  			 		
  			 	
  			 </div>
  		</div>
  		<div class="col-lg-8">
        <h3>Jobs</h3>
        <style>
          table{font-family: arial,sans-serif;
            border-collapse: collapse;
            width:100%;
          }
          td, th{
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
          }
          tr:nth-child(even){
            background-color: #dddddd;
          }
        </style>


  			<table>
  				   <tr>
  				   	<th >ID</th>
  				   	<th>Name</th>
  				   	<th>Categories</th>
  				   	<th>Skill</th>
  				   	<th>Description</th>
  				   	<th>Salary</th>
  				   	<th>Timing</th>
  				   
  				   </tr>

  				   <?php

                      $sql3="select jobs.jobid,jobs.name,categories.name as 'name',jobs.description,jobs.date,jobs.salary,jobs.skill,jobs.timing,jobs.location
                      from jobs
                      INNER JOIN categories on categories.catid=jobs.catid
                      ";
                      $rs= mysqli_query($conn,$sql3);
                      while ($jobdata=mysqli_fetch_array($rs)) 
                      {
                        
                      ?>

                      <tr>
                      	
                      <td><?= $jobdata['jobid'] ?></td>
                      <td><?= $jobdata['name'] ?></td>
                      <td><?= $jobdata['name'] ?></td>
                      <td><?= $jobdata['skill'] ?></td>
                      <td><?= $jobdata['description'] ?></td>
                      <td><?= $jobdata['salary'] ?></td>
                      <td><?= $jobdata['timing'] ?></td>
                      


                      </tr>
                  
                    <?php
                   }
                    ?>
  			</table>
  			
  		</div>
  	</div>
  </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <?php include('footer.php') ?>
	
	
              <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>


              