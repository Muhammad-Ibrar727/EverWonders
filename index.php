
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

<!-- features destination section  -->
<section id="destinations" class="featured-destinations">

<?php
require_once('php_files/server.php');
$query = "select * from destinations";
$destinations = mysqli_query($connections,$query);
?>
    <h2>Featured Destinations</h2>
    <h3>Embark on a Journey to the Most Breathtaking Places Around the World</h3>
    
    <br><br>
    <div class="destination-grid">
        <?php
      while($dest=mysqli_fetch_assoc($destinations))
      {
      
        echo"<div class='tour-card'>
            <div class='image-container'>
                <img class='tour-image' src='assets/images/dest-images/".$dest['d_pic']."'>
                <div class='details'>
                    <h3 class='tour-title'>".$dest['d_title']."</h3>
                    <p>".$dest['d_desc']."</p>
                </div>
            </div>
            <div class='tour-info'>
                <div class='tour-rating'>
                    <ul class='stars'>
                        <li class='star filled'>&#9733;</li>
                        <li class='star filled'>&#9733;</li>
                        <li class='star filled'>&#9733;</li>
                        <li class='star filled'>&#9733;</li>
                        <li class='star'>&#9733;</li>
                    </ul>
                    <span class='review-count'>".$dest['d_reviews']."</span>
                </div>
                <p class='tour-price'>".$dest['d_price']."</p>
                <div class='tour-features'>
                    <div class='feature-item'>
                       <span class='feature-icon'><i class='fa-solid fa-truck-plane'></i></span>
                        <span class='feature-text'>Transportation Included</span>
                    </div>

                    
                    
                    <div class='feature-item'>
                        <span class='feature-icon'><i class='fa-solid fa-plane-slash'></i></span>
                        <span class='feature-text'>Free Cancellation</span>
                    </div>
                </div>
                <a class='book-now' href='detail.php?tour_id=". $dest['d_id'] ."'>Read More</a>

            </div>
        </div>";
      }
        ?>
    
    </div>
   
    <div class="more-destinations"><a href="">More Destinations</a></div>
</section>

 <!-- special offers  -->
 <br><br><br>
    

    <section id="special-offers" class="special-offers">
        <h2>Special Offers</h2>
        <h3>Grab These Exclusive Deals Before They're Gone!</h3>
        <br><br>
        <div class="offer-carousel">
            <div class="offer-cards">
                <div class="offer-card">
                    <img src="assets/images/special-offers/australia.jpg" alt="Offer 1">
                    <div class="offer-details">
                        <h3>50% Off on Australia Trip</h3>
                        <p>Enjoy a luxurious stay at Australia with a 50% discount. Limited time offer!</p>
                        <button class="btn">Book Now</button>

                    </div>
                </div>

                

                <div class="offer-card">
                    <img src="assets/images/special-offers/china(1).jpg" alt="Offer 2">
                    <div class="offer-details">
                        <h3>Save $200 on china Tour</h3>
                        <p>Book now and save $200 on your next China tour.</p>
                        <button class="btn">Book Now</button>
                    </div>
                </div>
                <div class="offer-card">
                    <img src="assets/images/special-offers/effile-tower.jpg" alt="Offer 3">
                    <div class="offer-details">
                        <h3>25% Off on Effile Tower</h3>
                        <p>Experience the adventure of a lifetime in France with a 25% discount.</p>
                        <button class="btn">Book Now</button>
                    </div>
                </div>

                <div class="offer-card">
                    <img src="assets/images/special-offers/waterfall.jpg" alt="Offer 3">
                    <div class="offer-details">
                        <h3>25% Off on Thailand Adventure</h3>
                        <p>Experience the adventure of a lifetime in Thailand with a 25% discount.</p>
                        <button class="btn">Book Now</button>
                    </div>
                </div>

                <div class="offer-card">
                    <img src="assets/images/special-offers/chocolate-hills.jpg" alt="Offer 3">
                    <div class="offer-details">
                        <h3>Save 320$ on Chocolate Hills</h3>
                        <p>Experience the adventure and Save 320$ now.</p>
                        <button class="btn">Book Now</button>
                    </div>
                </div>
                
                <div class="offer-card">
                    <img src="assets/images/special-offers/morroco.jpg" alt="Offer 3">
                    <div class="offer-details">
                        <h3>50% Off on Morroco Tour</h3>
                        <p>Experience the adventure of a lifetime in Morrocco with a 50% discount.</p>
                        <button class="btn">Book Now</button>
                    </div>
                </div>


            </div>
        </div>
        
    </section>
   
    
    <br><br><br>


    
