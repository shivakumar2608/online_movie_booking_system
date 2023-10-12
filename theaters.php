<?php include 'navbar2.php';
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theater</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/theaters.css">
</head>
<body>
<div class="container-class">
    

     
<?php
    $_SESSION['movie_id'] = $_GET['id'];
    $sql = "SELECT * FROM theaters";
    $res = mysqli_query($conn, $sql);
    $num = 1;
    if($res== TRUE){
        $count = mysqli_num_rows($res);
        ?>
        <div class="">
        <h2 align="center" style="margin:27px">Theaters </h2>
        
        <table>
    <tr>
        <th>S.no</th>
        <th>Theater Name</th>
        <th>Location</th>
        <th>Type</th>
        <th>Price</th>
        <th>Book Status</th>
        
        </tr>

        </table>
        <?php
        if($count >0){
            while($rows = mysqli_fetch_assoc($res)){
                $id = $rows['theaters_id'];
                $theaters_name = $rows['theaters_name'];
                $location= $rows['location'];
                $type = $rows['type'];
                $price = $rows['price'];
                $bookstatus = $rows['bookstatus'];

                ?>
    <table>
      
    <tr >
        <td ><?php echo $id ?></th>
        <td><?php echo $theaters_name ?></th>
        <td><?php echo $location ?></th>
        <td><?php echo $type ?></th>
        <td><?php echo $price ?></th>
         <td>
            <?php 
                if($bookstatus =="Available"){
                    ?>
                    <button> <a class="<?php echo $bookstatus ?> buttonsInBooked " href="seatbooking.php?id=<?php echo $id ?>"> <?php echo $bookstatus ?> </a> </button>
                    <?php
                }
                else{
                    ?>
                         <button class="buttonsInBooked" onclick="bookedMsg()" class="<?php echo $bookstatus ?>" > Booked </button> 
                    <?php
                }
            ?>
        </td> 

        </tr>
       
        
        </table>   
<?php

            }  
        }
        else{
                //we dont have data in db
        }
    }
  
?>
        </div>
        </div>
    <div class="confirmDelete">
        <div class="content">
        <img class="crossImgPopup" src="images/symbols/crossSymbol.png" alt="" srcset="">
            Oops! The Theater is HouseFull <br>
            Book Another Theater.
        </div>
        <button onclick="bookedMsg()" class="btn btn-primary" >
            Try Again
        </button>
    </div>


<script>
    var audio = new Audio('audio/theatersSelection.mp3');
    var tablerows= document.querySelectorAll('tr')
    console.log(tablerows);
    for (let i = 0; i < tablerows.length; i++) {
        tablerows[i].addEventListener('mouseover', ()=> {
            audio.play();
        })
    }

    function bookedMsg() {
        var msg =document.querySelector('.confirmDelete')
        msg.classList.toggle('displayNone');
        var container =document.querySelector('.container-class')
        container.classList.toggle('main-container-blur');
        var audio = new Audio('audio/bookingConfirmAudio.mp3');
        audio.play();
        

      }

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>