
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EverWonders</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="icon" href="./assets/images/logo.jpeg" type="image/gif" />
    
    <style>
        .destination-grid {
    display: grid;
   /* grid-template-columns: repeat(3, 1fr);  */
    grid-template-columns: repeat(auto-fit, minmax(260px, 2fr)); 
    grid-gap: 20px; 
    }

    .book-now {
        display: inline-block;
        background-color: #ff6f61;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        text-decoration: none; 
        cursor: pointer;
        font-size: 1em;
        transition: background-color 0.3s ease, transform 0.3s ease;
        margin-top: 10px;
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
                    <li><a href="#contact">Contact Us</a></li>
                    
                </ul>
            </nav>
            <div class="user-icon">
                <a href="#"><img src="./assets/images/profile.jpg" alt="User Icon"></a>
            </div>
            <div class="hamburger">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>
    </header>
    
   
    
    <div id="slider" class="slider">
        <div class="slides">
            <div class="slide">
                <img src="./assets/images/slider images/maldives.jpg" alt="Slide 1">
                <div class="caption">Maldives</div>

            </div>
            <div class="slide">
                <img src="./assets/images/slider images/spain island.jpg" alt="Slide 2">
                <div class="caption">Spain</div>
            </div>
            <div class="slide">
                <img src="./assets/images/slider images/switzerland1.jpg" alt="Slide 2">
                <div class="caption">Switzerland</div>
            </div>
            <div class="slide">
                <img src="./assets/images/slider images/thailand.jpg" alt="Slide 2">
                <div class="caption">Thailand</div>
            </div>
            
            <div class="slide">
                <img src="./assets/images/slider images/pakistan.jpeg" alt="Slide 1">
                <div class="caption">Pakistan</div>
            </div>
            
            <div class="slide">
                <img src="./assets/images/slider images/malaysia.jpg" alt="Slide 2">
                <div class="caption">Malaysia</div>
            </div>
            
           


        </div>
        <div class="cta-buttons">
            <h1>TRAVEL THE WORLD WITH EVERWONDERS</h1>
            <!-- <button class="cta-btn btn-1">Book Now</button> -->
            <button class="cta-btn btn-2">Explore Destinations</button>
        </div>
        
    </div>

<br><br><br>

   


   <script src="js/javascript.js"></script>



</body>

</html>