<?php include'navbar2.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/theaters.css">

    <style>
        .idrow{
            width: 6%;
        }           
        .emailwidth{
            width: 18%;
        }
        th , td{
            width: 10%;
        }
        a{
            text-decoration: none;
            color: black;
        }
        a:hover{
            font-size: 18px;
            color: red;
        }
            .main-heading{
                text-align: center;
            }


    </style>
</head>
<body>
    
    <div class="jumbotron">
    <div class="container mx-1">
      <h1 class="display-3">Welcome, <?php echo $row['name'] ?>!</h1>
      <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
      <p><a class="btn btn-primary btn-lg" role="button">Your Bookings »</a></p>
    </div>
  </div>

 
</main>

    
<table>
    <tr>
        <th>Order Id </th>
        <th>Booking Id </th>
        <th>Movie Name </th>
        <th>Theater Name </th>
        <th>Seat No. </th>
        <th>View Ticket </th>
        
    </tr>
  <?php
    $id = $_SESSION['id']; 
     
    $sql = "SELECT * FROM payment_accounts WHERE id = '$id'";
    $res = mysqli_query($conn, $sql);
        if($res== TRUE){
            $count = mysqli_num_rows($res);
            if($count > 0){
                while($row = mysqli_fetch_assoc($res)){
                    $id = $row['order_id'];
                    $movieId = $row['movieId'];
                    $theaterId = $row['theaterId'];
                    
        

?>
        <tr>
            <td><?php echo $id ?></td>
            <td>CHDE0009940226</td>
            
            <td>
                <?php
                $movieId = $_SESSION['movie_id'];
            $sql = "SELECT * FROM action_movies WHERE id = '$movieId'";
            $res = mysqli_query($conn, $sql);
            $num = 1;   
        if($res== TRUE){
            $count = mysqli_num_rows($res);
            if($count > 0){
                while($row = mysqli_fetch_assoc($res)){
                    $movieName = $row['title'];
                     echo $movieName;
                    
                }}}
                
?>
            </td>
            <td>
            <?php
            $theaterId = $_SESSION['theater_id'];
            $sql = "SELECT * FROM theaters WHERE theaters_id = '$theaterId'";
            $res = mysqli_query($conn, $sql);
            $num = 1;   
        if($res== TRUE){
            $count = mysqli_num_rows($res);
            if($count > 0){
                while($row = mysqli_fetch_assoc($res)){
                    $theaterName = $row['theaters_name'];
                     echo $theaterName;
                    
                }
            }
        }
                
?>

            </td>
           
            <?php
        }
    }
}


?>
<td>
    RR - A1 , A2
</td>
<td>
    <a href="images/ticket.png" Download>Download || </a>

    <a href="confirm.php" >View </a>
</td>
</tr>

</table>
    <!-- <img width="30%" src="images/ticket.png" alt=""> -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>