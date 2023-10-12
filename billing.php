<?php  include 'navbar2.php' ?>



<?php 
  // $movie_id = $_SESSION['movie_id'];

  // $theater_id = $_SESSION['theater_id'];

  if(isset($_POST['submit'])){
    $id = $_SESSION["id"];
    $name = $_SESSION["name"];
    $Cardname = $_POST['Cardname'];
    $Cardnumber = $_POST['Cardnumber'];
    $movieId = $_SESSION['movie_id'];
    $theaterId = $_SESSION['theater_id'];
    $query = "INSERT INTO payment_accounts VALUES('','$id','$name','$Cardname',  '$Cardnumber', '$movieId', '$theaterId')";
        mysqli_query($conn, $query);
        
        echo "Payment Success";
        header('location: userdashboard.php');
      }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/billing.css">
    
</head>
<body>
  <div class="container-class">
<div class="container">
      <div class="py-3 text-center">
      </div>
      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">BOOKING SUMMARY </span>
            <span class="badge badge-secondary badge-pill">1</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">
                  <?php
                      
          $movie_id = $_SESSION['movie_id'];
                      $sql = "SELECT * FROM action_movies WHERE id = $movie_id ";
                      $res = mysqli_query($conn, $sql);
                      $num = 1;
                      if($res== TRUE){
                          $count = mysqli_num_rows($res);
                          if($count >0){
                              while($rows = mysqli_fetch_assoc($res)){
                                  
                          echo $rows['title'];
                              }
                            }
                          }

                  ?>
                </h6>
                <small class="text-muted">Screen 1</small>
              </div>
              <span class="text-muted">Rs 400.00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0"> Convenience fees</h6>
              </div>
              <span class="text-muted">Rs 59.00</span>
            </li>
           
            <li class="promoDisplay ">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>SHIVACODE</small>
              </div>
              <span class="text-success">Rs -24.00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Amount Payable</span>
              <strong>Rs 435.00</strong>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code">
              <div class="input-group-append">
                <button  onclick="promoCode()" class="btn btn-primary">Redeem</button>
              </div>
            </div>
          </form>
        </div>
        <div class=" main-container col-md-8 order-md-1">
          
          <form action="billing.php" method="post" >
            <h3 class="mb-3">Payment</h3>
            <hr>
            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                <label class="custom-control-label" for="credit">Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="debit">Debit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="paypal">Paypal</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name ">Name on card</label>
                <input name= "Cardname" type="text"  class="form-control" id="cc-name" placeholder="" required="">
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input name="Cardnumber" type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" >
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" >
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <!-- <a class=" btnn btn btn-primary btn-lg btn-block " onclick="successMsg()">Make Payment </a>  -->
            <a class=" btnn btn btn-primary btn-lg btn-block " onclick="successMsg()">Make Payment </a> 
            <!-- <button class=" btnn btn btn-primary btn-lg btn-block" type="submit" name="submit">Make Payment</button> -->

        </div>
      </div>

      <?php  include "footer.php"?>

    </div>
  </div>
    <div class="successMessage ">
      <div class="content">
        <img src="images/tick.png" alt="" srcset="">
        <h3>Booking Confirmed!</h3>
        <h5>Your ticket have been Confirmed</h5>
      </div>
      <div class="buttons">
      <!-- <a class="btn btn-warning viewTicket" href="confirm.php">View Ticket</a> -->
      <button class=" btnn btn btn-danger " type="submit" name="submit">View Ticket</button>
      <a class="btn btn-primary viewTicket" href="images/ticket.png" download="movie-ticket">Download Ticket</a>

      
      </form>

        </div>
    </div>

    <script>
      function successMsg() {
        var msg =document.querySelector('.successMessage')
        msg.classList.toggle('displayNone');
        var container =document.querySelector('.container-class')
        container.classList.toggle('main-container-blur');
        var audio = new Audio('audio/bookingConfirmAudio.mp3');
        audio.play();
      }

      function promoCode() {
        var promoDisplay = document.querySelector('.promoDisplay')
        
        promoDisplay.classList.add('list-group-item d-flex justify-content-between bg-light')
        promoDisplay.classList.toggle('displayBlock')
      }
        

    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>