<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View All Users</title>
</head>
<body>
    <?php include('header1.php') ?>
    <?php include ('db_config.php')?>

<div class="container">
        <div class="row">
            <div class="col-lg-12">
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

                <table class ="table">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        
                    <?php
                    
                    $sql="select * from user where  roletype=2";
                    
                    
                     $rs=mysqli_query($conn,$sql);
                     while($data=mysqli_fetch_array($rs))
                     {

?>


                    
                    <tr>
                        <td><?=$data['userid']?></td>
                        <td><?=$data['name']?></td>
                        <td><?=$data['email']?></td>
                        <td><?=$data['password']?></td>
                        

                    </tr>
                    <?php
                }
            ?>
                </table>
                
            </div>
        </div>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <?php include('footer.php') ?>
</body>
</html>

