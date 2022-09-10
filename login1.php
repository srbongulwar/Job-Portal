<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    
     <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="https://mdbgo.com/">
      <img
        src="https://cdn1.vectorstock.com/i/thumb-large/17/05/j-letter-icon-for-job-search-portal-vector-23361705.jpg"
        height="50"
        width="80";
        alt="MDB Logo"
        loading="lazy"
        style="margin-top: -1px;"
      />
    </a>

    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
      </ul>

      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
    
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSX2oZUFn9RnGiauV0WN5JIQXwjxoP-qNbHhw&usqp=CAU"
          class="img-fluid" alt="Sample image" style="width:1000px;height:400px;border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
      </div>
      <?php include('db_config.php')?>
<div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
<div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="login-content">
                    <form action="" method="post">
                        <div class="section-title">
                            <h3>Login</h3>
                        </div>
                        <div class="textbox_wrap">
                            <div class="input_group">
                                
                                <input type="email" name="email" value="" class="form-control form-control_lg" placeholder="Email"><br>
                                <input type="password" required="required" value="" name="password" class="form-control form-control_lg" placeholder="Password"><br>
                            </div>
                        </div><br><br>


                        <div class="login_btn">
                            <input type="submit" name="login" value="Login" class="btn btn-primary">
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register1.php"
                class="link-danger">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
          </div>

        
      </div>
    </div>
  </div>
    
<?php include('footer.php')?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>
<?php


  if(isset($_POST["login"]))
    {   
          $email=$_POST['email'];   
          $password=$_POST['password']; 
        
           $sql="select * from user where email='$email' and password='$password'";
           $rs=mysqli_query($conn,$sql);
           
           if(mysqli_num_rows($rs)>0)
           {
              $data=mysqli_fetch_array($rs);
              $roletype=$data['roletype'];
              session_start();
               $userid=$data['userid'];
               $username=$data['name'];
              $_SESSION['type']=$roletype;
              $_SESSION['userid']=$userid;
              $_SESSION['name']=$username;

             

              if($roletype==1)
              {
                 
                 echo "<script>location.replace('adminhome.php')</script>";
              }
              else if($roletype==2)
              {
                 
                  echo "<script>location.replace('userhome.php')</script>";
              }

           }
           else
           {

            echo "<script>alert('Invalid email and password')</script>";
           }



            
    }






?>
    