<!-- travel guide preview -->

   <section id="travel-guide" class="travel-guides-preview">
   <h2>Travel Guides Preview</h2>
   <div class="article-grid">
       <a href="#" class="article">
           <img src="assets/images/previews-images/pichacu.jpg" alt="Machu Picchu">
           <div class="article-details">
               <h3>Exploring the Wonders of Machu Picchu</h3>
               <p>Discover the ancient ruins and breathtaking landscapes of Machu Picchu.</p>
           </div>
       </a>
       <a href="#" class="article">
           <img src="assets/images/previews-images/city of light.jpg" alt="Paris Getaway">
           <div class="article-details">
               <h3>A Weekend Getaway to Paris</h3>
               <p>Experience the romance and charm of the City of Light in just two days.</p>
           </div>
       </a>
       <a href="#" class="article">
           <img src="assets/images/previews-images/inca trail.jpg" alt="Inca Trail">
           <div class="article-details">
               <h3>Hiking the Inca Trail: A Journey to Remember</h3>
               <p>Embark on an unforgettable trek through the Andes to reach the ancient city of Machu Picchu.</p>
           </div>
       </a>
       <a href="#" class="article">
           <img src="assets/images/previews-images/tokyo-city.jpg" alt="Tokyo Adventure">
           <div class="article-details">
               <h3>Tokyo Adventure: The Ultimate Travel Guide</h3>
               <p>Explore the vibrant streets, traditional temples, and modern marvels of Tokyo.</p>
           </div>
       </a>
       <a href="#" class="article">
           <img src="assets/images/previews-images/safari-in-africa.jpg" alt="Safari in Africa">
           <div class="article-details">
               <h3>Safari in Africa: A Wildlife Experience</h3>
               <p>Get up close with the Big Five and experience the wild beauty of Africa.</p>
           </div>
       </a>
       <a href="#" class="article">
           <img src="assets/images/previews-images/new-york-city.jpg" alt="New York Highlights">
           <div class="article-details">
               <h3>New York City Highlights</h3>
               <p>Discover the iconic landmarks, hidden gems, and vibrant culture of NYC.</p>
           </div>
       </a>
   </div>
   </section>

   
   <br><br><br>


<!-- About Us Section -->


<section id="aboutus" class="about-us">
<h2>About Us</h2>
<div class="about-content">
    <div class="about-image">
        <img src="assets/images/logo.jpeg" alt="About Us">
    </div>
    <div class="about-text">
        <p>Welcome to EverWonders, your number one source for all things travel. We're dedicated to providing you the very best in travel planning, with an emphasis on discovering new destinations, offering the best travel deals, and providing top-notch customer service.</p>
        
        <p>Founded in 2024, EverWonders has come a long way from its beginnings. When we first started out, our passion for travel drove us to start this website to help fellow travelers find the best deals and destinations. Now, we serve customers all over the world, and are thrilled to be a part of the travel industry.</p>
        
        <p>Our mission is to make travel easy and accessible for everyone. Whether you're looking for adventure, relaxation, or a mix of both, we've got you covered. Our team of travel experts is always here to help you plan the perfect trip.</p>
        
        <p>We hope you enjoy our services as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.</p>
        
        <p>Sincerely,<br>
        Muhammad Ibrar<br>
        Founder & CEO, EverWonders</p>
    </div>
</div>
</section>


//included the file process.php
<?php
include'php_files/process.php';
?>


<!-- Contact Us Section -->
<section id="contact" class="contact-section">
    <h2>Contact Us</h2>
    <p>We'd love to hear from you! Please fill out the form below and we'll get in touch with you shortly.</p>
    <div class="contact-container">
        <div class="contact-info">
            <h3>Our Address</h3>
            <p>123 Travel Road, Wanderlust City, Earth</p>
            <h3>Email</h3>
            <p><a href="mailto:info@everwonders.com">info@everwonders.com</a></p>
            <h3>Phone</h3>
            <p><a href="tel:+1234567890">+923 430 914553</a></p>
        </div>
        <div class="contact-form">
            <form action="php_files/contact-us.php" method="post">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="6" required></textarea>
                
                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>
</section>

   <script src="js/javascript.js"></script>



</body>

</html>