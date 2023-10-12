<?php include 'navbar2.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/seatbooking.css" />
    <title>Movie Seat Booking</title>
</head>
<style>
</style>

<body>
    <?php
        $_SESSION['theater_id'] = $_GET['id'];
        
    ?>
    <div class="bodyy">
    <div class="movie-container">
        <label> Avaliable screenings</label>
        <select id="movie">
            <option value="Screen1">Screen 1</option>
            <option value="Screen2">Screen 2</option>
            <option value="Screen3">Screen 3</option>
            <option value="Screen4">Screen 4</option>
        </select>
    </div>
    <ul class="showcase">
        <li>
            <div class="seat"></div>
            <small>N/A</small>
        </li>
        <li>
            <div class="seat selected"></div>
            <small>Selected</small>
        </li>
        <li>
            <div class="seat occupied"></div>
            <small>Occupied</small>
        </li>
    </ul>
    <div class="container customContainer">
        <div class="screen"></div>
        <div class="row">
            <div class="col col-lg-1 place mx-auto unbooked seat">A1</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">A2</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">A3</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">A4</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">A5</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">A6</div>

        </div>
        <div class="row">
            <div class="col col-lg-1 place mx-auto unbooked seat">B1</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">B2</div>
            <div class="col col-lg-1 place mx-auto taken occupied seat">B3</div>
            <div class="col col-lg-1 place mx-auto taken occupied seat">B4</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">B5</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">B6</div>
            
        </div>
        <div class="row">
            <div class="col col-lg-1 place mx-auto unbooked seat">C1</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">C2</div>
            <div class="col col-lg-1 place mx-auto taken occupied seat">C3</div>
            <div class="col col-lg-1 place mx-auto taken occupied seat">C4</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">C5</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">C6</div>
        </div>
        <div class="row">
            <div class="col col-lg-1 place mx-auto unbooked seat">D1</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">D2</div>
            <div class="col col-lg-1 place mx-auto taken occupied seat">D3</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">D4</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">D5</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">D6</div>
        </div>
        <div class="row">
            <div class="col col-lg-1 place mx-auto taken occupied seat">E1</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">E2</div>
            <div class="col col-lg-1 place mx-auto taken occupied seat">E3</div>
            <div class="col col-lg-1 place mx-auto taken occupied seat">E4</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">E5</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">E6</div>
        </div>

    </div>
    
    <div class="container order d-grid gap-2 mx-auto">
        <a class="" href="billing.php"> <button class="btn btn-primary mx-auto" type="button" value="Confirm Booking" id="submit">Confirm Booking </button> </a>
    </div>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <!-- jQuery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- external js -->
    <script src="js/seatbooking.js"></script>
    </div>
</body>

</html>