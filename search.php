<!doctype html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
      <title>Search for Gemers</title>
	  <style>
	   body{
            background-image : linear-gradient(#132D46 , #191E29 )  ;
        }
	  
	*{
  margin: 0px;
  padding: 0px;
  font-family: sans-serif;
}
body{
  display: flex;
  justify-content: center;
  height: 100vh;
  align-items: center;
  background: ;
}
.container1{
  width: 100%;
  height: 100vh;
  padding-left: 8%;
  padding-right: 8%;
  box-sizing: border-box;
}
.navbar{
  height: 12%;
  display: flex;
  align-items: center;
}
.logo{
height: 420px;
cursor: pointer;
position: relative;
right: 170px;
top: 40px;
}
.nav{
  flex: 1;
  text-align: right;
}
.nav2 li{
  list-style: none;
  display: inline-block;
  margin-left: 60px;
}


.nav2 li a{
  text-decoration: none;
  color: #fff;
  font-size: 16px;
}
</style>
</head>
<body>
  <div class="container1">
    <div class="navbar">
   
        <nav class="nav">
           
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-1">
                    <div class="card-header">
                   
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">

                                <form action="" method="GET">
                                    <div class="input-group mb-1">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-1">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                     <th>ID</th>
                                     <th>User Name</th>
									   <th>Game Name</th>
                                     <th>Level</th>
	                                 <th>DISCORD Account</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","account");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM account WHERE CONCAT(YourName,GameName,PlayerLevel,account) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['ID']; ?></td>						
                                                    <td><?= $items['YourName']; ?></td>
													 <td><?= $items['GameName']; ?></td>
                                                    <td><?= $items['PlayerLevel']; ?></td>
                                                    <td><?= $items['account']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="5">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>