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
    <?php include ('header1.php')?>


<?php include('db_config.php') ?>
   <?php include ('db_config.php')?>


  <div class="container">
  	<div class="row">
  		<div class="col-lg-4">
  			 <div class="login-content">
  			 	<form action="job.php" method="post">
  			 		<div class="section-title">
  			 			<h3>Jobs</h3>
  			 		</div><br><br>
  			 		<div class="textbox_wrap">
  			 			<div class="input-group">
  			 			 <span class="input-group-addon"><i class="fa fa-user"></i></span>
  			 			 <input type="hidden" name="jobid" value="">
  			 			 <input type="text" required="required" name="name" value=""class="form-control" placeholder="name">
  			 			 </div>
  			 		</div><br>

  			 		<div class="input-group">
  			 			 <span class="input-group-addon"><i class="fa fa-user"></i></span>
  			       <textarea name="description" id="" class="form-control" placeholder="Description"></textarea>
  			 			 
  			 		</div><br>

  			 		<div class="input-group">
  			 			 <span class="input-group-addon"><i class="fa fa-user"></i></span>
  			 			  <input type="text" required="required" name="skill" value=""class="form-control" placeholder="skill">
  			 			 
  			 		</div><br>

  			 		<div class="input-group">
  			 			 <span class="input-group-addon"><i class="fa fa-user"></i></span>
  			 			  <input type="text" required="required" name="timing" value=""class="form-control" placeholder="Timing">
  			 			 
  			 		</div><br>
  			 		

  			 		<div class="input-group">
  			 			 <span class="input-group-addon"><i class="fa fa-user"></i></span>
  			 			  <input type="text" required="required" name="salary" value=""class="form-control" placeholder="Salary">
  			 			 
  			 		</div><br>
  			 		<div class="input-group">
  			 			 <span class="input-group-addon"><i class="fa fa-user"></i></span>
  			       <textarea name="location" id="" class="form-control" placeholder="Location"></textarea>
  			 			 
  			 		</div><br>

  			 		<div class="input-group">
  			 			 <span class="input-group-addon"><i class="fa fa-user"></i></span>
  			 			  <select name="catid" id="" class="form-control">
                    <?php
                      $sql="select * from categories";
                      $data=mysqli_query($conn,$sql);
                      if(mysqli_num_rows($data)>0)
                      {
                      	while ($row=mysqli_fetch_array($data)) 
                      	{
                     ?><option value="<?=$row['catid']?>"><?=$row['name']?></option><?php 
                 }
                      }
                    
                    else
                    {
                       ?><option>Categories Not added</option><?php
                    }





                    ?>


  			 			   </select>
  			 			   
  			 		</div><br><br>

  			 		<div class="login-btn">
  			 			<input type="submit"  name="addjob" value="addjob" >
             
  			 		</div>
  			 	</form>
  			 </div>
  		</div>
  		<div class="col-lg-8">
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
  </div>
	<?php include('footer.php') ?>

	<?php 

           if(isset($_POST['addjob']))
           {

                
                $name = $_POST['name'];
                $catid=$_POST['catid'];
                $description=$_POST['description'];
                $skill = $_POST['skill'];
                $date=date('d/m/y');
                $timing = $_POST['timing'];
                $location = $_POST['location'];
                $salary = $_POST['salary'];
               
                if(($_POST['name']=="")||($_POST['description']=="")||($_POST['skill']=="")||($_POST['timing']=="")||($_POST['salary']=="")||($_POST['location']=="")||($_POST['catid']==""))
                {
                      echo "<script>alert('Fill The FIELDS')</script>";
                }
                else
                {
                
  

                $sql1="insert into jobs( `name`, `description`, `skill`, `timing`, `date`, `salary`, `location`, `catid`) VALUES ('$name','$description','$skill','$timing','$date','$salary','$location','$catid')";

                if($conn->query($sql1))
                    echo "<script>alert('Inserted')</script>";
                else
                    echo "<script>alert('Not Inserted')</script>";
            }
           }
           

                

                
              ?>

              <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>


              