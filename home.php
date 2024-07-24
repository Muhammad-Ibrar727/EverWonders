<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EverWonders - Home</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:wght@400;700&family=Lora:wght@400;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'montserrat', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .background::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('assets/images/uploads/cappadocia.webp');
          
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            opacity: 1;
            
            z-index: -1;
            filter: brightness(0.5);
        }

        .header {
            position: absolute;
            top: 20px;
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 0 40px;
            box-sizing: border-box;
        }

        .header .logo {
            font-size: 1.5em;
            font-weight: bold;
        }

        .logo span {
            font-size: 0.5em;

        }

        .logo .wonders {
            font-size: 1.1em;
            color: #ff6f61;
        }

        .header .nav {
            display: flex;
            gap: 20px;
        }

        .header .nav a {
            color: white;
            text-decoration: none;
            font-size: 1em;
        }

        .header .nav a:hover {
            text-decoration: underline;
        }

        .container {
            background: rgba(0, 0, 0, 0);
    
            padding: 20px;
            border-radius: 10px;
            max-width: 600px;
            backdrop-filter: blur(0px);
            
        }

        .heading-text {
            font-family: 'roboto', sans-serif;
            font-size: 2.9em;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .sub-text2 {
            color: rgba(255, 255, 255, 0.8);
            font-size: 17px;
            line-height: 27px;
            font-weight: 400;
            text-align: center;
            margin-top: 0;
        }

        .buttons a {
            padding: 10px 20px;
            background-color: #ff6f61;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1em;
        }

        .buttons a:hover {
            background-color: #f75b4d;
        }

        .footer {
            position: absolute;
            bottom: 10px;
            width: 100%;
            text-align: center;
            font-size: 0.8em;
            color: rgba(255, 255, 255, 0.7);
        }

        .logo {
            display: flex;
            align-items: center;
            
            font-size: 1.2em;
            
        }

        .logo span {
            margin-left: 7px;
        
        }
        .logo img {
            margin-right: 10px;
            border-radius: 50%;
        }


        /* Responsive adjustments */
        @media only screen and (max-width: 900px) {
            .header {
                flex-direction: column;
                
                align-items: center;
                padding: 10px;
            }

            .header .logo {
                margin-bottom: 10px;
            }

            .header .nav {
                margin-top: 10px;
                justify-content: center;
            }

            .container {
                padding: 10px;
            }

            .heading-text {
                font-size: 2em;
            }

            .sub-text2 {
                font-size: 1em;
                margin-bottom: 10px;
            }

            .buttons a {
                padding: 8px 16px;
                font-size: 0.9em;
            }

            .footer {
                font-size: 0.7em;
                /* Adjust footer font size */
            }
        }
    </style>
</head>

<body>
    <div class="background"></div>
    <div class="header">
        <div class="logo">
            <img src="assets/images/logo.jpeg" alt="EverWonders Logo" width="45" height="auto">
            Ever <span class="wonders"> Wonders.</span> | <span>DREAM. EXPLORE. DISCOVER.</span>
        </div>
        <div class="nav">
            <a onclick="location.href='http://localhost/everWonders/login.php'" href="#">LOGIN</a>
            <a onclick="location.href='http://localhost/everWonders/signup.html'" href="#">REGISTER</a>
        </div>
    </div>
    <div class="container">
        <p class="heading-text">Avoid Hassles & Delays.</p>
        <p class="sub-text2">Escape the ordinary and explore the extraordinary with EverWonders. Whether you crave a
            relaxing getaway or an exhilarating journey, we're here to turn your dreams into reality.</p>
        <div class="buttons">
            <a onclick="location.href='http://localhost/everWonders/login.php'" href="#">Book Your Trip</a>
        </div>
    </div>
    <div class="footer">Maded By Muhammad Ibrar</div>
</body>

</html>