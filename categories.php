<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Categories</title>
</head>
<body>
    
    <?php include ('header1.php')?>
    
    <?php include ('db_config.php')?>


    <?php


    error_reporting(0);
   $catid= $_GET['catid'];

    $sql1="select * from categories where catid='$catid'";
    $rs= mysqli_query($conn,$sql1);
    $catdata=mysqli_fetch_array($rs);

    if($_GET['delid'])
    {
        $delid=$_GET['delid'];
       $sql2="delete from categories where catid='$delid'";
       mysqli_query($conn,$sql2);
       header('Location:categories.php');
    }
    


    ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="login-content">
                    <form action="" method="post">
                        <div class="section-title">
                            <h3>Categoroies</h3>
                        </div>
                        <div class="textbox_wrap">
                            <div class="input_group">
                                <span class="input_group_addon"><i class="fa fa-user"></i></span>
                                <input type="hidden" name="cid" value="<?=$catdata['catid']?>">
                                <input type="text" required="required" value="<?= $catdata['name']?>" name="name" class="form-control" placeholder="name">
                            </div>
                        </div><br><br>


                        <div class="login_btn">
                            <input type="submit" name="addcat" value="addcat">
                            <input type="submit" name="updatecat" value="updatecat">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-8">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    <?php
                      $sql1="select * from categories";
                      $rs= mysqli_query($conn,$sql1);
                      while ($data=mysqli_fetch_array($rs)) 
                      {
                        
                      

                    ?>

                    <tr>
                         <td><?= $data['catid']?></td>
                         <td><?= $data['name']?></td>
                         <td>
                             <a href="Categories.php?catid=<?= $data['catid']?>" class="btn btn-primary">Edit</a>
                             <a href="Categories.php?delid=<?= $data['catid']?>" class="btn btn-danger">Delete</a>
                         </td>

                    </tr>
                    <?php
                }
                ?>
                </table>
            </div>
        </div>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php include('footer.php') ?>

</body>
</html>   


 
<?php
    

        if(isset($_POST["addcat"]))
        {
    
            if(($_POST['name']==""))
            {
                echo "<script>alert('Fill The FIELDS')</script>";
            }
            else
            {
                $name=$_POST['name'];
                
  

                $sql="insert into categories(name)values('$name')";

                if($conn->query($sql))
                    echo "<script>alert('Inserted')</script>";
                else
                    echo "<script>alert('Not Inserted')</script>";
            }
        }

        if(isset($_POST["updatecat"]))
        {
    
                $cid=$_POST['cid'];
                $name=$_POST['name'];
                
  

                $sql_up="update categories set name='$name' where catid='$cid'";

                if($conn->query($sql_up))
                    echo "<script>alert('Updated')</script>";
                else
                    echo "<script>alert('Not Updated')</script>";
            
        }
        
    
    
?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

                                
       

