<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv=“X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css.css">
<title>Search for Gamers</title>

</head>

<body>

    <div class="container">
<div class="navbar">
    <img src="4ux.png" class="logo">
    <nav class="nav">
        <ul class="nav2">
             <li><a href="index.php">home</a></li>
            <li><a href="form.php">account</a></li>
            <li><a href="https://discord.gg/GTF2mpkV">connect us</a></li>
        </ul>
    </nav>
   
</div>
	

   <table class="table" id="myTable">

    <tr>
      <th >ID</th>
      <th >User name</th>
      <th>Level</th>
	  <th>DISCORD Account</th>
    </tr>

  <tbody>
  
  <?php

     $hostName = "localhost";
	$dbUser = "root";
	$dbPass = "";
	$dbName = "account";
    $conn = mysqli_connect($hostName, $dbUser, $dbPass, $dbName);
	
   if(!$conn){
	   die("connection is not successfull");
   }
   $sql = "SELECT * FROM account WHERE GameName LIKE '%FIFA%'";
   $result = mysqli_query($conn, $sql);
 
   while($row=mysqli_fetch_array($result)){
	   $ID = $row["ID"];
	   $YourName = $row["YourName"];
	   $PlayerLevel = $row["PlayerLevel"];
	   $account = $row["account"];
	   
	echo "<tr>
      <th scope='row'>$ID</th>
      <td>$YourName</td>
      <td>$PlayerLevel</td>
	  <td>$account</td>
    </tr>";
   }
       // استعلام SQL عندما يتم إرسال النموذج
  

  ?>
   
 
  </tbody>

</table>

<style>
table,th,td{
	text-align: center;
    border:2px solid gray;
    border-collapse:collapse;
    padding-top:5px;
    padding-bottom:5px;
}
table{
	background-color:white;
	margin-top:15%;
	width:100%;
	table-layout:fixed;
	margin-left:auto;
	margin-right:auto;
	margin-bottom:auto;
}


 body{
            background-image : linear-gradient(#132D46 , #191E29 )  ;
        }
	
	
	


	
</style>

</body>

</html>


