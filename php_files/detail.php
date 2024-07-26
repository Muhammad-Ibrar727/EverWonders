<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website</title>
    
    <link rel="stylesheet" href="../css/details.css">
    <link rel="stylesheet" href="../css/mobile.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        .name{

        }
    </style>
</head>

<body>

<header>
        <div class="container">
            <div class="logo">
                <a href="#">Ever<span>Wonders</span></a>
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="#slider">Home</a></li>
                    <li><a href="#destinations">Destinations</a></li>
                    <li><a href="#special-offers">Special Offers</a></li>
                    <li><a href="#travel-guide">Travel Guide</a></li>
                    <li><a href="#aboutus">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    
                </ul>
            </nav>
            <div class="user-icon">
                <a href="#"><img src="../assets/images/profile.jpg" alt="User Icon"></a>
            </div>
            <div class="hamburger">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>
    </header>

    <?php 
include 'server.php';
if (isset($_GET['tour_id'])) {
    $tour_id = $_GET['tour_id'];

    
    $query = "SELECT d_title,more_detail,d_pic FROM destinations WHERE d_id = $tour_id";
    $result = mysqli_query($connections, $query);

    $destination = mysqli_fetch_assoc($result);
}?>

    <main>

        <div class="image-container">
            <img src="../assets/images/uploads/<?php echo $destination['d_pic']; ?>" alt="Destination Image">
        </div>
        <div class="details">
            <h2>
                <?php echo $destination['d_title']; ?>
            </h2>
            <p class="place-detail">
                <?php echo $destination['more_detail']; ?>
            </p>

        </div>



        <div class="details" styles='margin:0px auto;'>
            <h2>
                More Places
            </h2>
            

        </div>


        <?php 
            include 'server.php';
            if (isset($_GET['tour_id'])) {
                $tour_id = $_GET['tour_id'];

    
            $query = "SELECT * FROM other_dest WHERE destination_id = $tour_id";
            $other_places = mysqli_query($connections, $query);

    
        }?>


    <div class="container1">
    <?php
                while($place=mysqli_fetch_assoc($other_places))
                {

               echo" <div class='box'>
                    <img src='../assets/images/other-places/".$place['img']."'>
                    <span>".$place['name_of_place']."</span>
                </div>";

                } ?>
        
    </div>


        <?php 
        include '../server.php';
        if (isset($_GET['tour_id'])) {
            $tour_id = $_GET['tour_id'];

    
        $query = "SELECT * FROM hotels WHERE destination_id = $tour_id";
        $hotels = mysqli_query($connections, $query);

    
        }?>

<br><br><br><br>
        <div class="hotels-section">
            <h2>Nearest hotels</h2>
            <div class="hotels">

                <?php
                while($hotel=mysqli_fetch_assoc($hotels))
                {
                  echo" <div class='hotel-card'>
                        <img src='../assets/images/hotels-images/".$hotel['h_img']."' alt='Hotel 1'>
                        <div class='hotel-info'>
                            <div class='hotel-name-and-detail'>
                                <h3>".$hotel['h_name']."</h3>
                                <p>".$hotel['h_desc']."</p>
                            </div>
                            <div class='price'>
                                
                                <span class='price'> 
                                <span>".$hotel['h_price']."</span>
                                <span style='text-wrap: nowrap;'>Per Night</span>
                                </span>
                            </div>
                        </div>
                        <ul>
                            <li><i class='fas fa-bed'></i> 2 bed rooms</li>
                            <li><i class='fas fa-wifi'></i> Free WiFi</li>
                            <li><i class='fas fa-swimming-pool'></i> Swimming pool</li>
                        </ul>
                    </div>";
                }
                ?>
                    <!--End of the hotel-card -->
          
            </div> <!-- End of the hotels-->
        </div> <!-- end of hotels-section -->
        <br><br><br><br>

        <div class="booking-form">
    <h2>Booking Form</h2>
    
    <form action="booking.php" method="POST">
        <div class="form-group">
            <input type="text" id="name" name="name" placeholder='Enter your name' required>
            <input type="email" id="email" name="email" placeholder='Enter your email' required>
        </div>

        <div class="form-group">
            <input type="text" id="people" name="people" placeholder='No of people' required>
            <input type="text" id="address" name="address" placeholder='Enter your address' required>
        </div>

        <div class="form-group full-width">
            <input type="date" id="date" name="date" placeholder='Select the date' required>
            <select id="hotel" name="hotel" placeholder='Select the hotel' required>
                <?php
                // Assuming $hotels is already defined and fetched from the database
                foreach($hotels as $hotel) {
                    echo "<option value='".$hotel['h_name']."'>".$hotel['h_name']."</option>";
                }
                ?>
            </select>
        </div>

        <!-- Hidden input to pass the destination ID -->
        <input type="hidden" name="destination_id" value="<?php echo $tour_id; ?>">

        <div class="form-group full-width">
            <button type="submit" class="submit-button">Submit</button>
        </div>
    </form>
</div>



        </div>
    </main>
            <br>
    <?php
    include "footer.php";
    ?>

</body>
<script src="../js/javascript.js"></script>
</html>