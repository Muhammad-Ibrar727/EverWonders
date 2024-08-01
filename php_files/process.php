<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 Easy Steps</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        

        .steps-section {
    text-align: center;
    padding: 50px 0;
}

.steps-section h3 {
    color: #ff6f61;
    font-weight: normal;
    margin-bottom: 30px;
    position: relative;
    font-size: 2.5em;
    text-transform: uppercase;
}

.steps-section h3::before,
.steps-section h3::after {
    content: "";
    display: inline-block;
    width: 50px;
    height: 1px;
    background-color: #ff6f61;
    position: absolute;
    top: 50%;
}

.steps-section h3::before {
    left: 0;
    margin-right: 10px;
}

.steps-section h3::after {
    right: 0;
    margin-left: 10px;
}

.steps-section h2 {
    font-size: 2rem;
    margin-bottom: 80px;
    color: #333;
   
  
}

.steps-container {
    display: flex;
    justify-content: center;
    gap: 30px;
}

.step {
    flex: 1;
    max-width: 300px;
    padding: 20px;
    border: 1px solid #e0e0e0;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* Ensure space between icon and text */
}

.step:hover {
    transform: translateY(-10px);
}

.icon-circle {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background-color: #ff6f61;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px; /* Adjusted margin */
}

.icon-circle i {
    font-size: 3rem;
    color: #fff;
}

.detail {
    text-align: center;
}

.step h4 {
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 10px;
}

.step p {
    color: #777;
    font-size: 1rem;
}
    </style>
</head>

<body>
    <section class="steps-section">
        <h3>Process</h3>
        <h2>3 Easy Steps</h2>
        <div class="steps-container">
            <div class="step">
                <div class="icon-circle">
                    <i class="fas fa-globe"></i>
                </div>
                <div class="detail">
                <h4>Choose A Destination</h4>
                <p>Discover your dream destination and let the adventure begin. The world is at your fingertips</p>
                </div>
            </div>
            <div class="step">
                <div class="icon-circle">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="detail">
                <h4>Pay Online</h4>
                <p>Secure your trip in just a few clicks. Our hassle-free online payment system ensures your booking is fast, safe, and convenient</p>
                </div>
            </div>
            <div class="step">
                <div class="icon-circle">
                    <i class="fas fa-plane"></i>
                </div>
                <div class="detail">
                <h4>Fly Today</h4>
                <p>Pack your bags and get ready to soar. With everything set, all that's left is to enjoy your journey and create unforgettable memories.</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
