<?php
include 'navbar3.php'
?>


<?php
if(!empty($_SESSION["admin_id"])){
  $admin_id = $_SESSION["admin_id"];
  $result = mysqli_query($conn, "SELECT * FROM admin WHERE admin_id = $admin_id");
  $row = mysqli_fetch_assoc($result);
  
}
else{
  if(!empty($_SESSION["id"])){
    
    echo "<script> alert('You Donot have Access Login through Admin Panel') </script>";
    header('Location: index.php');
}
else{
  header('Location: adminlogin.php');
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <style>
        .btncontainer{
            width:60%;
            margin:2% auto;
            
        }
        .btncontainer a{
            margin: 1%;
        }
    </style>
</head>
<body>
<div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Welcome, Admin!</h1>
          <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
          <p><a class="btn btn-primary btn-lg" role="button">Learn more »</a></p>
        </div>
      </div>

     
    </main>

    <!-- button boxs -->
        <div id="btncontainer" class="btncontainer">
      <a href="view_movies.php" class="btn btn-primary ">View Movies</a>
      <a href="theaters.php" class="btn btn-primary ">View Theaters</a>
      <a href="add-movies.php" class="btn btn-primary ">Add Movies</a>
      <a href="add_theaters.php" class="btn btn-primary ">Add Theaters</a>
      <a href="adminRecords.php" class="btn btn-danger" >Records</a>
      <a href="users.php" class="btn btn-danger ">Manage Users</a>
      </div>
        <br>
        <br>
        <?php include 'footer.php' ?>
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
